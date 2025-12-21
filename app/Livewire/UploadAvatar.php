<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Storage;

class UploadAvatar extends Component
{
    use WithFileUploads;

    public $avatar;
    public $currentAvatar = null;

    protected $rules = [
        'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:3072', // حداکثر ۳ مگابایت
    ];

    public function updatedAvatar()
    {
        $this->validateOnly('avatar');
    }

    // نام متد را تغییر دادیم: upload → saveAvatar
    public function saveAvatar()
    {
        $this->validate();

        if ($this->avatar) {
            // حذف تصویر قبلی اگر وجود داشته باشد
            if ($this->currentAvatar) {
                \Storage::disk('public')->delete($this->currentAvatar);
            }

            $path = $this->avatar->store('avatars', 'public');
            $this->currentAvatar = $path;

            $this->reset('avatar'); // پاک کردن ورودی فایل برای آپلود مجدد
            session()->flash('success', 'آواتار با موفقیت آپلود شد!');
        }
    }

    public function removeAvatar()
    {
        if ($this->currentAvatar) {
            \Storage::disk('public')->delete($this->currentAvatar);
            $this->currentAvatar = null;
            session()->flash('info', 'آواتار حذف شد.');
        }
    }
    public function render()
    {
        return view('livewire.upload-avatar');
    }
}

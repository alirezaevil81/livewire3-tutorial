<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\StreamedResponse;

class DownloadDemo extends Component
{
    public function downloadTextFile(): StreamedResponse
    {
        $content = "این یک فایل متنی نمونه است که در لحظه ساخته شد.\nتاریخ: " . now() . "\nشناسه منحصر به فرد: " . Str::random(10);

        return response()->streamDownload(function () use ($content) {
            echo $content;
        }, 'sample-text-' . now()->format('Y-m-d') . '.txt');
    }

    public function downloadJsonFile(): StreamedResponse
    {
        $data = [
            'name' => 'علی رضایی',
            'email' => 'ali@example.com',
            'registered_at' => now()->toDateTimeString(),
            'status' => 'active',
        ];

        $content = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

        return response()->streamDownload(function () use ($content) {
            echo $content;
        }, 'user-data.json');
    }

    public function render()
    {
        return view('livewire.download-demo');
    }
}
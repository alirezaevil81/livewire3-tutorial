<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Pagination\LengthAwarePaginator;

class UserList extends Component
{
    use WithPagination;

    public $search = '';
    public $sortField = 'name';
    public $sortDirection = 'asc';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortDirection = 'asc';
        }

        $this->sortField = $field;
    }

    public function render()
    {
        $allUsers = collect($this->getUsersData())
            ->when($this->search, function ($collection) {
                return $collection->filter(function ($user) {
                    return str_contains(strtolower($user['name']), strtolower($this->search)) ||
                        str_contains(strtolower($user['email']), strtolower($this->search));
                });
            })
            ->sortBy($this->sortField, SORT_REGULAR, $this->sortDirection === 'desc');

        $perPage = 10;
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $currentItems = $allUsers->slice(($currentPage - 1) * $perPage, $perPage)->values();

        $users = new LengthAwarePaginator(
            $currentItems,
            $allUsers->count(),
            $perPage,
            $currentPage,
            ['path' => LengthAwarePaginator::resolveCurrentPath()]
        );

        return view('livewire.user-list', [
            'users' => $users,
        ]);
    }

    private function getUsersData()
    {
        return [
            ['id' => 1, 'name' => 'علی احمدی', 'email' => 'ali@example.com', 'created_at' => '2025-01-01'],
            ['id' => 2, 'name' => 'زهرا محمدی', 'email' => 'zahra@example.com', 'created_at' => '2025-01-05'],
            ['id' => 3, 'name' => 'رضا حسینی', 'email' => 'reza@example.com', 'created_at' => '2025-01-10'],
            ['id' => 4, 'name' => 'مریم رضایی', 'email' => 'maryam@example.com', 'created_at' => '2025-01-15'],
            ['id' => 5, 'name' => 'حسین کریمی', 'email' => 'hossein@example.com', 'created_at' => '2025-02-01'],
            ['id' => 6, 'name' => 'فاطمه نوری', 'email' => 'fateme@example.com', 'created_at' => '2025-02-10'],
            ['id' => 7, 'name' => 'محمد جوادی', 'email' => 'mohammad@example.com', 'created_at' => '2025-02-20'],
            ['id' => 8, 'name' => 'سارا علوی', 'email' => 'sara@example.com', 'created_at' => '2025-03-01'],
            ['id' => 9, 'name' => 'امیرحسین شریفی', 'email' => 'amir@example.com', 'created_at' => '2025-03-10'],
            ['id' => 10, 'name' => 'نازنین یوسفی', 'email' => 'naznin@example.com', 'created_at' => '2025-03-20'],
            ['id' => 11, 'name' => 'پویا رحیمی', 'email' => 'pouya@example.com', 'created_at' => '2025-04-01'],
            ['id' => 12, 'name' => 'لیلا قاسمی', 'email' => 'leila@example.com', 'created_at' => '2025-04-10'],
            ['id' => 13, 'name' => 'سعید رضوانی', 'email' => 'saeed@example.com', 'created_at' => '2025-04-15'],
            ['id' => 14, 'name' => 'مهسا کریمی', 'email' => 'mahsa@example.com', 'created_at' => '2025-05-01'],
            ['id' => 15, 'name' => 'کریم اللهیاری', 'email' => 'karim@example.com', 'created_at' => '2025-05-10'],
            // بیشتر اضافه کردم تا صفحه‌بندی تست شود
        ];
    }
}
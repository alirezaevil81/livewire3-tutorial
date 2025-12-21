<div class="max-w-4xl mx-auto mt-10 p-6">
    <div class="bg-white shadow-2xl rounded-3xl overflow-hidden border border-gray-100">
        <div class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white p-8 text-center">
            <h2 class="text-4xl font-bold mb-4">لیست کارهای من</h2>
            <div class="text-xl">
                <span class="mx-4">تکمیل‌شده: <strong>{{ $this->completedCount }}</strong></span>
                <span class="mx-4">باقی‌مانده: <strong>{{ $this->pendingCount }}</strong></span>
                <span class="mx-4">کل: <strong>{{ $this->completedCount + $this->pendingCount }}</strong></span>
            </div>
        </div>

        <div class="p-8">
            <!-- فیلترها -->
            <div class="flex justify-center gap-4 mb-8">
                <button wire:click="setFilter('all')"
                        class="{{ $filter === 'all' ? 'bg-indigo-600 text-white' : 'bg-gray-200 text-gray-700' }} px-6 py-3 rounded-full font-semibold transition hover:shadow-lg">
                    همه
                </button>
                <button wire:click="setFilter('completed')"
                        class="{{ $filter === 'completed' ? 'bg-green-600 text-white' : 'bg-gray-200 text-gray-700' }} px-6 py-3 rounded-full font-semibold transition hover:shadow-lg">
                    تکمیل‌شده
                </button>
                <button wire:click="setFilter('pending')"
                        class="{{ $filter === 'pending' ? 'bg-orange-600 text-white' : 'bg-gray-200 text-gray-700' }} px-6 py-3 rounded-full font-semibold transition hover:shadow-lg">
                    در حال انجام
                </button>
            </div>

            <!-- لیست تودوها -->
            <div class="space-y-4">
                @forelse ($this->filteredTodos as $todo)
                    <div class="flex items-center bg-gray-50 p-6 rounded-2xl hover:bg-gray-100 transition shadow-md">
                        <div class="ml-4 flex-1">
                            <h3 class="text-xl font-semibold text-gray-800">{{ $todo['title'] }}</h3>
                        </div>
                        <div class="text-lg font-medium {{ $todo['completed'] ? 'text-green-600' : 'text-orange-600' }}">
                            {{ $todo['completed'] ? '✓ تکمیل‌شده' : '⏳ در حال انجام' }}
                        </div>
                    </div>
                @empty
                    <div class="text-center py-12 text-gray-500 text-xl">
                        هیچ کاری یافت نشد.
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
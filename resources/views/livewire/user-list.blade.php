<div class="max-w-7xl mx-auto mt-10 p-6">
    <div class="bg-white shadow-2xl rounded-3xl overflow-hidden border border-gray-100">
        <div class="bg-gradient-to-r from-teal-600 to-cyan-600 text-white p-8 text-center">
            <h2 class="text-4xl font-bold mb-4">لیست کاربران</h2>
            <p class="text-xl text-teal-100">جستجو، مرتب‌سازی و صفحه‌بندی زنده</p>
        </div>

        <div class="p-8">
            <!-- فیلد جستجو -->
            <div class="mb-8">
                <input type="text" wire:model.live.debounce.300ms="search"
                       placeholder="جستجو بر اساس نام یا ایمیل..."
                       class="w-full px-6 py-4 text-lg border border-gray-300 rounded-xl focus:ring-4 focus:ring-teal-400 focus:border-transparent transition shadow-inner">
            </div>

            <!-- جدول کاربران -->
            <div class="overflow-x-auto">
                <table class="w-full text-right">
                    <thead class="bg-gray-50 border-b-2 border-gray-200">
                    <tr>
                        <th class="px-6 py-4 text-lg font-bold text-gray-700 cursor-pointer hover:bg-gray-100 transition"
                            wire:click="sortBy('name')">
                            نام
                            @if ($sortField === 'name')
                                {{ $sortDirection === 'asc' ? '↑' : '↓' }}
                            @endif
                        </th>
                        <th class="px-6 py-4 text-lg font-bold text-gray-700 cursor-pointer hover:bg-gray-100 transition"
                            wire:click="sortBy('email')">
                            ایمیل
                            @if ($sortField === 'email')
                                {{ $sortDirection === 'asc' ? '↑' : '↓' }}
                            @endif
                        </th>
                        <th class="px-6 py-4 text-lg font-bold text-gray-700 cursor-pointer hover:bg-gray-100 transition"
                            wire:click="sortBy('created_at')">
                            تاریخ ثبت‌نام
                            @if ($sortField === 'created_at')
                                {{ $sortDirection === 'asc' ? '↑' : '↓' }}
                            @endif
                        </th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                    @forelse ($users as $user)
                        <tr class="hover:bg-teal-50 transition">
                            <td class="px-6 py-5 text-gray-800 font-medium">{{ $user['name'] }}</td>
                            <td class="px-6 py-5 text-gray-600">{{ $user['email'] }}</td>
                            <td class="px-6 py-5 text-gray-600">{{ $user['created_at'] }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center py-12 text-xl text-gray-500">
                                هیچ کاربری یافت نشد.
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>

            <!-- صفحه‌بندی با استایل Tailwind پیش‌فرض لایووایر -->
            <div class="mt-8">
                {{ $users->links() }}
            </div>
        </div>
    </div>
</div>
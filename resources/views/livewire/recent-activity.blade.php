<div class="bg-white p-8 rounded-3xl shadow-2xl border border-gray-100">
    <h3 class="text-2xl font-bold text-gray-800 mb-6">فعالیت‌های اخیر (لود شده!)</h3>
    <ul class="space-y-4">
        @for ($i = 1; $i <= 10; $i++)
            <li class="flex items-center gap-4 py-3 border-b border-gray-200">
                <div class="w-12 h-12 bg-gradient-to-br from-teal-400 to-cyan-500 rounded-full"></div>
                <div>
                    <p class="font-semibold">کاربر {{ $i }} فعالیتی انجام داد</p>
                    <p class="text-sm text-gray-500">چند لحظه پیش</p>
                </div>
            </li>
        @endfor
    </ul>
</div>
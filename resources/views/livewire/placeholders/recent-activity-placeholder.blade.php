<div class="bg-white p-8 rounded-3xl shadow-2xl border border-gray-100 animate-pulse">
    <div class="h-8 bg-gray-300 rounded w-1/2 mb-6"></div>
    <div class="space-y-6">
        @for ($i = 1; $i <= 5; $i++)
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-gray-300 rounded-full"></div>
                <div class="flex-1">
                    <div class="h-4 bg-gray-300 rounded w-3/4 mb-2"></div>
                    <div class="h-3 bg-gray-300 rounded w-1/2"></div>
                </div>
            </div>
        @endfor
    </div>
    <p class="text-center mt-8 text-gray-500 text-xl">در حال بارگذاری فعالیت‌ها...</p>
</div>
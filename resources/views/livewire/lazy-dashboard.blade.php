<div class="max-w-7xl mx-auto mt-10 p-6">
    <div class="text-center mb-12">
        <h1 class="text-5xl font-bold text-gray-800 mb-4">داشبورد با Lazy Loading</h1>
        <p class="text-xl text-gray-600">بخش‌های سنگین فقط وقتی دیده شوند لود می‌شوند</p>
    </div>

    <!-- آمار کلی - همیشه لود می‌شود -->
    <div class="mb-12">
        <livewire:stats-card :totalUsers="$totalUsers" :totalPosts="$totalPosts" :revenue="$revenue" />
    </div>

    <!-- کارت‌های سنگین - Lazy Load -->
    <div class="grid md:grid-cols-2 gap-10">
        <livewire:heavy-chart lazy />

        <livewire:recent-activity lazy />
    </div>
</div>
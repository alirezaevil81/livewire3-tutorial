<div class="bg-gradient-to-br from-blue-500 to-indigo-600 text-white p-8 rounded-3xl shadow-2xl">
    <h3 class="text-2xl font-bold mb-4">آمار کلی</h3>
    <div class="grid grid-cols-3 gap-6 text-center">
        <div>
            <p class="text-4xl font-extrabold">{{ number_format($totalUsers) }}</p>
            <p class="text-lg opacity-90">کاربر</p>
        </div>
        <div>
            <p class="text-4xl font-extrabold">{{ number_format($totalPosts) }}</p>
            <p class="text-lg opacity-90">پست</p>
        </div>
        <div>
            <p class="text-4xl font-extrabold">${{ number_format($revenue) }}</p>
            <p class="text-lg opacity-90">درآمد</p>
        </div>
    </div>
</div>
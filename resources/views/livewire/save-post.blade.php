<div class="p-8">
    <h2>ذخیره پست</h2>

    @if (session()->has('message'))
        <div class="text-green-600 mb-4">{{ session('message') }}</div>
    @endif

    <form wire:submit="save">
        <input type="text" wire:model="title" placeholder="عنوان پست را وارد کنید" class="border p-2 mb-4 w-full">

        <!-- پیام لودینگ ساده -->
        <div wire:loading wire:target="save">
            در حال ذخیره...
        </div>

        <!-- غیرفعال کردن دکمه در زمان لودینگ -->
        <button type="submit"
                wire:loading.attr="disabled"
                wire:loading.class="opacity-50 cursor-not-allowed"
                class="bg-blue-500 text-white px-4 py-2">
            ذخیره پست
        </button>

        <!-- مخفی کردن دکمه اصلی و نمایش دکمه لودینگ -->
        <button type="submit" wire:loading.remove wire:target="save" class="bg-blue-500 text-white px-4 py-2">
            ذخیره پست
        </button>

        <button type="button" wire:loading wire:target="save" class="bg-gray-500 text-white px-4 py-2">
            <svg class="animate-spin h-5 w-5 mr-3" viewBox="0 0 24 24">...</svg>
            در حال پردازش...
        </button>

        <!-- تأخیر برای جلوگیری از فلش سریع -->
        <div wire:loading.delay.longest wire:target="save">
            لطفاً صبر کنید (درخواست طولانی)...
        </div>
    </form>
</div>
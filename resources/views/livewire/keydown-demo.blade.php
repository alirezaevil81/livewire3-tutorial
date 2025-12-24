<div class="max-w-4xl mx-auto mt-10 p-6">
    <div class="bg-white shadow-2xl rounded-3xl overflow-hidden border border-gray-100">
        <div class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white p-10 text-center">
            <h2 class="text-5xl font-bold mb-4">wire:keydown در عمل</h2>
            <p class="text-2xl text-indigo-100">واکنش به فشار کلید</p>
        </div>

        <div class="p-10 text-center space-y-10">
            <p class="text-3xl font-bold text-gray-800">{{ $message }}</p>

            <!-- فیلد جستجو با wire:keydown -->
            <input type="text" wire:model="search"
                   wire:keydown.enter="searchOnEnter"
                   wire:keydown.arrow-down="nextItem"
                   placeholder="چیزی تایپ کنید و Enter یا ↓ فشار دهید"
                   class="w-full px-10 py-4 text-lg border border-gray-300 rounded-xl focus:ring-4 focus:ring-indigo-400 transition shadow-inner">

            <p class="text-lg text-gray-600 mt-8">
                در فیلد تایپ کنید:<br>
                • Enter فشار دهید → جستجو انجام می‌شود.<br>
                • ↓ (Arrow Down) فشار دهید → به آیتم بعدی می‌رود.
            </p>
        </div>
    </div>
</div>
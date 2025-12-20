<div class="max-w-2xl mx-auto mt-10">
    <div class="bg-white shadow-xl rounded-2xl p-8 border border-gray-100">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">ایجاد پست جدید</h2>

        @if (session()->has('success'))
            <div class="bg-green-500 text-white p-4 rounded-lg mb-6 shadow-md">
                {{ session('success') }}
            </div>
        @endif

        <form wire:submit="save" class="space-y-6">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">عنوان</label>
                <input type="text" wire:model="title" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition" placeholder="عنوان پست را وارد کنید">
                @error('title') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">محتوا</label>
                <textarea wire:model="body" rows="5" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition" placeholder="محتوای پست را بنویسید"></textarea>
                @error('body') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
            </div>

            <button type="submit"
                    wire:loading.attr="disabled"
                    class="w-full bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-semibold py-3 rounded-lg hover:from-blue-700 hover:to-indigo-700 transition shadow-lg disabled:opacity-70">
                <span wire:loading.remove wire:target="save">ایجاد پست</span>
                <span wire:loading wire:target="save">در حال ایجاد...</span>
            </button>
        </form>
    </div>
</div>
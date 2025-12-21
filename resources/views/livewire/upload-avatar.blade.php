<div class="max-w-2xl mx-auto mt-10 p-6">
    <div class="bg-white shadow-2xl rounded-3xl overflow-hidden border border-gray-100">
        <div class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white p-10 text-center">
            <h2 class="text-4xl font-bold mb-2">آپلود آواتار</h2>
            <p class="text-indigo-100">فقط تصاویر JPEG, PNG, GIF, WebP تا ۳ مگابایت</p>
        </div>

        <div class="p-10 space-y-8">
            <!-- پیام‌های موفقیت و اطلاعات -->
            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-6 py-4 rounded-xl text-center font-bold">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('info'))
                <div class="bg-blue-100 border border-blue-400 text-blue-700 px-6 py-4 rounded-xl text-center font-bold">
                    {{ session('info') }}
                </div>
            @endif

            <!-- نمایش تصویر فعلی یا پیش‌نمایش -->
            <div class="flex justify-center">
                <div class="relative">
                    @if ($currentAvatar)
                        <img src="{{ Storage::url($currentAvatar) }}" alt="آواتار"
                             class="w-72 h-72 object-cover rounded-full shadow-2xl border-8 border-white">
                    @elseif ($avatar)
                        <img src="{{ $avatar->temporaryUrl() }}" alt="پیش‌نمایش"
                             class="w-72 h-72 object-cover rounded-full shadow-2xl border-8 border-white">
                    @else
                        <div class="w-72 h-72 bg-gradient-to-br from-gray-200 to-gray-300 rounded-full flex items-center justify-center text-6xl font-bold text-gray-500 shadow-2xl border-8 border-white">
                            ?
                        </div>
                    @endif

                    <!-- Progress Bar خودکار لایووایر (بدون نیاز به getProgress) -->
                    <div wire:loading wire:target="avatar"
                         class="absolute inset-0 bg-black bg-opacity-60 rounded-full flex items-center justify-center">
                        <div class="text-white text-2xl font-bold">در حال آپلود...</div>
                    </div>
                </div>
            </div>

            <!-- ورودی فایل -->
            <div class="text-center">
                <input type="file" wire:model="avatar" accept="image/*"
                       class="block w-full text-lg file:mr-4 file:py-4 file:px-8 file:rounded-full file:border-0 file:text-lg file:font-bold file:bg-gradient-to-r file:from-indigo-600 file:to-purple-600 file:text-white hover:file:from-indigo-700 hover:file:to-purple-700 cursor-pointer transition">

                @error('avatar')
                <span class="text-red-500 text-lg block mt-3 font-medium">{{ $message }}</span>
                @enderror
            </div>

            <!-- دکمه‌ها -->
            <div class="flex justify-center gap-6">
                <button wire:click="saveAvatar"
                        wire:loading.attr="disabled"
                        class="px-12 py-5 bg-gradient-to-r from-indigo-600 to-purple-600 text-white text-xl font-bold rounded-full shadow-2xl hover:from-indigo-700 hover:to-purple-700 transition disabled:opacity-70 disabled:cursor-not-allowed">
                    <span wire:loading.remove wire:target="saveAvatar">آپلود و ذخیره</span>
                    <span wire:loading wire:target="saveAvatar">در حال پردازش...</span>
                </button>

                @if ($currentAvatar)
                    <button wire:click="removeAvatar"
                            class="px-12 py-5 bg-red-600 text-white text-xl font-bold rounded-full shadow-2xl hover:bg-red-700 transition">
                        حذف آواتار
                    </button>
                @endif
            </div>
        </div>
    </div>
</div>
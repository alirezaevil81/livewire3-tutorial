<div class="max-w-4xl mx-auto mt-10 p-6">
    <div class="bg-white shadow-2xl rounded-3xl overflow-hidden border border-gray-100 transition-all duration-500"
         wire:offline.class="bg-red-50 border-red-200">

        <div class="bg-gradient-to-r from-purple-600 to-indigo-600 text-white p-8 text-center">
            <h2 class="text-4xl font-bold mb-4">تست حالت آفلاین</h2>
            <p class="text-xl text-purple-100">متن خود را بنویسید و ذخیره کنید</p>
        </div>

        <div class="p-10 space-y-8">
            <!-- نوتیفیکیشن آفلاین (مخفی در حالت آنلاین) -->
            <div wire:offline class="hidden">
                <div class="bg-red-600 text-white p-6 rounded-2xl shadow-xl text-center text-2xl font-bold animate-pulse">
                    ⚠️ دستگاه شما در حال حاضر آفلاین است!
                    <p class="text-lg mt-2 font-normal">لطفاً اتصال اینترنت را برقرار کنید تا بتوانید ذخیره کنید.</p>
                </div>
            </div>

            <!-- پیام موفقیت -->
            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-8 py-5 rounded-2xl text-center text-xl font-bold">
                    {{ session('success') }}
                </div>
            @endif

            <!-- فرم ویرایش محتوا -->
            <div>
                <textarea wire:model.live.debounce.500ms="content"
                          rows="10"
                          placeholder="اینجا متن خود را بنویسید... (مثل نوشتن پست بلاگ)"
                          class="w-full px-6 py-5 text-lg border border-gray-300 rounded-2xl focus:ring-4 focus:ring-purple-400 focus:border-transparent transition shadow-inner resize-none"></textarea>
            </div>

            <!-- دکمه ذخیره (غیرفعال در حالت آفلاین) -->
            <div class="text-center">
                <button wire:click="save"
                        wire:loading.attr="disabled"
                        wire:offline.attr="disabled"
                        class="px-12 py-5 bg-gradient-to-r from-purple-600 to-indigo-600 text-white text-2xl font-bold rounded-full shadow-2xl hover:from-purple-700 hover:to-indigo-700 transition disabled:opacity-50 disabled:cursor-not-allowed">
                    <span wire:loading.remove wire:target="save">ذخیره محتوا</span>
                    <span wire:loading wire:target="save">در حال ذخیره...</span>
                </button>
            </div>

            <!-- راهنما برای تست -->
            <div class="bg-gray-100 p-6 rounded-2xl text-center text-gray-700">
                <p class="font-bold text-lg">برای تست آفلاین:</p>
                <p>در مرورگر به DevTools > Network بروید و گزینه "Offline" را انتخاب کنید.</p>
            </div>
        </div>
    </div>
</div>
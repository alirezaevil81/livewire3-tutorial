<div class="max-w-4xl mx-auto mt-10 p-6">
    <div class="bg-white shadow-2xl rounded-3xl overflow-hidden border border-gray-100">
        <div class="bg-gradient-to-r from-purple-600 to-pink-600 text-white p-10 text-center">
            <h2 class="text-5xl font-bold mb-4">#[Url] در عمل</h2>
            <p class="text-2xl text-purple-100">همگام‌سازی state با URL</p>
        </div>

        <div class="p-10 space-y-10">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- جستجو -->
                <div>
                    <label class="block text-xl font-semibold text-gray-700 mb-3">جستجو</label>
                    <input type="text" wire:model.live="search"
                           placeholder="جستجو..."
                           class="w-full px-6 py-4 text-lg border border-gray-300 rounded-xl focus:ring-4 focus:ring-purple-400 transition shadow-inner">
                </div>

                <!-- دسته‌بندی -->
                <div>
                    <label class="block text-xl font-semibold text-gray-700 mb-3">دسته‌بندی</label>
                    <select wire:model.live="category"
                            class="w-full px-6 py-4 text-lg border border-gray-300 rounded-xl focus:ring-4 focus:ring-purple-400 transition shadow-inner">
                        <option value="all">همه</option>
                        <option value="tech">تکنولوژی</option>
                        <option value="design">طراحی</option>
                        <option value="business">کسب‌وکار</option>
                    </select>
                </div>

                <!-- مرتب‌سازی -->
                <div>
                    <label class="block text-xl font-semibold text-gray-700 mb-3">مرتب‌سازی</label>
                    <select wire:model.live="sort"
                            class="w-full px-6 py-4 text-lg border border-gray-300 rounded-xl focus:ring-4 focus:ring-purple-400 transition shadow-inner">
                        <option value="newest">جدیدترین</option>
                        <option value="oldest">قدیمی‌ترین</option>
                        <option value="popular">محبوب‌ترین</option>
                    </select>
                </div>
            </div>

            <div class="text-center">
                <p class="text-2xl font-bold text-gray-800">
                    جستجو: "{{ $search }}" | دسته: {{ $category }} | مرتب‌سازی: {{ $sort }}
                </p>
            </div>

            <p class="text-lg text-gray-600 text-center mt-8">
                فیلدها را تغییر دهید → URL تغییر می‌کند (query string).<br>
                URL را کپی کنید و در تب جدید باز کنید → وضعیت دقیقاً حفظ می‌شود!
            </p>
        </div>
    </div>
</div>
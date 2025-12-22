<div>
    <!-- دکمه باز کردن مودال -->
    <button wire:click="open"
            class="px-10 py-5 bg-gradient-to-r from-indigo-600 to-purple-600 text-white text-2xl font-bold rounded-full shadow-2xl hover:from-indigo-700 hover:to-purple-700 transition">
        نمایش جزئیات محصول
    </button>

    <!-- مودال با Teleport به body -->
    @teleport('body')
    <div x-data="{ open: @entangle('isOpen') }"
         x-show="open"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 bg-black bg-opacity-60 flex items-center justify-center z-50"
         @click="open = false">

        <div class="bg-white max-w-3xl w-full mx-4 rounded-3xl shadow-3xl overflow-hidden"
             @click.stop>
            <!-- هدر با گرادیانت -->
            <div class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white p-8 text-center">
                <h2 class="text-4xl font-bold">{{ $product['title'] }}</h2>
            </div>

            <!-- بدنه مودال -->
            <div class="p-10">
                <img src="{{ $product['image'] }}" alt="{{ $product['title'] }}"
                     class="w-full h-96 object-cover rounded-2xl shadow-lg mb-8">

                <p class="text-xl text-gray-700 leading-relaxed mb-8">{{ $product['description'] }}</p>

                <div class="text-center">
                    <p class="text-3xl font-bold text-indigo-600 mb-8">{{ $product['price'] }}</p>

                    <button wire:click="close"
                            class="px-12 py-5 bg-gradient-to-r from-red-600 to-pink-600 text-white text-2xl font-bold rounded-full shadow-2xl hover:from-red-700 hover:to-pink-700 transition">
                        بستن مودال
                    </button>
                </div>
            </div>
        </div>
    </div>
    @endteleport
</div>
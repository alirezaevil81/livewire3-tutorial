<div class="max-w-4xl mx-auto mt-10 p-6">
    <div class="bg-white shadow-2xl rounded-3xl overflow-hidden border border-gray-100">
        <div class="bg-gradient-to-r from-pink-600 to-rose-600 text-white p-8 text-center">
            <h2 class="text-4xl font-bold mb-4">لایووایر + Alpine.js</h2>
{{--
            <p class="text-xl text-pink-100">همگام‌سازی دوطرفه با @entangle</p>
--}}
        </div>

        <div class="p-10 space-y-10">
            <!-- پیام -->
            @if (session('message'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-8 py-5 rounded-2xl text-center text-xl font-bold shadow-lg">
                    {{ session('message') }}
                </div>
            @endif

            <!-- نمایش رنگ انتخاب‌شده با لایووایر -->
            <div class="text-center">
                <div class="inline-block px-10 py-8 rounded-3xl shadow-2xl text-white text-3xl font-bold"
                     style="background-color: {{ $selectedColor }}">
                    رنگ فعلی: {{ $colors[$selectedColor] ?? 'نامشخص' }}
                </div>
            </div>

            <!-- Dropdown با Alpine.js + Entangle -->
            <div class="flex justify-center">
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open"
                            class="flex items-center gap-4 px-8 py-5 bg-gradient-to-r from-gray-800 to-gray-900 text-white text-xl font-bold rounded-2xl shadow-2xl hover:shadow-3xl transition transform hover:scale-105">
                        انتخاب رنگ
                        <svg class="w-6 h-6 transition" :class="{'rotate-180': open}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <div x-show="open"
                         @click.away="open = false"
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 scale-95"
                         x-transition:enter-end="opacity-100 scale-100"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100 scale-100"
                         x-transition:leave-end="opacity-0 scale-95"
                         class="absolute left-0 right-0 mt-4 bg-white rounded-2xl shadow-3xl overflow-hidden border border-gray-200 z-10">

                        @foreach ($colors as $value => $label)
                            <button wire:click="changeColor('{{ $value }}')"
                                    @click="open = false"
                                    class="w-full px-8 py-5 text-right text-xl hover:bg-gray-100 transition flex items-center justify-between"
                                    :class="{ 'bg-gradient-to-r from-indigo-100 to-purple-100 font-bold': $wire.entangle('selectedColor') === '{{ $value }}' }">
                                <span>{{ $label }}</span>
                                @if ($selectedColor === $value)
                                    <span class="text-green-600 text-2xl">✓</span>
                                @endif
                            </button>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- دکمه تست تغییر از سمت لایووایر -->
            <div class="text-center">
                <button wire:click="$set('selectedColor', 'purple')"
                        class="px-10 py-5 bg-gradient-to-r from-purple-600 to-pink-600 text-white text-xl font-bold rounded-full shadow-2xl hover:from-purple-700 hover:to-pink-700 transition">
                    تغییر رنگ به بنفش (از لایووایر)
                </button>
            </div>
        </div>
    </div>
</div>
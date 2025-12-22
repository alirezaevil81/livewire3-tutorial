<div class="max-w-5xl mx-auto mt-10 p-6">
    <div class="bg-white shadow-2xl rounded-3xl overflow-hidden border border-gray-100">
        <div class="bg-gradient-to-r from-amber-600 to-orange-600 text-white p-10 text-center">
            <h2 class="text-5xl font-bold mb-4">سبد خرید شما</h2>
            <p class="text-2xl text-amber-100">Optimistic Updates + Loading States</p>
        </div>

        <div class="p-10">
            @if (empty($cart))
                <div class="text-center py-20 text-3xl text-gray-500">
                    سبد خرید شما خالی است.
                </div>
            @else
                <div class="space-y-8">
                    @foreach ($cart as $index => $item)
                        <div class="flex items-center bg-gray-50 p-8 rounded-2xl shadow-lg hover:shadow-xl transition">
                            <div class="ml-8 flex-1">
                                <h3 class="text-3xl font-bold text-gray-800">{{ $item['name'] }}</h3>
                                <p class="text-2xl text-gray-600 mt-2">{{ number_format($item['price']) }} تومان</p>
                            </div>

                            <div class="flex items-center gap-6">
                                <!-- تعداد با defer (optimistic update) -->
                                <input type="number" min="1" wire:model.defer="cart.{{ $index }}.quantity"
                                       wire:change="updateQuantity({{ $index }}, $event.target.value)"
                                       class="w-24 px-4 py-3 text-2xl text-center border border-gray-300 rounded-xl focus:ring-4 focus:ring-amber-400 transition shadow-inner">

                                <!-- لودینگ فقط روی input تعداد -->
                                <div wire:loading wire:target="updateQuantity({{ $index }})" class="text-amber-600 text-xl">
                                    ⏳ در حال ذخیره...
                                </div>
                            </div>

                            <div class="mr-8 text-3xl font-bold text-gray-700">
                                {{ number_format($item['price'] * $item['quantity']) }} تومان
                            </div>

                            <!-- دکمه حذف -->
                            <button wire:click="removeItem({{ $index }})"
                                    wire:loading.attr="disabled"
                                    class="bg-red-600 hover:bg-red-700 text-white px-8 py-4 rounded-xl font-bold text-xl transition shadow-lg disabled:opacity-70">
                                <span wire:loading.remove wire:target="removeItem({{ $index }})">حذف</span>
                                <span wire:loading wire:target="removeItem({{ $index }})">در حال حذف...</span>
                            </button>
                        </div>
                    @endforeach
                </div>

                <!-- مجموع نهایی (به صورت optimistic آپدیت می‌شود) -->
                <div class="mt-12 text-center border-t-4 border-amber-500 pt-8">
                    <p class="text-4xl font-bold text-gray-800">
                        مجموع قابل پرداخت:
                        <span class="text-amber-600">{{ number_format($this->total) }} تومان</span>
                    </p>
                </div>
            @endif
        </div>
    </div>
</div>
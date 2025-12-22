<div class="max-w-4xl mx-auto mt-10 p-6">
    <div class="bg-white shadow-2xl rounded-3xl overflow-hidden border border-gray-100">
        <div class="bg-gradient-to-r from-teal-600 to-cyan-600 text-white p-8 text-center">
            <h2 class="text-4xl font-bold mb-4">مدیریت تودوها با Nesting</h2>
            <p class="text-xl text-teal-100">کامپوننت والد + فرزندان با wire:key</p>
        </div>

        <div class="p-8">
            <!-- فرم اضافه کردن تودو جدید -->
            <div class="flex gap-4 mb-10">
                <input type="text" wire:model="newTitle"
                       placeholder="تودو جدید را وارد کنید..."
                       class="flex-1 px-6 py-4 text-lg border border-gray-300 rounded-xl focus:ring-4 focus:ring-teal-400 transition shadow-inner">

                <button wire:click="add"
                        class="px-8 py-4 bg-gradient-to-r from-teal-600 to-cyan-600 text-white font-bold rounded-xl shadow-lg hover:from-teal-700 hover:to-cyan-700 transition">
                    اضافه کن
                </button>
            </div>

            <!-- لیست تودوها با کامپوننت‌های فرزند -->
            <div class="space-y-4">
                @forelse ($todos as $todo)
                    <livewire:todo-item :todo="$todo" :key="$todo['id']" />
                @empty
                    <div class="text-center py-12 text-2xl text-gray-500">
                        هیچ تودویی وجود ندارد. یکی اضافه کنید!
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
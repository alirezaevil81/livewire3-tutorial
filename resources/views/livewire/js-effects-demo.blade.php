<div class="max-w-4xl mx-auto mt-10 p-6">
    <div class="bg-white shadow-2xl rounded-3xl overflow-hidden border border-gray-100">
        <div class="bg-gradient-to-r from-cyan-600 to-blue-600 text-white p-10 text-center">
            <h2 class="text-5xl font-bold mb-4">wire:effects در لایووایر</h2>
            <p class="text-2xl text-cyan-100">اجرای مستقیم جاوااسکریپت از سرور</p>
        </div>

        <div class="p-10 space-y-12">
            <!-- شمارنده با ذخیره در localStorage -->
            <div class="text-center">
                <h3 class="text-3xl font-bold text-gray-800 mb-6">شمارنده با ذخیره خودکار</h3>
                <p class="text-6xl font-extrabold text-cyan-600 mb-8">{{ $count }}</p>
                <button wire:click="increment"
                        class="px-12 py-6 bg-gradient-to-r from-cyan-600 to-blue-600 text-white text-2xl font-bold rounded-full shadow-2xl hover:from-cyan-700 hover:to-blue-700 transition">
                    افزایش شمارنده
                </button>
            </div>

            <!-- دکمه alert سفارشی -->
            <div class="text-center">
                <h3 class="text-3xl font-bold text-gray-800 mb-6">Alert سفارشی</h3>
                <button wire:click="showAlert"
                        class="px-12 py-6 bg-gradient-to-r from-purple-600 to-pink-600 text-white text-2xl font-bold rounded-full shadow-2xl hover:from-purple-700 hover:to-pink-700 transition">
                    نمایش Alert سفارشی
                </button>
            </div>

            <!-- Toast container -->
            <div id="toast-container" class="fixed bottom-8 left-8 space-y-4 z-50"></div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('livewire:init', () => {
        // لود شمارنده از localStorage
        Livewire.on('load-count', () => {
            const saved = localStorage.getItem('demo-count');
            if (saved) {
                @this.set('count', parseInt(saved));
            }
        });

        // ذخیره در localStorage
        Livewire.on('save-count', (event) => {
            localStorage.setItem('demo-count', event.count);
        });

        // نمایش toast زیبا
        Livewire.on('show-toast', (event) => {
            const toast = document.createElement('div');
            toast.className = 'bg-green-600 text-white px-8 py-5 rounded-2xl shadow-2xl text-xl font-bold animate-slide-up';
            toast.textContent = event.message;

            document.getElementById('toast-container').appendChild(toast);

            setTimeout(() => {
                toast.remove();
            }, 3000);
        });

        // alert سفارشی
        Livewire.on('custom-alert', (event) => {
            alert('🚀 ' + event.text);
        });
    });

    // انیمیشن ساده برای toast
    const style = document.createElement('style');
    style.textContent = `
        @keyframes slide-up {
            from { transform: translateY(100%); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        .animate-slide-up {
            animation: slide-up 0.5s ease-out;
        }
    `;
    document.head.appendChild(style);
</script>
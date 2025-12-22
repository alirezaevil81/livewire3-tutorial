<div class="max-w-2xl mx-auto mt-10 p-6">
    <div class="bg-white shadow-2xl rounded-3xl overflow-hidden border border-gray-100">
        <div class="bg-gradient-to-r from-green-600 to-teal-600 text-white p-10 text-center">
            <h2 class="text-5xl font-bold mb-4">فرم ثبت‌نام</h2>
            <p class="text-2xl text-green-100">اعتبارسنجی پیشرفته و real-time</p>
        </div>

        <div class="p-10">
            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-8 py-6 rounded-2xl text-center text-2xl font-bold mb-10 shadow-lg">
                    {{ session('success') }}
                </div>
            @endif

            <form wire:submit="register" class="space-y-8">
                <!-- نام -->
                <div>
                    <label class="block text-xl font-semibold text-gray-700 mb-2">نام کامل</label>
                    <input type="text" wire:model.live="name"
                           class="w-full px-6 py-4 text-lg border {{ $errors->has('name') ? 'border-red-500' : 'border-gray-300' }} rounded-xl focus:ring-4 focus:ring-green-400 transition shadow-inner">
                    @error('name')
                    <p class="text-red-500 text-lg mt-2 font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <!-- ایمیل -->
                <div>
                    <label class="block text-xl font-semibold text-gray-700 mb-2">ایمیل</label>
                    <input type="email" wire:model.live="email"
                           class="w-full px-6 py-4 text-lg border {{ $errors->has('email') ? 'border-red-500' : 'border-gray-300' }} rounded-xl focus:ring-4 focus:ring-green-400 transition shadow-inner">
                    @error('email')
                    <p class="text-red-500 text-lg mt-2 font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <!-- سن -->
                <div>
                    <label class="block text-xl font-semibold text-gray-700 mb-2">سن</label>
                    <input type="number" wire:model.live="age"
                           class="w-full px-6 py-4 text-lg border {{ $errors->has('age') ? 'border-red-500' : 'border-gray-300' }} rounded-xl focus:ring-4 focus:ring-green-400 transition shadow-inner">
                    @error('age')
                    <p class="text-red-500 text-lg mt-2 font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <!-- رمز عبور -->
                <div>
                    <label class="block text-xl font-semibold text-gray-700 mb-2">رمز عبور</label>
                    <input type="password" wire:model.live="password"
                           class="w-full px-6 py-4 text-lg border {{ $errors->has('password') ? 'border-red-500' : 'border-gray-300' }} rounded-xl focus:ring-4 focus:ring-green-400 transition shadow-inner">
                    @error('password')
                    <p class="text-red-500 text-lg mt-2 font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <!-- تأیید رمز عبور -->
                <div>
                    <label class="block text-xl font-semibold text-gray-700 mb-2">تأیید رمز عبور</label>
                    <input type="password" wire:model.live="password_confirmation"
                           class="w-full px-6 py-4 text-lg border border-gray-300 rounded-xl focus:ring-4 focus:ring-green-400 transition shadow-inner">
                </div>

                <!-- دکمه ثبت‌نام -->
                <div class="text-center">
                    <button type="submit"
                            wire:loading.attr="disabled"
                            class="px-16 py-6 bg-gradient-to-r from-green-600 to-teal-600 text-white text-3xl font-bold rounded-full shadow-2xl hover:from-green-700 hover:to-teal-700 transition disabled:opacity-70">
                        <span wire:loading.remove wire:target="register">ثبت‌نام</span>
                        <span wire:loading wire:target="register">در حال پردازش...</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
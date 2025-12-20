<div class="max-w-4xl mx-auto mt-10">
    <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">لیست پست‌ها</h2>

    @if (session()->has('message'))
        <div class="bg-teal-500 text-white p-4 rounded-lg mb-6 shadow-md text-center">
            {{ session('message') }}
        </div>
    @endif

    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        @forelse ($posts as $post)
            <div class="bg-white shadow-lg rounded-xl p-6 hover:shadow-2xl transition duration-300 border border-gray-100">
                <h3 class="text-xl font-semibold text-gray-800 mb-3">{{ $post['title'] }}</h3>
                <p class="text-gray-600 leading-relaxed">{{ Str::limit($post['body'], 100) }}</p>
                <div class="mt-4 text-sm text-gray-500">شناسه: {{ $post['id'] }}</div>
            </div>
        @empty
            <div class="col-span-full text-center py-12">
                <p class="text-xl text-gray-500">هنوز پستی وجود ندارد.</p>
            </div>
        @endforelse
    </div>
</div>
<div>
    <h2>جستجو</h2>

    <input type="text" wire:model.live.debounce.300ms="query" placeholder="جستجو کنید...">

    <ul>
        @foreach ($filteredItems as $item)
            <li>{{ $item }}</li>
        @endforeach

        @if ($filteredItems->isEmpty() && $query !== '')
            <li>هیچ نتیجه‌ای یافت نشد.</li>
        @endif
    </ul>
</div>
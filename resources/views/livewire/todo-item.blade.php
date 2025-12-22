<div class="flex items-center bg-white shadow-md rounded-xl p-4 mb-4 hover:shadow-xl transition">
    <input type="checkbox"
           wire:click="toggle"
           {{ $todo['completed'] ? 'checked' : '' }}
           class="w-6 h-6 text-teal-600 rounded focus:ring-teal-500 cursor-pointer">

    <span class="mx-4 flex-1 text-xl {{ $todo['completed'] ? 'line-through text-gray-500' : 'text-gray-800' }}">
        {{ $todo['title'] }}
    </span>

    <button wire:click="remove"
            class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg font-semibold transition">
        حذف
    </button>
</div>
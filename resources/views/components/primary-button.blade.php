<button {{ $attributes->merge(['type' => 'submit', 'class' => 'w-full bg-indigo-600 text-white py-3 px-4 rounded-md shadow-sm hover:bg-indigo-500']) }}>
    {{ $slot }}
</button>

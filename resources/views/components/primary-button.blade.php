<button {{ $attributes->merge(['type' => 'submit', 'class' => 'px-4 py-2 border border-transparent rounded-md text-black hover:text-white tracking-widest transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>

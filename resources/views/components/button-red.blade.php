<a {{ $attributes->merge([
    'class' => '
        inline-flex items-center justify-center gap-2
        px-4 py-2 text-sm font-medium rounded-lg
        text-white bg-red-600
        hover:bg-red-700
        focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-1
        active:bg-red-800
        transition-all duration-200
        dark:bg-red-600 dark:hover:bg-red-500 dark:focus:ring-red-400
    '
]) }}>
    {{ $slot }}
</a>

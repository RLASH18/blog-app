<button type="submit"
    {{ $attributes->merge([
    'class' => '
        inline-flex items-center justify-center gap-2
        px-4 py-2 text-sm font-medium rounded-lg
        text-white bg-blue-600
        hover:bg-blue-700
        focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-1
        active:bg-blue-800
        transition-all duration-200
        dark:bg-blue-600 dark:hover:bg-blue-500 dark:focus:ring-blue-400
    '
]) }}>
    {{ $slot }}
</button>

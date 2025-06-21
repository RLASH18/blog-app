<x-layout-auth title="Post Info">

    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">

        {{-- automatically gets the image --}}
        <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image">

        <div class="p-5">

            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post->title }}</h5>

            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $post->description }}</p>

        </div>
    </div>

    <x-button-red href="/posts">Back to posts</x-button-red>

</x-layout-auth>

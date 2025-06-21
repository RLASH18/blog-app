<x-layout-auth title="Posts">

    <x-button-blue class="mb-5" href="/posts/create">Add Post</x-button-blue>

    <div class="bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
        <h2 class="text-xl font-bold bg-gray-200 p-2">Posts</h2>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

            <x-table.table>

                <x-table.head>
                    <x-table.th>ID</x-table.th>
                    <x-table.th>Title</x-table.th>
                    <x-table.th>Description</x-table.th>
                    <x-table.th>Created at</x-table.th>
                    <x-table.th>Action</x-table.th>
                </x-table.head>

                @foreach ($posts as $post)
                    <x-table.body>

                        <x-table.data>{{ $post->id }}</x-table.data>
                        <x-table.data>{{ $post->title }}</x-table.data>
                        <x-table.data>{{ $post->description }}</x-table.data>
                        <x-table.data>{{ $post->created_at->format('F j, Y') }}</x-table.data>
                        <x-table.data>
                            <a href="/posts/{{ $post->id }}"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline mr-2">Show</a>

                            {{-- PostPolicy --}}
                            @can('edit', $post)
                                <a href="/posts/{{ $post->id }}/edit"
                                    class="font-medium text-green-600 dark:text-green-500 hover:underline mr-2">Edit</a>
                            @endcan

                            {{-- Delete button from with class inline so that it aligns --}}
                            <form action="/posts/{{ $post->id }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')

                                @can('destroy', $post)
                                    <button class="font-medium text-red-600 dark:text-red-500 hover:underline"
                                        onclick="return confirm('Are you sure you want to delete this?')">Delete</button>
                                @endcan
                            </form>
                        </x-table.data>

                    </x-table.body>
                @endforeach

            </x-table.table>
        </div>
    </div>

    {{-- Pagination --}}
    <div class="mt-4">
        {{ $posts->links() }}
    </div>

</x-layout-auth>

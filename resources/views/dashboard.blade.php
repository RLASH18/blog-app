<x-layout-auth title="Dashboard">

    <div class="grid lg:grid-cols-3 md:grid-cols-1 sm:grid-cols-1 gap-4 mb-4">
        <x-card>{{ $postCount }}</x-card>
        <x-card></x-card>
        <x-card></x-card>
    </div>

    <div class="bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
        <h2 class="text-xl font-bold bg-gray-200 p-2">Recent Posts</h2>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <x-table.table>
                <x-table.head>
                    <x-table.th>Title</x-table.th>
                    <x-table.th>Description</x-table.th>
                    <x-table.th>Created at</x-table.th>
                    <x-table.th></x-table.th>
                </x-table.head>

                @foreach ($latestPosts as $post)
                    <x-table.body>
                        <x-table.data>{{ $post->title }}</x-table.data>
                        <x-table.data>{{ $post->description }}</x-table.data>
                        <x-table.data>{{ $post->created_at }}</x-table.data>
                        <x-table.data>
                            <a href="/posts/{{ $post->id }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline mr-2">Show</a>
                        </x-table.data>
                    </x-table.body>
                @endforeach

            </x-table.table>
        </div>
    </div>

</x-layout-auth>

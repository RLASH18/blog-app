<x-layout-auth title="Add a Post">

    <div class="items-center justify-center place-items-center">
        <div
            class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">

            <x-form.form action="/posts" enctype="multipart/form-data">

                <div class="space-y-4">
                    <div>
                        <x-form.label for="title">Title</x-form.label>
                        <x-form.input name="title" type="text" id="title" :value="old('title')" required />
                        <x-form.error name="title" />
                    </div>

                    <div>
                        <x-form.label for="description">Description</x-form.label>
                        <x-form.input name="description" type="text" id="description" :value="old('description')" required />
                        <x-form.error name="description" />
                    </div>

                    <div>
                        <x-form.label for="image">Image</x-form.label>
                        <x-form.input name="image" type="file" accept="image/png, image/jpeg" id="image" :value="old('image')" required />
                        <x-form.error name="image" />
                    </div>

                    <div>
                        <x-form.button>Add Post</x-form.button>
                        <x-button-red href="/posts">Back</x-button-red>
                    </div>
                </div>
            </x-form.form>
        </div>
    </div>

</x-layout-auth>

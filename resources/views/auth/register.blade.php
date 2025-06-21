<x-layout-guest title="Register">

    <div class="items-center justify-center place-items-center">
        <div
            class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">

            <x-form.form action="/register">

                <div class="space-y-4">
                    <div>
                        <x-form.label for="name">Name</x-form.label>
                        <x-form.input name="name" type="text" id="name" :value="old('name')" />
                        <x-form.error name="name" />
                    </div>

                    <div>
                        <x-form.label for="email">Email</x-form.label>
                        <x-form.input name="email" type="email" id="email" :value="old('email')" />
                        <x-form.error name="email" />

                    </div>

                    <div>
                        <x-form.label for="password">Password</x-form.label>
                        <x-form.input name="password" type="password" id="password" />
                        <x-form.error name="password" />
                    </div>

                    <div>
                        <x-form.label for="password_confirmation">Password</x-form.label>
                        <x-form.input name="password_confirmation" type="password" id="password_confirmation" />
                        <x-form.error name="password_confirmation" />
                    </div>

                    <div>
                        <x-form.button>Register</x-form.button>
                    </div>

                    <div class="flex items-start mb-5">
                        <label for="login" class="text-sm font-medium text-gray-900 dark:text-gray-300">Already have
                            an account? <a href="/" class="text-blue-600 hover:underline dark:text-blue-500">Login
                                here</a>
                        </label>
                    </div>
                </div>

            </x-form.form>
        </div>
    </div>

</x-layout-guest>

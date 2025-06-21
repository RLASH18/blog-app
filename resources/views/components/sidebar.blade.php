<button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button"
    class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd"
            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
        </path>
    </svg>
</button>

<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
        <a href="/dashboard" class="flex items-center ps-2.5 mb-10">
            <img src="https://cdn-icons-png.flaticon.com/512/10026/10026257.png" class="h-6 me-3 sm:h-7"
                alt="Flowbite Logo" />
            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Blog-App</span>
        </a>
        <ul class="space-y-2 font-medium">
            <li>
                <a href="/dashboard"
                    class="flex items-center p-2 rounded-lg group {{ request()->is('dashboard') ? 'bg-blue-100 text-blue-700 dark:bg-gray-700 dark:text-white' : 'text-gray-900  dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                    <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                        <path
                            d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                        <path
                            d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                    </svg>
                    <span class="ms-3">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="/posts"
                    class="flex items-center p-2 rounded-lg group {{ request()->is('posts') ? 'bg-blue-100 text-blue-700 dark:bg-gray-700 dark:text-white' : 'text-gray-900  dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                    <svg class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                            d="M19.5 14.25v4.125A2.625 2.625 0 0116.875 21H7.125A2.625 2.625 0 014.5 18.375V5.625A2.625 2.625 0 017.125 3h6.375L19.5 8.25v6M15 12H9m6 3H9m0-6h.008v.008H9V9z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Posts</span>
                </a>
            </li>
            <li>
                <form method="POST" action="/logout">
                    @csrf
                    <button type="submit"
                        class="flex items-center w-full p-2 rounded-lg group text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                        </svg>
                        <span class="ms-3 whitespace-nowrap">Logout</span>
                    </button>
                </form>
            </li>
        </ul>
    </div>
</aside>

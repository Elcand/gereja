<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar"
    type="button"
    class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd"
            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
        </path>
    </svg>
</button>

<aside id="default-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidenav">
    <div
        class="overflow-y-auto py-5 px-3 h-full bg-gray-800 border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <ul class="space-y-2">
            <li>
                <a href="{{ route('dashboard.index') }}"
                    class="flex items-center p-2 text-base font-normal text-white rounded-lg dark:text-white hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-700 group">
                    <svg aria-hidden="true"
                        class="w-6 h-6 text-gray-400 transition duration-75 dark:text-gray-400 group-hover:text-gray-800 dark:group-hover:text-white"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                    </svg>
                    <span class="ml-3">Dashboard</span>
                </a>
            </li>
            <li>
                <button type="button"
                    class="flex items-center p-2 w-full text-base font-normal text-white rounded-lg transition duration-75 group hover:bg-gray-200 hover:text-gray-900 dark:text-white dark:hover:bg-gray-700"
                    aria-controls="dropdown-authentication" data-collapse-toggle="dropdown-authentication">
                    <svg aria-hidden="true"
                        class="flex-shrink-0 w-6 h-6 text-gray-400 transition duration-75 group-hover:text-gray-800 dark:text-gray-400 dark:group-hover:text-white"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Manage</span>
                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <ul id="dropdown-authentication" class="hidden py-2 space-y-2">
                    <li>
                        <a href="{{ route('hero.index') }}"
                            class="flex items-center p-2 pl-11 w-full text-sm font-normal text-white rounded-lg transition duration-75 group hover:bg-gray-200 hover:text-gray-800 dark:text-white dark:hover:bg-gray-700">Manage
                            Home</a>
                    </li>
                    <li>
                        <a href="{{ route('about.index') }}"
                            class="flex items-center p-2 pl-11 w-full text-sm font-normal text-white rounded-lg transition duration-75 group hover:bg-gray-200 hover:text-gray-800 dark:text-white dark:hover:bg-gray-700">Manage
                            About</a>
                    </li>
                    <li>
                        <a href="{{ route('article.index') }}"
                            class="flex items-center p-2 pl-11 w-full text-sm font-normal text-white rounded-lg transition duration-75 group hover:bg-gray-200 hover:text-gray-800 dark:text-white dark:hover:bg-gray-700">Manage
                            Article</a>
                    </li>
                    <li>
                        <a href="{{ route('category.index') }}"
                            class="flex items-center p-2 pl-11 w-full text-sm font-normal text-white rounded-lg transition duration-75 group hover:bg-gray-200 hover:text-gray-800 dark:text-white dark:hover:bg-gray-700">Manage
                            Category</a>
                    </li>
                    <li>
                        <a href="{{ route('church.index') }}"
                            class="flex items-center p-2 pl-11 w-full text-sm font-normal text-white rounded-lg transition duration-75 group hover:bg-gray-200 hover:text-gray-800 dark:text-white dark:hover:bg-gray-700">Manage
                            Church</a>
                    </li>
                    <li>
                        <a href="{{ route('maps.index') }}"
                            class="flex items-center p-2 pl-11 w-full text-sm font-normal text-white rounded-lg transition duration-75 group hover:bg-gray-200 hover:text-gray-800 dark:text-white dark:hover:bg-gray-700">Manage
                            Maps</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>

    <div
        class="hidden absolute bottom-0 left-0 justify-right p-4 space-x-4 w-full lg:flex bg-gray-800 dark:bg-gray-800 z-20 border-r border-gray-200 dark:border-gray-700">
        <form id="logout-form" action="{{ route('log.out') }}" method="POST" style="display: inline;">
            @csrf
            <button type="submit"
                class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer dark:text-gray-400 hover:text-gray-900 dark:hover:text-white hover:bg-gray-100 dark:hover:bg-gray-600">
                <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 4a1 1 0 011-1h9a1 1 0 110 2H5v10h8a1 1 0 110 2H4a1 1 0 01-1-1V4zm12.293 5.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 011.414-1.414L12 11.586V7a1 1 0 112 0v4.586l1.293-1.293z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </form>
    </div>

</aside>

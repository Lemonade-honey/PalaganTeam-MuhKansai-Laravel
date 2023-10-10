{{-- Navbar Start --}}
<div class="w-full text-gray-700 fixed bg-blue-800 shadow z-40">
    <div x-data="{ open: false }"
        class="flex flex-col px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
        <div class="flex flex-row items-center justify-between p-4">
            <a href="/"
                class="text-lg font-bold tracking-widest text-white uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline"><i class="fa-solid fa-house"></i></a>
            <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                    <path x-show="!open" fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                    <path x-show="open" fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <nav :class="{ 'flex': open, 'hidden': !open }"
            class="flex-col flex-grow hidden pb-4 md:pb-0 md:flex md:justify-center md:flex-row">
            <a class="px-4 py-2 mt-2 text-sm uppercase text-white font-semibold {{ $page == 'news' ? 'text-white bg-gray-200' : 'bg-transparent' }} rounded-lg md:mt-0 md:ml-4 hover:text-blue-800 focus:text-blue-800 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                href="#">Profile</a>
            <a class="px-4 py-2 mt-2 text-sm uppercase text-white font-semibold {{ $page == 'activity' ? 'text-blue-700 bg-gray-200' : 'bg-transparent' }} rounded-lg md:mt-0 md:ml-4 hover:text-blue-700 focus:text-blue-800 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                href="#">Majelis</a>   
            <a class="px-4 py-2 mt-2 text-sm uppercase text-white font-semibold {{ $page == 'activity' ? 'text-blue-800 bg-gray-200' : 'bg-transparent' }} rounded-lg md:mt-0 md:ml-4 hover:text-blue-800 focus:text-blue-800 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                href="#">Lazismu</a>
            <a class="px-4 py-2 mt-2 text-sm uppercase text-white font-semibold {{ $page == 'activity' ? 'text-blue-800 bg-gray-200' : 'bg-transparent' }} rounded-lg md:mt-0 md:ml-4 hover:text-blue-800 focus:text-blue-800 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                href="#">Ortom</a>
            <a class="px-4 py-2 mt-2 text-sm uppercase text-white font-semibold {{ $page == 'activity' ? 'text-blue-800 bg-gray-200' : 'bg-transparent' }} rounded-lg md:mt-0 md:ml-4 hover:text-blue-800 focus:text-blue-800 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                href="#">Maklumat</a>
            
            <a class="px-4 py-2 mt-2 text-sm uppercase text-white font-semibold {{ $page == 'about' ? 'text-blue-800 bg-gray-200' : 'bg-transparent' }} rounded-lg md:mt-0 md:ml-4 hover:text-blue-800 focus:text-blue-800 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                href="https://muhammadiyah.or.id/">About Muhammadiyah</a>

        </nav>
        <div :class="{ 'flex': open, 'hidden': !open }" class="ml-3 md:block">
            @if (auth()->check())
                <div class="dropdown md:dropdown-left">
                    <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                        <div
                            class="inline-flex  items-center justify-center w-7 h-7 overflow-hidden bg-gray-500 rounded-full ">
                            <p class="text-sm text-white uppercase">{{ substr(Auth::user()->name, 0, 2) }}</p>
                        </div>
                    </label>
                    <ul tabindex="0"
                        class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li><a href="/dashboard/logout">Logout</a></li>
                    </ul>
                </div>
            @else
                <div class="flex flex-row space-x-3 mb-4 md:mb-0 ">
                    <a href="/login"
                        class="flex flex-row mt-2 md:w-auto md:mt-0 md:ml-4 text-white font-semibold  bg-blue-800 hover:bg-gray-200 hover:text-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300  rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 ">Login</a>
                </div>
            @endif
        </div>
    </div>
</div>
{{--  --}}
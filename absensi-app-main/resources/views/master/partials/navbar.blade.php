<!-- component -->
<header>
    <nav class="px-1 py-1 bg-blue-300 ml-2 mr-2 shadow h-11 lg:px-3">
        <div class="flex flex-wrap items-center justify-between max-w-screen-Xxl mx-0">
            <a href="#" class="flex items-center">
                <span class="self-center font-mono text-2xl font-semibold whitespace-nowrap">
                    FACTORY 3 DEPT. PC DELIVERY
                </span>
                {{-- <select class="px-1 py-1 ml-4 bg-yellow-300 border border-black rou nded">
                    <option value="A">Shift A</option>
                    <option value="B">Shift B</option>
                    <!-- Add more options as needed -->
                </select> --}}
            </a>

            <div class="flex items-center lg:order-2">
                <a href="/dashboard"
                class="py-1 mx-2 bg-transparent border border-transparent rounded-md px- focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                    stroke="currentColor" class="w-6 h-6">
                    <path strokeLinecap="round" strokeLinejoin="round"
                        d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
            </a>
                <span
                class="self-center font-mono font-semibold text-md whitespace-nowrap dark:text-white">@include('partials.date')</span>
            </div>
            <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <img src="{{ asset('storage/sugitylogo.png') }}" class="h-3 mr-3 sm:h-6" alt="Sugity Logo" />
                <span class="self-center font-serif text-3xl font-semibold whitespace-nowrap dark:text-white">HENKATEN
                    BOARD</span>
            </div>
        </div>
    </nav>
</header>
</div>

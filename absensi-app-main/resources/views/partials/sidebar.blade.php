@if (auth()->user()->isAdmin() or
        auth()->user()->isOperator())
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
            <ul class="nav flex-column">
                @if (auth()->user()->isAdmin() or
                        auth()->user()->isOperator())
                    <div class="text-success" style="margin-left: 10px; padding-bottom: 5px; padding-top: 10px">
                        @include('partials.date') <!-- Bagian ini akan ada di atas -->
                    </div>
                    <strong class="text-dark" style="margin-left: 10px; padding-bottom: 10px; padding-top: 5px">Welcome,
                        {{ Auth::user()->name }}!</strong>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('dashboard.*') ? 'active' : '' }}" aria-current="page"
                            href="{{ route('dashboard.index') }}">
                            <span data-feather="home" class="align-text-bottom"></span>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('positions.*') ? 'active' : '' }}"
                            href="{{ route('positions.index') }}">
                            <span data-feather="tag" class="align-text-bottom"></span>
                            Jabatan / Posisi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('employees.*') ? 'active' : '' }}"
                            href="{{ route('employees.index') }}">
                            <span data-feather="users" class="align-text-bottom"></span>
                            Karyawan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('holidays.*') ? 'active' : '' }}"
                            href="{{ route('holidays.index') }}">
                            <span data-feather="users" class="align-text-bottom"></span>
                            Hari Libur
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('holidays.*') ? 'active' : '' }}"
                        href="{{ route('holidays.index') }}">
                        <span data-feather="calendar" class="align-text-bottom"></span>
                        Hari Libur
                    </a>
                </li> --}}
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('attendances.*') ? 'active' : '' }}"
                            href="{{ route('attendances.index') }}">
                            <span data-feather="clipboard" class="align-text-bottom"></span>
                            Absensi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('presences.*') ? 'active' : '' }}"
                            href="{{ route('presences.index') }}">
                            <span data-feather="clipboard" class="align-text-bottom"></span>
                            Data Kehadiran
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('master.*') ? 'active' : '' }}"
                            href="{{ route('master.index') }}">
                            <span data-feather="tag" class="align-text-bottom"></span>
                            Henkaten Board
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('problem.*') ? 'active' : '' }}"
                            href="{{ route('problem.index') }}">
                            <span data-feather="tag" class="align-text-bottom"></span>
                            Problems
                        </a>
                    </li>
                @else
                    <!-- Hanya untuk user -->
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home.*') ? 'active' : '' }}"
                            href="{{ route('home.index') }}">
                            <span data-feather="home" class="align-text-bottom"></span>
                            Beranda
                        </a>
                    </li>
                @endif
            </ul>

            <form action="{{ route('auth.logout') }}" method="post"
                onsubmit="return confirm('Apakah anda yakin ingin keluar?')">
                @method('DELETE')
                @csrf
                <button class="w-full mt-4 mb-5 d-block bg-transparent border-0 fw-bold text-danger px-3">Keluar</button>
            </form>
        </div>
        <footer class="mt-auto">
            <div class="text-center text-muted">
                &copy; {{ date('Y') }} PT Sugity Creatives. All rights reserved.
            </div>
        </footer>
    </nav>
@endif

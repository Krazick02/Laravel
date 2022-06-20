<header>
    {{-- <div class="container flex flex-row">
        <div class="title">
            Crazy courses
        </div>
        <nav class="grid grid-cols-4 gap-4 d-inline-flex mt-2 mt-md-0 ms-md-auto">
            <a href="{{ route('home') }}" class="me-3 py-2{{ request()->routeIs('home') ? 'active' : '' }}">
                <div class="rounded-lg justify-items-center {{ request()->routeIs('home') ? 'bg-slate-600' : 'bg-slate-300' }}">
                    Home</div>
            </a>
            <a href="{{ route('cursos.index') }}" class="{{ request()->routeIs('cursos.*') ? 'active' : '' }}">
                <div class="rounded-lg justify-center {{ request()->routeIs('curso.*') ? 'bg-slate-600' : 'bg-slate-300' }}">
                    Courses</div>
            </a>
            <a href="{{ route('us') }}" class="{{ request()->routeIs('us') ? 'active' : '' }}">
                <div class="rounded-lg justify-center {{ request()->routeIs('us') ? 'bg-slate-600' : 'bg-slate-300' }}">Us
                </div>
            </a>
            <a href="{{ route('contactUs.index') }}" class="{{ request()->routeIs('contactUs.index') ? 'active' : '' }}">
                <div
                    class="rounded-lg justify-center {{ request()->routeIs('contactUs.index') ? 'bg-slate-600' : 'bg-slate-300' }}">
                    Contact Us</div>
            </a>
        </nav>
    </div> --}}

    <nav class="bg-gray-800 py-6 relative">
        <div class="container">
            <h1>Crazy Courses</h1>
            <div>
                <a href="{{ route('home') }}" class="text-white {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                <a href="{{ route('cursos.index') }}" class="text-white {{ request()->routeIs('cursos.*') ? 'active' : '' }}">Courses</a>
                <a href="{{ route('us') }}" class="text-white {{ request()->routeIs('us') ? 'active' : '' }}">us</a>
                <a href="{{ route('contactUs.index') }}" class="text-white {{ request()->routeIs('contactUs.index') ? 'active' : '' }}">Contact Us</a>
            </div>
        </div>
    </nav>
</header>

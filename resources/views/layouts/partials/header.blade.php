<header>
    <h1>Crazy Courses</h1>
    <nav>
        <ul>
            <li><a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : ''}}">Home</a>
            </li>
            <li><a href="{{route('cursos.index')}}" class="{{request()->routeIs('cursos.*') ? 'active' : ''}}">Courses</a>
            </li>
            <li><a href="{{route('us')}}" class="{{request()->routeIs('us') ? 'active' : ''}}" >Us</a>
            </li>
            <li><a href="{{route('contactUs.index')}}" class="{{request()->routeIs('contactUs.index') ? 'active' : ''}}" >Contact Us</a>
            </li>
        </ul>
    </nav>
</header>

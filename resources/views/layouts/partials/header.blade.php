<header>
    <h1 class="bg-red">Crazy Courses</h1>
    <div class="flex justify-center flex-row columns-4">

        <div class="bg-blue-200">
            <a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : ''}}">Home</a>
        </div>
        <div class="bg-blue-400">
            <a href="{{route('cursos.index')}}" class="{{request()->routeIs('cursos.*') ? 'active' : ''}}">Courses</a>
        </div>
        <div class="bg-blue-600">
           <a href="{{route('us')}}" class="{{request()->routeIs('us') ? 'active' : ''}}" >Us</a>
        </div>
        <div class="bg-blue-800">
           <a href="{{route('contactUs.index')}}" class="{{request()->routeIs('contactUs.index') ? 'active' : ''}}" >Contact Us</a>
        </div>
    </div>
</header>

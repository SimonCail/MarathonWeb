<!-- resources/views/components/nav-bar.blade.php -->
<div class="menu-container">
    <div class="logo-header">
        <img src="{{ Vite::asset('resources/images/Logo-maraton.svg')}}" alt="Logo">
    </div>
    <nav class="menu-header">
        <ul>
            <li class="menu-item"><a href="{{route('accueil')}}" class="link menu-link">Accueil</a></li>
            <li class="menu-item"><a href="{{route('voyage.index')}}" class="link menu-link">Destinations</a></li>
            <li class="menu-item"><a href="{{ route('users.index') }}" class="link menu-link">profil</a></li>
            <li class="menu-item"><a href="{{route('equipes')}}" class="link menu-link">A propos</a></li>
            <li class="menu-item"><a href="{{route('contact')}}" class="link menu-link">Contact</a></li>
            @auth
            <li class="menu-item"><a href="{{route('voyage.create')}}" class="link menu-link">Créer un voyage</a></li>
            @endauth
        </ul>
    </nav>
    @auth
        <a href="{{route('users.show', ['user' => Auth::user()])}}">
            {{Auth::user()->name}}
        </a>
        <div class="btn-header">
            <a class="btn btn-stroke-brown" href="{{route("logout")}}"
               onclick="document.getElementById('logout').submit(); return false;">Déconnexion</a>
            <form id="logout" action="{{route("logout")}}" method="post">
                @csrf
            </form>
        </div>
    @else
        <div class="btn-header">
            @if(Route::currentRouteName() != 'login')
                <a href="{{route("login")}}" class="btn btn-stroke-brown">Connexion</a>
            @endif
        </div>
    @endauth
</div>

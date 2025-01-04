<x-app>
    <div class="users-list-container">
    <div class="titre-users">
        <h1>Liste des utilisateurs</h1>
    </div>
    <ul class="user-list">
        @foreach($users as $user)
            <li>
                <img src="{{ $user->avatar }}" alt="Avatar de {{ $user->name }}">
                <span>{{ $user->name }}</span>
                <a href="{{ route('users.show', $user->id) }}" class="btn btn-info">Voir</a>
            </li>
        @endforeach
    </ul>
    </div>

    
</x-app>

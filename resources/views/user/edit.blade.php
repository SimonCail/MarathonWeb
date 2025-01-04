<!-- resources/views/user/edit.blade.php -->
<x-app>
<h1>Modifier le profil de {{ $user->name }}</h1>

<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Nom</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" required>
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}" required>
    </div>

    <div class="form-group">
        <label for="avatar">Avatar URL</label>
        <input type="text" name="avatar" id="avatar" class="form-control" value="{{ $user->avatar }}" required>
    </div>

    <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
</form>
</x-app>

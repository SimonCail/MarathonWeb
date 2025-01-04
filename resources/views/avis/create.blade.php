<!-- resources/views/avis/create.blade.php -->
<x-app>
    <div class="form-container">
        <p class="message">Creation d'un avis</p>
        <form action="{{ route('avis.store', ['voyage' => $voyage, 'user' => $user]) }}" method="POST">
            @csrf
            <ul>
                <li>
                    <label for="contenu">Contenu</label>
                    <input type="text" id="contenu" name="contenu" required>
                </li>
            </ul>
            <button type="submit">Créer</button>
        </form>
    </div>
</x-app>

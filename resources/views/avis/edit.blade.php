<!-- resources/views/avis/edit.blade.php -->
<x-app>
    <div class="form-container">
        <p class="message">Modification d'un commentaire</p>
        <form action="{{ route('avis.update', ['voyage' => $voyage, 'avis' => $avis]) }}" method="POST">
            @csrf
            @method('PUT')
            <ul>
                <li>
                    <label for="contenu">Commentaire</label>
                    <input type="text" id="contenu" name="contenu" value="{{ $avis->contenu }}" required>
                </li>
            </ul>
            <button type="submit">Mettre à jour</button>
        </form>
    </div>
</x-app>

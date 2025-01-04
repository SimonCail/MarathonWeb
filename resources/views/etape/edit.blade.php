<x-app>
    <div class="titre-modif-etape">
        <h1>Modification de l'Étape {{$etape->titre}} </h1>
    </div>
    <form class="form-etape-edit" method="POST" action="{{ route('etape.update', $etape->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="titre">Nom de l'étape : </label>
            <input type="text" id="titre" name="titre" value="{{ $etape->titre }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description : </label>
            <textarea id="description" name="description" required>{{ $etape->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="resume">Résumé : </label>
            <textarea id="resume" name="resume" required>{{ $etape->resume }}</textarea>
        </div>
        <div class="form-group">
            <label for="media_url">URL du média : </label>
            <input type="url" id="media_url" name="media_url" value="{{ $etape->media_url }}" required>
        </div>
        <div class="form-group">
            <label for="debut">Date de début : </label>
            <input type="date" id="debut" name="debut" value="{{ $etape->debut }}" required>
        </div>

        <div class="form-group">
            <label for="fin">Date de fin : </label>
            <input type="date" id="fin" name="fin" value="{{ $etape->fin }}" required>
        </div>


        <div class="submit-section">
            <button type="submit">Mettre à jour l'étape</button>
        </div>
    </form>
</x-app>

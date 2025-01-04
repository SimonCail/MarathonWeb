<x-app>
    <div class="titre-modif-etape">
        <h1>Création d'une étape</h1>
    </div>
    <form class="form-voyage-edit" action="{{ route('etape.store', ['voyage_id' => $voyage->id]) }}" method="POST">
        @csrf
        <!-- Titre -->
        <div class="form-group">
            <label for="titre">Titre de l'étape</label>
            <textarea class="voyage-text-area-edit" name="titre" id="titre" placeholder="Titre..." required></textarea>
        </div>

        <!-- Description -->
        <div class="form-group">
            <label for="description">Décris l'étape</label>
            <textarea class="voyage-text-area-edit" name="description" id="description" placeholder="Décris l'étape..." required></textarea>
        </div>

        <!-- Résumé -->
        <div class="form-group">
            <label for="resume">Résumé</label>
            <textarea class="voyage-text-area-edit" name="resume" id="resume" placeholder="Résumé..." required></textarea>
        </div>

        <!-- URL du média -->
        <div class="form-group">
            <label for="media_url">URL du média</label>
            <input class="voyage-text-area-edit" type="url" name="media_url" id="media_url" placeholder="URL du média...">
        </div>

        <!-- Début -->
        <div class="form-group">
            <label for="debut">Début</label>
            <input class="voyage-text-area-edit" type="datetime-local" name="debut" id="debut" required>
        </div>

        <!-- Fin -->
        <div class="form-group">
            <label for="fin">Fin</label>
            <input class="voyage-text-area-edit" type="datetime-local" name="fin" id="fin" required>
        </div>
        <!-- Bouton d'envoi -->
        <div class="submit-section">
            <button type="submit">Ajouter l'étape</button>
        </div>
    </form>

</x-app>

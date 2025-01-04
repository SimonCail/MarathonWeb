<x-app>
    <div class="titre-modif-voyage">
        <h1>Modification du Voyage {{$voyage->titre}} </h1>
    </div>
    <form class="form-voyage-edit" action="{{ route('voyage.update', $voyage) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Section image -->
        <div class="main-image-section">
            <label for="visuel" class="visuel-label">
                <div class="image-placeholder">
                    <span>+</span>
                </div>
            </label>
            <input class="voyage-text-area-edit" type="file" name="visuel" id="visuel" style="display: none;">
        </div>

        <!-- Titre -->
        <div class="form-group">
            <label for="titre">Titre</label>
            <textarea class="voyage-text-area-edit" name="titre" id="titre" placeholder="Titre...">{{ $voyage->titre }}</textarea>
        </div>

        <!-- Description -->
        <div class="form-group">
            <label for="description">Décris ton voyage</label>
            <textarea class="voyage-text-area-edit" name="description" id="description" placeholder="Décris ton voyage...">{{ $voyage->description }}</textarea>
        </div>

        <!-- Résumé -->
        <div class="form-group">
            <label for="resume">Résumé</label>
            <textarea class="voyage-text-area-edit" name="resume" id="resume" placeholder="Résumé...">{{ $voyage->resume }}</textarea>
        </div>

        <!-- Continents -->
        <div class="continents">
            <label class="continent-radio">
                <input type="radio" name="continent" id="continent_afrique" value="Afrique" {{ $voyage->continent === 'Afrique' ? 'checked' : '' }}>
                Afrique
            </label>
            <label class="continent-radio">
                <input type="radio" name="continent" id="continent_asie" value="Asie" {{ $voyage->continent === 'Asie' ? 'checked' : '' }}>
                Asie
            </label>
            <label class="continent-radio">
                <input type="radio" name="continent" id="continent_europe" value="Europe" {{ $voyage->continent === 'Europe' ? 'checked' : '' }}>
                Europe
            </label>
            <label class="continent-radio">
                <input type="radio" name="continent" id="continent_amerique" value="Amérique" {{ $voyage->continent === 'Amérique' ? 'checked' : '' }}>
                Amérique
            </label>
            <label class="continent-radio">
                <input type="radio" name="continent" id="continent_oceanie" value="Océanie" {{ $voyage->continent === 'Océanie' ? 'checked' : '' }}>
                Océanie
            </label>
        </div>

        <!-- Public -->
        <div class="public-section">
            <input type="checkbox" name="public" id="public" {{ $voyage->public ? 'checked' : '' }}>
            <label for="public">Public</label>
        </div>

        <!-- Bouton d'envoi -->
        <div class="submit-section">
            <button type="submit">Modifier le voyage</button>
        </div>
    </form>
</x-app>

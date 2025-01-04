<!-- resources/views/errors/404.blade.php -->
<x-app title="403">
    <main class="error-page">
        <div class="error-message">
            <h1>Erreur 403</h1>
            <p>Vous n'avez pas l'autorisation d'accéder à cette page.</p>
            <a href="{{ route('accueil') }}" class="btn">Retour à l'accueil</a>
            <div class="illustration">
                <svg width="200" height="200" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z" fill="#FF8C00"/>
                </svg>
            </div>
        </div>
    </main>
</x-app>

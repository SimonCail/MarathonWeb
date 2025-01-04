<!-- Updated login.blade.php -->
<x-app>
    <div class="login-page">
        <div class="login-container">
            <div class="login-form">
                <h1 class="title">CONNEXION</h1>
                <p class="login-desc">Veuillez entrer vos informations pour vous connecter.</p>

                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Ex: lola.lejeune@gmail.com" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" id="password" name="password" placeholder="Mot de passe" required>
                    </div>

                    <div class="form-buttons">
                        <button type="reset" class="btn btn-secondary">Annuler</button>
                        <button type="submit" class="btn btn-primary">Se connecter</button>
                    </div>
                </form>
                <p class="form-link">Pas encore inscrit? <a href="{{ route('register') }}">Inscrivez-vous</a></p>
            </div>
        </div>
        <img class="img-shape" src="{{ Vite::asset('resources/images/img-shape.png')}}" alt="">
    </div>
</x-app>

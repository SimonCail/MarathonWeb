<!-- Updated register.blade.php -->
<x-app>
    <div class="register-page">
        <div class="register-container">
            <div class="register-form">
                <h1 class="title">INSCRIPTION</h1>
                <p class="register-desc">Veuillez entrer vos informations pour vous inscrire.</p>

                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" id="name" name="name" placeholder="Ex: Lola Lejeune" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Ex: lola.lejeune@gmail.com" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" id="password" name="password" placeholder="Mot de passe" required>
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Confirmer le mot de passe</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirmer le mot de passe" required>
                    </div>

                    <div class="form-buttons">
                        <button type="reset" class="btn btn-secondary">Annuler</button>
                        <button type="submit" class="btn btn-primary">S'inscrire</button>
                    </div>
                </form>
                <p class="form-link">Déjà enregistré? <a href="{{ route('login') }}">Connectez-vous</a></p>
            </div>
        </div>
        <img class="img-shape" src="{{ Vite::asset('resources/images/img-shape.png')}}" alt="">
    </div>
</x-app>

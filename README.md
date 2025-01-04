# 🌍 Carnet de Voyage en Ligne

## ✨ Description du Projet

Bienvenue sur le **Carnet de Voyage en Ligne**, une plateforme interactive qui centralise et partage les expériences de voyage en van. Ce projet, conçu en moins de 36 heures, a été réalisé par une équipe multidisciplinaire de 8 membres :

- 🖥️ **4 étudiants INFO**
- 🎨 **4 étudiants MMI** (Métiers du Multimédia et de l'Internet)

🎯 **Objectif** : Fournir une solution fonctionnelle permettant aux utilisateurs de documenter leurs aventures et d'inspirer d'autres passionnés de voyages.

---

## 🚀 Fonctionnalités

- 📚 **Partage d'expériences** : Créez des carnets de voyage, ajoutez des photos et partagez vos itinéraires.
- 🔍 **Exploration** : Découvrez des destinations inspirantes à travers les carnets d'autres utilisateurs.
- 👤 **Gestion de profil** : Inscrivez-vous, connectez-vous et personnalisez votre profil.
- 🗺️ **Cartographie interactive** : Visualisez vos trajets sur une carte intégrée.
- 💡 **Interface intuitive** : Design ergonomique et adapté à tous les supports.

---

## 🛠️ Technologies Utilisées

- **Backend** : PHP Laravel
- **Frontend** : HTML, CSS, JavaScript
- **Base de Données** : MySQL
- **Outils** : Composer, npm, GitLab CI/CD

---

## 🖥️ Installation et Lancement en Local

Pour exécuter le projet sur votre machine locale, suivez ces étapes :

1. **Cloner le dépôt** :
   ```bash
   git clone https://gitlab.univ-artois.fr/votre-projet.git
   cd votre-projet
   ```
   
2. **Installer les dépendances** :

    ```bash
    composer install
    npm install
    ```
    
3. **Configurer l'environnement**:

   ```bash
   cp .env.example .env
   ```

Modifiez les variables suivantes dans le fichier `.env` :

   ```bash
   DB_CONNECTION=sqlite
   # DB_DATABASE=/chemin/vers/votre/base.sqlite
   ```

4. **Générer une clé d'application**:

   ```bash
   php artisan key:generate
   ```

5. **Générer une clé d'application**:

   ```bash
   php artisan migrate
   ```

6. **Générer une clé d'application**:

   ```bash
   php artisan serve
   ```

🌐 Accédez à l'application : http://localhost:8000

---

## 👥 Équipe
### Développeurs 🖥️

- Cornet Benjamin
- Morel Mathias
- Dalmasso Mathéo
- Caillieret Simon

### Étudiants MMI 🎨

- Lestriez Jade
- Deltour Léa
- Peuvrel Noah
- Lepers Sharleen 

## 📜 Licence

Ce projet est sous licence MIT.

💌 Merci pour votre intérêt pour notre projet ! N'hésitez pas à contribuer ou à nous partager vos retours. 🌟





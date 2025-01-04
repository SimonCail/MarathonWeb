<x-app>
    <div class="creer-div-container">
    <div class="titre-modif-voyage">
        <h1>Création du Voyage </h1>
    </div>
    <form class="form-voyage-edit" action="{{ route('voyage.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="left-form">
            <!-- Section image -->
            <div class="main-image-section">
                <label for="visuel" class="visuel-label">
                    <div class="image-placeholder">
                        <span>+</span>
                    </div>
                </label>
                <input class="voyage-text-area-edit" type="file" name="visuel" id="visuel" style="display: none;">
            </div>
            <!-- Continents -->
            <div class="continents">
                <label class="continent-radio">
                    <input type="radio" name="continent" id="continent_afrique" value="Afrique">
                    
                </label>
                <img id='afrique' src="{{ Vite::asset('resources/images/afrique.png')}}" alt="Afrique">
                

                <label class="continent-radio">
                    <input type="radio" name="continent" id="continent_asie" value="Asie">
                </label>
                <img id="asie" src="{{ Vite::asset('resources/images/asie.png')}}" alt="Asie">
                
                <label class="continent-radio">
                    <input type="radio" name="continent" id="continent_europe" value="Europe">
                </label>
                <img id="europe" src="{{ Vite::asset('resources/images/europe.png')}}" alt="Europe">
    
                <label class="continent-radio">
                    <input type="radio" name="continent" id="continent_amerique" value="Amérique">
                </label>
                <img id="amerique" src="{{ Vite::asset('resources/images/amerique.png')}}" alt="Amérique">
    
                <label class="continent-radio">
                    <input type="radio" name="continent" id="continent_oceanie" value="Océanie">
                </label>
                <img id="oceanie" src="{{ Vite::asset('resources/images/oceanie.png')}}" alt="Océanie">
            </div>
        </div>

        <div class="right-form">
            <!-- Titre -->
            <div class="form-group">
                <label for="titre">Titre</label>
                <textarea class="voyage-text-area-edit" name="titre" id="titre" placeholder="Titre..."></textarea>
            </div>

            <!-- Description -->
            <div class="form-group">
                <label for="description">Décris ton voyage</label>
                <textarea class="voyage-text-area-edit" name="description" id="description" placeholder="Décris ton voyage..."></textarea>
            </div>

            <!-- Résumé -->
            <div class="form-group">
                <label for="resume">Résumé</label>
                <textarea class="voyage-text-area-edit" name="resume" id="resume" placeholder="Résumé..."></textarea>
            </div>
            
            <!-- Public -->
            <div class="public-section">
                <label class="checkbox-container">
                    <input type="checkbox" name="public" id="public">
                    <span class="checkmark"></span>
                </label>
                <label for="public">Public</label>
            </div>

            <!-- Bouton d'envoi -->
            <div class="submit-section">
                <button type="submit">Créer le voyage</button>
            </div>
        </div>
    </form>
    </div>

    <script>
        
        let continents = ["asie", "oceanie", "afrique", "amerique", "europe"]
        for(let continent of continents) {
           
            document.getElementById(continent).addEventListener("click", function()  {
                let sz = this.src.lastIndexOf("/") +1
                console.log(this.src.substring(0,sz))
                if(this.src.includes("orange")) {
                this.src=this.src.substring(0, sz) + continent + ".png"
                } else {
                    
                    for(let c of continents) {
                        let tmp = document.getElementById(c)
                        tmp.src = tmp.src.substring(0, sz) + c + ".png"
                    }    
                    this.src=this.src.substring(0, sz) + continent+ "-orange.png"

                }
           let radio = document.getElementById("continent_"+continent)
           radio.checked = 1 - radio.checked
            

        })
    }
        </script>
</x-app>

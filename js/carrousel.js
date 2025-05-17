(function(){
    console.log("caroussel.js");

    let hero__radio__input = document.querySelectorAll(".hero__radio__input");
    let hero__caroussels = document.querySelectorAll(".hero__carrousel");
    let hero__animation = document.querySelectorAll(".hero__animation");

    console.log("hero__radio__input.length : ", hero__radio__input.length);

    let indexActuel = 0;
    const total = hero__radio__input.length;

    function changementAutomatique(index){
        hero__radio__input[index].checked = true;

        // Supprime "active" de toutes les caroussels
        hero__caroussels.forEach(c => c.classList.remove("active"));

        // Ajoute "active" au carrousel correspondant
        if (hero__caroussels[index]) {
            hero__caroussels[index].classList.add("active");
        }

        changementAnimation(index);
    }

    function changementAnimation(index){
        hero__radio__input[index].checked = true;

        // Supprime "active" de toutes les animations
        hero__animation.forEach(c => c.classList.remove("hero__animation--active"));

        // Ajoute "active" à l'animation correspondante
        if (hero__animation[index]) {
            hero__animation[index].classList.add("hero__animation--active");
        }
    }

    // ✅ Affiche immédiatement le premier carrousel au chargement
    changementAutomatique(indexActuel);

    // Change automatiquement toutes les 5 secondes
    setInterval(() => {
        indexActuel = (indexActuel + 1) % total;
        changementAutomatique(indexActuel);
    }, 5000);

    // Quand l'utilisateur clique sur un bouton radio
    hero__radio__input.forEach((radio, index) => {
        radio.addEventListener('change', () => {
            indexActuel = index;
            changementAutomatique(index);
        });
    });

    function parcourir_caroussels(){
        hero__caroussels.forEach(element => {
            element.classList.remove("hero__caroussels--active");
        });
    }

    function parcourir_animation(){
        hero__animation.forEach(element => {
            element.classList.remove("hero__animation--active");
        });
    }
})();

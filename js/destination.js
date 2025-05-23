(function() {
    console.log("destination.js");
 
    // URL du domaine (site)
    const domaine = window.location.href;
 
    // Fonction pour gérer le bouton de catégorie
    function parcourir_bouton() {
        const categorie__ul__li = document.querySelectorAll(".categorie__ul__li");
 
        // Ajouter un écouteur d'événement à chaque bouton
        categorie__ul__li.forEach(elm => {
            elm.addEventListener('mousedown', (e) => {
                // Empêche l'événement de propagation si nécessaire
                e.preventDefault();
 
                // Retirer la classe 'active' de tous les boutons
                categorie__ul__li.forEach(button => {
                    button.classList.remove('active');
                });
 
                // Ajouter la classe 'active' au bouton cliqué
                e.target.classList.add('active');
 
                // Logique de filtrage selon la catégorie ou une action spécifique
                const categoryId = e.target.dataset.categoryId; // Utiliser 'categoryId' de 'data-category-id'
                console.log(`Catégorie cliquée: ${categoryId}`);
 
                // Charger les articles pour la catégorie sélectionnée
                fetchArticles(categoryId);
            });
        });
    }
 
    // Fonction pour récupérer les articles en fonction de la catégorie
    function fetchArticles(categoryId) {
        const apiUrl = `${domaine}/wp-json/wp/v2/posts?categories=${categoryId}`;
        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                const destinationList = document.querySelector('.destination__list');
                destinationList.innerHTML = ''; // Réinitialiser la liste des destinations
 
                // Si des articles sont trouvés
                if (data.length > 0) {
                    data.forEach(article => {
                        const articleElement = document.createElement('div');
                        articleElement.classList.add('destination__item');
 
                        const titleWrapper = document.createElement('div');
                        titleWrapper.classList.add('destination__title-wrapper'); // Wrapper pour le titre et le bouton
 
                        const title = document.createElement('h3');
                        title.textContent = article.title.rendered;
                        title.classList.add('destination__titre');
 
                        const toggleButton = document.createElement('button');
                        toggleButton.textContent = 'Afficher plus';
                        toggleButton.classList.add('destination__toggle-button');
 
                        const paragraph = document.createElement('div');
                        paragraph.classList.add('destination__texte');
                        paragraph.innerHTML = article.excerpt.rendered;
                        paragraph.style.display = 'none';
 
                        const link = document.createElement('a');
                        link.href = article.link;
                        link.textContent = 'Lire plus';
 
                        titleWrapper.appendChild(title);
                        titleWrapper.appendChild(toggleButton);
                        articleElement.appendChild(titleWrapper);
                        articleElement.appendChild(paragraph);
                        articleElement.appendChild(link);
                        destinationList.appendChild(articleElement);
 
                        toggleButton.addEventListener('click', () => {
                            const isVisible = paragraph.style.display === 'block';
                            if (isVisible) {
                                paragraph.style.display = 'none';
                                toggleButton.textContent = 'Afficher plus';
                            } else {
                                paragraph.style.display = 'block';
                                toggleButton.textContent = 'Masquer';
                            }
                        });
                    });
                } else {
                    // Si aucun article n'est trouvé, ... un message
                    destinationList.innerHTML = '<p>Aucun article trouvé pour cette catégorie.</p>';
                }
            })
            .catch(error => console.error('Erreur lors de la récupération des articles:', error));
    }
 
    // Charger les articles pour la catégorie initiale (par exemple, ID 3)
    const defaultCategoryId = 3; // Remplacez par l'ID de votre catégorie par défaut
    fetchArticles(defaultCategoryId);
 
    // Activer les événements de clic sur les boutons de catégories
    parcourir_bouton();
})();

document.addEventListener('DOMContentLoaded', () => {
  const paysList = [
    "France", "États-Unis", "Canada", "Argentine", "Chili",
    "Belgique", "Maroc", "Mexique", "Japon", "Italie", "Islande",
    "Chine", "Grèce", "Suisse"
  ];

  const menuContainer = document.getElementById('menu-pays');
  const destinationsContainer = document.getElementById('destination');

  // Création du menu des pays
  paysList.forEach(pays => {
    const button = document.createElement('button');
    button.textContent = pays;
    button.classList.add('btn-pays');
    button.dataset.pays = pays;
    button.addEventListener('click', () => {
      fetchDestinations(pays);
    });
    menuContainer.appendChild(button);
  });

  // Chargement initial : France
  fetchDestinations("France");

  function fetchDestinations(pays) {
    const url = `/wp-json/wp/v2/posts?search=${encodeURIComponent(pays)}`;
    fetch(url)
      .then(response => response.json())
      .then(data => {
        afficherDestinations(data);
      })
      .catch(error => {
        destinationsContainer.innerHTML = `<p>Erreur lors du chargement des destinations.</p>`;
        console.error("Erreur API:", error);
      });
  }

  function afficherDestinations(posts) {
    destinationsContainer.innerHTML = '';
    if (posts.length === 0) {
      destinationsContainer.innerHTML = `<p>Aucune destination trouvée pour ce pays.</p>`;
      return;
    }

    posts.forEach(post => {
      const container = document.createElement('div');
      container.classList.add('destination');

      const titre = document.createElement('h3');
      titre.classList.add('accordion-title');
      titre.innerHTML = post.title.rendered;

      const contenu = document.createElement('div');
      contenu.classList.add('accordion-content');
      contenu.innerHTML = post.content.rendered;

      titre.addEventListener('click', () => {
        contenu.classList.toggle('open');
      });

      container.appendChild(titre);
      container.appendChild(contenu);
      destinationsContainer.appendChild(container);
    });
  }
});
(function() {
    console.log("destination.js");

    const categoryId = 3; // Replace with the desired category ID
    const domaine = window.location.href;
    const apiUrl = `${domaine}/wp-json/wp/v2/posts?categories=${categoryId}`;
    console.log(apiUrl);

    // Function to handle category button clicks
    function parcourir_bouton() {
        const categorie__ul__li = document.querySelectorAll(".categorie__ul__li");

        categorie__ul__li.forEach(elm => {
            elm.addEventListener('mousedown', (e) => {
                e.preventDefault(); // Prevent default behavior, like text selection

                // Remove "active" class from all buttons
                categorie__ul__li.forEach(button => {
                    button.classList.remove('active');
                });

                // Add "active" class to the clicked button
                e.target.classList.add('active');

                // Get the category ID from the clicked button
                const categorieId = e.target.dataset.categoryId;
                console.log(`Catégorie cliquée: ${categorieId}`);

                // Fetch and display articles for the selected category
                fetchArticles(categorieId);
            });
        });
    }

    // Function to fetch articles based on the category ID
    function fetchArticles(categoryId) {
        const apiUrl = `${domaine}/wp-json/wp/v2/posts?categories=${categoryId}`;
        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                const destinationList = document.querySelector('.destination__list');
                destinationList.innerHTML = ''; // Clear the list before adding new articles

                data.forEach(article => {
                    const articleElement = document.createElement('div');
                    articleElement.innerHTML = `
                        <h3>${article.title.rendered}</h3>
                        <p>${article.excerpt.rendered}</p>
                        <a href="${article.link}">Lire plus</a>
                    `;
                    destinationList.appendChild(articleElement);
                });
            })
            .catch(error => console.error('Erreur lors de la récupération des articles:', error));
    }

    // Load articles for the default category on page load
    fetchArticles(categoryId);

    // Enable the click event on category buttons
    parcourir_bouton();
})();

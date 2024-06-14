///////////////////////////////////////////////////////
// Effet fade in au scroll de la page
///////////////////////////////////////////////////////

document.addEventListener('DOMContentLoaded', function() {
  //on écoute l'événement qui se déclenche lorsque le navigateur a fini de charger le DOM
  const sections = document.querySelectorAll('.banner, .story, #studio, .oscars');
  // sélectionne les sections de la page que le code va rendre visibles lorsqu'elles apparaissent dans la fenêtre du navigateur


  function checkVisibility() {
    // définit une fonction nommée checkVisibility, qui sera appelée à chaque fois que la page est défilée pour vérifier la visibilité des sections

    sections.forEach(section => {
      //On boucle sur chaque section sélectionnée

      const rect = section.getBoundingClientRect();
      // on obtient les dimensions et la position d'une section par rapport à la fenêtre du navigateur
      const windowHeight = window.innerHeight;
      // On décale le point de visibilité vers le bas pour retarder l'apparition en ajoutant offset (sinon la section story apparait en même temps que la bannière d'accueil)
      const offset = windowHeight * 0.1; 
      // la classe visible ne sera ajoutée que lorsque la section sera presque entièrement visible à l'écran, plutôt que dès qu'elle commencera à être visible
     
      if (rect.top < windowHeight - offset && rect.bottom > offset) {
        //on vérifie si la section est visible : si le bord supérieur de la section est à une distance inférieure à windowHeight - offset du haut de la fenêtre du navigateur ET si le bord inférieur de la section est à une distance supérieure à offset du haut de la fenêtre du navigateur
         section.classList.add('visible');
         //Si la section est visible, on ajoute la classe CSS visible à la section
      }
    });
  }

  window.addEventListener('scroll', checkVisibility);
  //on ajoute un écouteur d'év. pour le défilement de la page
  //On appelle la fonction checkVisibility pour vérifier la visibilité des sections
  checkVisibility(); // Initial check
  //On appelle la fonction checkVisibility une première fois pour vérifier si des sections sont visibles dès que la page est chargée (vérification initiale)
});




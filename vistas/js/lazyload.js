function onScrollEvent(entries, observer) {
    entries.forEach(function(entry) {
        if (entry.isIntersecting) {
            var attributes = entry.target.attributes;
            var src = attributes['src'].textContent;
            entry.target.src = src;
            entry.target.classList.add('visible');
        }
    });
}

//Utilizamos como objetivos todos los
// elementos que tengan la clase lazyLoad,
// que vimos en el HTML de ejemplo.
var targets = document.querySelectorAll('.lazyload');

// Instanciamos un nuevo observador.
var observer = new IntersectionObserver(onScrollEvent);

// Y se lo aplicamos a cada una de las
// imágenes.
targets.forEach(function(entry) {
    observer.observe(entry);
});

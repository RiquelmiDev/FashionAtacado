// JavaScript para fazer as estrelas funcionarem em várias imagens
// Vamos associar um identificador único (data-id) para cada grupo de estrelas e aplicar o comportamento de classificação de estrelas de forma independente.

const allRatings = document.querySelectorAll('.rating');

// Função para definir o valor de classificação (número de estrelas selecionadas) para um grupo de estrelas específico
function setRating(ratingContainer, ratingValue) {
    const stars = ratingContainer.querySelectorAll('input[type="radio"]');

    for (let i = 0; i < stars.length; i++) {
        if (i < ratingValue) {
            stars[i].checked = true;
        } else {
            stars[i].checked = false;
        }
    }
}

// Função para adicionar o evento de clique para cada grupo de estrelas
function addClickEvent(ratingContainer) {
    const stars = ratingContainer.querySelectorAll('input[type="radio"]');
    
    for (let i = 0; i < stars.length; i++) {
        stars[i].addEventListener('click', function() {
            const ratingValue = parseInt(this.value);
            setRating(ratingContainer, ratingValue);
        });
    }
}

// Configurar o comportamento das estrelas para cada grupo de estrelas na página
for (let i = 0; i < allRatings.length; i++) {
    const ratingId = allRatings[i].getAttribute('data-id');
    addClickEvent(allRatings[i]);

    // Obter o valor inicial da classificação (caso já tenha sido selecionado)
    const initialValue = parseInt(allRatings[i].querySelector('input[type="radio"]:checked').value);
    setRating(allRatings[i], initialValue);
}



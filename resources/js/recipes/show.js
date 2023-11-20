import Swal from 'sweetalert2';

document.addEventListener('DOMContentLoaded', function() {
    // Pobierz dane z atrybutu danych
    const missingIngredientsElement = document.getElementById('missing-ingredients');
    const missingIngredientsData = missingIngredientsElement.getAttribute('data-ingredients');
    if (missingIngredientsData) {
        const missingIngredients = JSON.parse(missingIngredientsData);

        // Wykorzystaj dane
        if (missingIngredients) {
            Swal.fire({
                title: 'Brakujące składniki',
                html: generateMissingIngredientsList(missingIngredients),
                icon: 'error',
                confirmButtonText: 'Ok'
            });
        }
    }

    const recipeStatusElement = document.getElementById('recipe-status');
    const isSuccess = recipeStatusElement.getAttribute('data-success') === 'true';
    const usedIngredientsJson = recipeStatusElement.getAttribute('data-used-ingredients');
    if (usedIngredientsJson) {
        const usedIngredients = JSON.parse(usedIngredientsJson);

        if (isSuccess) {
            let ingredientsHtml = usedIngredients.map(ingredient =>
                `${ingredient.name} - ${ingredient.quantity} [${ingredient.unit}]`
            ).join('<br>');

            Swal.fire({
                title: 'Sukces!',
                html: `Przepis został wykonany.<br><br>Użyte składniki:<br>${ingredientsHtml}`,
                icon: 'success',
                confirmButtonText: 'Ok'
            });
        }
    }
});

function generateMissingIngredientsList(ingredients) {
    let html = '<ul>';

    for (const [ingredient, details] of Object.entries(ingredients)) {
        html += `<li>${ingredient} - brakuje ${details.quantity} [${details.unit}]</li>`;
    }

    html += '</ul>';
    return html;
}

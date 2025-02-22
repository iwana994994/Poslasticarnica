
// Funkcija za otvaranje modala
function openModal(productId) {
    var modal = document.getElementById('modal-' + productId); // Na osnovu ID-a proizvoda, otvaramo odgovarajući modal
    modal.style.display = "flex"; // Pokaži modal
}

// Funkcija za zatvaranje modala
function closeModal(productId) {
    var modal = document.getElementById('modal-' + productId); // Na osnovu ID-a proizvoda, zatvaramo modal
    modal.style.display = "none"; // Sakrij modal
}

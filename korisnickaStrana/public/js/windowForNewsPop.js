// Funkcija za otvaranje modala
function openModal(vestiId) {
    var modal = document.getElementById('modal-' + vestiId); // Na osnovu ID-a proizvoda, otvara se odg modal
    modal.style.display = "flex"; // Prikaži modal
}

// Funkcija za zatvaranje modala
function closeModal(vestiId) {
    var modal = document.getElementById('modal-' + vestiId); // Na osnovu ID-a proizvoda, zatvaramo modal
    modal.style.display = "none"; // Sakrij modal
}

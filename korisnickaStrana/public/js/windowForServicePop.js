// Funkcija za otvaranje modala
function openModal(uslugeId) {
    var modal = document.getElementById('modal-' + uslugeId); // Na osnovu ID-a proizvoda, otvara se odg modal
    modal.style.display = "flex"; // Prikaži modal
}

// Funkcija za zatvaranje modala
function closeModal(uslugeId) {
    var modal = document.getElementById('modal-' + uslugeId); // Na osnovu ID-a proizvoda, zatvaramo modal
    modal.style.display = "none"; // Sakrij modal
}

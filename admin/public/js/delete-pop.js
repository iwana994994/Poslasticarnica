// Funkcija za prikazivanje popupa
function deletePop(productId) {
    var currentProductId = document.getElementById('deletePopup' + productId);
    currentProductId.style.display = "flex"; // Prikazujemo popup
   
}

// Funkcija za zatvaranje popupa
function closePopup(productId) {
    var currentProductId = document.getElementById('deletePopup' + productId);
    currentProductId.style.display = "none"; // Zatvaramo popup
}


// Funkcija koja se poziva kada korisnik klikne "Da"
function confirmPopup(productId) {
    //forma koja se salje, njen id treba da se pronadje
    document.getElementById('deleteForm' + productId).submit();
    // Zatvaramo popup prozor
    var currentProductId = document.getElementById('deletePopup' + productId);
    currentProductId.style.display = "none"; // Zatvaranje popupa
}


 


document.addEventListener('DOMContentLoaded', function() {
    document.getElementById("loadDataButton").addEventListener("click", function() {
        var mesec = document.getElementById("mesec").value;
        var godina = document.getElementById("godina").value;

        // Koristimo fetch API za slanje GET zahteva
        fetch(`http://localhost/Poslasticarnica/admin/model/porudzbineMesecModel.php?mesec=${mesec}&godina=${godina}`)
            .then(response => response.text())  // Koristi text() da vidiš ceo odgovor kao tekst
            .then(text => {
                console.log("Odgovor sa servera:", text);  // Loguj ceo odgovor
                try {
                    const data = JSON.parse(text);  // Ručno pokušaj da parsiraš JSON
                    if (data.success) {
                        updateTable(data.data);  // Ažuriranje tabele sa podacima
                    } else {
                        alert("Nema podataka za prikaz.");
                    }
                } catch (error) {
                    console.error("Greška u parsiranju JSON-a:", error);
                    alert("Došlo je do greške u parsiranju odgovora.");
                }
            })
            .catch(error => {
                console.error('Greška u AJAX pozivu:', error);
                alert("Došlo je do greške prilikom učitavanja podataka.");
            });
    });
});

// Funkcija za ažuriranje tabele sa podacima
function updateTable(data) {
    var tableBody = document.querySelector("table tbody");
    tableBody.innerHTML = "";  // Očistiti trenutne redove u tabeli

    // Dodavanje novih redova u tabelu
    data.forEach(function(row) {
        var tr = document.createElement("tr");
        tr.innerHTML = `
            <td>${row.id}</td>
            <td>${row.ime}</td>
            <td>${row.prezime}</td>
            <td>${row.email}</td>
            <td>${row.adresa}</td>
            <td>${row.telefon}</td>
            <td>${row.datum_porudzbine}</td>
            <td>${row.ukupna_cena || 'N/A'}</td>
        `;
        tableBody.appendChild(tr);
    });
}

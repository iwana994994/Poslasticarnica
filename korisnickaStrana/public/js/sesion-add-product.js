document.addEventListener('DOMContentLoaded', () => {
    const dugme = document.querySelector('.shopping2');
    const poruka = document.getElementById('cart-message');

    dugme.addEventListener('click', () => {
        const id = dugme.dataset.id;
        const naziv = dugme.dataset.naziv;
        const cena = dugme.dataset.cena;
        const slika = dugme.dataset.slika;

        fetch('/Poslasticarnica/korisnickaStrana/model/DodajUKorpuModel.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: `product_id=${id}&naziv=${naziv}&cena=${cena}&slika=${slika}`
        })
        .then(response => response.text())
        .then(data => {
            poruka.textContent = "Proizvod dodat u korpu 🧁";
            poruka.style.color = "green";
            setTimeout(() => poruka.textContent = "", 3000);
        })
        .catch(error => {
            poruka.textContent = "Greška prilikom dodavanja u korpu!";
            poruka.style.color = "red";
        });
    });
});
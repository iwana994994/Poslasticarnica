document.addEventListener('DOMContentLoaded', () => {
    const dugmad = document.querySelectorAll('.shopping2'); // sva dugmad
    const poruka = document.getElementById('cart-message');

    dugmad.forEach(dugme => {
        dugme.addEventListener('click', (e) => {
            e.preventDefault(); // sprečava default ponašanje linka
            const poruka = dugme.nextElementSibling; 

            const productBox = dugme.closest('.product-box') || dugme.closest('.product-info');



            const quantityInput = productBox.querySelector('.quantity');
            const kolicina = quantityInput.value;

            const id = dugme.dataset.id;
            const naziv = dugme.dataset.naziv;
            const cena = dugme.dataset.cena;
            const slika = dugme.dataset.slika;

            fetch('/Poslasticarnica/korisnickaStrana/model/DodajUKorpuModel.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
               body: `product_id=${id}&naziv=${naziv}&cena=${cena}&slika=${slika}&kolicina=${kolicina}`

            })
            .then(response => response.text())
            .then(data => {
                poruka.textContent = "Proizvod dodat u korpu 🧁";
                poruka.style.color = "green";
                setTimeout(() => poruka.textContent = "", 50000);
            })
            .catch(error => {
                poruka.textContent = "Greška prilikom dodavanja u korpu!";
                poruka.style.color = "red";
            });
        });
    });
});

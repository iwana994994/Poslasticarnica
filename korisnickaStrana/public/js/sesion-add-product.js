// /korisnickaStrana/public/js/sesion-add-product.js

document.addEventListener("DOMContentLoaded", () => {
    // Sva dugmad "Ubaci u korpu"
    const dugmad = document.querySelectorAll(".shopping2");

    dugmad.forEach((dugme) => {
        dugme.addEventListener("click", (e) => {
            e.preventDefault();

            // Pronađi "kutiju" u kojoj se dugme nalazi
            // 1) lista akcija: .sale-box
            // 2) pojedinačna akcija: .sale-info ili .price-quantity
            const box =
                dugme.closest(".sale-box") ||
                dugme.closest(".sale-info") ||
                dugme.closest(".price-quantity") ||
                document; // poslednja rezerva, da ne bude null

            // Prvo probaj lokalnu poruku
            let poruka = box.querySelector(".cart-message");

            // Ako nema lokalne, probaj globalnu (akcija.php ima id="cart-message")
            if (!poruka) {
                poruka = document.getElementById("cart-message");
            }

            // Nađi količinu u toj kutiji
            const quantityInput = box.querySelector(".quantity");
            const kolicina = quantityInput ? quantityInput.value : 1;

            // Podaci sa dugmeta (data-*)
            const id = dugme.dataset.id;
            const naziv = dugme.dataset.naziv;
            const cena = dugme.dataset.cena;
            const slika = dugme.dataset.slika;

            // Pošalji POST na PHP
            fetch("/Poslasticarnica/korisnickaStrana/model/DodajUKorpuModel.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                },
                body:
                    "product_id=" + encodeURIComponent(id) +
                    "&naziv=" + encodeURIComponent(naziv) +
                    "&cena=" + encodeURIComponent(cena) +
                    "&slika=" + encodeURIComponent(slika) +
                    "&kolicina=" + encodeURIComponent(kolicina),
            })
                .then((r) => r.json())
                .then((data) => {
                    if (!poruka) return;

                    if (data.success) {
                        poruka.textContent = "Proizvod dodat u korpu 🧁";
                        poruka.style.color = "green";
                    } else {
                        poruka.textContent = data.message || "Greška prilikom dodavanja u korpu!";
                        poruka.style.color = "red";
                    }

                    setTimeout(() => {
                        poruka.textContent = "";
                    }, 5000);
                })
                .catch((err) => {
                    if (!poruka) return;
                    poruka.textContent = "Greška prilikom dodavanja u korpu!";
                    poruka.style.color = "red";
                });
        });
    });
});

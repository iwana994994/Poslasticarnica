document.addEventListener("DOMContentLoaded", () => {
  const shipping = 300;
  const quantities = document.querySelectorAll(".quantity");
  const form = document.querySelector(".checkout-form form"); // ❗ Dodaj ovo

  quantities.forEach(input => {
    input.addEventListener("input", () => {
      let totalProducts = 0;

      document.querySelectorAll(".cart-table tbody tr").forEach(row => {
        const price = parseFloat(row.children[2].textContent.replace(",", ""));
        const quantity = parseInt(row.querySelector(".quantity").value);
        const total = price * quantity;

        row.children[4].textContent = total.toFixed(2);
        totalProducts += total;
      });

      const totalToPay = totalProducts > 0 ? totalProducts + shipping : 0;

      document.getElementById("ukupnoProizvoda").textContent = totalProducts.toFixed(2);
      document.getElementById("dostava").textContent = totalProducts > 0 ? shipping : 0;
      document.getElementById("ukupnoPlacanje").textContent = totalToPay.toFixed(2);
    });
  });

  form.addEventListener("submit", (e) => {
    // Pre submit-a ažuriramo hidden input sa stvarnim količinama
    const korpa = [];

    document.querySelectorAll(".cart-table tbody tr").forEach(row => {
      const id = row.dataset.id;
      const naziv = row.children[1].textContent;
      const cena = parseFloat(row.children[2].textContent.replace(",", ""));
      const kolicina = parseInt(row.querySelector(".quantity").value);

      korpa.push({ id, naziv, cena, kolicina });
    });

    form.querySelector("input[name='korpa_podaci']").value = JSON.stringify(korpa);
  });
});

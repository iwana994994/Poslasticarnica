
document.addEventListener("DOMContentLoaded", () => {
  const shipping = 300; // fiksna dostava

  // Selektuj sva polja količine
  const quantities = document.querySelectorAll(".quantity");

  // Dodaj event na svaku količinu
  quantities.forEach(input => {
    input.addEventListener("input", () => {
      let totalProducts = 0;

      // Prođi kroz sve redove u tabeli
      document.querySelectorAll(".cart-table tbody tr").forEach(row => {
        const price = parseFloat(row.children[2].textContent.replace(",", ""));
        const quantity = parseInt(row.querySelector(".quantity").value);
        const total = price * quantity;

        // Ažuriraj ukupno za taj proizvod
        row.children[4].textContent = total.toFixed(2);

        totalProducts += total;
      });

      // Ažuriraj ukupnu sumu i dostavu
      const totalToPay = totalProducts > 0 ? totalProducts + shipping : 0;

    
    });
  });
});


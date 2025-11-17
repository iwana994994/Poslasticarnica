function openTab(evt, tabName) {
    // Sakrij sve tabove
    const tabcontent = document.querySelectorAll(".tabcontent");
    tabcontent.forEach(tc => tc.style.display = "none");

    // Ukloni "active" sa svih dugmadi
    const tablinks = document.querySelectorAll(".tablinks");
    tablinks.forEach(tl => tl.classList.remove("active"));

    // Prikaži izabrani tab
    document.getElementById(tabName).style.display = "block";

    // Dodaj "active" klasu izabranom dugmetu
    evt.currentTarget.classList.add("active");
}


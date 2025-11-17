// charts.js

document.addEventListener('DOMContentLoaded', function () {
    // Podaci iz PHP-a ( na varijable sa PHP-a pomoću data atributa)
    const meseci = JSON.parse(document.getElementById('meseci').dataset.value);
    const prodaja = JSON.parse(document.getElementById('prodaja').dataset.value);

    const naziviKolaca = JSON.parse(document.getElementById('naziviKolaca').dataset.value);
    const kolicineKolaca = JSON.parse(document.getElementById('kolicineKolaca').dataset.value);

const categoryNames = JSON.parse(document.getElementById('categoryNames').dataset.value);
const categoryTotals = JSON.parse(document.getElementById('categoryTotals').dataset.value);


const orderMonths = JSON.parse(document.getElementById('orderMonths').dataset.value);
const orderTotals = JSON.parse(document.getElementById('orderTotals').dataset.value);






    // --- Bar Chart: prodaja po mesecima ---
    new Chart(document.getElementById('barChart'), {
        type: 'bar',
        data: {
            labels: meseci.map(m => "Mesec " + m),
            datasets: [{
                label: 'Prodaja po mesecima',
                data: prodaja,
                backgroundColor: '#36A2EB'
            }]
        },
        options: {
            scales: {
                y: { beginAtZero: true }
            }
        }
    });

    // --- Line Chart: trend prodaje ---
    new Chart(document.getElementById('lineChart'), {
        type: 'line',
        data: {
            labels: meseci.map(m => "Mesec " + m),
            datasets: [{
                label: 'Trend prodaje',
                data: prodaja,
                borderColor: '#FF6384',
                fill: false,
                tension: 0.1
            }]
        },
        options: {
            scales: {
                y: { beginAtZero: true }
            }
        }
    });

    // --- Pie Chart: najprodavaniji kolači ---
    new Chart(document.getElementById('pieChart'), {
        type: 'pie',
        data: {
            labels: naziviKolaca,
            datasets: [{
                data: kolicineKolaca,
                backgroundColor: ['#FF6384','#36A2EB','#FFCE56','#4BC0C0','#9966FF']
            }]
        }
    });


// Proizvodi – graf po kategorijama
new Chart(document.getElementById('productCategoryChart'), {
    type: 'bar',
    data: {
        labels: categoryNames,
        datasets: [{
            label: 'Prodaja po kategorijama (poslednji mesec)',
            data: categoryTotals,
            backgroundColor: '#36A2EB'
        }]
    },
    options: { scales: { y: { beginAtZero: true } } }
});

// Porudžbine – graf po mesecima
new Chart(document.getElementById('ordersByMonthChart'), {
    type: 'pie',
    data: {
        labels: orderMonths.map(m => "Mesec " + m),
        datasets: [{
            label: 'Broj porudžbina po mesecima (poslednja godina)',
            data: orderTotals,
            backgroundColor: ['#FF6384','#36A2EB','#FFCE56','#4BC0C0','#9966FF']
           
        }]
    },
    options: { scales: { y: { beginAtZero: true } } }
});


});
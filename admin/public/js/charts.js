
        document.addEventListener('DOMContentLoaded', function () {
            console.log("DOMContentLoaded fired");

            // Podaci iz PHP-a (sa try-catch za svaki JSON.parse)
            let meseci, prodaja, naziviKolaca, kolicineKolaca, orderMonths, orderTotals;
            try {
                meseci = JSON.parse(document.getElementById('meseci').dataset.value);
                prodaja = JSON.parse(document.getElementById('prodaja').dataset.value);
                naziviKolaca = JSON.parse(document.getElementById('naziviKolaca').dataset.value);
                kolicineKolaca = JSON.parse(document.getElementById('kolicineKolaca').dataset.value);
                orderMonths = JSON.parse(document.getElementById('orderMonths').dataset.value);
                orderTotals = JSON.parse(document.getElementById('orderTotals').dataset.value);
                console.log("All JSON parsed successfully");
            } catch (e) {
                console.error("Error parsing JSON data:", e);
                return;
            }

            // Globalne varijable za grafikonse (za ažuriranje/uništavanje)
            let dailyChart;  // Za porudžbine
            let dailyProductChart;  // Za proizvode

            // Funkcija za ažuriranje dnevnog grafikona porudžbina
            function updateDailyChart(days, totals) {
                if (dailyChart) {
                    dailyChart.destroy();
                }
                const labels = Array.from({length: 31}, (_, i) => i + 1);

                dailyChart = new Chart(document.getElementById('dailyOrdersChart'), {
                    type: 'bar',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Prodaja po danima',
                            data: totals,
                            backgroundColor: '#36A2EB'
                        }]
                    },
                    options: {
                        scales: {
                            y: { beginAtZero: true }
                        }
                    }
                });
            }

            // Funkcija za ažuriranje dnevnog grafikona proizvoda
           function updateDailyProductChart(categories, totals) {
    if (dailyProductChart) dailyProductChart.destroy();

    dailyProductChart = new Chart(
        document.getElementById("dailyProductsChart"),
        {
            type: "bar",
            data: {
                labels: categories,
                datasets: [{
                    label: "Prodaja proizvoda u mesecu",
                    data: totals,
                    backgroundColor: "#36A2EB"
                }]
            },
            options: {
                scales: {
                    y: { beginAtZero: true }
                }
            }
        }
    );
}


            // --- Početno učitavanje za tekući mesec (porudžbine) ---
            const currentYear = new Date().getFullYear();
            const currentMonth = new Date().getMonth() + 1;  // getMonth() je 0-bazirano
            fetch(`http://localhost/Poslasticarnica/admin/model/getOrdersByDate.php?year=${currentYear}&month=${currentMonth}`)
                .then(res => {
                    if (!res.ok) throw new Error(`HTTP error! status: ${res.status}`);
                    return res.json();
                })
                .then(data => {
                    console.log("Initial data for current month (orders):", data);
                    const days = data.map(item => item.dan);
                    const totals = data.map(item => item.ukupno);
                    updateDailyChart(days, totals);
                })
                .catch(error => {
                    console.error("Error loading initial data (orders):", error);
                });

          
           // --- Početno učitavanje za tekući mesec (proizvodi) ---
fetch(`http://localhost/Poslasticarnica/admin/model/getCategoryByDate.php?year=${currentYear}&month=${currentMonth}`)
    .then(res => {
        console.log("Response status for initial products:", res.status);
        if (!res.ok) throw new Error(`HTTP error! status: ${res.status}`);
        return res.json();
    })
    .then(data => {
        console.log("Initial data for current month (products):", data);

        const categories = data.map(item => item.category);
        const totals = data.map(item => item.total);

        updateDailyProductChart(categories, totals);
    })
    .catch(error => {
        console.error("Error loading initial data (products):", error);
    });
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

            // --- Porudžbine – graf po mesecima ---
            new Chart(document.getElementById('ordersByMonthChart'), {
                type: 'pie',
                data: {
                    labels: orderMonths.map(m => "Mesec " + m),
                    datasets: [{
                        label: 'Broj porudžbina po mesecima (poslednja godina)',
                        data: orderTotals,
                        backgroundColor: ['#FF6384','#36A2EB','#FFCE56','#4BC0C0','#9966FF']
                    }]
                }
            });

            // --- Dugme za filtriranje porudžbina ---
            document.getElementById("loadByDate").addEventListener("click", () => {
                const year = document.getElementById("filterYear").value;
                const month = document.getElementById("filterMonth").value;
                console.log("Filter button clicked for orders, fetching for year:", year, "month:", month);
                fetch(`http://localhost/Poslasticarnica/admin/model/getOrdersByDate.php?year=${year}&month=${month}`)
                    .then(res => {
                        console.log("Filter fetch response status for orders:", res.status);
                        if (!res.ok) throw new Error(`HTTP error! status: ${res.status}`);
                        return res.json();
                    })
                    .then(data => {
                        console.log("Data from API for orders:", data);
                        const days = data.map(item => item.dan);
                        const totals = data.map(item => item.ukupno);
                        updateDailyChart(days, totals);
                    })
                    .catch(error => console.error("Error loading filtered data for orders:", error));
            });

            // --- Dugme za filtriranje proizvoda ---
            document.getElementById("loadProductsByDate").addEventListener("click", () => {
                const year = document.getElementById("filterYearProducts").value;
                const month = document.getElementById("filterMonthProducts").value;
                console.log("Filter button clicked for products, fetching for year:", year, "month:", month);
                fetch(`http://localhost/Poslasticarnica/admin/model/getCategoryByDate.php?year=${year}&month=${month}`)
                    .then(res => {
                        console.log("Filter fetch response status for products:", res.status);
                        if (!res.ok) throw new Error(`HTTP error! status: ${res.status}`);
                        return res.json();
                    })
                   .then(data => {
                           console.log("Data from API for products:", data);
                           
                      const categories = data.map(item => item.category);
                        const totals = data.map(item => item.total);

                          updateDailyProductChart(categories, totals);

                          })
                    .catch(err => console.error("Error fetching product data:", err));
            });

            console.log("------------------");
        });
   
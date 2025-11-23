$(document).ready(function() {
    // Preuzmi mesec i godinu iz data atributa u HTML-u
    var initialMonth = $('body').data('month');
    var initialYear = $('body').data('year');

    // Učitaj podatke za početni mesec i godinu odmah po učitavanju stranice
    loadOrders(initialMonth, initialYear);

    // Kada korisnik izabere novi mesec ili godinu, pošaljemo AJAX zahtev
    $('#monthYearForm').submit(function(e) {
        e.preventDefault(); // Sprečava refresh stranice

        var month = $('#month').val();
        var year = $('#year').val();

        // Ažuriraj mesec i godinu u naslovu
        $('#month-year').text(month + '-' + year);

        // Poziv AJAX-a da učita podatke za izabrani mesec i godinu
        loadOrders(month, year);
    });

    // Funkcija koja šalje AJAX zahtev da se podaci učitaju
    function loadOrders(month, year) {
        $.ajax({
            url: 'http://localhost/Poslasticarnica/admin/model/porudzbineMesecModel.php', // Pravilno postavljen URL ka modelu
            method: 'GET',
            data: {
                ajax: true, // Ovaj parametar označava da se poziva AJAX
                month: month,
                year: year
            },
            success: function(response) {
                var orders = JSON.parse(response);  // Razgovara JSON u JavaScript objekat
                var tableHtml = '<table border="1"><thead><tr><th>ID</th><th>Ime</th><th>Prezime</th><th>Datum porudžbine</th></thead><tbody>';

                // Ako ima porudžbina, prikaži ih u tabeli
                if (orders.length > 0) {
                    orders.forEach(function(order) {
                        tableHtml += '<tr>';
                        tableHtml += '<td>' + order.id + '</td>';
                        tableHtml += '<td>' + order.ime + '</td>';
                        tableHtml += '<td>' + order.prezime + '</td>';
                        tableHtml += '<td>' + order.datum_porudzbine + '</td>';
               
                        tableHtml += '</tr>';
                    });
                } else {
                    tableHtml += '<tr><td colspan="5">Nema porudžbina za ovaj mesec.</td></tr>';
                }

                tableHtml += '</tbody></table>';
                $('#orders-table').html(tableHtml); // Prikazivanje tabele sa porudžbinama
            },
            error: function(xhr, status, error) {
                console.error('Greška prilikom učitavanja podataka: ', error);
            }
        });
    }
});

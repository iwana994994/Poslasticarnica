$(document).ready(function() {
    // Prikazivanje podataka za početni mesec i godinu
    loadOrders(initialMonth, initialYear);

    // Kada se promeni mesec ili godina, pošaljemo AJAX zahtev
    $('#monthYearForm').submit(function(e) {
        e.preventDefault(); // Sprečava refresh stranice

        var month = $('#month').val();
        var year = $('#year').val();

        // Ažuriraj mesec i godinu u naslovu
        $('#month-year').text(month + '-' + year);

        // Poziv AJAX-a za učitavanje podataka
        loadOrders(month, year);
    });

    // Funkcija za učitavanje porudžbina
    function loadOrders(month, year) {
        $.ajax({
            url: '', // Trenutni URL (stranica)
            method: 'GET',
            data: {
                ajax: true, // Ovaj parametar označava da se poziva AJAX
                month: month,
                year: year
            },
            success: function(response) {
                var orders = JSON.parse(response);
                var tableHtml = '<table border="1"><thead><tr><th>ID</th><th>Ime</th><th>Prezime</th><th>Datum porudžbine</th><th>Timestamp</th></tr></thead><tbody>';

                if (orders.length > 0) {
                    orders.forEach(function(order) {
                        tableHtml += '<tr>';
                        tableHtml += '<td>' + order.id + '</td>';
                        tableHtml += '<td>' + order.ime + '</td>';
                        tableHtml += '<td>' + order.prezime + '</td>';
                        tableHtml += '<td>' + order.datum_porudzbine + '</td>';
                        tableHtml += '<td>' + new Date(order.timestamp * 1000).toLocaleString() + '</td>'; // Pretvaranje UNIX timestamp u ljudski datum
                        tableHtml += '</tr>';
                    });
                } else {
                    tableHtml += '<tr><td colspan="5">Nema porudžbina za ovaj mesec.</td></tr>';
                }

                tableHtml += '</tbody></table>';
                $('#orders-table').html(tableHtml); // Ažuriraj sadržaj tabele
            }
        });
    }
});

$(document).ready(function() {
    var table = $('#tabla').DataTable({
        responsive: true
    });

    new $.fn.dataTable.FixedHeader(table);
});
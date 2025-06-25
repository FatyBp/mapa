$(document).ready(function() {
    var table = $('#table2').DataTable({
        responsive: true
    });
    new $.fn.dataTable.FixedHeader(table);
});
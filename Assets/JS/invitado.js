
$(document).ready(function() {
    $('#tabla-equipos-inv').DataTable({
        responsive: true,
        autoWidth: false,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
        },
        "lengthMenu": [
            [4, 10, 15, -1],
            [4, 10, 15, "Todos"]
        ],

    });
    $('#tabla-jugadores-inv').DataTable({
        responsive: true,
        autoWidth: false,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
        },
        "lengthMenu": [
            [4, 10, 15, -1],
            [4, 10, 15, "Todos"]
        ],

    });
});
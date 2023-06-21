window.addEventListener('DOMContentLoaded', event => {
    // Simple-DataTables
    // https://github.com/fiduswriter/Simple-DataTables/wiki

    let table = new DataTable('#datatablesSimple', {
        language: {
            url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/es-MX.json',
        },
        
        dom: 'Bfrtip',
        buttons: [
            'copy', 'excel', 'pdf', 'print'
        ],
        lengthMenu: [
            [50, 100, 150, -1],
            [50, 100, 150, 'All'],
        ],

    });

});
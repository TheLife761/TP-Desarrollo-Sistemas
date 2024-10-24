let finales = new DataTable('#finales', {
    language: {
        url: 'https://cdn.datatables.net/plug-ins/2.1.8/i18n/es-ES.json',
    },
    iDisplayLength: 50,
    columnDefs: [{
        targets: '_all',
        defaultContent: ""
    }],
});

let clubes = new DataTable('#clubes', {
    language: {
        url: 'https://cdn.datatables.net/plug-ins/2.1.8/i18n/es-ES.json',
    },
    iDisplayLength: 50,
    columnDefs: [{
        targets: '_all',
        defaultContent: ""
    }],
});

let paises = new DataTable('#paises', {
    language: {
        url: 'https://cdn.datatables.net/plug-ins/2.1.8/i18n/es-ES.json',
    },
    iDisplayLength: 50,
    columnDefs: [{
        targets: '_all',
        defaultContent: ""
    }],
});
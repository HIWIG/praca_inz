
    $(document).ready(function() {
        $('#filesTable').bootstrapTable({
            pagination: true,
            search: true,
            pageSize: 10,
            pageList: [5,10, 25, 50, 100],
            columns: [{
                field: 'id',
                title: 'Wyrób'
            }, {
                field: 'rcpNumber',
                title: 'Numer RFID Dokumentu'
            }, {
                field: 'location',
                title: 'Lokalizacja'
            }]
        });
    });



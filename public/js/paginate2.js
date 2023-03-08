
    $(document).ready(function() {
        $('#changesTable').bootstrapTable({
            pagination: true,
            search: true,
            pageSize: 10,
            pageList: [5,10, 25, 50, 100],
            columns: [{
                field: 'id',
                title: 'Id'
            }, {
                field: 'Wyrób',
                title: 'Nr Wyrobu'
            },{
                field: 'user',
                title: 'Numer RFID Dokumentu'
            },{
                field: 'type',
                title: 'Numer RFID Dokumentu'
            },
                {
                field: 'changeDate',
                title: 'Lokalizacja'
            }]
        });
    });



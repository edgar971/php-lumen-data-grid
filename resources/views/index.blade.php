<html>
<head>
    <title>Edit Equipment</title>
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.2.0/jsgrid.min.css" />
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.2.0/jsgrid-theme.min.css" />

    <style>
        body {
            max-width: 1000px;
            width: 100%;
            margin: auto;
            color: #262626;
            font-family: 'Helvetica Neue Light', 'Open Sans', Helvetica;
            font-size: 14px;
            font-weight: lighter;
            padding: 1px;

        }
        h1 {
            text-align: center;
            margin: 1em;
        }
    </style>
</head>
<body>

    <h1>Manage Equipment</h1>
    <div id="equipment-grid"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.2.0/jsgrid.min.js"></script>
    <script>
        (function(global,$){
            'use strict'
            $("#equipment-grid").jsGrid({
                width: "100%",
                filtering: true,
                inserting: true,
                editing: true,
                sorting: true,
                paging: true,
                autoload: true,
                pageSize: 10,
                pageButtonCount: 5,
                deleteConfirm: "Do you really want to delete client?",
                controller: {
                    loadData: function(filter) {
                        console.log(filter);
                        return $.ajax({
                            type: "GET",
                            url: "/api/equipment/",
                            data: filter
                        });

                    },
                    insertItem: function(item) {

                        return $.ajax({
                            type: "POST",
                            url: "/api/equipment/",
                            data: item
                        });
                    },
                    updateItem: function(item) {
                        return $.ajax({
                            type: "PUT",
                            url: "/api/equipment/" + item.id,
                            data: item
                        });
                    },
                    deleteItem: function(item) {
                        return $.ajax({
                            type: "DELETE",
                            url: "/api/equipment/" + item.id,
                            data: item
                        });
                    }
                },
                fields: [
                    { name: "title", title: "Title", type: "text", width: 100 },
                    { name: "description", title: "Description", type: "text", width: 175, sorting: false,filtering: true },
                    { name: "status", type: "text", title: "Status", sorting: false, filtering: false },
                    { type: "control" }
                ]
            });

        }(window, jQuery));
    </script>
</body>
</html>
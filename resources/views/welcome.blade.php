<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

   <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />
</head>

<body>
    <div class="well">
        <!--Title-->
        <h2 class="section-heading mb-4">
            Lista Datable
        </h2>
        <!--Description-->
        <br>
        <br>
        <br>
        <!--Section: Live preview-->

        <table id="forums-table" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Slug</th>
                    <th>Descripción</th>
                    <th>Alta</th>
                    <th>Acciones</th>
                </tr>
            </thead>
        </table>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="http://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>

jQuery(document).ready(function ($) {

        $.extend(true, $.fn.dataTable.defaults, {
            info: true,
            paging: true,
            ordering: true,
            searching: true,
            language: {
                url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            },
            lengthMenu: [
                [10, 20, 50, 100, 500, -1], [10, 20, 50, 100, 500, 'Todos']
            ],
        });

         forumsTable =  $("#forums-table").DataTable({
            stateSave: false,
            paging: true,
            processing: true,
            serverSide: true,
            columns: [
                {name: "id", data: "id"},
                {name: "name", data: "name"},
                {name: "slug", data: "slug"},
                {name: "description", data: "description"},
                {name: "created", data: "created_at"},
                {name: "actions", render: function ( data, type, row ) {
                    return `<a href="#" class="removeForum btn btn-danger" data-id="${row.id}">Eliminar</a>`
                }},
            ],
            ajax: '{{ route('serverSide') }}',
        });

        jQuery(document).on("click", "#forums-table a", function(e) {
            e.preventDefault();
            const id = $(this).data("id");
            removeForum(id);
        })

      });
</script>
</body>
</html>



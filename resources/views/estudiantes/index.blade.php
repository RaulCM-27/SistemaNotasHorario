@extends('layouts.app')

@section('title', 'Estudiantes')

@section('content')

<div class="mb-3">
    <button class="btn" style="background-color: #0d6efd; color: white;">
        ➕ Agregar Estudiante
    </button>
</div>

<table id="estudiantes" class="display nowrap text-center table table-bordered" style="width: 100%;">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Raul</td>
            <td>raul@example.com</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Laura</td>
            <td>laura@example.com</td>
        </tr>
    </tbody>
</table>

<script>
    $(document).ready(function() {
        $('#estudiantes').DataTable({
            language: {
                url: "//cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json"
            },
            lengthMenu: [
                [5, 10, 20, 50],
                [5, 10, 20, 50]
            ],
            stripeClasses: ['odd', 'even'],  
            "initComplete": function() {
                $('.dataTables_filter').css('margin-bottom', '20px');
            }
        });
    });
</script>

@endsection
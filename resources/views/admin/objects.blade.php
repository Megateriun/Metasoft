@extends('layouts.admin_home_layout')

@section('title', 'Objetos')

@section('css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap4.min.css">

@endsection

@section('name_user')
{{auth()->user()->name}}
@endsection

@section('content')

    
<h1>Lista de OBJETOS</h1>

<div class="card">
    <div class="card-body">
        <table id="objetos" class="table table-striped">
            <thead>
                <tr>
                    <th>Dueño</th>
                    <th>Estado</th>
                    <th>Tipo</th>
                    <th>Nombre</th>
                    <th>Imagen</th>
                    <th>Descripcion</th>
                    <th>Acción</th>
                </tr>
            </thead>
           
            <tbody>
                @foreach ($objects_users as $object)
                <tr>
                    <td>{{$object->innerjoin_user->name}}</td>
                    <td>{{$object->innerjoin_state->object_state}}</td>
                    <td>{{$object->innerjoin_action->action}}</td>
                    <td>{{$object->name_object}}</td>
                    <td><img style="width: 100px" src="{{ asset('img/defaull/object.svg') }}" alt=""> </td>
                    <td>{{$object->description}}</td>
                    <td>
<!---->
                        <form  method="post">
                            @csrf
                            @method('put')
                            <button>Editar</button>
                        </form>
                    </td>

                </tr>
                    @endforeach
                </tbody>
                
            </table>

        </div>
    </div>


@endsection

@section('script')

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap4.min.js"></script>
<script>
    $(document).ready(function () {
        $('#objetos').DataTable({
            responsive:true,
            autoWidth:false,

            "language": {
                "lengthMenu": "Mostrar _MENU_ registros por página",
                "zeroRecords": "No se encontró registro",
                "info": "Mostrando la página _PAGE_ de _PAGES_",
                "infoEmpty": "No hay registros disponibles",
                "infoFiltered": "(Filtro de _MAX_ registros totales)",
                "search": "Buscar:",
                "paginate":{
                    "next":"Siguiente",
                    "previous":"Anterior"
                }
            }

        });
    });
</script>

@endsection
@extends('layouts.home')

@section('title', 'Perfil')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap4.min.css">
@endsection

@section('name_user')
{{auth()->user()->name}}
@endsection

@section('content')

<h1>Mi lista de objetos</h1>

    <div class="card">
        <div class="card-body">
            <table id="objetos" class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>

                        <th>Estado</th>
                        <th>Acticcion</th>
                        <th>Nombre</th>
                        <th>Imagen</th>
                        <th>Descripcion</th>

                    </tr>
                </thead>
               
                <tbody>
                    @foreach ($objects as $object)
                    <tr>
                        <td><input type="checkbox" name="" id=""></td>

                        <td>{{$object->innerjoin_state->object_state}}</td>
                        <td>{{$object->innerjoin_action->action}}</td>
                        <td>{{$object->name_object}}</td>
                        <td>{{$object->image}}</td>
                        <td>{{$object->description}}</td>

                    </tr>
                    @endforeach
                </tbody>
                
            </table>

        </div>
    </div>
<form action="{{route('object.create')}}">
    <button  >Agregar un nuevo objeto</button>
</form>
    

@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
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
                "info": "Showing page _PAGE_ of _PAGES_",
                "infoEmpty": "No records available",
                "infoFiltered": "(filtered from _MAX_ total records)"
            }

        });
    });
</script>
@endsection
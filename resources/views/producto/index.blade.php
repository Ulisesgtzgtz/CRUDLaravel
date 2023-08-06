@extends('layouts.base')

<!-- Estilos CSS de la DataTable -->
@section('css')
<!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css"> -->
<link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
@endsection

@section('contenido')

<div class="text-center mt-5">
    <h2>Listado de Productos</h2>
</div>


<div class="container mt-3 mb-5">
    <div class="d-flex mt-3 mb-3">
        <a href="productos/create" class="btn btn-dark btn-md mt-3">Registrar Producto</a>
    </div>

    <table id="productos" class="table table-dark table-striped shadow-lg border-secondary table-hover mb-10" style="width:100%">
        <!-- <caption>Lista de Productos</caption> -->
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Status</th>
                <th scope="col">Stock</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
    
            <tr>
                <td>{{$producto->id}}</td>
                <td>{{$producto->name}}</td>
                <td>{{$producto->price}}</td>
                <td>
                    @if ($producto->status == 1)
                        Activo
                    @else 
                        Inactivo
                    @endif
                </td>
                <td>{{$producto->stock}}</td>
                <td>
                    <form action="{{ route('productos.destroy', $producto->id)}}" method="POST">
                        <a href="/productos/{{$producto->id}}/edit" class="btn btn-secondary">Actualizar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            
            @endforeach
        </tbody>
    </table>
</div>

<!-- Implementacion del script para el DataTable -->
@section('js')
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<!-- <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script> -->

<script>
    let table = new DataTable('#productos');

    // // new DataTable('#productos');
    // $(document).ready(function () {
    //     $('#productos').DataTable( {
    //         "lengthMenu": [[5, 10, 50, -1],[5, 10, 50, 'All']]
    //     });
    // });
</script>

@endsection

@endsection
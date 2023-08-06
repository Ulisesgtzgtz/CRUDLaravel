@extends('layouts.base')

@section('contenido')

<div class="text-center mt-5">
    <h2>Actualizar Producto</h2>
</div>

<form action="/productos/{{$producto->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-lable">Name</label>
        <input id="name" name="name" type="text" class="form-control" value="{{$producto->name}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-lable">Price</label>
        <input id="price" name="price" type="number" class="form-control" value="{{$producto->price}}">
    </div>
    @if ($producto->status == 1)
        <label for="" class="form-lable">Status</label>
        <div class="form-check">
            <label for="statusBtn1" class="form-check-label">Activo</label>
            <input class="form-check-input" type="radio" name="status" id="statusBtn1" value="1" checked>
        </div>
        <div class="form-check mb-3">
            <label for="statusBtn2" class="form-check-label">Inactivo</label>
            <input class="form-check-input" type="radio" name="status" id="statusBtn2" value="0">
        </div>
    @else 
        <label for="" class="form-lable">Status</label>
        <div class="form-check">
            <label for="statusBtn1" class="form-check-label">Activo</label>
            <input class="form-check-input" type="radio" name="status" id="statusBtn1" value="1">
        </div>
        <div class="form-check mb-3">
            <label for="statusBtn2" class="form-check-label">Inactivo</label>
            <input class="form-check-input" type="radio" name="status" id="statusBtn2" value="0" checked>
        </div>
    @endif
    
    <div class="mb-3">
        <label for="" class="form-lable">Stock</label>
        <input id="stock" name="stock" type="number" class="form-control" value="{{$producto->stock}}">
    </div>

    <a href="/productos" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>

</form>

@endsection
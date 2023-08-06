@extends('layouts.base')

@section('contenido')

<div class="text-center mt-5">
    <h2>Registrar Producto</h2>
</div>

<form action="/productos" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-lable">Name</label>
        <input id="name" name="name" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-lable">Price</label>
        <input id="price" name="price" type="number" step="any" class="form-control" tabindex="2">
    </div>
    <label for="" class="form-lable">Status</label>
    <div class="form-check">
        <label for="statusBtn1" class="form-check-label">Activo</label>
        <input class="form-check-input" type="radio" name="status" id="statusBtn1" value="1" checked>
    </div>
    <div class="form-check mb-3">
        <label for="statusBtn2" class="form-check-label">Inactivo</label>
        <input class="form-check-input" type="radio" name="status" id="statusBtn2" value="0">
    </div>
    <div class="mb-3">
        <label for="" class="form-lable">Stock</label>
        <input id="stock" name="stock" type="number" class="form-control" tabindex="4">
    </div>

    <a href="/productos" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>

</form>

@endsection
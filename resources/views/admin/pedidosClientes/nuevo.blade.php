@extends('admin.index')
@section('title', 'Pedidos clientes | Nuevo')
@section('content_header')
@stop
@section('content')
    <div>
        @livewire('buscador-clientes')
    </div>
    <div>
        @livewire('cabecera-clientes')
    </div>
    <div>
        @livewire('insertar-productos-clientes')
    </div>
    <div>
        @livewire('lineas-pedido-clientes')
    </div>
@stop
@section('css')
@stop
@section('js')
@stop
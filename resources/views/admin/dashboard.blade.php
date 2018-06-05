@extends('admin.layouts.layout')
@section('content')
    <h1>Dashboard</h1>
    <p>Usuario autenticado: {{ ucfirst(auth()->user()->nickname) }}</p>
    <p>Correo electrónico: {{ auth()->user()->email }}</p>

@endsection
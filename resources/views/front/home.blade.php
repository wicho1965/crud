@extends('layout.frontlayout')

@section('titulo', 'Home')

@section('content')
    desde el home <button type="button" class="btn btn-outline-primary">Primary</button>
    <button type="button" class="btn btn-outline-secondary">Secondary</button>
    <button type="button" class="btn btn-outline-success">Success</button>
    <button type="button" class="btn btn-outline-danger">Danger</button>
    <button type="button" class="btn btn-outline-warning">Warning</button>
    <button type="button" class="btn btn-outline-info">Info</button>
    <button type="button" class="btn btn-outline-light">Light</button>
    <button type="button" class="btn btn-outline-dark">Dark</button>
    <p>este era mi boton que es nuevos para vite</p>
    <p><h1>este es mi proyecto</h1></p>
    <div>
        <i class="bi bi-person-circle"></i>
    </div>
    <div>
        <i class="bi bi-person-vcard"></i>
    </div>
    <div>
        <i class="bi bi-bar-chart-line-fill"></i>
    </div>
    @endsection

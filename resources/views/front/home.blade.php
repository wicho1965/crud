@extends('layout.frontlayout')

@section('titulo', 'Home')
@section('content')
    desde el home <button type="button" class="btn btn-primary">Primary</button>
    <button type="button" class="btn btn-secondary">Secondary</button>
    <button type="button" class="btn btn-success">Success</button>
    <button type="button" class="btn btn-danger">Danger</button>
    <button type="button" class="btn btn-warning">Warning</button>
    <button type="button" class="btn btn-info">Info</button>
    <button type="button" class="btn btn-light">Light</button>
    <button type="button" class="btn btn-dark">Dark</button>
    
    <button type="button" class="btn btn-link">Link</button>
    <p>estos botones se actualizan con vite</p>
    <p><h1>este es mi proyecto</h1></p>

        <div><i class="bi bi-person-circle"></i>
            </div>

        <div><i class="bi bi-person-vcard"></i>
            </div>

        <div><i class="bi bi-envelope-at-fill"></i>
        </div>

@endsection

@extends('layout.frontlayout')

@section('titulo','Registro de Usuarios')

@section('content')
    <div class="main_log">
        <form class="form">

            <p class="form_title">Registro</p>

            <div class="form_inputs">

                <label class="form_label">
                    <input type="text" placeholder=" " class="form_input">
                    <span class="form_text">Ingresa tu Nick</spam>                
                </label>

                <label class="form_label">
                    <input type="email" placeholder=" " class="form_input">
                    <span class="form_text">Ingresa tu Email</spam>                
                </label>

                <label class="form_label">
                    <input type="password" placeholder=" " class="form_input">
                    <span class="form_text">Ingresa tu Password</spam>                
                </label>

                <label class="form_label">
                    <input type="password" placeholder=" " class="form_input">
                    <span class="form_text">Repite tu Password</spam>                
                </label>
         
            </div>
            <input type="submit" value="Registrar" class="form_submit">
        </form>

    </div>
@endsection
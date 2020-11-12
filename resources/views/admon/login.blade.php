@extends('layouts.master')
@section('header')

    <link rel="stylesheet" href="styles\styles.css">
@stop

@section('content')
<div class="container h-80">
    <div class="row align-items-center h-100">
        <div class="col-3 mx-auto">
            <div class="text-center">

                <p id="profile-name" class="profile-name-card"></p>
                <form action="{{action('controlador@validar')}}" method="post">
                    {{csrf_field()}}
                    <input type="text" name="user" id="inputUser" class="form-control form-group" placeholder="user" required autofocus>
                    <br>
                    <input type="password" name="pass" id="inputPassword" class="form-control form-group" placeholder="password" required autofocus>
                    <br>
                  
                    <br>
                    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Enviar</button>
                </form><!-- /form -->
            </div>
        </div>
    </div>
</div>
@stop

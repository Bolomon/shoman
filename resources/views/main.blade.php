@extends('layouts.app')
@section('content')

<div class="container container-welcome">
    <div class="welcome">
        <img src="img/Logo.svg" alt="Sciety">
        <p class="welcome__text">
            <a class="welcome__text-link open-popup" href="{{ route('login') }}"><span class="welcome__text-link open-popup" data-open="authorise">Войти</span></a>
            или
            <a class="welcome__text-link open-popup" href="{{ route('register') }}"><span class="welcome__text-link open-popup" data-open="register">зарегистрироваться</span></a>
        </p>
    </div>
</div>

@endsection

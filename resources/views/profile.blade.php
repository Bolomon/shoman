@extends('layouts.app')
@section('content')

    <div class="container">
        <h1 class="page-title">Профиль</h1>
        @csrf
        <example-component></example-component>
    </div>

@endsection

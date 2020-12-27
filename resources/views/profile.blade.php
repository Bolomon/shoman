@extends('layouts.app')
@section('content')

<div class="container">
    <h1 class="page-title">Профиль</h1>
    <div class="profile">
        <div class="profile-edit bg">
            <form class="form" action="/edit_profile" method="post">
              {{ csrf_field() }}
                <div class="input-group">
                    <label for="email-reg" class="form-label">Почта</label>
                    <input name="email" type="email" id="email-reg" class="form-input" placeholder="E-mail" value="{{ Auth::user()->email }}">
                </div>
                <div class="group-input-group">
                    <div class="input-group">
                        <label for="surname" class="form-label">Фамилия</label>
                        <input name="surname" type="text" id="surname" class="form-input" placeholder="Иванов" value="{{ Auth::user()->surname }}">
                    </div>
                    <div class="input-group">
                        <label for="name" class="form-label">Имя</label>
                        <input name="name" type="text" id="name" class="form-input" placeholder="Иван" value="{{ Auth::user()->name }}">
                    </div>
                    <div class="input-group">
                        <label for="patronymic" class="form-label">Отчество</label>
                        <input name="patronymic" type="text" id="patronymic" class="form-input" placeholder="Иванович" value="{{ Auth::user()->patronymic }}">
                    </div>
                </div>
                <div class="group-input-group">
                    <div class="input-group">
                        <label for="password" class="form-label">Пароль</label>
                        <input name="password" type="password" id="password" class="form-input" placeholder="********">
                    </div>
                    <!-- <div class="input-group">
                        <label for="conf-pass" class="form-label">Подтверждение пароля</label>
                        <input type="password" id="conf-pass" class="form-input" placeholder="********">
                    </div> -->
                </div>
                <div class="input-group">
                    <label for="group" class="form-label">Группа</label>
                    <input name="group" type="text" id="group" class="form-input" placeholder="111" value="{{ Auth::user()->group }}">
                </div>
                <div class="form-submit-block">
                    <button type="submit" class="form-submit">Редактировать</button>
                </div>
            </form>
        </div>
        <a href="#" class="profile-del">Удалить аккаунт</a>
    </div>
</div>

@endsection

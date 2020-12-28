<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="icon" href="img/icons/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
        <div id="app">
    <!-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="popup" data-open="register">
        <div class="authorise bg">
          <a href="http://127.0.0.1:8000/">
              <div class="close-block">
                  <img src="img/icons/Close.svg" alt="Close" class="close-popup">
              </div>
            </a>
            <h2 class="title popup-title">Регистрация</h2>
            <form method="POST" action="{{ route('register') }}" class="form">
              @csrf
                <div class="input-group">
                    <label for="email-reg" class="form-label">Почта</label>
                    <input name="email" type="email" id="email-reg" class="form-input" placeholder="E-mail">
                </div>
                <div class="group-input-group">
                    <div class="input-group">
                        <label for="surname" class="form-label">Фамилия</label>
                        <input name="surname" type="text" id="surname" class="form-input" placeholder="Иванов">
                    </div>
                    <div class="input-group">
                        <label for="name" class="form-label">Имя</label>
                        <input name="name" type="text" id="name" class="form-input" placeholder="Иван">
                    </div>
                    <div class="input-group">
                        <label for="patronymic" class="form-label">Отчество</label>
                        <input name="patronymic" type="text" id="patronymic" class="form-input" placeholder="Иванович">
                    </div>
                </div>
                <div class="group-input-group">
                    <div class="input-group">
                        <label for="password" class="form-label">Пароль</label>
                        <input name="password" type="password" id="password" class="form-input" placeholder="********">
                    </div>

                </div>
                <!-- <div class="group-input-group">
                    <div class="input-group">
                        <label for="status" class="form-label">Статус</label>
                        <select onchange="getStatus" name="status" id="status" class="form-input">
                            <option value="student">Ученик</option>
                            <option value="teacher">Преподаватель</option>
                        </select>
                    </div>

                    <div class="input-group">
                        <label for="group" class="form-label">Группа</label>
                        <input name="group" type="text" id="group" class="form-input" placeholder="111">
                    </div>
                </div> -->
                <getstatus-component></getstatus-component>
                <div class="form-submit-block">
                    <button type="submit" class="form-submit">Зарегистрироваться</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

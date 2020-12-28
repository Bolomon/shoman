@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="page-title">Выставить оценки</h1>
    <div class="rating-options bg">
        <h2 class="rating-target">Математика</h2>
        <div class="rating-date">
            <img src="img/icons/arrow-prev.svg" alt="prev month" class="rating-date-arrow">
            <span class="rating-date-val">Декабрь</span>
            <img src="img/icons/arrow-next.svg" alt="next month" class="rating-date-arrow">
        </div>
    </div>
    <div class="rating bg">
        <ul class="rating__list">
            @foreach($eeee as $item)
            <li class="rating__list-item">
                <p class="rating__list-name">{{$item->title}}</p>
                <p class="rating__list-name">{{$item->surname}} {{$item->name}}</p>
                
                <p class="rating__list-date">{{$item->updated_at}}</p>
                <p class="rating__list-score"><span>{{$item->rate}}</span>/5</p>
            </li>
            @endforeach

            @if($role == 'teacher')
            <li class="rating__list-item">
              <form class="" action="{{ route('add_rates') }}" method="post">
                {{ csrf_field() }}
                <p class="rating__list-name">предмет<input class="input" type="text" name="title" value=""></p>
                <p class="rating__list-name">ученик</p>
                <select class="" name="id_student">
                  @foreach ($students as $student)
                  <option value="{{ $student->id }}">{{ $student->name }}</option>
                  @endforeach
                </select>
                <p class="rating__list-score">оценка<span><input type="number" name="rate" min="1" max="5" value="1"></span>/5</p>
                <div class="form-submit-block">
                    <button type="submit" class="form-submit">Отправить</button>
                </div>
              </form>
            </li>
            @endif

        </ul>
    </div>
</div>
@endsection

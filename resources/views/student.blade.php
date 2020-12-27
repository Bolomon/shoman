@extends('layouts.app')
@section('content')

<div class="container">
    <h1 class="page-title">Журнал оценок</h1>
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
          @if($appraisals != NULL)
          @foreach($appraisals as $appraisal)
            <li class="rating__list-item">
                <p class="rating__list-name">{{ $appraisal->title }}</p>
                <p class="rating__list-date">{{ $appraisal->updated_at }}</p>
                <p class="rating__list-score"><span>{{ $appraisal->rate }}</span>/5</p>
            </li>
            @endforeach
            @endif
        </ul>
    </div>
</div>

@endsection

@extends('layouts.layout')

@section('content')
    <ul class="list-container">
        @foreach ($items as $item)
            <li class="list-container__item">
                <div class="list-container__item-id-text">ID:</div>
                <div class="list-container__item-id"> {{ $item->id }} </div>
                <div class="list-container__item-subtotal-text">Subtotal:</div>
                <div class="list-container__item-subtotal">{{ $item->subTotal }}</div>
                <div class="list-container__info"><a href="{{ route('home.info', $item->id) }}"><img src="info.png" /></a></div>
            </li>
        @endforeach
    </ul>
@endsection

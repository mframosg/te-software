@extends('layouts.layout')

@section('content')
    <ul>
        @php
            $i = 1;
        @endphp
        @foreach ($items as $item)
            @if ($i <= 2)
                <li> <strong> <a href="{{ route('home.info', $item->id) }}"> {{ $item->id }} </a>{{ $item->quantity }} </strong></li>
            @else
                <li> <a href="{{ route('home.info', $item->id) }}"> {{ $item->id }} </a> {{ $item->quantity }} </li>
            @endif
            @php
                $i++;
            @endphp
        @endforeach
    </ul>
@endsection

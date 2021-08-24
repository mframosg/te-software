@extends('layouts.layout')

@section('content')
    <ul>
        <li>{{ $items->quantity }}</li>
        <li>{{ $items->subTotal }}</li>
        <li>{{ $items->vat }}</li>
        <form action="{{ route('home.delete', $items->id) }}" method="post">
            @csrf
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </div>
        </form>
    </ul>

@endsection

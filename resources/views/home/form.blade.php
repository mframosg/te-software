@extends('layouts.layout')

@section('content')
    <div class="tarjet">
        <h1 class="title">Add Item</h1>
        <form action="{{ route('home.store') }}" method="POST" class=" form-container container-form">
            @csrf
            <div class="div-container">
                <div class="form-group">
                    <label for="formGroupExampleInput">Quantity</label>
                    <input name="quantity" type="text" class="form-control" id="formGroupExampleInput" placeholder="20">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Subtotal</label>
                    <input name="subTotal" type="text" class="form-control" id="formGroupExampleInput2" placeholder="30000">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Vat</label>
                    <input name="vat" type="text" class="form-control" id="formGroupExampleInput2" placeholder="5700">
                </div>
            </div>
            @if (session('success'))
                <div>{{ session('success') }}</div>
            @endif
            <div class="buttons-container">
                <button type="submit" class="button btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

@endsection

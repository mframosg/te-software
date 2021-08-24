@extends('layouts.layout')

@section('content')
    <div class="container">
        <form  action="{{ route("home.store") }}" method="POST" class=" form-container container-form">
          @csrf
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
            <div class="col-auto">
              <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </div>
          </form>   
    </div>

@endsection

@extends('layouts.default')
@section('content')
<div class="container-fluid mt-3">
    <div class="text-center">
        <h1>Let's add airline to Kaunas airport!</h1>
    </div>
    <hr>
    <form action method="POST">
        <div class="d-grid gap-2 mx-auto mt-2">
            <select class="form-select" aria-label="Select country">
                <option selected>Select airline</option>
                <option value="1"> Vladimar airlines</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success mt-3">Link</button>
    </form>
@endsection
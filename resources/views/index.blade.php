@section('title')
    Suervei
@endsection

@section('css')
@endsection

@extends('layouts.layout')

@section('content')
<div class="p-3 p-md-5 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 font-weight-normal">Suervei</h1>
        <p class="lead font-weight-normal">Collect and organize information for free</p>
        <a class="btn btn-primary" href="start">Go to Suervei</a>
    </div>
</div>

<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
    <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
        <div class="my-3 py-3">
            <h2 class="display-5">Gambar</h2>
            <p class="lead">Sebuah gambar yang bangsat</p>
        </div>
    </div>
    <div class="mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
            <h2 class="display-5">Text</h2>
            <p class="lead">Sebuah text yang bangsat</p>
        </div>
    </div>
</div>
@endsection
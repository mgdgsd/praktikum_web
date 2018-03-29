@section('title')
    Suervei
@endsection

@section('css')
<style type="text/css">
    .icon {
        font-size: 100px;
    }

    a {
        text-decoration: none !important;
    }
</style>
@endsection

@extends('layouts.layout')

@section('content')
<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
    <div class="container">
        Recent Survey
        <div class="row my-md-4">
            <div class="col-md-12 pl-md-4 text-center overflow-hidden">
                <div class="my-3 py-3">
                    <i class="fas fa-capsules icon"></i>
                    <p class="lead">No Survey Yet<br/><a href="#">Start a new survey</a></p>                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
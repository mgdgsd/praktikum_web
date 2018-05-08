@section('title')
    Suervei
@endsection

@section('css')
{{-- Fonts --}}
<link href="https://fonts.googleapis.com/css?family=Old+Standard+TT" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Shrikhand" rel="stylesheet">

<style type="text/css">
    .container-fluid {
        background-color: rgb(255, 204, 204) !important;
        font-family: 'Old Standard TT', serif;
    }

    .icon {
        font-size: 50px;
    }

    .mgdgsd {
      font-family: 'Shrikhand', cursive;
      font-size: 30px;
    }

</style>
@endsection

@extends('layouts.home')

@section('content')
<div class="container-fluid">
    <div class="d-md-flex flex-md-equal w-100">
        <div class="mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 p-3">
                <img src="{{ asset('resources/assets/img/statue.png') }}" width="80%" />
            </div>
        </div>
        <div class="mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 py-3">
                <p class="lead">"Age Doesn't Matter"</p>
                <p>Maturity is something that develops after experiences we face in life; you don't just magically become mature on your 25th birthday. You can mature at a very young age, or maybe, you never truly mature. But, society makes us feel that if we haven't figured out ourselves by our mid-20s, we have lived and are continuing to live incorrectly. The majority of us have future plans and hope to be at a certain point by a certain age, but that isn't always the reality of the situation.</p>
                <br/>
                <p>Supported By</p>
                    <img src="{{ asset('resources/assets/img/kkk-rebranding.jpg') }}" width="20%"/>
                    &nbsp;&nbsp;&nbsp;
                    <span class="mgdgsd">Mgdgsd</span>
            </div>
        </div>
    </div>
</div>
@endsection

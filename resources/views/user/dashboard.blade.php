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
        <span id="title">Survei Terbaru</span>
        <div class="row my-md-4">
            <div id="recent"></div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
    $(document).ready(function(){
        // var my_survei = [];
        var my_survei = [{ id: '0', title: 'Pengangguran Terbuka Menurut Pendidikan Tertinggi yang Ditamatkan Area Surabaya'}, { id:'1', title: 'Tingkat Pengangguran Terbuka Area Surabaya'}]
        if (my_survei.length == 0)
        {
            $('#title').html('');
            $('#recent').before('<div class="col-md-12 pl-md-4 text-center overflow-hidden"><div class="my-3 py-3"><i class="fas fa-capsules icon"></i><p class="lead">No Survey Yet<br/><a href="#">Start a new survey</a></p></div></div></div>');
        } else
        {
            for($i = 0; $i < my_survei.length; $i++)
            {
                $('#recent').before('<div class="col-sm-2 pl-md-4 text-center overflow-hidden"><a href="#"><div class="my-3 py-3"><p class="lead" >'+my_survei[$i].title+'<br/></p></div></a></div>');   
            }
        }
    });
</script>
@endsection
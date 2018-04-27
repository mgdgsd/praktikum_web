@section('title')
    Suervei
@endsection

@section('css')
<style type="text/css">
    #section_header {
        background-image: url('{{ url('resources/assets/img/aroma-barista-brew-938969.jpg') }}');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
@endsection

@extends('layouts.layout')

@section('content')
<div id="section_header">
    <div class="container">
        <div class="row p-md-5 text-center text-white">
            <div class="col-sm-12 p-lg-5 mx-auto my-5">
                <h1 class="display-4 font-weight-normal">Suervei</h1>
                <p class="lead font-weight-normal">Mendapatkan and mengorganisasi informasi secara gratis</p>
                <a class="btn btn-primary" href="start">Pergi ke Suervei</a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
        <div class="mr-md-3 pt-3 px-3 px-md-5 overflow-hidden">
            <img src="{{ url('resources/assets/img/memulai.png') }}" />
        </div>
        <div class="mr-md-3 pt-3 px-3 pt-md-5 px-md-5 overflow-hidden">
            <div class="my-3 p-3">
                <h2 class="display-5">Dapatkan jawaban cepat</h2>
                <p class="lead">Membuat sebuah survei kepuasan pelanggan, survei kesehatan, penelitian pasar, skor net promotor, survei kepuasan pegawai, survey pemasaran, survei perencanaan acara, survei pendidikan, dan banyak lagi.</p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
        <div class="mr-md-3 pt-3 px-3 pt-md-5 px-md-5 overflow-hidden">
            <div class="my-3 p-3">
                <h2 class="display-5">Tanya Jawab buatan Anda</h2>
                <p class="lead">Pilih dari banyak opsi pertanyaan, dari beberapa pilihan ke tarik-turun hingga skala linier. Tambahkan gambar dan video YouTube, atau buat yang canggih dengan pencabangan laman dan logika lompatan pertanyaan.</p>
            </div>
        </div>
        <div class="mr-md-3 pt-3 px-3 px-md-5 text-center overflow-hidden">
            <img src="{{ url('resources/assets/img/pertanyaanmu.png') }}" />
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
        <div class="mr-md-3 pt-3 px-3 px-md-5 text-center overflow-hidden">
            <img src="{{ url('resources/assets/img/terorganisir.png') }}" />
        </div>
        <div class="mr-md-3 pt-3 px-3 pt-md-5 px-md-5 overflow-hidden">
            <div class="my-3 p-3">
                <h2 class="display-5">Disusun &amp; dianalisis</h2>
                <p class="lead">Tanggapan survei Anda dikumpulkan dalam Formulir dengan rapi dan secara otomatis, disertai info tanggapan waktu nyata dan grafik. Atau, melangkah lebih jauh bersama data Anda dengan melihat semuanya di Spreadsheet.</p>
            </div>
        </div>
    </div>
</div>

<div id="start_below"></div>

@endsection

@section('js')
<script type="text/javascript">
    $status = 'beginner';
    if($status == 'beginner')
    {
        $('#start_below').html('<div class="container-fluid"><div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3"><div class="mr-md-3 pt-3 px-3 pt-md-5 px-md-5 overflow-hidden"><div class="my-5 p-5"><h2 class="display-5">Mulai sekarang</h2><p class="lead">Siap membuat survei pertama Anda? Gratis dan mudah dengan Suervei.</p><a class="btn btn-primary" href="#">Daftar Disini</a></div></div><div class="mr-md-3 pt-3 px-3 px-md-5 text-center overflow-hidden"><img src="/suervei/praktikum_web/resources/assets/img/memulai.png"/></div></div></div>');    
    }
</script>
@endsection
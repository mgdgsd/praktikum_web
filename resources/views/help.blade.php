@section('title')
    Suervei
@endsection

@section('css')
<style type="text/css">
    a {
        text-decoration: none !important;
    }
</style>
@endsection

@extends('layouts.layout')

@section('content')
<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
    <div class="container">
        <div class="row my-md-4">
            <div class="col-sm-12">
                <h2 class="display-5">Docs</h2>
                <div id="dochelp"></div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
    var doc_help = [{ id: '0', title: 'How to use Suervei'}, { id: '1', title: 'Create, edit, and format' }, { id: '2', title: 'Insert Items'}, { id: '3', title: 'Tools' }, { id: '4', title: 'Page Setting and Printing' }];
    for($i = 0; $i < doc_help.length; $i++)
    {
        $('#dochelp').append('<a class="lead" href="#">'+doc_help[$i].title+'</a><br/>');
    }
</script>
@endsection
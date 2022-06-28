@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">

        <div class="pull-right mb-3">
            <a class="btn btn-primary" href="{{ route('pengaduan.index') }}"> Back</a>
        </div>
    </div>
</div>


@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


<form action="{{ route('pengaduan.store') }}" method="POST" enctype="multipart/form-data">
    @csrf


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mb-3">
                <strong>Tambahkan Foto</strong>
                <input type="file" name="foto" class="form-control">
            </div>
            <div class="form-group mb-3">
                <strong>Isi Laporan</strong>
                <textarea class="form-control" style="height:150px" name="isi_laporan" placeholder="Detail"></textarea>
            </div>


        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>


</form>

@endsection

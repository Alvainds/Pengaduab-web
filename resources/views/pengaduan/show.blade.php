@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">

        <div class="pull-right mb-3">
            <a class="btn btn-info" href="{{ route('pengaduan.index') }}"> Back</a>
        </div>
    </div>
</div>


<div class="row">
    <div class="card py-3">
        <div class="card-body">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image</strong>
                    {{ $pengaduan->foto }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Details:</strong>
                    {{ $pengaduan->isi_laporan }}
                </div>
            </div>
        </div>
    </div>


    <div class="card">
        <div class="card-body">
            @include('pengaduan.commentsDisplay', ['comments' => $pengaduan->comments, 'pengaduan_id' =>
            $pengaduan->id])
            <h5 class="text-muted">Add comment</h5>
            <form method="post" action="{{ route('comment') }}">
                @csrf
                <div class="form-group">
                    <textarea class="form-control" placeholder="Comment" name="comment"></textarea>
                    <input type="hidden" name="pengaduan_id" value="{{ $pengaduan->id }}" />
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-info" value="Comment" />
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

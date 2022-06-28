@extends('layouts.app')


@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right mb-3">
            @can('pengaduan-create')
            <a class="btn btn-info" href="{{ route('pengaduan.create') }}"><i
                    class="bi bi-exclamation-square-fill mx-1"></i> Create New Pengaduan</a>
            @endcan
        </div>
    </div>
</div>


@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<div class="card ">
    <div class="card-body ">
        <div class="d-md-flex no-block">
            <h4 class="card-title">Users Table</h4>
        </div>
        <div class="table-responsive">
            <table id="file_export"
                class="table stylish-table table-borderless mb-0 mt-2 no-wrap v-middle mb-3 table-hover">
                <thead>
                    <tr class="font-weight-normal text-muted border-bottom">
                        <th>No</th>
                        <th>Images</th>
                        <th>NIK</th>
                        <th>Isi Laporan</th>
                        <th>Date Created</th>
                        <th>Status</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pengaduans as $pengaduan)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $pengaduan->foto }}"</a>
                        </td>
                        <td>{{ $pengaduan->nik }}</td>
                        <td>{{ $pengaduan->isi_laporan }}</td>
                        <td>{{ $pengaduan->created_at->diffForHumans(); }}</td>
                        <td>{{ $pengaduan->status }}</td>
                        <td>
                            <form action="{{ route('pengaduan.destroy',$pengaduan->id) }}" method="POST">
                                <a class="btn btn-dark btn-circle-lg"
                                    href="{{ route('pengaduan.show',$pengaduan->id) }}"><i
                                        class="bi bi-eye-fill"></i></a>
                                @can('pengaduan-edit')
                                <a class="btn btn-dark btn-circle-lg"
                                    href="{{ route('pengaduan.edit',$pengaduan->id) }}"><i
                                        class="bi bi-pencil-fill"></i></a>
                                @endcan


                                @csrf
                                @method('DELETE')
                                @can('pengaduan-delete')
                                <button type="submit" class="btn btn-dark btn-circle-lg">Delete</button>
                                @endcan
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>


{!! $pengaduans->links() !!}


@endsection

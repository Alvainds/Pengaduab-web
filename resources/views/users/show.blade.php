@extends('layouts.app')


@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">

        <div class="pull-right mb-3">
            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $user->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            {{ $user->email }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Roles:</strong>
            @if(!empty($user->getRoleNames()))
            @foreach($user->getRoleNames() as $v)
            <label class="badge bg-primary">{{ $v }}</label>
            @endforeach
            @endif
        </div>
    </div>
</div>

<div class="card p-4 rounded-3">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h3 class="box-title">{{ $user->name }} Info List</h3>
            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        <tr>
                            <td width="390">Name</td>
                            <td> {{ $user->name }} </td>
                        </tr>
                        <tr>
                            <td>NIK</td>
                            <td> {{ $user->nik }} </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <td>Telp</td>
                            <td>{{ $user->telp }}</td>
                        </tr>
                        <tr>
                            <td>Roles</td>
                            <td>{{ $user->telp }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection

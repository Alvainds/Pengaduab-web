@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">

        <div class="pull-right mb-3">
            <a href=" {{ route('users.index') }}" class="btn btn-info btn-circle"><i class="bi bi-chevron-left"></i>
            </a>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">

        <h3 class="card-title">Create User</h3>

        <hr>

        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif



        {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
        <div class="row mb-3">
            <div class="col-md-6">
                <label class="control-label">Username</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                    </div>
                    {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="col-md-6">
                <label class="control-label">Email</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                    </div>
                    {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                </div>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <label class="control-label">Password</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="bi bi-key-fill"></i></span>
                    </div>
                    {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="col-6">
                <label class="control-label">Confirm Password</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="bi bi-key"></i></span>
                    </div>
                    {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' =>
                    'form-control')) !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <label class="control-label">Role:</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="bi bi-person-lines-fill"></i></span>
                    </div>
                    {!! Form::select('roles[]', $roles,[], array('class' => 'custom-select','select')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3 text-center mt-2">
                <a href="{{ route('users.index') }}" class="btn btn-dark float-start">Cancel </a>
                <button type="submit" class="btn btn-info float-start mx-2">Submit <i
                        class="bi bi-check fs-6"></i></button>
            </div>
        </div>

    </div>
</div>



{!! Form::close() !!}
@endsection

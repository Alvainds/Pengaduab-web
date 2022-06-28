@extends('layouts.app')


@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">

        <div class="pull-right mb-3">
            @can('role-create')
            <a class="btn btn-info" href="{{ route('roles.create') }}"><i class="bi bi-diagram-2-fill mx-1"></i> Create
                New
                Role</a>
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
                        <th>Name</th>
                        <th>Guard</th>
                        <th>Created Date</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $key => $role)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $role->name }}</td>
                        <td>{{ $role->guard_name }}</td>
                        <td>{{ $role->created_at->diffForHumans() }}</td>
                        <td>
                            <a class="btn btn-dark btn-circle-lg" href="{{ route('roles.show',$role->id) }}"><i
                                    class="bi bi-eye-fill"></i></a>
                            @can('role-edit')
                            <a class="btn btn-dark btn-circle-lg" href="{{ route('roles.edit',$role->id) }}"><i
                                    class="bi bi-pencil-fill"></i></a>
                            @endcan
                            @can('role-delete')
                            {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy',
                            $role->id],'style'=>'display:inline'])
                            !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-dark btn-circle-lg']) !!}
                            {!! Form::close() !!}
                            @endcan
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>


{!! $roles->render() !!}


@endsection

@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">

        <div class="pull-right mb-3">
            <a class="btn btn-info" href="{{ route('users.create') }}"><i class="bi bi-person-plus-fill mx-1"></i>
                Create New
                User</a>
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
                        <th>NIK</th>
                        <th>Email</th>
                        <th>Telp</th>
                        <th>Roles</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $user)
                    <tr class="border-bottom">
                        <td>{{ ++$i }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->nik }}</td>
                        <td>{{ $user->email }}</td>
                        <td>none</td>
                        <td>
                            @if(!empty($user->getRoleNames()))
                            @foreach($user->getRoleNames() as $v)
                            <label class="badge bg-info p-2">{{ $v }}</label>
                            @endforeach
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('users.show',$user->id) }}" class="btn btn-dark btn-circle-lg"><i
                                    class="bi bi-eye-fill"></i>
                            </a>
                            <a href="{{ route('users.edit',$user->id) }}" class="btn btn-dark btn-circle-lg"><i
                                    class="bi bi-pencil-fill"></i>
                            </a>
                            {!! Form::open(['method' => 'DELETE','route' => ['users.destroy',
                            $user->id],'style'=>'display:inline'])
                            !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-dark']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>



{!! $data->render() !!}

@endsection

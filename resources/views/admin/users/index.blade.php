@extends('layouts.app')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        Users
    </div>
    <div class="panel-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Permissions</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @if ($users->count() > 0)
                    @foreach ($users as $user)
                    <tr>
                        <td scope="row">
                            <img src=" {{ asset($user->profile->avatar) }} " alt="avatar" width="50px" height="50px" style="border-radius: 50%;">
                        </td>
                        <td>
                            {{ $user->name }}
                        </td>
                        <td>
                            @if ($user->admin)
                                <a name="" id="" class="btn btn-xs btn-danger" href="{{ route('user.not.admin', ['id' => $user->id]) }}" role="button">Remove Permissions</a>
                            @else
                                <a name="" id="" class="btn btn-xs btn-success" href="{{ route('user.admin', ['id' => $user->id]) }}" role="button">Make admin</a>
                            @endif
                        </td>
                        <td>
                            @if (Auth::id() != $user->id)
                                <a name="" id="" class="btn btn-xs btn-danger" href="{{ route('user.delete', ['id' => $user->id]) }}" role="button">Delete user</a>
                            @else
                                
                            @endif
                        </td>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        <th colspan="4" class="text-center">No users</th>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>

@endsection
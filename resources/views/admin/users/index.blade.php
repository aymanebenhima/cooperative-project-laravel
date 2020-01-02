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
                            Permissions
                        </td>
                        <td>
                            Delete
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
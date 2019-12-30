@extends('layouts.app')

@section('content')
<div class="panel panel-default">
    <div class="panel-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Category name</th>
                    <th>Editing</th>
                    <th>Deleting</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td scope="row"> {{ $category->name }} </td>
                    <td><a name="" id="" class="btn btn-primary" href="#" role="button">Edit</a></td>
                    <td><a name="" id="" class="btn btn-danger" href="#" role="button">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
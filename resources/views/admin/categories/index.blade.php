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
                    <td>
                        <a href="{{ route('category.edit', ['id' => $category->id]) }}" class="btn btn-xs btn-info" href="#" role="button">Edit</a>
                    </td>
                    <td>
                        <a href="{{ route('category.delete', ['id' => $category->id]) }}" class="btn btn-xs btn-danger" href="#" role="button">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
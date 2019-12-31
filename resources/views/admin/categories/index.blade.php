@extends('layouts.app')

@section('content')
<div class="panel panel-default">
    <div class="panel-body">
        <table class="table table-hover">
            <div class="panel-heading">
                Categories
            </div>
            <thead>
                <tr>
                    <th>Category name</th>
                    <th>Editing</th>
                    <th>Deleting</th>
                </tr>
            </thead>
            <tbody>
                @if ($categories->count() > 0)
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
                @else
                    <tr>
                        <th colspan="3" class="text-center">No category created yet</th>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>

@endsection
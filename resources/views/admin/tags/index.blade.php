@extends('layouts.app')

@section('content')
<div class="panel panel-default">
    <div class="panel-body">
        <table class="table table-hover">
            <div class="panel-heading">
                Tags
            </div>
            <thead>
                <tr>
                    <th>Tag name</th>
                    <th>Editing</th>
                    <th>Deleting</th>
                </tr>
            </thead>
            <tbody>
                @if ($tags->count() > 0)
                    @foreach ($tags as $tag)
                    <tr>
                        <td scope="row"> {{ $tag->tag }} </td>
                        <td>
                            <a href="{{ route('tag.edit', ['id' => $tag->id]) }}" class="btn btn-xs btn-info" href="#" role="button">Edit</a>
                        </td>
                        <td>
                            <a href="{{ route('tag.delete', ['id' => $tag->id]) }}" class="btn btn-xs btn-danger" href="#" role="button">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        <th colspan="3" class="text-center">No tags created yet</th>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>

@endsection
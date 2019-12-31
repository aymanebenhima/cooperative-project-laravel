@extends('layouts.app')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        Published posts
    </div>
    <div class="panel-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Edit</th>
                    <th>Trash</th>
                </tr>
            </thead>
            <tbody>
                @if ($posts->count() > 0)
                    @foreach ($posts as $post)
                    <tr>
                        <td scope="row">
                            <img src="{{ $post->featured }}" alt="{{ $post->title}}" width="50px" height="50px">
                        </td>
                        <td> {{ $post->title}} </td>
                        <td>
                            <a name="" id="" class="btn btn-xs btn-info" href="{{ route('post.edit', ['id' => $post->id]) }}" role="button">Edit</a>
                        </td>
                        <td>
                            <a name="" id="" class="btn btn-xs btn-danger" href="{{ route('post.delete', ['id' => $post->id]) }}" role="button">Trash</a>
                        </td>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        <th colspan="5" class="text-center">No published posts</th>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>

@endsection
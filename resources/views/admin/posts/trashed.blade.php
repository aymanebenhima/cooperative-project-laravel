@extends('layouts.app')

@section('content')
<div class="panel panel-default">
    <div class="panel-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Edit</th>
                    <th>Restore</th>
                    <th>Destroy</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td scope="row">
                        <img src="{{ $post->featured }}" alt="{{ $post->title }}" width="50px" height="50px">
                    </td>
                    <td> {{ $post->title }} </td>
                    <td>Edit</td>
                    <td>
                        <a name="" id="" class="btn btn-xs btn-success" href="{{ route('post.delete', ['id' => $post->id]) }}" role="button">Restore</a>
                    </td>
                    <td>
                        <a name="" id="" class="btn btn-xs btn-danger" href="{{ route('post.kill', ['id' => $post->id]) }}" role="button">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
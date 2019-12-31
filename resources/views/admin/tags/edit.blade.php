@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')

        <div class="panel panel-default">
            <div class="panel-heading">Edit tag: {{ $tag->tag }} </div>
            <div class="panel-body">
                <form action="{{ route('tag.update', ['id' => $tag->id]) }}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                      <label for="name">Tag</label>
                      <input type="text" name="tag" value="{{ $tag->tag }}" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Update Tag</button>
                    </div>
                    
                </form>
            </div>
        </div>

@endsection
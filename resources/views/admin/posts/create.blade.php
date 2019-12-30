@extends('layouts.app')

@section('content')

    @if (count($errors) > 0)
      <ul class="list-group">
        @foreach ($errors->all() as $error)
            <li class="list-group-item text-danger">
              {{ $error }}
            </li>
        @endforeach
      </ul>
    @endif

        <div class="panel panel-default">
            <div class="panel-heading">Create a new post</div>
            <div class="panel-body">
                <form action="{{ route('post.store')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" name="title" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      <small id="helpId" class="text-muted">put your title</small>
                    </div>
                    <div class="form-group">
                      <label for="featured">Featured Image</label>
                      <input type="file" class="form-control-file" name="featured" id="" placeholder="good image" aria-describedby="fileHelpId">
                      <small id="fileHelpId" class="form-text text-muted">add your image</small>
                    </div>
                    <div class="form-group">
                      <label for="content">Content</label>
                      <textarea class="form-control" name="content" id="" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <div class="text-center">
                            <button type="submit" class="btn btn-secondary">Store post</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

@endsection
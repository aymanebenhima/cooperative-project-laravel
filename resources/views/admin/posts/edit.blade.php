@extends('layouts.app')

@section('content')

  @include('admin.includes.errors') 

        <div class="panel panel-default">
        <div class="panel-heading">Edit post: {{ $post->title }}</div>
            <div class="panel-body">
                <form action="{{ route('post.update', ['id' => $post->id]) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" name="title" id="" class="form-control" value="{{ $post->title }}" aria-describedby="helpId">
                      <small id="helpId" class="text-muted">edit your title</small>
                    </div>

                    <div class="form-group">
                      <label for="featured">Featured Image</label>
                      <input type="file" class="form-control-file" name="featured" id="" placeholder="good image" aria-describedby="fileHelpId">
                      <small id="fileHelpId" class="form-text text-muted">add your image</small>
                    </div>

                    <div class="form-group">
                      <label for="category">Select a category</label>
                        <select class="form-control" name="category_id" id="category">
                          @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            @if ($post->category->id == $category->id)
                                selected
                            @endif
                            > {{ $category->name }} </option>
                          @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                      <label for="tags">Select tags</label>
                      @foreach ($tags as $tag)
                      <div class="form-check">
                        <label for="tags" class="form-check-label">
                          <input type="checkbox" class="form-check-input" name="tags[]" id="" value="{{ $tag->id }}" 
                          @foreach ($post->tags as $t)
                              @if ($tag->id == $t->id)
                                checked
                              @endif
                          @endforeach>
                          {{ $tag->tag }}
                        </label> 
                      </div>
                      @endforeach
                    </div>

                    <div class="form-group">
                      <label for="content">Content</label>
                      <textarea class="form-control" name="content" id="" rows="5">
                          {{ $post->content }}
                      </textarea>
                    </div>

                    <div class="form-group">
                        <div class="text-center">
                            <button type="submit" class="btn btn-secondary">Update post</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

@endsection
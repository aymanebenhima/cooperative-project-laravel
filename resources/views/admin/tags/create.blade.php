@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')

        <div class="panel panel-default">
            <div class="panel-heading">Create a new tag</div>
            <div class="panel-body">
                <form action="{{ route('tag.store')}}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                      <label for="name">Tag</label>
                      <input type="text" name="tag" id="" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Store tag</button>
                    </div>
                    
                </form>
            </div>
        </div>

@endsection
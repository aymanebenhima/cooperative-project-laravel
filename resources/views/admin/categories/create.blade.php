@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')

        <div class="panel panel-default">
            <div class="panel-heading">Create a new category</div>
            <div class="panel-body">
                <form action="{{ route('category.store')}}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Store category</button>
                    </div>
                    
                </form>
            </div>
        </div>

@endsection
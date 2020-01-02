@extends('layouts.app')

@section('content')

  @include('admin.includes.errors') 

        <div class="panel panel-default">
            <div class="panel-heading">Create a new user</div>
            <div class="panel-body">
                <form action="{{ route('user.store')}}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                      <label for="title">Name</label>
                      <input type="text" name="name" id="" class="form-control" placeholder="your name" aria-describedby="helpId">
                      <small id="helpId" class="text-muted">put name of user</small>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelpId" placeholder="add email">
                        <small id="emailHelpId" class="form-text text-muted">Email</small>
                    </div>

                    <div class="form-group">
                        <div class="text-center">
                            <button type="submit" class="btn btn-success">Add user</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

@endsection
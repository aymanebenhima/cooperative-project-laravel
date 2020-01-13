@extends('layouts.app')

@section('content')

  @include('admin.includes.errors') 

        <div class="panel panel-default">
            <div class="panel-heading">Edit your profile</div>
            <div class="panel-body">
                <form action="{{ route('user.profile.update')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                      <label for="username">Username</label>
                    <input type="text" name="name" value="{{ $user->name }}" id="username" class="form-control" placeholder="your name" aria-describedby="username">
                      <small id="username" class="text-muted">put name of your new username</small>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" aria-describedby="email" value="{{ $user->email }}">
                        <small id="email" class="form-text text-muted">Email</small>
                    </div>

                    <div class="form-group">
                        <label for="password">New Password</label>
                        <input type="password" class="form-control" name="password" id="password" aria-describedby="password" placeholder="Your password">
                        
                    </div>

                    <div class="form-group">
                      <label for="about">About you</label>
                      <textarea class="form-control" name="about" id="about" rows="6">{{$user->profile->about}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="avatar">Upload new avatar</label>
                        <input type="file" class="form-control" name="avatar" id="avatar" aria-describedby="avatar">
                    </div>

                    <div class="form-group">
                        <label for="facebook">Facebook</label>
                    <input type="text" class="form-control" name="facebook" id="facebook" aria-describedby="facebook" value="{{ $user->profile->facebook }}">
                        <small id="facebook" class="form-text text-muted">your facebook account</small>
                    </div>

                    <div class="form-group">
                        <label for="facebook">WhatsApp number</label>
                        <input type="number" class="form-control" name="whatsapp" id="whatsapp" aria-describedby="whatsapp" value="{{ $user->profile->whatsapp }}">
                        <small id="facebook" class="form-text text-muted">your WhatsApp number</small>
                    </div>

                    <div class="form-group">
                        <div class="text-center">
                            <button type="submit" class="btn btn-success">Update profile</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

@endsection
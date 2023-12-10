@extends('layouts.admin.app')

@section('title', 'Users List')

@section('content')
<div class="container">
    <a href="/users" class="btn btn-primary mb-3">BACK</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="#">NAME</label>
                    <input type="text" name="name" class="form-control" value="{{ $user->name }}" placeholder="Enter the name ...">
                </div>
                @error('name')
                    <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="#">EMAIL</label>
                    <input type="text" name="email" class="form-control" value="{{ $user->email }}" placeholder="Enter the emal ...">
                </div>
                @error('email')
                    <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="#">NEW PASSWORD</label>
                    <p>Leave it blank if you don't want to change the password.</p>
                    <input type="password" name="password" class="form-control" placeholder="Enter the password ...">
                </div>
                @error('password')
                    <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="#">VERIFY ACCOUNT</label>
                    @if(!$user->hasVerifiedEmail())
                        <p>
                            User account has not been verified.
                            <a href="{{ route('verification.verify', ['id' => $user->id, 'remember_token' => $user->remember_token, 'source' => 'admin_dashboard']) }}">
                                Click here if you want to verify
                            </a>
                        </p>
                    @else
                        <p>User account has been verified.</p>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary btn-block">SUBMIT</button>
            </form>
        </div>
    </div>
</div>
@endsection
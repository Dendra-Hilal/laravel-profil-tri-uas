@extends('layouts.admin.app')

@section('title', 'Users List')

@section('content')
<div class="container">
    <a href="/users" class="btn btn-primary mb-3">BACK</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="#">NAME</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter the name ...">
                </div>
                @error('name')
                    <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="#">EMAIL</label>
                    <input type="text" name="email" class="form-control" placeholder="Enter the emal ...">
                </div>
                @error('email')
                    <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="#">PASSWORD</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter the password ...">
                </div>
                @error('password')
                    <small style="color: red">{{ $message }}</small>
                @enderror
                <button type="submit" class="btn btn-primary btn-block">SUBMIT</button>
            </form>
        </div>
    </div>
</div>
@endsection
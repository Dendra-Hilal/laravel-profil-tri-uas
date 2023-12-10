@extends('layouts.admin.app')

@section('title', 'Data Mahasiswa')

@section('content')
<div class="container">
    <a href="/students" class="btn btn-primary mb-3">BACK</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="#">IMAGE</label>
                    <input type="file" name="image" class="form-control">
                </div>
                @error('image')
                    <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="#">NAME</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter the name ...">
                </div>
                @error('name')
                    <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="#">SEMESTER</label>
                    <input type="text" name="semester" class="form-control" placeholder="Enter the semester ...">
                </div>
                @error('semester')
                    <small style="color: red">{{ $message }}</small>
                @enderror
                <button type="submit" class="btn btn-primary btn-block">SUBMIT</button>
            </form>
        </div>
    </div>
</div>
@endsection
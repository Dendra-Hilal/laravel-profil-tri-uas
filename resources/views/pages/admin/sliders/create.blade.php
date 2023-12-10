@extends('layouts.admin.app')

@section('title', 'Data Slider')

@section('content')
<div class="container">
    <a href="/sliders" class="btn btn-primary mb-3">BACK</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('sliders.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="#">TITLE</label>
                    <input type="text" name="title" class="form-control" placeholder="Enter the title ...">
                </div>
                @error('title')
                    <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="#">DESCRIPTION</label>
                    <textarea name="description" cols="30" rows="10" class="form-control" placeholder="Enter the description ..."></textarea>
                </div>
                @error('description')
                    <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="#">IMAGE</label>
                    <input type="file" name="image" class="form-control">
                </div>
                @error('image')
                    <small style="color: red">{{ $message }}</small>
                @enderror
                <button type="submit" class="btn btn-primary btn-block">SUBMIT</button>
            </form>
        </div>
    </div>
</div>
@endsection
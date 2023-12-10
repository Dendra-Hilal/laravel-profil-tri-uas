@extends('layouts.admin.app')

@section('title', 'Categories List')

@section('content')
<div class="container">
    <a href="/category" class="btn btn-primary mb-3">BACK</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="#">NAME</label>
                    <input type="text" name="name" class="form-control" value="{{ $category->name }}" placeholder="Enter the name ...">
                </div>
                @error('name')
                    <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="#">SLUG</label>
                    <input type="text" name="slug" class="form-control" value="{{ $category->slug }}" placeholder="Enter the slug ...">
                </div>
                @error('slug')
                    <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="#">TITLE</label>
                    <input type="text" name="title" class="form-control" value="{{ $category->title }}" placeholder="Enter the title ...">
                </div>
                @error('title')
                    <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="#">KEYWORDS</label>
                    <input type="text" name="keywords" class="form-control" value="{{ $category->keywords }}" placeholder="Enter the keywords ...">
                </div>
                @error('keywords')
                    <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="#">DESCRIPTION</label>
                    <textarea name="description" cols="30" rows="10" class="form-control" placeholder="Enter the description ...">{{ $category->description }}</textarea>
                </div>
                @error('description')
                    <small style="color: red">{{ $message }}</small>
                @enderror
                <button type="submit" class="btn btn-primary btn-block">SUBMIT</button>
            </form>
        </div>
    </div>
</div>
@endsection
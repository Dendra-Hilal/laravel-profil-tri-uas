@extends('layouts.admin.app')

@section('title', 'Data Sliders')

@section('content')
<div class="container">
    <a href="/sliders/create" class="btn btn-primary mb-3">ADD DATA</a>
    @include('auth.message')
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr class="text-center">
                    <th style="width: 5%">No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th style="width: 15%">Image</th>
                    <th style="width: 15%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sliders as $slider)
                    <tr class="text-center">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $slider->title }}</td>
                        <td>{{ $slider->description }}</td>
                        <td>
                            <img src="/image/{{ $slider->image }}" alt="image" class="
                            img-fluid" width="100">
                        </td>
                        <td>
                            <a href="{{ route('sliders.edit', $slider->id) }}" class="btn btn-warning">EDIT</a>
                            <form action="{{ route('sliders.destroy', $slider->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">DELETE</button>
                            </form>
                        </td>
                    </tr>                    
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
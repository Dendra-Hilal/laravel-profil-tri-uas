@extends('layouts.admin.app')

@section('title', 'Data Mahasiswa')

@section('content')
<div class="container">
    <a href="/students/create" class="btn btn-primary mb-3">ADD DATA</a>
    @include('auth.message')
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr class="text-center">
                    <th style="width: 5%">No</th>
                    <th style="width: 15%">Image</th>
                    <th style="width: 40%">Name</th>
                    <th scope="col">Semester</th>
                    <th style="width: 17%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr class="text-center">
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <img src="/image/{{ $student->image }}" alt="image" class="img-fluid" width="100">
                        </td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->semester }}</td>
                        <td>
                            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">EDIT</a>
                            <form action="{{ route('students.destroy', $student->id) }}" method="POST">
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
@extends('layouts.main')
@section('content')
    <div>{{ $employee->id }}. {{ $employee->name }}</div>
    <div>{{ $employee->phone_number }}</div>
    <div>{{ $employee->passport_id}}</div>
    <div>{{ $employee->position}}</div>
    <div>{{ $employee->salary }}</div>

    <a href="{{ route('employee.edit', $employee->id) }}" class="btn btn-success mb-3" >Изменить</a>
    <form action="{{ route('employee.delete', $employee->id) }}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Delete" class="btn btn-danger">
    </form>
@endsection
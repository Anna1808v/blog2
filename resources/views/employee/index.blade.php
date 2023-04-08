@extends('layouts.main')
@section('content')
<a href="{{ route('employee.create') }}" class="btn btn-success mb-3" >Добавить</a>
    @foreach($employees as $employee)
        <div><a href="{{ route('employee.show', $employee->id) }}">{{ $employee->id }}. {{ $employee->name }}</a></div>
    @endforeach
@endsection
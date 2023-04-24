@extends('layoutsi.main')
@section('content')
    <div>Имя: {{ $employee->id }}. {{ $employee->name }}</div>
    <div>Номер телефона: {{ $employee->phone_number }}</div>
    <div>Паспорт ID: {{ $employee->passport_id}}</div>
    <div>Должность: {{ $employee->position}}</div>
    <div>Зарплата: {{ $employee->salary }}</div>
    <div>Отдел: {{ $employee->department->title }}</div>
    <div>Города: 
        @foreach($employee->cities as $employeeCity)
           {{ $employeeCity->title }} 
        @endforeach
    </div>

    <a href="{{ route('employee.edit', $employee->id) }}" class="btn btn-success mb-3" >Изменить</a>
    <form action="{{ route('employee.delete', $employee->id) }}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Delete" class="btn btn-danger">
    </form>
@endsection
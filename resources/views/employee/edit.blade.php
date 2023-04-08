@extends('layouts.main')
@section('content')
<div>
  <form action="{{ route('employee.update', $employee->id) }}" method="post">
    @csrf
    @method('patch')
    <div class="mb-3">
      <label for="name" class="form-label">Имя</label>
      <input type="text" name="name" class="form-control" id="name" value="{{ $employee->name }}">
    </div>
    <div class="mb-3">
      <label for="phone_number" class="form-label">Телефон</label>
      <input type="text" name="phone_number" class="form-control" id="phone_number" value="{{ $employee->phone_number }}">
    </div>
    <div class="mb-3">
      <label for="passport_id" class="form-label">ID паспорта</label>
      <input type="text" name="passport_id" class="form-control" id="passport_id" value="{{ $employee->passport_id }}">
    </div>
    <div class="mb-3">
      <label for="position" class="form-label">Должность</label>
      <input type="text" name="position" class="form-control" id="position" value="{{ $employee->position }}">
    </div>
    <div class="mb-3">
      <label for="salary" class="form-label">Зарплата</label>
      <input type="number" name="salary" class="form-control" id="salary" value="{{ $employee->salary }}">
    </div>
    <button type="submit" class="btn btn-primary mb-3">Внести изменения</button>
  </form>
</div> 
@endsection
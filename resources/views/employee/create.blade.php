@extends('layouts.main')
@section('content')
<div>
  <form action="{{ route('employee.store') }}" method="post">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Имя</label>
      <input type="text" name="name" class="form-control" id="name">
    </div>
    <div class="mb-3">
      <label for="phone_number" class="form-label">Телефон</label>
      <input type="text" name="phone_number" class="form-control" id="phone_number">
    </div>
    <div class="mb-3">
      <label for="passport_id" class="form-label">ID паспорта</label>
      <input type="text" name="passport_id" class="form-control" id="passport_id">
    </div>
    <div class="mb-3">
      <label for="position" class="form-label">Должность</label>
      <input type="text" name="position" class="form-control" id="position">
    </div>
    <div class="mb-3">
      <label for="salary" class="form-label">Зарплата</label>
      <input type="number" name="salary" class="form-control" id="salary">
    </div>
    <button type="submit" class="btn btn-primary mb-3">Добавить</button>
  </form>
</div> 
@endsection
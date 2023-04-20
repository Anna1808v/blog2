@section('content')
<div>
    <form action="
        {{ isset($employee->id) ? route('employee.update', $employee->id) : route('employee.store') }}
    " method="post">
    @csrf 

    @if(isset($employee->id)) 
        @method('patch')
    @else
        {{ '' }}
    @endif

    <div class="mb-3">
      <label for="name" class="form-label">Имя</label>
      <input type="text" name="name" class="form-control" id="name" value="{{ isset($employee) ? $employee->name : '' }}">
    </div>
    <div class="mb-3">
      <label for="phone_number" class="form-label">Телефон</label>
      <input type="text" name="phone_number" class="form-control" id="phone_number" value="{{ isset($employee) ? $employee->phone_number : '' }}">
    </div>
    <div class="mb-3">
      <label for="passport_id" class="form-label">ID паспорта</label>
      <input type="text" name="passport_id" class="form-control" id="passport_id" value="{{ isset($employee) ? $employee->passport_id : '' }}">
    </div>
    <div class="mb-3">
      <label for="position" class="form-label">Должность</label>
      <input type="text" name="position" class="form-control" id="position" value="{{ isset($employee) ? $employee->position : '' }}">
    </div>
    <div class="mb-3">
      <label for="salary" class="form-label">Зарплата</label>
      <input type="number" name="salary" class="form-control" id="salary" value="{{ isset($employee) ? $employee->salary : '' }}">
    </div>
    <div class="form-group">
        <select class="form-control" aria-label="Отдел" id="department" name="department_id">
            @foreach($departments as $department)
                <option 
                    @if(isset($employee))
                        {{ $department->id == $employee->department->id ? ' selected' : ''}}
                        value="{{ $department->id }}">{{ $department->title }}
                    @else
                        id="{{ $department->id }}">{{ $department->title }}
                    @endif
                </option>
            @endforeach
        </select>
    </div>    
    <button type="submit" class="btn btn-primary mb-3">Внести изменения</button>
  </form>
</div> 
@endsection
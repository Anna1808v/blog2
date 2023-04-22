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
      
      @error('name')
        <p class="text-danger">{{ $message }}</p>
      @enderror
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
      <label for="department" class="form-label">Отдел</label>
        <select class="form-control" id="department" name="department_id">
            @foreach($departments as $department)
                <option 
                    @if(isset($employee))
                        {{ $department->id == $employee->department->id ? ' selected' : ''}}
                    @endif
                    value="{{ $department->id }}">{{ $department->title }}  
                </option>
            @endforeach
        </select>
    </div>    
    <div class="form-group">
      <label for="city" class="form-label">Город</label>
      <select class="form-control" multiple aria-label="multiple select example" id="cities" name="cities[]">
        @foreach($cities as $city)
          <option
            @if(isset($employee))
              @foreach($employee->cities as $employeeCity)   
                {{ $city->id == $employeeCity->id ? ' selected' : '' }}
              @endforeach
            @endif
              value="{{ $city->id }}">{{ $city->city_name }}             
          </option>
        @endforeach    
      </select>
    </div>
    <button type="submit" class="btn btn-primary mb-3">Внести изменения</button>
  </form>
</div> 
@endsection
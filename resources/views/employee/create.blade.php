@extends('layouts.app')

@section('content')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h3>Add Employee</h3>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('employee.store') }}">
        @csrf
          <div class="form-group">    
              <label for="firstname">First Name:</label>
              <input type="text" class="form-control" name="firstname"/>
          </div>
          <div class="form-group">    
              <label for="lastname">Last Name:</label>
              <input type="text" class="form-control" name="lastname"/>
          </div>
          <div class="form-group">    
              <label for="company">Company:</label>
              <select class="form-control" name="company">
                @foreach($companies as $company)
                  <option value="{{ $company->id }}">{{ $company->name }}</option>
                @endforeach
              </select>
          </div>
          <div class="form-group">
              <label for="email">Email:</label>
              <input type="text" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="phone">Phone:</label>
              <input type="text" class="form-control" name="phone"/>
          </div>         
          <button type="submit" class="btn btn-primary float-right">Add employee</button>
      </form>
  </div>
</div>
</div>
@endsection
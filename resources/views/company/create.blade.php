@extends('layouts.app')

@section('content')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h3>Add Company</h3>
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
      <form method="post" action="{{ route('company.store') }}">
        @csrf
          <div class="form-group">    
              <label for="name">Company Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="email">Email:</label>
              <input type="text" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="country">Website:</label>
              <input type="text" class="form-control" name="website"/>
          </div> 
          <div class="form-group">
              <label for="logo">Logo:</label>
              <input type="file" class="form-control-file" name="logo"/>
          </div>          
          <button type="submit" class="btn btn-primary float-right">Add company</button>
      </form>
  </div>
</div>
</div>
@endsection
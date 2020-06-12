@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-sm-12">
                @if(session()->get('success'))
                    <div class="alert alert-success">
                    {{ session()->get('success') }}  
                    </div>
                @endif
            </div>
            <div class="col-md-12">
                <h3>List of Companies <a href="/company/create" class="btn btn-info float-right">Add Company</a></h3>
            </div>
            <div class="col-md-12">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr style="text-align: center">
                            <td>Name</td>
                            <td>Email</td>
                            <td>Website</td>
                            <td>Actions</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($companies as $company)
                        <tr>
                            <td>{{$company->name}}</td>
                            <td>{{$company->email}}</td>
                            <td>{{$company->website}}</td>
                            <td style="text-align: center">
                                    <form action="{{ route('company.destroy', $company->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('employee.index') }}" class="btn btn-success float-right">List</a>
                                        <a href="{{ route('company.edit', $company->id) }}" class="btn btn-info float-right">Edit</a>
                                        <button type="submit" class="btn btn-danger float-right">Delete</button>
                                    </div>
                                    </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </div>
@endsection
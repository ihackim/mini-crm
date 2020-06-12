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
                <h3>Employees of {company} <a href="/employee/create" class="btn btn-info float-right">Add Employee</a></h3>
            </div>
            <div class="col-md-12">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr style="text-align: center">
                            <td>Name</td>
                            <td>Company</td>
                            <td>Email</td>
                            <td>Phone</td>
                            <td>Actions</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($employees as $employee)
                        <tr>
                            <td>{{$employee->firstname .' '. $employee->lastname }}</td>
                            <td>
                                {{ $employee->name->name }}
                            </td>
                            <td>{{ $employee->email }}</td>
                            <td>{{ $employee->phone }}</td>
                            <td style="text-align: center">
                                    <form action="{{ route('employee.destroy', $employee->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('employee.edit', $employee->id) }}" class="btn btn-info float-right">Edit</a>
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
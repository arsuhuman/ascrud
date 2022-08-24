@extends('employees.layout')
 
@section('content')
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Employee</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('employees.create') }}"> Add Employee</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Age</th>
            <th>City</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($data as $key => $employees)
        <tr>
            <td>{{ $employees->id }}</td>
            <td>{{ $employees->name }}</td>
            <td>{{ $employees->age }}</td>
            <td>{{ $employees->city }}</td>
            <td>
                <form action="{{ route('employees.destroy',$employees->id) }}" method="POST">   
                    <a class="btn btn-info" href="{{ route('employees.show',$employees->id) }}">Show</a>    
                    <a class="btn btn-primary" href="{{ route('employees.edit',$employees->id) }}">Edit</a>   
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>  
    {!! $data->links() !!}      
@endsection
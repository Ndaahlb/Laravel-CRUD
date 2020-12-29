@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <br />
        <h3 class="display-5 text-center">Update Student Details</h3>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('students.update', $students->id) }}">
            @method('PATCH') 
            @csrf
            
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" value="{{ $students->name }}">
            </div>
            <div class="form-group">
                <label for="matric_no">Matric no</label>
                <input type="text" class="form-control" name="matric_no" value="{{ $students->matric_no }}">
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <input type="text" class="form-control" name="gender" value="{{ $students->gender }}">
            </div>
            <div class="form-group">
                <label for="date_of_birth">DOB</label>
                <input type="text" class="form-control" name="date_of_birth" value="{{ $students->date_of_birth }}">
            </div>
            <div class="form-group">
                <label for="citizenship">Citizenship</label>
                <input type="text" class="form-control" name="citizenship" value="{{ $students->citizenship }}">
            </div>
            <div class="form-group">
                <label for="marital_status">Marital status</label>
                <input type="text" class="form-control" name="marital_status" value="{{ $students->marital_status }}">
            </div>
            <div class="form-group">
                <label for="religion">Religion</label>
                <input type="text" class="form-control" name="religion" value="{{ $students->religion }}">
            </div>
            <div class="form-group">
                <label for="active_status">Active status</label>
                <input type="text" class="form-control" name="active_status" value="{{ $students->active_status }}">
            </div>
            <div class="form-group">
                <label for="year_of_study">year of study</label>
                <input type="text" class="form-control" name="year_of_study" value="{{ $students->year_of_study }}">
            </div>
            <div class="form-group">
                <label for="id_no">Id no</label>
                <input type="text" class="form-control" name="id_no" value="{{ $students->id_no }}">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" value="{{ $students->email }}">
            </div>
            <div class="text-center">
            <a href="{{ route('students.index')}}" class="btn btn-primary">Return</a>&nbsp;&nbsp;    
            <button type="submit" class="btn btn-primary">Update Details</button>
            </div>
        </form>
    </div>
</div>
@endsection

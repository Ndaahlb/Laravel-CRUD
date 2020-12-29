@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <br />
        <h3 class="display-5 text-center">Student Details</h3>
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
        /**
     *  $table->bigIncrements('id');
     *  $table->string('name');
     *  $table->integer('matric_no');
     *  $table->string('gender');
     *  $table->date('date_of_birth');
     *  $table->string('citizenship');
     *  $table->string('marital_status');
     *  $table->string('religion');
     *  $table->string('active_status');
     *  $table->integer('year_of_study');
     *  $table->string('id_no');
     *  $table->string('email');
     *  $table->timestamps();
     */
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" value="{{ $student->name }}" readonly>
            </div>
            <div class="form-group">
                <label for="matric_no">Matric_no</label>
                <input type="text" class="form-control" name="matric_no" value="{{ $student->matric_no }}" readonly>
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <input type="text" class="form-control" name="gender" value="{{ $student->gender }}" readonly>
            </div>
            <div class="form-group">
                <label for="date_of_birth">DOB</label>
                <input type="text" class="form-control" name="date_of_birth" value="{{ $student->date_of_birth }}" readonly>
            </div>
            <div class="form-group">
                <label for="citizenship">Citizenship</label>
                <input type="text" class="form-control" name="citizenship" value="{{ $student->citizenship }}" readonly>
            </div>
            <div class="form-group">
                <label for="marital_status">Marital status</label>
                <input type="text" class="form-control" name="marital_status" value="{{ $student->marital_status }}" readonly>
            </div>
            <div class="form-group">
                <label for="religion">Religion</label>
                <input type="text" class="form-control" name="religion" value="{{ $student->religion }}" readonly>
            </div>
            <div class="form-group">
                <label for="active_status">Active_status</label>
                <input type="text" class="form-control" name="active_status" value="{{ $student->active_status }}" readonly>
            </div>
            <div class="form-group">
                <label for="year_of_study">Year of study</label>
                <input type="text" class="form-control" name="year_of_study" value="{{ $student->year_of_study }}" readonly>
            </div>
            <div class="form-group">
                <label for="id_no">Passport no</label>
                <input type="text" class="form-control" name="id_no" value="{{ $student->id_no }}" readonly>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" value="{{ $student->email }}" readonly>
            </div>
            </form>
            <div class="text-center">
            <a href="{{ route('students.index')}}" class="btn btn-primary">Return</a>&nbsp;&nbsp;    
            </div>
    </div>
</div>
@endsection

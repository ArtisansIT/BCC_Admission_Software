@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <br>
            <div class="col-md-6 col-md-offset-3">
                <h1>New Student</h1>

              @include('admin/massages/massage')

               @include('admin/massages/error')
            <form role="form" action="{{ route('student.form.submit') }}" method="post">
             {{ csrf_field() }}
             {{ method_field('') }}
                <div class="form-group">
                  <label for="name">Name </label>
                  <input type="text" class="form-control"  name="name" id="name" 
                   placeholder="Enter Your Name">
                </div>

                <div class="form-group">
                  <label for="shift_time">SL. No.</label>
                  <input type="number" class="form-control"  name="serial_no" id="shift_time" 
                   placeholder=" 1 ,2 ,3 ,4 ">
                </div>

                <div class="form-group">
                  <label for="ssc_grade">SSC GPA</label>
                  <input type="text" class="form-control"  name="ssc_grade" id="ssc_grade" 
                   placeholder=" 5.00 ..">
                </div>

                <div class="form-group">
                  <label for="hsc_grade">HSC GPA</label>
                  <input type="text" class="form-control"  name="hsc_grade" id="hsc_grade" 
                   placeholder=" 5.00 ...">
                </div>

                <div class="form-group">
                    <label>Select Your Last Educational Status</label>
                    <select class="form-control" name="last_degree">
                        <option active>select One</option>
                        @foreach ($lastDegree as $data)

                        <option value="{{ $data->name }}">{{ $data->name }}</option>
                        @endforeach

                    </select>
                </div>
                <input type="hidden" value="{{ $batch->id }}" name="batch_id"/>
                
                
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
@endsection
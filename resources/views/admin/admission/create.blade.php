@extends('admin.master')

@section('mainContent')
    <div class="container">
        <div class="row">
            <br>
            <div class="col-md-6 col-md-offset-3">
                <h1>New Student</h1>

              @include('admin/massages/massage')

               @include('admin/massages/error')
            <form role="form" action="{{ route('admin.batch.store') }}" method="post">
             {{ csrf_field() }}
             {{ method_field('') }}
                <div class="form-group">
                  <label for="name">Name </label>
                  <input type="text" class="form-control"  name="name" id="name" 
                   placeholder="ICAP - 200">
                </div>

                <div class="form-group">
                  <label for="shift_time">SL. No.</label>
                  <input type="number" class="form-control"  name="shift_time" id="shift_time" 
                   placeholder=" Ex : Morning">
                </div>

                <div class="form-group">
                  <label for="shift_time">SSC CGPA</label>
                  <input type="number" class="form-control"  name="shift_time" id="shift_time" 
                   placeholder=" Ex : Morning">
                </div>
                <div class="form-group">
                  <label for="shift_time">HSC CGPA</label>
                  <input type="number" class="form-control"  name="shift_time" id="shift_time" 
                   placeholder=" Ex : Morning">
                </div>

                <div class="form-group">
                    <label>Select Your Last Educational Status</label>
                    <select class="form-control" name="last_degree">
                        <option active>select One</option>
                        @foreach ($category as $data)

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
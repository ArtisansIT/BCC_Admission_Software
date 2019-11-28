@extends('admin.master')

@section('mainContent')
    <div class="container">
        <div class="row">
            <br>
            <div class="col-md-6 col-md-offset-3">
                <h1>New Batch</h1>

              @include('admin/massages/massage')

               @include('admin/massages/error')
            <form role="form" action="{{ route('admin.batch.store') }}" method="post">
             {{ csrf_field() }}
             {{ method_field('') }}
                <div class="form-group">
                  <label for="name">Create a New Batch </label>
                  <input type="text" class="form-control"  name="name" id="name" 
                   placeholder="ICAP - 200">
                </div>

                <div class="form-group">
                  <label for="shift_time">Batch Time Shift</label>
                  <input type="text" class="form-control"  name="shift_time" id="shift_time" 
                   placeholder=" Ex : Morning">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
@endsection
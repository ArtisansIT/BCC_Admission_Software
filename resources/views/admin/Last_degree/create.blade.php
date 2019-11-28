@extends('admin.master')

@section('mainContent')
    <div class="container">
        <div class="row">
            <br>
            <div class="col-md-6 col-md-offset-3">
                <h1>New Batch</h1>

              @include('admin/massages/massage')

               @include('admin/massages/error')
            <form role="form" action="{{ route('admin.Last-degree.store') }}" method="post">
             {{ csrf_field() }}
             {{ method_field('') }}
                <div class="form-group">
                  <label for="exampleInputEmail1">Create a New Last Degree </label>
                  <input type="text" class="form-control"  name="name" id="exampleInputEmail1" 
                   placeholder=" EX : HSC,Hon's,Master's ">
                </div>

               
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
@endsection
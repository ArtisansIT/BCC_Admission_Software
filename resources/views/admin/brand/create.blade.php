@extends('admin.master')

@section('mainContent')
    <div class="container">
        <div class="row">
            <br>
            <div class="col-md-6 col-md-offset-3">
                <h1>Brand Create</h1>

              @include('admin/massages/massage')

               @include('admin/massages/error')
            <form role="form" action="" method="post">
             {{ csrf_field() }}
             {{ method_field('') }}
                <div class="form-group">
                  <label for="exampleInputEmail1">Create brand</label>
                  <input type="text" class="form-control"  name="name" id="exampleInputEmail1" 
                   placeholder="New brand">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
@endsection
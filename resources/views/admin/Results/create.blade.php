@extends('admin.master')

@section('mainContent')
    <div class="container">
        <div class="row">
            <br>
            <div class="col-md-6 col-md-offset-3">
                <h1>Brand Create</h1>

              @include('admin/massages/massage')

               @include('admin/massages/error')
               
            <form role="form" action="{{ route('admin.Result.store') }}" method="post">
             {{ csrf_field() }}
             {{ method_field('') }}
                <div class="form-group">
                  <label for="gpa_start"> Enter a GPA </label>
                  <input type="text" class="form-control" @if(empty($result->gpa_end))  placeholder="Ex - 5.00" @else value="{{ $result->gpa_end + .01 }}"  @endif   name="gpa_start" id="gpa_start" 
                  >
                </div>
                <div class="form-group">
                  <label for="GPA"> Enter a GPA </label>
                  <input type="text" class="form-control"  name="gpa_end" id="GPA" 
                   placeholder="Ex - 5.00">
                </div>

                <div class="form-group">
                  <label for="mark"> Enter Mark Against The GPA</label>
                  <input type="text" class="form-control"  name="mark" id="mark" 
                   placeholder="Ex - 10">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
@endsection
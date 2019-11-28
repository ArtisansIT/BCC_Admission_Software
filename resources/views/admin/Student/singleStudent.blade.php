@extends('admin.master')

@section('mainContent')
<div class="row">
  <div class="col-xs-5">
    <div class="box">
      <div class="box-header">
        <h1 class="">
          <span class="text-success">Name: </span>
          <span class="text-danger"> {{ $student->name }}</span>
        </h1>

      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
          <tr>
            <th>Property</th>
            <th>Value</th>
          </tr>
          <tr>
            <td>ID :</td>
            <td>{{ $student->serial_no }}</td>
          </tr>
          <tr>
            <td>SSC GPA :</td>
            <td>{{ $student->ssc_grade }}</td>
          </tr>
          <tr>
            <td>HSC GPA :</td>
            <td>{{ $student->hsc_grade }}</td>
          </tr>
          <tr>
            <td>Last Study Field :</td>
            <td>{{ $student->last_degree }}</td>
          </tr>
          <tr>
            <td>SSC Mark :</td>
            <td>{{ $student->ssc_mark }}</td>
          </tr>
          <tr>
            <td>HSC Mark :</td>
            <td>{{ $student->hsc_mark }}</td>
          </tr>
          
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
  <div class="col-xs-4 col-offset-xs-2">
    <br>
  <div class="">
      <form role="form" action="{{ route('admin.complete_calculation',$student->id) }}" method="post">
          {{ csrf_field() }}
          {{ method_field('PUT') }}
             

             <div class="form-group">
               <label for="mark"> Enter Viva Mark </label>
               <input type="number" class="form-control"  name="viva_mark" id="mark" 
                placeholder="Ex - 10">
             </div>
             
             <button type="submit" class="btn btn-primary">Submit</button>
         </form>
  </div>
  </div>
  </div>
@endsection


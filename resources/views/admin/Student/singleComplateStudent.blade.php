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
                    <tr>
                        <td>Viva Mark :</td>
                        <td>{{ $student->viva_mark }}</td>
                    </tr>
                    <tr>
                        <td>Total Mark :</td>
                        <td>{{ $student->total }}</td>
                    </tr>

                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>

</div>
@endsection

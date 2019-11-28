@extends('admin.master')
@section('headerContent')
<link rel="stylesheet"
    href="{{ asset('admin/css/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection
@section('mainContent')
<div class="box">
    @if (count($allStudent )<1) <h1>There is No data</h1>

        @else

        <div class="box-header">
            @include('admin.massages.massage')
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <form action="{{ route('admin.complete_student_admission') }}" method="POST">
                @csrf
                @method('')
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>S.L No</th>
                            <th>Name</th>
                            <th>Edit(s)</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($allStudent as $data)
                        <tr>
                            <td>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="{{ $data->id }}" name="completeAdmission[]">
                                        {{ $loop->index+1 }}
                                    </label>
                                </div>


                            </td>
                            <td>
                                <p>
                                    <a href="{{ route('admin.single_complete_student',$data->id) }}">

                                        <span>{{ $data->name }}</span>
                                    </a>
                                    {{-- <span class="badge">{{ $data->students->count() }}</span> --}}
                                </p>
                            </td>
                            <td><a href="{{ route('admin.single_complete_student', $data->id) }}"><i
                                        class="fa fa-edit"></i></a></td>


                        </tr>
                        @endforeach


                    </tbody>
                    <tfoot>
                        <tr>
                            <th>S.L No</th>
                            <th>Name</th>
                            <th>Edit(s)</th>

                        </tr>
                    </tfoot>
                </table>
                <input type="submit" value="OK" class="btn btn-info">
            </form>
        </div>

        @endif

        <!-- /.box-body -->
</div>
@endsection

@section('footerContent')
<script src="{{ asset('admin/css/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/css/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>

<script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': false,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    })

</script>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center pt-5">
        <h1>Welcome To BCC Admission System</h1>
    </div>
    <div class="row justify-content-center">

        @foreach ($batchs as $batch)
            
        <div class="col-md-4 p-5">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    
                    <a href="{{ route('student.view.form',$batch->id) }}" class="card-link">
                        
                        <h1 class="card-title">{{ $batch->name }}</h1>
                        <h4 class="card-subtitle mb-2 text-muted">{{ $batch->shift_time }}</h4>

                  </a>
                </div>
                
              </div>
        </div>
        @endforeach
        <br>
    </div>
</div>
@endsection


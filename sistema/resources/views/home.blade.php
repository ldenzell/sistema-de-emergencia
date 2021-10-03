@extends('layouts.admin')
@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        
               <!--  <div class="card-header">asdasd</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div> -->
                <img src="{{ URL::to('/assets/img/loginemergencia.jpg') }}" width="500px" heigh="200px">
            
        </div>
    </div>
</div>
@endsection

@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <h3>Nuevo Paciente</h3>
            @if (count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <form action="{{ route('paciente.create') }}">
                @include('paciente.form')
            </form>
        </div>
    </div>
@endsection
@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <h3>Editar Paciente: {{ $paciente->nombres }} {{ $paciente->paterno }}</h3>
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
            <form action="{{ route('paciente.update',$paciente->id) }}" method="POST">
                @method('PATCH')
                @include('paciente.form')
            </form>
		</div>
    </div>
@endsection
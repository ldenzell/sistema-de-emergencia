@extends ('layouts.admin')
@section ('contenido')
    @push('styles')
        {!! $map['js'] !!}
    @endpush
    <br>
    <div class="container" style="margin-left: -5px">
        <h3>Ubicación Paciente: {{ $emergencia->paciente->nombre_completo }}</h3>
    </div>
    <br>
    {!! $map['html'] !!}
    <br>
    <div class="container" style="margin-left: -5px">
        <a class="btn btn-primary" href="{{ route('emergencia.index') }}">Inicio</a>
    </div>
@endsection
@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3>Listado de Seguimientos
                <a href="{{ route('seguimiento.create')  }}" class="btn btn-success">Nuevo</a>
            </h3>
            @include('seguimiento.search')
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-condensed table-hover" >
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Paciente</th>
                            <th>Carnet Identidad</th>
                            <th>Alergias</th>
                            <th>Descripcion del paciente</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($seguimientos))
                            @foreach ($seguimientos as $seguimiento)
                                <tr>
                                    <td>{{ $seguimiento->id }}</td>
                                    <td>{{ $seguimiento->nombres }} {{ $seguimiento->paterno }} {{ $seguimiento->materno }}</td>
                                    <td>{{ $seguimiento->ci }} </td>
                                    <td>{{ $seguimiento->alergias }} </td>
                                    <td>{{ $seguimiento->descripcion }} </td>
                                    <td>
                                        <a href="{{ route('seguimiento.edit',$seguimiento->id) }}" class="btn btn-info">Editar</a>
                                    </td>
                                </tr>
                            @endforeach                            
                        @else
                            <tr>
                                <td colspan="6" style="text-align: center;">
									<h2><span class="badge badge-danger">No Existen seguimientos</span></h2>
								</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
                {{ $seguimientos->appends(request()->all())->render() }}
            </div>
        </div>
    </div>
@endsection
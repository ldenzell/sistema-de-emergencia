@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3>Listado de Paramedicos 
                <a href="{{ route('paramedico.create') }}" class="btn btn-success">Nuevo</a>
            </h3>
        @include('paramedico.search')
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table.bordered table-condensed table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Sexo</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($paramedicos))
                            @foreach ($paramedicos as $paramedico)
                                <tr>
                                    <td>{{ $paramedico->id }}</td>
                                    <td>{{ $paramedico->nombre }} </td>
                                    <td>{{ $paramedico->paterno }} </td>
                                    <td>{{ $paramedico->materno }} </td>
                                    <td>{{ $paramedico->sexo }} </td>
                                    <td>
                                        <a href="{{ route('paramedico.edit',$paramedico->id) }}"><button class="btn btn-info">Editar</button></a>
                                        <a data-target="#modal-delete-{{$paramedico->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                                    </td>
                                </tr>
                                @include('paramedico.modal')
                            @endforeach
                        @else
                            <tr>
                                <td colspan="6" style="text-align: center;">
									<h2><span class="badge badge-danger">No Existen Paramedicos</span></h2>
								</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            {{ $paramedicos->appends(request()->all())->render() }}
        </div>
    </div>
@endsection
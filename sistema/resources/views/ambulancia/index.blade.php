@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3>Listado de Ambulancias
                <a href="{{ route('ambulancia.create') }}" class="btn btn-success">Nuevo</a>
            </h3>
        @include('ambulancia.search')
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table.bordered table-condensed table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Placa</th>
                            <th>Tipo</th>
                            <th>Modelo</th>
                            <th>Marca</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($ambulancias))
                            @foreach ($ambulancias as $ambulancia)
                                <tr>
                                    <td>{{ $ambulancia->id}} </td>
                                    <td>{{ $ambulancia->placa}} </td>
                                    <td>{{ $ambulancia->tipo}} </td>
                                    <td>{{ $ambulancia->modelo}} </td>
                                    <td>{{ $ambulancia->marca}} </td>
                                    <td>
                                        <a href="{{ route('ambulancia.edit',$ambulancia->id) }}" class="btn btn-info">Editar</a>
                                        <a href="" data-target="#modal-delete-{{$ambulancia->id}}" data-toggle="modal" class="btn btn-danger">Eliminar</a>
                                    </td>
                                </tr>
                            @include('ambulancia.modal')
                            @endforeach                            
                        @else
                            <tr>
                                <td colspan="6" style="text-align: center;">
									<h2><span class="badge badge-danger">No Existen Ambulancias</span></h2>
								</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            {{ $ambulancias->appends(request()->all())->render() }}
        </div>
    </div>
@endsection
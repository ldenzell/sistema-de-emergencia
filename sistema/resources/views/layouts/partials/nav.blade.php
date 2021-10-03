<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    @if(Auth::user()->rol == 1)
        <!-- SECCION Seguimiento -->
        <li class="nav-item has-treeview">
            <a href="{{ route('seguimiento.index') }}" class="nav-link {{ setActiveRoute(['seguimiento.index','seguimiento.create','seguimiento.edit']) }}">
                <i class="nav-icon fas fa-search"></i>
                <p>
                    Seguimiento del paciente
                </p>
            </a>
        </li>
        <!-- SECCION EMERGENCIA -->
        {{-- <li class="nav-item has-treeview">
            <a href="{{ route('emergencia.index') }}" class="nav-link {{ setActiveRoute(['emergencia.index','emergencia.show']) }}">
                <i class="nav-icon fas fa-hospital-alt"></i>
                <p>
                    Emergencias
                </p>
            </a>
        </li> --}}
    @else
        <!-- SECCION PACIENTE -->
        <li class="nav-item has-treeview">
            <a href="{{ route('paciente.index') }}" class="nav-link {{ setActiveRoute(['paciente.index','paciente.create','paciente.edit']) }}">
                <i class="nav-icon fas fa-user-injured"></i>
                <p>
                    Pacientes
                </p>
            </a>
        </li>
        <!-- SECCION AMBULANCIA -->
        <li class="nav-item has-treeview">
            <a href="{{ route('ambulancia.index') }}" class="nav-link {{ setActiveRoute(['ambulancia.index','ambulancia.create','ambulancia.edit']) }}">
                <i class="nav-icon fas fa-ambulance"></i>
                <p>
                    Ambulancias
                </p>
            </a>
        </li>
        <!-- SECCION PARAMEDICO -->
        <li class="nav-item has-treeview">
            <a href="{{ route('paramedico.index') }}" class="nav-link {{ setActiveRoute(['paramedico.index','paramedico.create','paramedico.edit']) }}">
                <i class="nav-icon fas fa-user-md"></i>
                <p>
                    Paramedicos
                </p>
            </a>
        </li>
        <!-- SECCION Seguimiento -->
        <li class="nav-item has-treeview">
            <a href="{{ route('seguimiento.index') }}" class="nav-link {{ setActiveRoute(['seguimiento.index','seguimiento.create','seguimiento.edit']) }}">
                <i class="nav-icon fas fa-search"></i>
                <p>
                    Seguimiento del paciente
                </p>
            </a>
        </li>
        <!-- SECCION EMERGENCIA -->
        <li class="nav-item has-treeview">
            <a href="{{ route('emergencia.index') }}" class="nav-link {{ setActiveRoute(['emergencia.index','emergencia.show']) }}">
                <i class="nav-icon fas fa-hospital-alt"></i>
                <p>
                    Emergencias
                </p>
            </a>
        </li>
    @endif
</ul>
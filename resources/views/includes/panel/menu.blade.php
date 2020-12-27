<!-- Navigation -->

<h6 class="navbar-heading text-muted">
    @if (auth()->User()->tipo == 'admin') Gestionar datos
    @else 
    Menú
    @endif
</h6>

<ul class="navbar-nav">
    @if (auth()->User()->tipo == 'admin')
        <li class="nav-item">
        <a class="nav-link" href="/home">
            <i class="ni ni-tv-2 text-primary"></i> Dashboard
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="Especialidad">
            <i class="ni ni-planet text-blue"></i> Especialidades
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="/Medico">
            <i class="ni ni-badge text-orange"></i> Medicos
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="/Paciente">
            <i class="archive-2"></i> Pacientes
        </a>
        </li>
                <!-- Medicos -->
        @elseif (auth()->User()->tipo == 'medico')

        <li class="nav-item">
            <a class="nav-link" href="/calendario">
                <i class="ni ni-calendar-grid-58 text-blue"></i> Horario
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/Medico">
                <i class="ni ni-book-bookmark text-orange"></i> Citas
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/Paciente">
                <i class="ni ni-archive-2 text-red"></i> Pacientes
            </a>
            </li>

            @else <!-- Pacientes -->

            <li class="nav-item">
                <a class="nav-link" href="/Medico">
                    <i class="ni ni-book-bookmark text-orange"></i> Reservar cita
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/Paciente">
                    <i class="ni ni-archive-2 text-red"></i> Mis citas
                </a>
                </li>
        
        @endif
        <!-- Divider -->
        <hr class="my-3">

        @if (auth()->User()->tipo == 'admin')
</ul>
<!-- Divider -->
<hr class="my-3">
<!-- Heading -->
<h6 class="navbar-heading text-muted">Reportes</h6>
<!-- Navigation -->
<ul class="navbar-nav mb-md-3">
    <li class="nav-item">
    <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html">
        <i class="ni ni-spaceship"></i> Frecuencia de visitas
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html">
        <i class="ni ni-palette"></i> Medicos mas activos
    </a>
    </li>
  
</ul>
@endif
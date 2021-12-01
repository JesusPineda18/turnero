<li class="side-menus {{ Request::is('Home') ? 'active' : '' }}">
    <a class="nav-link" href="/home">
        <i class=" fas fa-building"></i><span>Home</span>
    </a>
</li>

<li class="dropdown">
    <a href="/professionals" class="nav-link has-dropdown "><i class="fas fa-user-tie"></i><span>Profesionales</span></a>
    <ul class="dropdown-menu" style="display: none;">
        <li><a class="nav-link" href="/professionals">Ver Profesionales</a></li>
        <li><a class="nav-link" href="/professionals/create">Crear Profesional</a></li>
    </ul>
</li>

<li class="dropdown">
    <a href="/professionals" class="nav-link has-dropdown "><i class=" fas fa-users"></i> <span>Usuarios</span></a>
    <ul class="dropdown-menu" style="display: none;">
        <li><a class="nav-link" href="/customers">Ver Usuarios</a></li>
        <li><a class="nav-link" href="/customers/create">Crear Usuarios</a></li>
    </ul>
</li>


<li class="dropdown">
    <a href="/shifts" class="nav-link has-dropdown "><i class="fab fa-shirtsinbulk"></i> <span>Turnos</span></a>
    <ul class="dropdown-menu" style="display: none;">
        <li><a class="nav-link" href="/shifts">Ver Turnos</a></li>
    </ul>
</li>

<li class="side-menus {{ Request::is('screens') ? 'active' : '' }}">
    <a class="nav-link" href="/screens">
        <i class=" fas fa-building"></i><span>Pantalla</span>
    </a>
</li>

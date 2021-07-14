@if($session["group_id"] == 3)
    @php
        $nav = "d-none";
        $route_main = "advisers";
    @endphp
@else
    @php
        $nav = "";
        $route_main = "admin";
    @endphp
@endif
<nav class="navbar navbar-expand-lg bg-light fixed-top" id="mainNav">
    <a class="navbar-brand" href="{{ $route_main }}">Fuerza Maestra</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" 
        data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-caret-square-o-down"></span>
    </button>
    <div class="collapse navbar-collapse bg-light" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav collapsed bg-light {{ $nav }}" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Candidatos">
                <a class="nav-link action-navbar" href="admin/1">
                    <i class="fa fa-fw fa-user-circle"></i>
                    <span class="nav-link-text">Candidatos</span>
                </a>
            </li>
            @if($permissions["m2_user_list"] || $permissions["m2_user_add"] || 
                $permissions["m2_permission_add"])
                <li class="nav-item" data-toggle="tooltip" data-placement="right" 
                    title="Usuarios">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" 
                        href="#collapse-users">
                        <i class="fa fa-fw fa-users"></i>
                        <span class="nav-link-text">Usuarios</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapse-users">
                        @if($permissions["m2_user_list"])
                            <li>
                                <a href="users_table" class="sub-nav action-navbar">
                                    <i class="fa fa-list"></i>
                                    Lista de usuarios
                                </a>
                            </li>
                        @endif
                        @if($permissions["m2_user_add"])
                            <li>
                                <a href="user_add" class="sub-nav action-navbar">
                                    <i class="fa fa-user-plus"></i>
                                    Añadir usuario
                                </a>
                            </li>
                        @endif
                        @if($permissions["m2_permission_add"])
                            <li>
                                <a href="permission_add" class="sub-nav action-navbar">
                                    <i class="fa fa-key"></i>
                                    Agregar permisos
                                </a>
                            </li>
                        @endif
                    </ul>
                </li>
            @endif
            @if($permissions["m3_branch_office_on"] || $permissions["m3_branch_office_off"]
                || $permissions["m3_branch_office_add"] || $permissions["m3_goals"])
                <li class="nav-item" data-toggle="tooltip" data-placement="right" 
                    title="Sucursales">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" 
                        href="#collapse-branch-offices">
                        <i class="fa fa-fw fa-university"></i>
                        <span class="nav-link-text">Sucursales</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapse-branch-offices">
                        @if($permissions["m3_branch_office"])
                            <li>
                                <a href="branch_offices_table" class="sub-nav action-navbar">
                                    <i class="fa fa-list"></i>
                                    Lista de sucursales
                                </a>
                            </li>
                        @endif
                        @if($permissions["m3_branch_office_add"])
                            <li>
                                <a href="branch_office_add" class="sub-nav action-navbar">
                                    <i class="fa fa-calendar-plus-o"></i>
                                    Agregar sucursal
                                </a>
                            </li>
                        @endif
                    </ul>
                </li>
            @endif
            @if($permissions["m5_colony"])
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Colonias">
                    <a class="nav-link action-navbar" href="colonies_admin">
                        <i class="fa fa-fw fa-map-marker"></i>
                        <span class="nav-link-text">Colonias</span>
                    </a>
                </li>
            @endif
            @if($permissions["m4_stadistics"])
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Estadísticas">
                    <a class="nav-link action-navbar" href="stadistics_table">
                        <i class="fa fa-fw fa-line-chart"></i>
                        <span class="nav-link-text">Estadísticas</span>
                    </a>
                </li>
            @endif
            @if($permissions["m4_organization"])
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Distribución">
                    <a class="nav-link action-navbar" href="organization_table">
                        <i class="fa fa-table"></i>
                        <span class="nav-link-text">Distribución</span>
                    </a>
                </li>
            @endif
        </ul>
        <ul class="navbar-nav sidenav-toggler {{ $nav }}">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <div class="nav-user">
                    @if($session["gender"] == "Femenino")
                        <img src="icon/female.png">
                        <strong>Bienvenida {{ $session["name"] }}</strong>
                    @else
                        <img src="icon/male.png">
                        <strong>Bienvenido {{ $session["name"] }}</strong>
                    @endif
                </div>
                <a class="btn-navbar" href="logout" title="Cerrar Sesión" data-toggle="tooltip">
                   <i class="fa fa-sign-out"></i>                        
                </a>
            </li>
        </ul>
    </div>
</nav>
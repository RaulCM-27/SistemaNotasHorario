<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistema de Notas y Horario')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Iconos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">

    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
</head>

<body>

    <header class="d-flex justify-content-between align-items-center  bg-primary text-white px-4" style="height: 8vh;">
        <a href="#" class="h4 mb-0 text-decoration-none fw-bold ms-4">INICIO</a>

        @auth
        <div class="dropdown">
            <a href="#" class="dropdown-toggle h6 mb-0 text-decoration-none" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-circle"></i>
                {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="dropdown-item">Cerrar sesión</button>
                    </form>
                </li>
            </ul>
        </div>
        @endauth
    </header>

    <!-- Contenedor con sidebar y contenido -->
    <div class="d-flex" style="height: 92vh;">
        <nav class="bg-dark text-white p-3" style="width: 200px;">
            <ul class="nav flex-column">
                <li class="nav-item mb-2">
                    <a class="nav-link text-white" href="#"><i class="bi bi-house-door me-2"></i>Inicio</a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link text-white" href="#"><i class="bi bi-calendar-week me-2"></i>Horarios</a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link text-white" href="#"><i class="bi bi-journal-text me-2"></i>Asignaturas</a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link text-white" href="{{ route('estudiantes.index') }}"><i class="bi bi-person-lines-fill me-2"></i>Estudiantes</a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link text-white" href="#"><i class="bi bi-person-badge me-2"></i>Profesores</a>
                </li>
            </ul>
        </nav>

        <div style="width: 90%; margin: 0 auto;" class="font-sans text-gray-900 antialiased p-4">
            @yield('content')
        </div>
    </div>

    <!-- Bootstrap Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    @yield('scripts')

</body>

</html>
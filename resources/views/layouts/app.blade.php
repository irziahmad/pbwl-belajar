<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'app')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/2.3.4/css/dataTables.dataTables.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .nav-link.active {
            color: black !important;

        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">laravel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('mahasiswa') ? 'active' : '' }}"
                            href="/mahasiswa">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('profil') ? 'active' : '' }}" href="/profil">profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                    <li>
                        <a class="nav-link {{ request()->is('pasien') ? 'active' : '' }}"
                            href="{{ route('pasien.index') }}">Pasien</a>
                    </li>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container mt-3">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.datatables.net/2.3.4/js/dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            let table = new DataTable('#table');
        });
    </script>
</body>

</html>

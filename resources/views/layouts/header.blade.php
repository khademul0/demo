<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    @stack('title')
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">

            <!-- Brand -->
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">Demo</a>

            <!-- Mobile toggle -->
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/players/register') }}">Register</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/players/view') }}">Players List</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
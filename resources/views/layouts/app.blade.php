<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield( 'JOB PLATFORM')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background-color: #ffffff;
        }

        .navbar {
            background-color: #27548A !important;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar-nav {
            margin: 0 auto;
        }

        .nav-link {
            color: #ffffff !important;
            font-weight: 500;
        }

        .nav-link:hover {
            color:rgb(0, 51, 128) !important;
        }

        .navbar-brand {
            color: #ffffff !important;
            font-weight: bold;
        }
        .card-title {
            color: #27548A;
            font-weight: bold;
            font-size: 25px;
        }


        .card {
            background-color: #ffffff;
            border: 10px solid #27548A;
            border-radius: 35px;
            width: 300px;
            height: 300px;
        }

        .card i {
            color: #ffffff;
        }

        .btn-primary {
            background-color: #27548A;
            border-color: #27548A;
        }

        .btn-primary:hover {
            background-color:rgb(50, 97, 155);
            border-color: #27548A;
        }

        .text-primary {
            color: #27548A !important;
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: #ffffff;
        }

        .user-profile i {
            color: #ffffff;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ route('Jhome.index') }}">JOB PLATFORM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('Jhome.index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('applications.my') }}">My Jobs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('applications.accepted') }}">Accepted</a>
                    </li>

                </ul>


                <div class="d-flex align-items-center justify-content-center">
                    <a href="{{ route('profile.edit') }}" style="text-decoration: none;" class=" user-profile">
                        <i class="fas fa-user-circle fa-lg"></i>
                        <span>{{ Auth::user()->name }}</span>
                    </a>
                    <div class=" ">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-responsive-nav-link class="user-profile d-flex " style="text-decoration: none; color: #ffffff;" :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>
                    </div>
                 </div>



            </div>
        </div>
    </nav>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

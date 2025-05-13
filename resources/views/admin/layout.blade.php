<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #ffffff; color: #27548A; font-family: Arial, sans-serif; }

        .navbar { background-color: #27548A; padding: 10px 0; display: flex; justify-content: center; }
        .navbar .container { display: flex; justify-content: space-between; align-items: center; width: 80%; }
        .navbar-brand { font-weight: bold; color: #ffffff; font-size: 24px; }
        .nav-item { margin: 0 10px; }
        .nav-link { color: #ffffff; font-weight: bold; }
        .nav-link:hover { color:rgb(87, 127, 175); }
        .active-link { background-color: #ffffff; color: #27548A !important; border-radius: 20px; padding: 5px 15px; }

        .admin-info { display: flex; align-items: center; gap: 10px; }
        .admin-icon { background-color: #ddd; padding: 10px; border-radius: 50%; display: flex; align-items: center; justify-content: center; width: 40px; height: 40px; }
        .admin-text { font-weight: bold; color: #ffffff; }
    </style>
</head>
<body>

<nav class="navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ route('admin.home') }}" style="color: #ffffff;">JOB PLATFORM</a>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin/home') ? 'active-link' : '' }}" href="{{ route('admin.home') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin/all-jobs') ? 'active-link' : '' }}" href="{{ route('admin.allJobs') }}">All jobs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin/users') ? 'active-link' : '' }}" href="{{ route('admin.users') }}">users</a>
            </li>
            <!-- <li class="nav-item"><a class="nav-link" href="#">Users</a></li> -->
        </ul>
         <div class="d-flex">
            <a href="{{ route('profile.edit' ) }}" style="text-decoration: none;" class="admin-info">
                <div class="admin-icon">👤</div>
                <span class="admin-text">{{ Auth::user()->name }}</span>
            </a>
            <div class="mt-3 ">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link style="text-decoration: none; color: #ffffff;" :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
         </div>

    </div>
</nav>


<div class="container mt-4">
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

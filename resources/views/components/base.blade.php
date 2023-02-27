<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
<section class="container">
    <div class="header">
        <div class="logo">
            <h2>TalentHunt</h2>
        </div>
        <div class="nave">
            <ul>
                @if(session('role')=='recruiter')
                    <li><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                    <li><a href="{{ route('addjob.index') }}">Add Job</a></li>
                    <li><a href="{{ route('applicant.index') }}">Applicant</a></li>
                    <li><a href="{{ route('user.index') }}">Seekers</a></li>
                    <li><a href="{{ route('rprofile.index') }}">Profile</a></li>
                    <li><a href="{{ route('logout.index') }}">Logout</a></li>

                @elseif(session('role')=='seeker')
                    <li><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                    <li><a href="{{ route('applicant.index') }}">Applied Job</a></li>
                    <li><a href="{{ route('sprofile.index') }}">Profile</a></li>
                    <li><a href="{{ route('logout.index') }}">Logout</a></li>
                @else
                    <li>
                    <a href="#">HOME</a>
                </li>
                <li>
                    <a href="{{ route('signup.index') }}">SIGN UP</a>
                </li>
                <li>
                    <a href="{{ route('login.index') }}">SIGN IN</a>
                </li>
                <li>
                    <a href="#">SERVICE</a>
                </li>
                @endif
            </ul>

        </div>
    </div>
    <div class="body">
        @yield('content')
    </div>
</section>
<footer class="foot">
    @Ritesh Koirala
</footer>
</body>
</html>

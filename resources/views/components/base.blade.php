<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>
    <link href="css/app.css" rel="stylesheet" type="text/css">
</head>
<body>
<section class="container">
    <div class="header">
        <div class="logo">
            <h2>TalentHunt</h2>
        </div>
        <div class="nave">
            <ul>
                <li>
                    <a href="#">HOME</a>
                </li>
                <li>
                    <a href="#">SIGN UP</a>
                </li>
                <li>
                    <a href="#">SIGN IN</a>
                </li>
                <li>
                    <a href="#">SERVICE</a>
                </li>
            </ul>

        </div>
    </div>
    <div class="body">
        <div class="image">
        </div>
        @yield('content')
    </div>
</section>
<footer class="foot">
    @Ritesh Koirala
</footer>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="\css\style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lancelot&display=swap" rel="stylesheet">
    

</head>

<body>
<nav>
    
        <div class="wrapper">
            <div class="logo"><a href=''>Story of the old</a></div>
            <div class="menu">
                <ul>
                    <li><a href="/web">Home</a></li>
                    <li><a href="/web#foreign">Foreign</a></li>
                    <li><a href="/web#lokal">Lokal</a></li>
                    <li><a href="/web#partners">Partners</a></li>
                    <li><a href="/web#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <h3>@yield('judul')</h3>

        @yield('konten')
</body>
</html>
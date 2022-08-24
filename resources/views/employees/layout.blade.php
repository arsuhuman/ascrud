<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employees</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
      .gradient-button{
        background-image: linear-gradient(to right, #007BB8, #003E5C);
        color: white;
        border: none;
      }
    </style>
</head>
<body>
    <header>
        <nav class=" navbar-dark bg-dark">
            <ul class="nav justify-content-center ">
                <li class="nav-item">
                  <a class="nav-link text-white" href="/">HOME</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="/employees">DATABASE </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="/employees/create">ADD</a>
                </li>
              </ul>
        </nav>
        
    </header>
    @yield('content')
</body>
</html>
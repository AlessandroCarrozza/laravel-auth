<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="app">


        @include("partials.header")

        <main class="">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-2">
                        <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary">
                            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                              <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                              <span class="fs-4">Sidebar</span>
                            </a>
                            <hr>
                            <ul class="nav nav-pills flex-column mb-auto">
                              <li class="nav-item">
                                <a href="{{route("admin.dashboard")}}" class="nav-link active" aria-current="page">
                                  <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                                  Dashboard
                                </a>
                              </li>
                              <li>
                            </ul>

                          </div>
                    </div>

                    <div class="col-10">
                        @yield('content')
                    </div>

                </div>
            </div>

            
        </main>
    </div>
</body>

</html>


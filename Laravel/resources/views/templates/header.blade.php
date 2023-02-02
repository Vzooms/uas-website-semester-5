<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LARAVEL UAS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/default.css">
</head>
<body>
    <div class="bg-primary d-flex align-items-center justify-content-around">
        <a class="text-dark" href="/home">
            <h1 id="title">
                Amazing E-Grocery
            </h1>
        </a>
        <div>
            @auth
                {{-- login only --}}
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="btn btn-info">
                        <h6 class="m-0">
                            Log Out
                        </h6>
                    </button>
                </form>

            @else

                <a class="btn btn-info" href="/register">
                    <h6 class="m-0">
                        Register
                    </h6>
                </a>
                <a class="btn btn-info"  href="/login">
                    <h6 class="m-0">
                        Login
                    </h6>
                </a>

            @endauth
        </div>
    </div>

    @yield('main')

    <div class="fixed-bottom">
        <div class="bg-primary allCenter" style="height: 5vh">
            <p class="m-0 text-light">
                &COPY; Amazing E-Grocery 2023
            </p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

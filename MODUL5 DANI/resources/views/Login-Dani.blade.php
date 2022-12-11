<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <title>DANI MODUL5</title>
    </head>
<body>
<section>
        <div class="container px-5 py-5 align-items-center">
            <div class="row align-items-center">
                <div class="col-sm">
                    <img src="..\asset\images\civic.png"  height = "330px"alt="...">    
                </div>
                <div class="col-sm">
                    @if($errors->any())
                    @foreach($errors->all() as $err)
                    <p class="alert alert-danger">{{ $err }}</p>
                    @endforeach
                    @endif

                    <h1 class="fw-bold">Login</h1>
                    <form action="{{ route('login.action') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label fw-bold">Email</label>
                        <input type="text" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="mb-3">
                        <label for="pass" class="form-label fw-bold">Password</label>
                        <input type="text" class="form-control" id="pass" name="password" required>
                    </div>

                    <div class="mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="ingatSaya" name="ingatSaya" >
                        <label class="form-check-label" for="ingatSaya">
                            Remember me
                        </label>
                    </div>

                    <div class="mt-3 mb-1">
                        <button type="submit" class="btn btn-primary" name="masuk">Masuk</button>
                    </div>

                    <p>Anda belum punya akun? 
                        <a href="{{ route('register') }}">Daftar</a>
                    </p>
                </div>
            
            </div>
        </div>
    </section>
</body>
</html>
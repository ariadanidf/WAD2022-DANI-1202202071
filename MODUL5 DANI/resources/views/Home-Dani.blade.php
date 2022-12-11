@extends('Layout-Dani')
@section('konten')

    <!-- Main -->
    <section>
        <div class="container px-5 py-5">
            <div class="row align-items-center">
                <div class="col">
                    <h1 class="display-3 fw-bold">Selamat Datang Di Show Room Dani</h1>
                    <p>Di sini Anda bisa menemukan mobil-mobil yang mungkin bisa Anda kendarai!</p>
                    <br/>
                    @auth
                    <div class="justify-content-center">
                        <a class="btn btn-primary btn-lg" href="#">MyCar</a>   
                    </div>
                    @endauth 
                    <div class="container mt-4">
                        <div class="row">
                            <div class="col">
                                <img src="..\asset\images\logo-ead.png" height="20px">
                            </div>
                            <div class="col">
                                <p>DANI_1202202071</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <img src="..\asset\images\civic.png"  height = "330px"alt="...">
                </div>
            </div>
        </div>
    </section>

@endsection
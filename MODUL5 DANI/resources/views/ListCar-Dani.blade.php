@extends('Layout-Dani')
@section('konten')
        <div class="container py-5">
            <h1>My Show Room</h1>
            <p>List Show Room Dani - 1202202071</p>
            <div class="row mb-5">
               @foreach ($products as $car)
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="image/{{$car->image}}" class="img-thumbnail">
                            <h4 class="mt-3">{{$car->name}}</h4>
                            <div class="mb-4">{{$car->description}}</div>
                            <a href="/product/{{$car->id}}" class="btn btn-primary px-5 rounded-pill">Detail</a>
                            <form action="/product/{{ $car-> id }}" method ="POST" style="display: inline-block">
                              @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger px-5 rounded-pill">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
                
               
   
@endforeach
@endsection

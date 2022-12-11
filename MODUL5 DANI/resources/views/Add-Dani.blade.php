@extends('Layout-Dani')
@section('konten')

    <section>
        <div class="container py-5 justify-content-start" style="width:50%;">
            <h2 class="fw-bold">Tambah Mobil</h2>
            <p>Tambah Mobil Baru Anda Ke List Show Room</p>


            <form action="/product" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Nama Mobil</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>

                <div class="mb-3">
                    <label for="owner" class="form-label fw-bold">Nama Pemilik</label>
                    <input type="text" class="form-control" id="owner" name="owner">
                </div>

                <div class="mb-3">
                    <label for="brand" class="form-label fw-bold">Merk</label>
                    <input type="text" class="form-control" id="brand" name="brand">
                </div>

                <div class="mb-3">
                    <label for="purchase_date" class="form-label fw-bold">Tanggal Beli</label>
                    <input type="datetime-local" class="form-control" id="purchase_date" name="purchase_date">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label fw-bold">Deskripsi</label>
                    <textarea rows="3" class="form-control" id="description" name="description"></textarea>
                </div>

                <div class="mb-3">
                    <label for="img_path" class="form-label fw-bold">Foto</label>
                    <input class="form-control" type="file" id="img_path" name="img_path" value=""/>
                </div>

                <p class="fw-bold">Status Pembayaran</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="status" value="Lunas">
                    <label class="form-check-label" for="description">Lunas</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="status" value="Belum Lunas">
                    <label class="form-check-label" for="status">Belum Lunas</label>
                </div>

                <div class="mt-3">
                    <button class="btn btn-primary" type="submit" name="selesai">Selesai</button>
                </div>
            </form>
        </div>
    </section>

@endsection
@extends('Layout-Dani')
@section('konten')

    <section>
        <div class="container py-5 justify-content-start">
            <h2 class="fw-bold">###NAMA MOBIL###</h2>
            <p>Detail Mobil ###NAMA MOBIL###</p>
        </div>

        <div class="container justify-content-start">
            <div class="row">
                <div class="col">
                    <img src="../asset/images/" class="card-img-top" alt="...">
                </div>

                <div class="col">
                    <form action="/product" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="idMobil" value="#">

                        <div class="mb-3">
                            <label for="namaMobil" class="form-label fw-bold">Nama Mobil</label>
                            <input type="text" class="form-control" id="namaMobil" name="namaMobil" value="#" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="namaPemilik" class="form-label fw-bold">Nama Pemilik</label>
                            <input type="text" class="form-control" id="namaPemilik" name="namaPemilik" value="#" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="merk" class="form-label fw-bold">Merk</label>
                            <input type="text" class="form-control" id="merk" name="merk" value="#" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="tglBeli" class="form-label fw-bold">Tanggal Beli</label>
                            <input type="date" class="form-control" id="tglBeli" name="tglBeli" value="#" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="deskripsi" class="form-label fw-bold">Deskripsi</label>
                            <textarea rows="3" class="form-control" id="deskripsi" name="deskripsi" placeholder="#" disabled></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="foto" class="form-label fw-bold">Foto</label>
                            <input class="form-control" name="foto" type="file" id="foto" style="color: transparent" value="#" disabled>
                        </div>

                        <p class="fw-bold">Status Pembayaran</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="statusPembayaran" id="statusPembayaran1" value="Lunas" checked>
                                <label class="form-check-label" for="statusPembayaran">Lunas</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="statusPembayaran" id="statusPembayaran" value="Belum Lunas" disabled>
                                <label class="form-check-label" for="statusPembayaran2">Belum Lunas</label>
                            </div>
                        
                        <div class="mt-3">
                            <button class="btn btn-primary" type="submit" name="edit">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection                
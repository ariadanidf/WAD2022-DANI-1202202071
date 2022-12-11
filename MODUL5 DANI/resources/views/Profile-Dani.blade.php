@extends('Layout-Dani')
@section('konten')

    <!-- Main -->

    <section>
        <div class="container">
            <div class="text-center">
                <h2 class="fw-bold mt-3">Profile</h2>
            </div>
        </div>
        
        <div class="container justify-content-center5">
            <form action="..\config\edit-profile.php" method="POST" enctype="multipart/form-data">
            
                <div class="mb-3">
                    <label for="email" class="form-label fw-bold">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="#" readonly>
                </div>

                <div class="mb-3">
                    <label for="nama" class="form-label fw-bold">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="#" required>
                </div>

                <div class="mb-3">
                    <label for="noHP" class="form-label fw-bold">Nomor Handphone</label>
                    <input type="text" class="form-control" id="noHP" name="noHP" placeholder="#" required>
                </div>
                
                <div class="mb-3">
                    <label for="kataSandi" class="form-label fw-bold">Kata Sandi</label>
                    <input type="text" class="form-control" id="kataSandi" name="kataSandi" placeholder="#" required>
                </div>
                
                <div class="mb-3">
                    <label for="konfSandi" class="form-label fw-bold">Konfirmasi Kata Sandi</label>
                    <input type="text" class="form-control" id="konfSandi" name="konfSandi" placeholder="#" required>
                </div>

                <div class="mt-3 mb-1">
                    <button type="submit" class="btn btn-primary" name="update">Update</button>
                </div>
            </form>
        </div>

    </section>

@endsection
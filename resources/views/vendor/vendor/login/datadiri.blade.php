<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Lengkapi Data Diri</title>
    <link rel="stylesheet" href="style/loginview.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-3 mb-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
              <div class="card" style="background-color: #fff;">
                <div class="card-body">
                <form action="/signup/index" method="POST" enctype="multipart/form-data">
                  @csrf
                  <h5 class="card-title" style="color: rgb(26, 25, 25);"><b>Lengkapi Data Diri</b></h5>
                    {{-- <label for="dokumen" class="form-label">Dokumen Pelengkap * </label> --}}<br>
                    <div class="alert text-left bg-info" style=" color:#fff;">
                        <b>Lengkapi data diri untuk mempercepat verifikasi</b> <p>Kami melindungi informasi dan penggunaan data diri yang 
                            telah anda kirimkan untuk kenyaman pengguna.
                    </div>
                    <label for="nama" class="form-label"><div class="text-danger">Wajib di isi *</div></label><br>
                      <label for="nama" class="form-label">Nama Lengkap</label>
                      <input type="text" class="form-control" id="" name="nama_lengkap">
                      <label for="alamat" class="form-label">Alamat</label>
                      <input type="text" class="form-control" id="" name="alamat">
                      <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                      <input type="datetime" class="form-control" id="" name="tgl_lahir">
                      <label for="tmpt_lahir" class="form-label">Tempat Lahir</label>
                      <input type="text" class="form-control" id="" name="tmpt_lahir">
                      <label for="nmr_ktp" class="form-label">Nomor KTP</label>
                      <input type="text" class="form-control" id="" name="nmr_ktp">   
                      <label for="lokasi" class="form-label">Pilih Lokasi *</label>
                      <input type="lokasi" class="form-control" id="" name="lokasi"><br>
                      <iframe scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=Jalan%20Janti%2C%20Gang%20Arjuna%2059%2C%20Karangjambe%2C%20Banguntapan%2C%20Bantul&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near"
                      title="%3$s" aria-label="%3$s" frameborder="0"></iframe>
                    <br>
                    <label for="dokumen" class="form-label">Dokumen Pelengkap *</label>
                    <div class="alert text-left bg-info" style=" color:#fff;">
                        <b>Lengkapi data diri untuk mempercepat verifikasi</b> <p>Kami melindungi informasi dan penggunaan data diri yang 
                        telah anda kirimkan untuk kenyaman pengguna.
                    </div>
                    <label for="scan" class="form-label">Scan KTP & Scan KK </label>
                    <div class="input-group col-md-8">
                        <div class="input-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="../assets/img/placehold.jpg" id="showgambar" style="max-width:200px;max-height:200px;float:left;margin-bottom: 10px;" />
                                    <input type="file" id="inputktp" class="form-control validate" name="scan1" required>
                                </div>
                                <div class="col-md-6">
                                    <img src="../assets/img/placehold.jpg" id="showgambar1" style="max-width:200px;max-height:200px;float:left;margin-bottom: 10px;" />
                                    <input type="file" id="inputkk" class="form-control validate" name="scan2" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <input type="text" class="rounded mx-auto d-block" id="" name="dokumen"> --}}
                    {{-- <label for="gambar" class="form-label">Upload Bukti Pembayaran</label> --}}
                    {{-- <input type="file" class="form-control" id="" name="bukti_pembayaran"> --}}
                  <br>
                    <div class="d-grid gap-2">
                        <button class="btn btn-success" type="button"  href="#"><b>Daftar</b></button>
                    </div>
                    
                    <div class="alert text-center">
                        <p>
                            Dengan mendaftar disini(Titipsini.com),</p>
                            Saya mensetujui <a href="/kebijakanprivasi">Kebijakan Privasi</a>
                    </div>
                </form>
              </div>
            </div>
            </div>
        </div>
    </div>
</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        {{ config("app_name", "Titipsini.com") }} - Register Application
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/dist') }}/assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{ url('/dist') }}/assets/css/core.css">
    <link rel="stylesheet" href="{{ url('/dist') }}/assets/css/components.css">
    <link rel="stylesheet" href="{{ url('/dist') }}/assets/icons/fontawesome/styles.min.css">

    <script type="text/javascript" src="{{ url('/dist') }}/lib/js/jquery.min.js"></script>
    <script type="text/javascript" src="{{ url('/dist') }}/lib/js/tether.min.js"></script>
    <script type="text/javascript" src="{{ url('/dist') }}/lib/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="{{ url('/dist') }}/assets/js/app.min.js"></script>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12 pt-5">
                <div class="card">
                    <div class="card-header">
                        <h5 class="text-center">
                            Buat Akun
                        </h5>
                    </div>

                    <form action="{{ url('/post_register') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="mb-3 row">
                                <label for="name" class="form-label col-sm-3 mt-1" style="text-align: right">
                                    Nama Lengkap :
                                </label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan name" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="tgl_lahir" class="form-label col-sm-3 mt-1" style="text-align: right">
                                    Tanggal Lahir :
                                </label>
                                <div class="col-md-7">
                                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Masukkan tgl_lahir" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="email" class="form-label col-sm-3 mt-1" style="text-align: right">
                                    Email :
                                </label>
                                <div class="col-md-7">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="no_telp" class="form-label col-sm-3 mt-1" style="text-align: right">
                                    No. Handphone :
                                </label>
                                <div class="col-md-7">
                                    <input type="number" class="form-control" id="no_telp" name="no_telp" placeholder="0" required min="1">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="id_kota_kab" class="form-label col-sm-3 mt-1" style="text-align: right">
                                    Kota Kabupaten :
                                </label>
                                <div class="col-md-7">
                                    <select name="id_kota_kab" class="form-control" id="id_kota_kab">
                                        <option value="">- Pilih -</option>
                                        @foreach ($kota_kab as $item)
                                        <option value="{{ $item["id"] }}">
                                            {{ $item["name"] }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="id_kecamatan" class="form-label col-sm-3 mt-1" style="text-align: right">
                                    Kecamatan :
                                </label>
                                <div class="col-md-7">
                                    <select name="id_kecamatan" class="form-control" id="id_kecamatan">
                                        <option value="">- Pilih -</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="id_kelurahan" class="form-label col-sm-3 mt-1" style="text-align: right">
                                    Kelurahan :
                                </label>
                                <div class="col-md-7">
                                    <select name="id_kelurahan" class="form-control" id="id_kelurahan">
                                        <option value="">- Pilih -</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="password" class="form-label col-sm-3 mt-1" style="text-align: right">
                                    Password :
                                </label>
                                <div class="col-md-7">
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="password2" class="form-label col-sm-3 mt-1" style="text-align: right">
                                    Konfirmasi Password :
                                </label>
                                <div class="col-md-7">
                                    <input type="password" class="form-control" name="password2" id="password2" placeholder="Masukkan Konfirmasi Password">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="alamat" class="form-label col-sm-3 mt-1" style="text-align: right">
                                    Alamat :
                                </label>
                                <div class="col-md-7">
                                    <textarea name="alamat" class="form-control" id="alamat" rows="5" placeholder="Masukkan Alamat" required></textarea>
                                </div>
                            </div>
                            <button type="reset" class="btn btn-danger">
                                Batal
                            </button>
                            <button type="submit" class="btn btn-primary">
                                Tambah
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <script>
        let objek;
        $(document).ready(function() {
            $("#id_kota_kab").change(function() {
                let kota_kab = $("#id_kota_kab").val();
                $.ajax({
                    url: "{{ url('/ambil_kecamatan') }}",
                    type: "GET",
                    data: { data : kota_kab, h : kota_kab },
                    success: function(res, moha) {
                        $("#id_kecamatan").html(res);
                    }
                });
            });
            $("#id_kecamatan").change(function() {
                let kecamatan = $("#id_kecamatan").val();
                $.ajax({
                    url: "{{ url('/ambil_kelurahan') }}",
                    type: "GET",
                    data: { id_kecamatan : kecamatan },
                    success : function (result) {
                        $("#id_kelurahan").html(result);
                    }
                });
            });
        });
    </script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registrasi Asrama</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="jquery/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container p-3 my-3 border">
    <h1 class="text-center">Form Registrasi Member Asrama PNL</h1>
    <?php
    //Include file koneksi, untuk koneksikan ke database
    include "koneksi.php";
    
    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nama=input($_POST["nama"]);
        $nik=input($_POST["nik"]);
        $tempat_lahir=input($_POST["tempat_lahir"]);
        $tanggal_lahir=input($_POST["tanggal_lahir"]);
        $jk=input($_POST["jk"]);
        $kewarganegaraan=input($_POST["kewarganegaraan"]);
        $agama=input($_POST["agama"]);
        $nama_ibu=input($_POST["nama_ibu"]);
        $email=input($_POST["email"]);
        $no_telp=input($_POST["no_telp"]);
        $alamat=input($_POST["alamat"]);
        $kode_pos=input($_POST["kode_pos"]);
        $provinsi=input($_POST["provinsi"]);
        $kabupaten=input($_POST["kabupaten"]);
        $kecamatan=input($_POST["kecamatan"]);
        $pendidikan=input($_POST["pendidikan"]);
        $sekolah=input($_POST["sekolah"]);
        $jurusan=input($_POST["jurusan"]);
        $prog=input($_POST["prog"]);
        $password=input($_POST["password"]);
        

        //Query input menginput data kedalam tabel pendaftaraan
        $sql="insert into pendaftaran (nama,nik,tempat_lahir,tanggal_lahir,jk,kewarganegaraan,agama,nama_ibu,email,no_telp,alamat,kode_pos,provinsi,kabupaten,kecamatan,pendidikan,sekolah,jurusan,prog,password) values
		('$nama','$nik','$tempat_lahir','$tanggal_lahir',$jk,'$kewarganegaraan','$agama','$nama_ibu','$email','$no_telp','$alamat','$kode_pos','$provinsi','$kabupaten','$kecamatan','$pendidikan','$sekolah','$jurusan','$prog','$password')";

        //Mengeksekusi/menjalankan query diatas
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) { 
            echo "<div class='alert alert-success'> Selamat $nama anda telah berhasil mendaftar.</div>"; 
        }
        else {
            echo "<div class='alert alert-danger'> Pendaftaraan Gagal.</div>";
        }
    }
    ?>
        <form id="form" method="post" enctype="multipart/form-data">
        <form id="form" method="post">
            <div class="alert alert-primary">
                <strong>Data Diri</strong>
            </div>
            <div class="row">
                <div class="col-sm-7">
                    <div class="form-group">
                        <label>Nama Lengkap:</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Lengkap">
                    </div>
                </div>
                
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Nomor Identitas :</label>
                        <input type="text" name="nik" class="form-control" placeholder="Masukan Nomor NIK / NIM">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Tempat Lahir:</label>
                        <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukan Tempat Lahir">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Tanggal Lahir:</label>
                        <input type="date" name="tanggal_lahir" class="form-control">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Jenis Kelamin:</label>
                        <select class="form-control" name="jk">
                            <option>Pilih</option>
                            <option value="1">Laki-laki</option>
                            <option value="2">Perempuan</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Kewarganegaraan:</label>
                        <select class="form-control" name="kewarganegaraan">
                            <option>Pilih</option>
                            <option value="WNI">Warga Negara Indonesia</option>
                            <option value="WNA">Warga Negara Asing</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Agama:</label>
                        <select class="form-control" name="agama">
                            <option>Pilih</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Nama Ibu Kandung:</label>
                        <input type="text" name="nama_ibu" class="form-control" placeholder="Masukan Nama Ibu Kandung">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" name="email" class="form-control" placeholder="Masukan Email">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>No Telp:</label>
                        <input type="text" name="no_telp" class="form-control" placeholder="Masukan No Telp">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Upload Foto 3x6</label>
                        <input type="file" name="nama_ibu" class="form-control" placeholder="Foto 3x6">
                    </div>
                </div>

                <!-- PASSWORD -->
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Isi Password">
                    </div>
                </div>

                <!-- PASS -->
            </div>

            <div class="alert alert-primary">
                <strong>Data Alamat Asal</strong>
            </div>
            <div class="row">
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Alamat:</label>
                        <textarea class="form-control" name="alamat" rows="2" id="alamat"></textarea>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>Kode Pos:</label>
                        <input type="text" name="kode_pos" class="form-control" placeholder="Kode Pos">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Provinsi:</label>
                        <select class="form-control" name="provinsi" id="provinsi">
                            <?php
                            include "koneksi.php";
                            //Perintah sql untuk menampilkan semua data pada tabel provinsi
                            $sql="select * from provinsi";
                            $hasil=mysqli_query($kon,$sql);
                            while ($data = mysqli_fetch_array($hasil)) {
                                ?>
                            <option value="<?php echo $data['id_prov'];?>"><?php echo $data['nama'];?></option>
                            <?php
                                }
                        ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Kabupaten:</label>
                        <select class="form-control" name="kabupaten" id="kabupaten">
                            <!-- Kabupaten akan diload menggunakan ajax, dan ditampilkan disini -->
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Kecamatan:</label>
                        <select class="form-control" name="kecamatan" id="kecamatan">
                            <!-- Kecamatan akan diload menggunakan ajax, dan ditampilkan disini -->
                        </select>
                    </div>
                </div>

            </div>
            <script>
            $("#provinsi").change(function() {
                // variabel dari nilai combo provinsi
                var id_provinsi = $("#provinsi").val();

                // Menggunakan ajax untuk mengirim dan dan menerima data dari server
                $.ajax({
                    type: "POST",
                    dataType: "html",
                    url: "ambil-data.php",
                    data: "provinsi=" + id_provinsi,
                    success: function(data) {
                        $("#kabupaten").html(data);
                    }
                });
            });

            $("#kabupaten").change(function() {
                // variabel dari nilai combo box kabupaten
                var id_kabupaten = $("#kabupaten").val();

                // Menggunakan ajax untuk mengirim dan dan menerima data dari server
                $.ajax({
                    type: "POST",
                    dataType: "html",
                    url: "ambil-data.php",
                    data: "kabupaten=" + id_kabupaten,
                    success: function(data) {
                        $("#kecamatan").html(data);
                    }
                });
            });
            </script>
            <div class="alert alert-primary">
                <strong>Data Pendidikan</strong>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Pendidikan Terakhir:</label>
                        <select class="form-control" name="pendidikan">
                            <option value="SMA-IPA">SMA</option>
                            <option value="SMA-IPA">SMK</option>
                            <option value="SMA-IPA">MA</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Nama Sekolah:</label>
                        <input type="text" name="sekolah" class="form-control" placeholder="Masukan Nama Sekolah">
                    </div>
                </div>
            </div>
            <div class="alert alert-primary">
                <strong>Pilihan Program Studi</strong>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Pilih Jurusan</label>
                        <select class="form-control" name="jurusan">
                            <option value="TIK">Teknologi Informasi dan Komputer</option>
                            <option value="TM">Teknik Mesin</option>
                            <option value="TE">Teknik Elektro</option>
                            <option value="TK">Teknik Kimia</option>
                            <option value="TS">Teknik Sipil</option>
                            <option value="TANIA">Tata Niaga</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Pilih Program Studi</label>
                        <select class="form-control" name="prog">
                            <!-- TIK -->
                            <option value="TIK">D4 - Teknologi Rekayasa Komputer Jaringan</option>
                            <option value="TIK">D4 - Teknologi Rekayasa Multimedia</option>
                            <option value="TIK">D4 - Teknik Informatika</option>
                            <!-- TM -->
                            <option value="TM">D3 - Teknologi Mesin</option>
                            <option value="TM">D3 - Teknologi Industri</option>
                            <option value="TM">D4 - Teknologi Rekayasa Manufaktur</option>
                            <option value="TM">D4 - Teknologi Rekayasa Pengelasan dan Fabrikasi</option>
                            <!-- TE -->
                            <option value="TE">D3 - Teknologi Listrik</option>
                            <option value="TE">D3 - Teknologi Telekomunikasi</option>
                            <option value="TE">D3 - Teknologi Elektronika</option>
                            <option value="TE">D4 - Teknologi Rekayasa Pembangkit Energi</option>
                            <option value="TE">D4 - Teknologi Rekayasa Jaringan Telekomunikasi</option>
                            <option value="TE">D4 - Teknologi Rekayasa Instrumentasi dan Kontrol</option>
                            <!-- TK -->
                            <option value="TK">D3 - Teknologi Kimia</option>
                            <option value="TK">D3 - Teknologi Pengolahan Minyak dan gas</option>
                            <option value="TK">D4 - Teknologi Rekayasa Kimia Industri</option>
                            <!-- TS -->
                            <option value="TS">D2 - Jalur Cepat Pengukuran dan Penggambaran Tapak Bangunan Gedung</option>
                            <option value="TS">D3 - Teknologi Konstruksi Bangunan Air</option>
                            <option value="TS">D3 - Teknologi Konstruksi Jalan dan Jembatan</option>
                            <option value="TS">D4 - Teknologi Rekayasa Konstruksi Bangunan Gedung </option>
                            <option value="TS">D4 - Teknologi Rekayasa Konstruksi Jalan dan Jembatan </option>
                            <!-- Tania -->
                            <option value="TANIA">D3 - Akuntansi</option>
                            <option value="TANIA">D3 - Administrasi Bisnis</option>
                            <option value="TANIA">D4 - Manajemen Keuangan Sektor Publik</option>
                            <option value="TANIA">D4 - Akuntansi Lembaga Keuangan Syariah</option>
                            <option value="TANIA">M - Keuangan Islam</option>

                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <button type="submit" name="Submit" id="Submit" class="btn btn-primary">Daftar</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>

            </div>
        </form>
    </div>
</body>
</html>
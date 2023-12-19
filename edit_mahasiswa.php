<?php include 'proses/koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
  <link rel="icon" type="image/png" href="./assets/img/logo.png" />
  <title>Data Mahasiswa</title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-200">

  <!-- SIDEBAR  -->
  <?php include 'sidebar.php'; ?>
  <!-- SIDEBAR -->

  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
      navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Data Mahasiswa</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Data Mahasiswa</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          </div>
        </div>
        <ul class="navbar-nav justify-content-end">
          <li class="nav-item d-flex align-items-center">
          </li>
          <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
              <div class="sidenav-toggler-inner">
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
              </div>
            </a>
          </li>
          <li class="nav-item px-3 d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-body p-0">
              <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
            </a>
          </li>
        </ul>
      </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <!-- Isi Body -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-warning shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Data Dashboard</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2 m-3">
              <!-- FORM -->
              <form id="form" action="proses/proses_reg.php" method="post" enctype="multipart/form-data">

                <!-- DATA DIRI -->
                <div class="alert alert-dark text-center">
                  <strong class="text-white">Register Asrama Politeknik Negeri Lhokseumawe</strong>
                </div>
                <div class="alert alert-warning">
                  <strong class="text-white">Data Diri</strong>
                </div>

                <div class="row">
                  <div class="col-sm-7">
                    <label for="" class="col-form-label me-3">Nama Lengkap :</label>
                    <div class="input-group input-group-outline">
                      <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Lengkap" required />
                    </div>
                  </div>

                  <div class="col-sm-5">
                    <label for="" class="col-form-label me-3">NIM :</label>
                    <div class="input-group input-group-outline">
                      <input type="number" name="nim" class="form-control" placeholder="Masukan Nomor NIK / NIM"
                        required />
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-4">
                    <label for="" class="col-form-label me-3">Tempat Lahir :</label>
                    <div class="input-group input-group-outline">
                      <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukan Tempat Lahir"
                        required />
                    </div>
                  </div>

                  <div class="col-sm-3">
                    <label for="" class="col-form-label me-3">Tanggal Lahir :</label>
                    <div class="input-group input-group-outline">
                      <input type="date" name="tanggal_lahir" class="form-control" required />
                    </div>
                  </div>

                  <div class="col-sm-5">
                    <label for="" class="col-form-label me-3">Jenis Kelamin :</label>
                    <div class="input-group input-group-outline">
                      <select class="form-control" name="jk" required>
                        <option>Pilih</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">

                  <div class="col-sm-4">
                    <label for="" class="col-form-label me-3">Kewarganegaraan :</label>
                    <div class="input-group input-group-outline">
                      <select class="form-control" name="kewarganegaraan" required>
                        <option>Pilih</option>
                        <option value="Warga Negara Indonesia">Warga Negara Indonesia</option>
                        <option value="Warga Negara Asing">Warga Negara Asing</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-sm-3">
                    <label for="" class="col-form-label me-3">Agama :</label>
                    <div class="input-group input-group-outline">
                      <select class="form-control" name="agama" required>
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
                    <label for="inputGroupFile02" class="col-form-label me-3">Upload Foto 3x6</label>
                    <div class="input-group input-group-outline">
                      <input type="file" name="upload_foto" class="form-control" placeholder="Foto 3x6" />
                    </div>
                  </div>

                </div>
                <div class="row">

                  <div class="col-sm-4">
                    <label for="" class="col-form-label me-3">Email :</label>
                    <div class="input-group input-group-outline">
                      <input type="email" name="email" class="form-control" placeholder="Masukan Email" required />
                    </div>
                  </div>

                  <div class="col-sm-3">
                    <label for="" class="col-form-label me-3">Password :</label>
                    <div class="input-group input-group-outline">
                      <input type="password" name="password" class="form-control" placeholder="Isi Password" required />
                    </div>
                  </div>

                  <div class="col-sm-5">
                    <label for="" class="col-form-label me-3">No Telp :</label>
                    <div class="input-group input-group-outline">
                      <input type="tel" name="no_telp" class="form-control" placeholder="Masukan No Telp" required />
                    </div>
                  </div>
                </div>
                <!-- END DATA DIRI -->

                <!-- DATA ORTU -->
                <div class="alert alert-warning mt-3">
                  <strong class="text-white">Data Orang Tua / Wali </strong>
                </div>

                <div class="row">
                  <div class="col-sm-4">
                    <label for="" class="col-form-label me-3">Nama Orang Tua / Wali :</label>
                    <div class="input-group input-group-outline">
                      <input type="text" name="nama_ortu" class="form-control"
                        placeholder="Masukan Nama Orang Tua / Wali" required />
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <label for="" class="col-form-label me-3">Nomor Telp Orang Tua / Wali :</label>
                    <div class="input-group input-group-outline">
                      <input type="tel" name="nomor_ortu" class="form-control"
                        placeholder="Masukan Nomor Telephone Orang Tua / Wali" required />
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <label for="" class="col-form-label me-3">Alamat Ortu:</label>
                    <div class="input-group input-group-outline">
                      <textarea class="form-control" name="$alamatortu" rows="1" id="alamat" required></textarea>
                    </div>
                  </div>
                </div>
                <!-- END DATA ORTU -->

                <!-- DATA ALAMAT -->
                <div class="alert alert-warning mt-4">
                  <strong class="text-white">Data Alamat Asal</strong>
                </div>

                <div class="row">
                  <div class="col-sm-6">
                    <label for="" class="col-form-label me-3">Alamat:</label>
                    <div class="input-group input-group-outline">
                      <textarea class="form-control" name="alamat" rows="1" id="alamat" required></textarea>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <label for="" class="col-form-label me-3">Kode Pos:</label>
                    <div class="input-group input-group-outline">
                      <input type="text" name="kode_pos" class="form-control" placeholder="Kode Pos" required />
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-4">
                    <label for="" class="col-form-label me-3">Provinsi:</label>
                    <div class="input-group input-group-outline">
                      <select class="form-control" name="provinsi" id="provinsi" required>
                        <!-- Kabupaten akan diload menggunakan ajax, dan ditampilkan disini -->
                        <?php $row = open_json('provinsi.json');
                        $index = 0;
                        foreach ($row as $r) { ?>
                          <option value="<?php echo $row[$index]['name'] ?>">
                            <?php echo $row[$index++]['name'] ?>
                          </option>
                        <?php }
                        ?>
                      </select>
                    </div>

                  </div>

                  <div class="col-sm-4">
                    <label for="" class="col-form-label me-3">Kabupaten:</label>
                    <div class="input-group input-group-outline">
                      <input type="text" class="form-control" name="kabupaten" required>
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <label for="" class="col-form-label me-3">Kecamatan:</label>
                    <div class="input-group input-group-outline">
                      <input type="text" class="form-control" name="kecamatan" required>
                    </div>
                  </div>
                </div>

                <!-- DATA PENDIDIKAN -->
                <div class="alert alert-warning mt-3">
                  <strong class="text-white">Data Pendidikan</strong>
                </div>

                <div class="row">
                  <div class="col-sm-4">
                    <label for="" class="col-form-label me-3">Pendidikan Terakhir:</label>
                    <div class="input-group input-group-outline">
                      <select class="form-control" name="pendidikan" required>
                        <option value="SMA">SMA</option>
                        <option value="SMK">SMK</option>
                        <option value="MA">MA</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <label for="" class="col-form-label me-3">Nama Sekolah:</label>
                    <div class="input-group input-group-outline">
                      <input type=" text" name="sekolah" class="form-control" placeholder="Masukan Nama Sekolah"
                        required />
                    </div>
                  </div>
                </div>
                <!-- END DATA PENDIDIKAN -->

                <!-- DATA JURUSAN -->
                <div class="alert alert-warning mt-3">
                  <strong class="text-white">Jurusan</strong>
                </div>

                <div class="row">
                  <div class="col-sm-4">
                    <label for="" class="col-form-label me-3">Pilih Jurusan</label>
                    <div class="input-group input-group-outline">
                      <select class="form-control" name="jurusan" required>
                        <option value="Teknologi Informasi dan Komputer">Teknologi Informasi dan Komputer</option>
                        <option value="Teknik Mesin">Teknik Mesin</option>
                        <option value="Teknik Elektro">Teknik Elektro</option>
                        <option value="Teknik Kimia">Teknik Kimia</option>
                        <option value="Teknik Sipil">Teknik Sipil</option>
                        <option value="Tata Niaga">Tata Niaga</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <label for="" class="col-form-label me-3">Semester</label>
                    <div class="input-group input-group-outline">
                      <select class="form-control" name="semester" required>
                        <option value="1">Semester 1</option>
                        <option value="2">Semester 2</option>
                        <option value="3">Semester 3</option>
                        <option value="4">Semester 4</option>
                        <option value="5">Semester 5</option>
                        <option value="6">Semester 6</option>
                        <option value="7">Semester 7</option>
                        <option value="8">Semester 8</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <label for="" class="col-form-label me-3">Pilih Program Studi</label>
                    <div class="input-group input-group-outline">
                      <select class="form-control" name="prodi" required>
                        <!-- TIK -->
                        <option value="D4 - Teknologi Rekayasa Komputer Jaringan">D4 - Teknologi Rekayasa Komputer
                          Jaringan
                        </option>
                        <option value="D4 - Teknologi Rekayasa Multimedia">D4 - Teknologi Rekayasa Multimedia</option>
                        <option value="D4 - Teknik Informatika">D4 - Teknik Informatika</option>
                        <!-- TM -->
                        <option value="D3 - Teknologi Mesin">D3 - Teknologi Mesin</option>
                        <option value="D3 - Teknologi Industri">D3 - Teknologi Industri</option>
                        <option value="D4 - Teknologi Rekayasa Manufaktur">D4 - Teknologi Rekayasa Manufaktur</option>
                        <option value="D4 - Teknologi Rekayasa Pengelasan dan Fabrikasi">D4 - Teknologi Rekayasa
                          Pengelasan dan
                          Fabrikasi</option>
                        <!-- TE -->
                        <option value="D3 - Teknologi Listrik">D3 - Teknologi Listrik</option>
                        <option value="D3 - Teknologi Telekomunikasi">D3 - Teknologi Telekomunikasi</option>
                        <option value="D3 - Teknologi Elektronika">D3 - Teknologi Elektronika</option>
                        <option value="D4 - Teknologi Rekayasa Pembangkit Energi">D4 - Teknologi Rekayasa Pembangkit
                          Energi
                        </option>
                        <option value="D4 - Teknologi Rekayasa Jaringan Telekomunikasi">D4 - Teknologi Rekayasa Jaringan
                          Telekomunikasi</option>
                        <option value="D4 - Teknologi Rekayasa Instrumentasi dan Kontrol">D4 - Teknologi Rekayasa
                          Instrumentasi
                          dan Kontrol</option>
                        <!-- TK -->
                        <option value="D3 - Teknologi Kimia">D3 - Teknologi Kimia</option>
                        <option value="D3 - Teknologi Pengolahan Minyak dan gas">D3 - Teknologi Pengolahan Minyak dan
                          gas</option>
                        <option value="D4 - Teknologi Rekayasa Kimia Industri">D4 - Teknologi Rekayasa Kimia Industri
                        </option>
                        <!-- TS -->
                        <option value="D2 - Jalur Cepat Pengukuran dan Penggambaran Tapak Bangunan Gedung">D2 - Jalur
                          Cepat
                          Pengukuran dan Penggambaran Tapak Bangunan Gedung</option>
                        <option value="D3 - Teknologi Konstruksi Bangunan Air">D3 - Teknologi Konstruksi Bangunan Air
                        </option>
                        <option value="D3 - Teknologi Konstruksi Jalan dan Jembatan">D3 - Teknologi Konstruksi Jalan dan
                          Jembatan
                        </option>
                        <option value="D4 - Teknologi Rekayasa Konstruksi Bangunan Gedung">D4 - Teknologi Rekayasa
                          Konstruksi
                          Bangunan Gedung</option>
                        <option value="D4 - Teknologi Rekayasa Konstruksi Jalan dan Jembatan">D4 - Teknologi Rekayasa
                          Konstruksi
                          Jalan dan Jembatan</option>
                        <!-- Tania -->
                        <option value="D3 - Akuntansi">D3 - Akuntansi</option>
                        <option value="D3 - Administrasi Bisnis">D3 - Administrasi Bisnis</option>
                        <option value="D4 - Manajemen Keuangan Sektor Publik">D4 - Manajemen Keuangan Sektor Publik
                        </option>
                        <option value="D4 - Akuntansi Lembaga Keuangan Syariah">D4 - Akuntansi Lembaga Keuangan Syariah
                        </option>
                        <option value="M - Keuangan Islam">M - Keuangan Islam</option>
                      </select>
                    </div>
                  </div>
                  <!-- END DATA JURUSAN -->

                  <div class="row">
                    <div class="col-sm-5 mt-4">
                      <button type="submit" name="Submit" id="Submit" class="btn btn-success me-5">Daftar</button>
                      <button type="reset" class="btn btn-primary">Reset</button>
                    </div>
                  </div>
              </form>
              <!-- FORM -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Material UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1" />
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary"
              onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark"
            onclick="sidebarType(this)">Dark</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent"
            onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white"
            onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3 d-flex">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)" />
          </div>
        </div>
        <hr class="horizontal dark my-3" />
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)" />
          </div>
        </div>
        <hr class="horizontal dark my-sm-4" />
        <a class="btn btn-outline-dark w-100" href="">View documentation</a>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <script>
    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["M", "T", "W", "T", "F", "S", "S"],
        datasets: [
          {
            label: "Sales",
            tension: 0.4,
            borderWidth: 0,
            borderRadius: 4,
            borderSkipped: false,
            backgroundColor: "rgba(255, 255, 255, .8)",
            data: [50, 20, 10, 22, 50, 10, 40],
            maxBarThickness: 6,
          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          },
        },
        interaction: {
          intersect: false,
          mode: "index",
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: "rgba(255, 255, 255, .2)",
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: "normal",
                lineHeight: 2,
              },
              color: "#fff",
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: "rgba(255, 255, 255, .2)",
            },
            ticks: {
              display: true,
              color: "#f8f9fa",
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: "normal",
                lineHeight: 2,
              },
            },
          },
        },
      },
    });

    var ctx2 = document.getElementById("chart-line").getContext("2d");

    new Chart(ctx2, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [
          {
            label: "Mobile apps",
            tension: 0,
            borderWidth: 0,
            pointRadius: 5,
            pointBackgroundColor: "rgba(255, 255, 255, .8)",
            pointBorderColor: "transparent",
            borderColor: "rgba(255, 255, 255, .8)",
            borderColor: "rgba(255, 255, 255, .8)",
            borderWidth: 4,
            backgroundColor: "transparent",
            fill: true,
            data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
            maxBarThickness: 6,
          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          },
        },
        interaction: {
          intersect: false,
          mode: "index",
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: "rgba(255, 255, 255, .2)",
            },
            ticks: {
              display: true,
              color: "#f8f9fa",
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: "normal",
                lineHeight: 2,
              },
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5],
            },
            ticks: {
              display: true,
              color: "#f8f9fa",
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: "normal",
                lineHeight: 2,
              },
            },
          },
        },
      },
    });

    var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

    new Chart(ctx3, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [
          {
            label: "Mobile apps",
            tension: 0,
            borderWidth: 0,
            pointRadius: 5,
            pointBackgroundColor: "rgba(255, 255, 255, .8)",
            pointBorderColor: "transparent",
            borderColor: "rgba(255, 255, 255, .8)",
            borderWidth: 4,
            backgroundColor: "transparent",
            fill: true,
            data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
            maxBarThickness: 6,
          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          },
        },
        interaction: {
          intersect: false,
          mode: "index",
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: "rgba(255, 255, 255, .2)",
            },
            ticks: {
              display: true,
              padding: 10,
              color: "#f8f9fa",
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: "normal",
                lineHeight: 2,
              },
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5],
            },
            ticks: {
              display: true,
              color: "#f8f9fa",
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: "normal",
                lineHeight: 2,
              },
            },
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf("Win") > -1;
    if (win && document.querySelector("#sidenav-scrollbar")) {
      var options = {
        damping: "0.5",
      };
      Scrollbar.init(document.querySelector("#sidenav-scrollbar"), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/material-dashboard.min.js?v=3.0.0"></script>
</body>

</html>
<!-- Navbar -->
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
  navbar-scroll="true">
  <div class="container-fluid py-1 px-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
      </ol>
      <h6 class="font-weight-bolder mb-0">Mahasiswa</h6>
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

<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-warning shadow-primary border-radius-lg pt-4 pb-3">
            <div class="d-flex justify-content-between">
              <h6 class="text-white text-capitalize ps-3">Data Tagihan</h6>
            </div>
          </div>
        </div>
        <div class="card-body px-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead class="text-center">
                <tr>
                  <th class="text-uppercase text-dark text-xxs font-weight-bolder">No</th>
                  <th class="text-uppercase text-dark text-xxs font-weight-bolder">Bulan / Tahun</th>
                  <th class="text-uppercase text-dark text-xxs font-weight-bolder">Tagihan</th>
                  <th class="text-uppercase text-dark text-xxs font-weight-bolder">Status Bayar</th>
                  <th class="text-uppercase text-dark text-xxs font-weight-bolder">Status Konfirmasi</th>
                  <!-- <th class="text-uppercase text-dark text-xxs font-weight-bolder">Tanggal bayar</th> -->
                </tr>
              </thead>
              <tbody class="text-center">
                <?php
                $no = 1;
                $nim = $_SESSION['nomor_identitas'];
                $kueri = mysqli_query($conn, "SELECT * FROM tagihan WHERE nim = $nim");
                while ($row = mysqli_fetch_array($kueri)) {
                  ?>
                  <tr>
                    <td>
                      <!-- No -->
                      <?php echo $no++; ?>
                    </td>
                    <td>
                      <!-- Bulan / Tahun -->
                      <?php echo $row['bulan']; ?> /
                      <?php echo $row['tahun']; ?>
                    </td>
                    <td>
                      <!-- Tagihan -->
                      <?php echo format_rupiah($row['tagihan']); ?>
                    </td>
                    <td>
                      <!-- Status -->
                      <?php echo $row['status']; ?>
                    </td>
                    <td>
                      <!-- Status -->
                      <?php echo $row['konfirmasi']; ?>
                    </td>
                    <!--  <td>
         

                    </td> -->
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Isi Body -->
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="col-xl-3 col-sm-6">
        <hr class="dark horizontal my-0">
      </div>
    </div>
  </div>
</div>
<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
</div>
</div>
</div>
<!-- End Body -->
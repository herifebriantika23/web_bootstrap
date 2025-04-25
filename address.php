<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta
      name="author"
      content="Mark Otto, Jacob Thornton, and Bootstrap contributors"
    />
    <meta name="generator" content="Hugo 0.145.0" />
    <title>UTS PBP</title>

    <link
      rel="canonical"
      href="https://getbootstrap.com/docs/5.3/examples/dashboard/"
    />
    <script src="assets/js/color-modes.js"></script>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link href="asset/css/address.css" rel="stylesheet" />

    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  </head>

  <body>
    <!-- cek apakah sudah login -->
    <?php
    session_start();
    if ($_SESSION['status'] != "login") {
        header("location:index.php?pesan=belum_login");
    }
    ?>
    <header
      class="navbar sticky-top bg-primary flex-md-nowrap p-0 shadow"
      data-bs-theme="dark"
    >
      <a class="navbar-brand col-md-3 col-lg-2 px-3 fs-6 text-white bg-primary shadow" 
      style="font-family: 'Poppins', sans-serif;"
      href="#">
        <img
          src="asset/brand/bootstrap-logo-white.svg"
          alt="logo_uhn"
          width="35"
          height="30"
          class="me-2"
        />
        UTS PBP
      </a>
      
      <button
        class="navbar-toggler d-md-none d-block text-white border-0 px-3 ms-auto"
        type="button"
        data-bs-toggle="offcanvas"
        data-bs-target="#sidebarMenu"
        aria-controls="sidebarMenu"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
    </header>

    <div class="container-fluid">
      <div class="row">
        <div class="border border-right col-md-3 col-lg-2 bg-body-tertiary">
          <div
            class="offcanvas-md offcanvas-end bg-body-tertiary"
            tabindex="-1"
            id="sidebarMenu"
            aria-labelledby="sidebarMenuLabel"
          >
            <div class="offcanvas-header">
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="offcanvas"
                data-bs-target="#sidebarMenu"
                aria-label="close"
              ></button>
            </div>
            <div
              class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto"
            >
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a
                    class="nav-link d-flex align-items-center gap-2 active text-dark"
                    aria-current="page"
                    href="dashboard.php"
                  >
                    <img src="asset/icons/house-fill.svg" alt="house-fill" />
                    Dashboard
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link d-flex align-items-center gap-2 text-dark"
                    href="biodata.php"
                  >
                    <img
                      src="asset/icons/person-circle.svg"
                      alt="person-circle"
                    />
                    Biodata Diri
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link d-flex align-items-center gap-2 text-dark"
                    href="project.php"
                  >
                    <img
                      src="asset/icons/journal-code.svg"
                      alt="journal-code"
                    />
                    Project
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link d-flex align-items-center gap-2 text-dark"
                    href="galery.php"
                  >
                    <img src="asset/icons/images.svg" alt="images" />
                    Galery
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link d-flex align-items-center gap-2 text-dark"
                    href="address.php"
                  >
                    <img src="asset/icons/geo-alt-fill.svg" alt="geo-alt-fill" />
                    Address
                  </a>
                </li>
              </ul>

              <hr class="my-3" />

              <ul class="nav flex-column mb-auto">
                <li class="nav-item">
                  <a
                    class="nav-link d-flex align-items-center gap-2 text-dark"
                    href="logout.php"
                  >
                    <img src="asset/icons/door-open-fill.svg" alt="door-open-fill" />
                    Logout
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <main
          id="dashboard"
          class="dashboard col-md-9 ms-sm-auto col-lg-10 px-md-3"
        >
          <div
            class="dashboard-header d-flex flex-column justify-content-between flex-wrap flex-md-nowrap align-items-start pt-3 pb-2 mb-3 border-bottom"
          >
            <h2 class="fs-4" style="font-family: 'Poppins', sans-serif;">Selamat datang <span style="color: dark; text-decoration: none;"><?php echo $_SESSION['username']; ?></span></h2>
            <small class="text-muted" style="font-family: 'PT Serif', sans-serif;"
              >Selamat datang kembali, senang bisa bertemu dengan anda</small
            >
          </div>

          <div class="section">
            <div
              class="section-header col rounded py-2 px-3 bg-primary text-light"
            >
              <h3 class="fs-4" style="font-family: 'Poppins', sans-serif;">Address</h3>
            </div>
          </div>

          <section id="alamat" class="my-5" style="font-family: 'Poppins', sans-serif;">
            <div class="container">
              <!-- Kolom Alamat -->
              <div class="row">
                <div class="col-12 text-center text-md-center">
                  <h2>Alamat</h2>
                  <p style="font-family: 'PT Serif', sans-serif;">
                    Jalan Tulip Gg.2 No.3, Sumerta Kaja, Kec. Denpasar Timur,
                    Kota Denpasar, Bali
                  </p>
                </div>
              </div>

              <!-- Kolom Google Maps -->
              <div class="row mb-3" style="max-width: 500px; margin: 0 auto;">
                <div class="col-12 d-flex justify-content-center">
                  <div class="ratio ratio-4x3">
                    <iframe
                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.484500985665!2d115.22856177321155!3d-8.645384287923289!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23f7e99e117b3%3A0x2cf7a41125d0d4a6!2sGg.%20II%20No.3%2C%20Sumerta%20Kaja%2C%20Kec.%20Denpasar%20Tim.%2C%20Kota%20Denpasar%2C%20Bali!5e0!3m2!1sid!2sid!4v1745024739032!5m2!1sid!2sid"
                      width="400"
                      height="300"
                      style="border: 0"
                      allowfullscreen=""
                      loading="lazy"
                      referrerpolicy="no-referrer-when-downgrade"
                    ></iframe>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </main>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.min.js"
      integrity="sha384-VQqxDN0EQCkWoxt/0vsQvZswzTHUVOImccYmSyhJTp7kGtPed0Qcx8rK9h9YEgx+"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

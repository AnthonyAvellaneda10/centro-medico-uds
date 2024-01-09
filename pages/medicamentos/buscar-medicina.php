<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../../assets/"
  data-template="vertical-menu-template-free">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Buscar Medicina | Centro Médico - UNI</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/128/9401/9401568.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="../../dist/css/style.css">
    <link rel="stylesheet" href="../../dist/css/reset-container.css">

    <link rel="stylesheet" href="../../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="../home/index.php" class="app-brand-link">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f7/Uni-logo_transparente_granate.png/611px-Uni-logo_transparente_granate.png" style="width: 35px;">
            <span class="app-brand-text demo menu-text fw-bolder ms-2 c-blue">Centro</span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2 c-green">Médico</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Menú -->
            <li class="menu-item">
              <a href="../home/index.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Basic">Menú</div>
              </a>
            </li>

            <!-- Dashboard -->
            <li class="menu-item">
              <a href="../dashboard/dashboard.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Basic">Dashboard</div>
              </a>
            </li>

            <!-- Clientes -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Layouts">Clientes</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="../clientes/agregar-cliente.php" class="menu-link">
                    <div data-i18n="Without menu">Agregar cliente</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="../clientes/gestionar-cliente.php" class="menu-link">
                    <div data-i18n="Without navbar">Gestionar cliente</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Distribuidores -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-truck"></i>
                <div data-i18n="Layouts">Distribuidores</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="../distribuidores/agregar-distribuidor.php" class="menu-link">
                    <div data-i18n="Without menu">Agregar distribuidor</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="../distribuidores/gestionar-distribuidor.php" class="menu-link">
                    <div data-i18n="Without navbar">Gestionar distribuidor</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Medicamentos -->
            <li class="menu-item active open">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-capsule"></i>
                <div data-i18n="Layouts">Medicamentos</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="./agregar-medicamento.php" class="menu-link">
                    <div data-i18n="Without menu">Agregar medicamento</div>
                  </a>
                </li>
                <li class="menu-item open">
                  <a href="javascript:vodi(0);" class="menu-link menu-toggle">
                    <div data-i18n="Without navbar">Gestionar stock</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item active" style="margin-left: 15px;">
                        <a href="./entrada-stock.php" class="menu-link">
                            <div data-i18n="Without navbar">Entrada de stock</div>
                        </a>
                    </li>
                    <li class="menu-item" style="margin-left: 15px;">
                        <a href="./salida-stock.php" class="menu-link">
                            <div data-i18n="Without navbar">Salida de stock</div>
                        </a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a href="./gestionar-medicamento.php" class="menu-link">
                    <div data-i18n="Without navbar">Gestionar medicamento</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Facturas -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-calendar-check"></i>
                <div data-i18n="Layouts">Facturas</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link">
                    <div data-i18n="Without menu">Agregar medicamento</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link">
                    <div data-i18n="Without navbar">Gestionar stock</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link">
                    <div data-i18n="Without navbar">Gestionar medicamento</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Reportes -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-report"></i>
                <div data-i18n="Layouts">Reportes</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link">
                    <div data-i18n="Without menu">Agregar medicamento</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link">
                    <div data-i18n="Without navbar">Gestionar stock</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link">
                    <div data-i18n="Without navbar">Gestionar medicamento</div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <img src="https://cdn-icons-png.flaticon.com/128/2257/2257735.png" alt="">
                  <p> <span class="c-blue">Buscar </span> <span class="c-green">medicamento</span> </p>
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="https://cdn-icons-png.flaticon.com/128/3140/3140343.png" alt class="w-px-40 h-auto rounded-circle" style="border: 1px solid;" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="https://cdn-icons-png.flaticon.com/128/3140/3140343.png" alt class="w-px-40 h-auto rounded-circle" style="border: 1px solid;" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-medium d-block">John Doe</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">Mi perfil</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Ajustes</span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" style="color: #f62d51;">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Cerrar sesión</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
            <div class="agregar-medicina">
                <div class="container">
                    <!-- Bootstrap Table with Header - Light -->
                <!-- Basic Layout -->
              <div class="row">
                
                <div class="col-xl">
                  <div class="card mb-4">
                    <div class="card-body">
                      <form>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Nombre comercial</label>
                          <input type="text" class="form-control" id="basic-default-fullname" placeholder="Nombre comercial" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-company">Laboratorio</label>
                          <input type="text" class="form-control" id="basic-default-company" placeholder="Laboratorio" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-company">Nombre genérico</label>
                          <input type="text" class="form-control" id="basic-default-company" placeholder="Nombre genérico" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-company">Presentación</label>
                          <input type="text" class="form-control" id="basic-default-company" placeholder="Presentación" />
                        </div>
                        <button type="submit" class="btn btn-primary">Buscar medicina</button>
                      </form>
                    </div>
                  </div>
                </div>

                <div class="col-xl">
                  <div class="card mb-4">
                    <div class="card-body">
                      <form>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Cantidad</label>
                          <input type="text" class="form-control" id="basic-default-fullname" placeholder="Ingrese cantidad" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-company">Precio</label>
                          <input type="text" class="form-control" id="basic-default-company" placeholder="Ingrese precio de costo" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-company">Fecha de vencimiento</label>
                          <input type="text" class="form-control" id="basic-default-company" placeholder="Ingrese fecha de vencimiento" />
                        </div>
                        <button type="submit" class="btn btn-primary">Registrar medicina</button>
                      </form>
                    </div>
                  </div>
                </div>
            </div>



                <div class="card">
                    <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Nombre comercial</th>
                            <th>Nombre genérico</th>
                            <th>Concentración</th>
                            <th>Grupo terapeútico</th>
                            <th>Laboratorio</th>
                            <th>Presentación</th>
                            <th>Forma farmaceútica</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <tr>
                                <td>1</td>
                                <td>AMOXIDALDUO</td>
                                <td>AMOXICILINA</td>
                                <td>1G</td>
                                <td></td>
                                <td>ROEMMERS</td>
                                <td>CAPSULA</td>
                                <td></td>
                                <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"
                                        ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                    >
                                    <a class="dropdown-item" href="javascript:void(0);"
                                        ><i class="bx bx-trash me-1"></i> Delete</a
                                    >
                                    </div>
                                </div>
                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>AMOXICILINA500MG</td>
                                <td>AMOXICILINA</td>
                                <td>500MG</td>
                                <td></td>
                                <td>FARMINDUSTRIA</td>
                                <td>CAPSULA</td>
                                <td></td>
                                <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"
                                        ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                    >
                                    <a class="dropdown-item" href="javascript:void(0);"
                                        ><i class="bx bx-trash me-1"></i> Delete</a
                                    >
                                    </div>
                                </div>
                                </td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>AMOXICLINCL500</td>
                                <td>AMOXICILINA+ACIDOCLAVULANICO</td>
                                <td>20MG</td>
                                <td></td>
                                <td>SIEGFRIED</td>
                                <td>TABLETA</td>
                                <td></td>
                                <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"
                                        ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                    >
                                    <a class="dropdown-item" href="javascript:void(0);"
                                        ><i class="bx bx-trash me-1"></i> Delete</a
                                    >
                                    </div>
                                </div>
                                </td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td>BEPANTHEN30GR</td>
                                <td>DEXPANTHENOL</td>
                                <td>30ML</td>
                                <td></td>
                                <td>BAYER</td>
                                <td>TUBO</td>
                                <td></td>
                                <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"
                                        ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                    >
                                    <a class="dropdown-item" href="javascript:void(0);"
                                        ><i class="bx bx-trash me-1"></i> Delete</a
                                    >
                                    </div>
                                </div>
                                </td>
                            </tr>

                            <tr>
                                <td>5</td>
                                <td>AEROMIDE</td>
                                <td>BUDESONIDA</td>
                                <td>200MCG</td>
                                <td></td>
                                <td>ELIFARMA</td>
                                <td>INHALACION</td>
                                <td></td>
                                <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"
                                        ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                    >
                                    <a class="dropdown-item" href="javascript:void(0);"
                                        ><i class="bx bx-trash me-1"></i> Delete</a
                                    >
                                    </div>
                                </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
                <!-- Bootstrap Table with Header - Light -->
                </div>
            </div>
            <!-- / Content -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->

          <!-- Footer -->
          <footer class="content-footer footer bg-footer-theme">
                <div class="container-xxl d-flex flex-wrap justify-content-center py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0 d-flex justify-content-center" id="currentDate" style="text-align: center;">
                    
                </div>
                </div>
            </footer>
            <!-- / Footer -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../../assets/vendor/libs/popper/popper.js"></script>
    <script src="../../assets/vendor/js/bootstrap.js"></script>
    <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../../assets/vendor/js/menu.js"></script>

    <!-- endbuild -->
    <script src="../../dist/js/current-year.js"></script>

    <!-- Vendors JS -->
    <script src="../../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>

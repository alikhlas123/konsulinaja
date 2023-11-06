<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Registrasi</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="registerStyle.css" />
  </head>
  </head>
  <body>
    <section class="h-100 gradient-form" style="background-color: #eee">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
              <div class="card rounded-3 text-black">
                <div class="row g-0">
                  <div class="col-lg-6">
                    <div class="card-body p-md-5 mx-md-4">
                      <div class="text-center">
                        <h4 class="mt-1 mb-3 pb-1">Sign Up Now</h4>
                      </div>
                      <form action="cekregister.php" method="post">
                        <div class="row">
                          <div class="form-outline mb-1">
                            <input
                              type="text"
                              name="username"
                              class="form-control"
                              required
                            />
                            <label class="form-label" for="form2Example11"
                              >Username <Address></Address></label
                            >
                          </div>
                          <div class="form-outline mb-1">
                            <input
                              type="text"
                              name="nama"
                              class="form-control"
                              required
                            />
                            <label class="form-label" for="form2Example11"
                              >Nama Lengkap <Address></Address></label
                            >
                          </div>
                          <div class="form-outline mb-1">
                            <input
                              type="password"
                              name="password"
                              class="form-control"
                              required
                            />
                            <label class="form-label" for="form2Example22"
                              >Password</label
                            >
                          </div>

                          <div class="form-outline mb-1">
                            <input
                              type="email"
                              name="email"
                              class="form-control"
                              required
                            />
                            <label class="form-label" for="form2Example11"
                              >Email <Address></Address></label
                            >
                          </div>
                          
                          <div class="form-outline mb-1">
                            <select name="level">
                            <option selected>---Pilih---</option>
                              <option value="admin">Admin</option>
                              <option value="dokter">Dokter</option>
                              <option value="user">User</option>
                            </select>
                            <br><label class="form-label" for="form2Example11">
                              Daftar sebagai <Address></Address></label
                            >
                          </div>
                          </div>
                        <div class="text-center pt-1 mb-3 pb-1">
                          <button
                            class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                            type="submit"
                          >Sign In
                          </button>
                        </div>

                      </form>
                    </div>
                  </div>
                  <div
                    class="col-lg-6 d-flex align-items-center gradient-custom-2"
                  >
                  <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                    <h4 class="mb-4">KonsulinAja.Id</h4>
                    <p class="small mb-0">
                      Konsultasi mudah kapanpun dan dimanapun bersama KonsulinAja.Id
                    </p>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  </body>
</html>

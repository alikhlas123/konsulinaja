<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="loginStyle.css" />
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
                      <h2 class="mt-1 mb-5 pb-1">KonsulinAja.id</h2>
                    </div>

                    <form action="ceklogin.php?op=in" method="post">
                      <div class="login">
                        <p>Please login to your account</p>
  
                        <div class="form-outline mb-4">
                          <input
                            type="text"
                            name="username"
                            class="form-control"
                            required
                          />
                          <label class="form-label" for="form2Example11"
                            >Username</label
                          >
                        </div>
  
                        <div class="form-outline mb-4">
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
  
                        <div class="text-center pt-1 mb-5 pb-1">
                          <button
                            class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                            type="submit"
                          >
                            Log in
                          </button>
                        </div>
                        <div
                          class="d-flex align-items-center justify-content-center pb-4"
                          >
                          <p class="mb-0 me-2">Don't have an account?</p>
                          <a href="register.php">
                            <button type="button" class="btn btn-outline-danger">
                              Create new
                            </button>
                          </a>
                        </div>
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

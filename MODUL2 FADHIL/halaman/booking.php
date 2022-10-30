<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Modul 2</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <?php
      $imgCar = "";
      if (isset($_POST['imgCar'])) {
        $imgCar = $_POST['imgCar'];
      }
    ?>  
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
              <a
                class="nav-link active"
                aria-current="page"
                href="home.php"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="booking.php">Booking</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- end of navbar -->

    <!-- main -->
    <main class="container-fluid">
      <div class="row">
        <div class="col-12 text-center mt-4">
          <h3>Rent your car now!</h3>
        </div>
      </div>

      <div class="row px-4 mt-4 align-items-center">
        <div class="col-6">
          <img src="../assets/image/<?php 
            if ($imgCar == "rush") {
                echo "rush.png";
            } elseif ($imgCar == "ayla") {
                echo "ayla.png";
            } elseif ($imgCar == "brio") {
                echo "brio.jpg";
            }
          ?>"/>
        </div>

        <div class="col-6">
          <form method='POST' action='my_booking.php'>
            <input type="hidden" name="booking_number" value=<?= rand() ?>>
            <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input
                type="text"
                class="form-control bg-secondary text-light"
                id="nama"
                readonly
                value="Fadhil_1202202269"
                name="nama"
              />
            </div>

            <div class="mb-3">
              <label for="date" class="form-label">Book Date</label>
              <input type="date" class="form-control" id="date" name="date" />
            </div>

            <div class="mb-3">
              <label for="time" class="form-label">Start Time</label>
              <input type="time" class="form-control" id="time" name="time"/>
            </div>

            <div class="mb-3">
              <label for="duration" class="form-label">Duration (Days)</label>
              <input type="text" class="form-control" id="duration" name="duration"/>
            </div>

            <div class="mb-3">
              <label for="car-type" class="form-label">Car Type</label>
              <select
                class="form-select"
                aria-label="Default select example"
                id="car-type"
                name="car-type"
              >
                <option <?php echo $imgCar == "rush" ? 'selected' : NULL; ?> value="Toyota Rush">Toyota Rush</option>
                <option <?php echo $imgCar == "ayla" ? 'selected' : NULL; ?> value="Toyota Ayla">Toyota Ayla</option>
                <option <?php echo $imgCar == "brio" ? 'selected' : NULL; ?> value="Honda Brio">Honda Brio</option>
              </select>
            </div>

            <div class="mb-3">
              <label for="phone" class="form-label">Phone Number</label>
              <input type="text" class="form-control" id="phone" name="phone" />
            </div>

            <div class="mb-3">
              <label for="service" class="form-label">Add Services</label>
              <div class="form-check">  
                <input type="hidden" name="health" value=25000>
                <input
                  class="form-check-input"
                  type="checkbox"
                  id="health"
                  name="services[]"
                  value="Health Protocol"
                />
                <label class="form-check-label" for="flexCheckDefault">
                  Health Protocol / Rp25.000
                </label>
              </div>
              <div class="form-check">
              <input type="hidden" name="driver" value=100000>
                <input
                  class="form-check-input"
                  type="checkbox"
                  id="driver"
                  name="services[]"
                  value="Driver"
                />
                <label class="form-check-label" for="flexCheckChecked">
                  Driver / Rp100.000
                </label>
              </div>
              <div class="form-check">
              <input type="hidden" name="fuel" value=250000>
                <input
                  class="form-check-input"
                  type="checkbox"
                  id="fuel"
                  name="services[]"
                  value="Fuel"
                />
                <label class="form-check-label" for="flexCheckChecked">
                  Fuel Filled / Rp250.000
                </label>
              </div>
            </div>

            <button type="submit" class="btn btn-success w-100" name="submit">Book</button>
          </form>
        </div>
      </div>
    </main>
    <!-- end of main -->

    <!-- footer -->
    <footer class="bg-secondary text-center text-white mt-4">
      <div class="text">
        <p class="p-1">Created by Fadhil_1202202269</p>
      </div>
    </footer>
    <!-- end of footer -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

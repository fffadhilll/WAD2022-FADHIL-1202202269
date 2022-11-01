<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Modul 2</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
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
    <div class="container">
      <div class="row">
        <div class="col-12 text-center mt-4">
          <h3>WELCOME TO EAD RENT</h3>
          <p>Find your best deal, here!</p>
        </div>
      </div>

      <div class="row justify-content-center mt-4">
        <div class="col-3">
          <form action="booking.php" method="post">
            <div class="card text-center" style="width: 18rem">
              <img src="../assets/image/rush.png" class="card-img-top" alt="Agya" />
              <div class="card-body">
                <h5 class="card-title">Toyota Rush</h5>
                <p class="card-text">Rp200000 / day</p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">7 kursi</li>
                <li class="list-group-item">1500 CC</li>
                <li class="list-group-item">Manual</li>
              </ul>
              <div class="card-footer">
                <input type="hidden" value="rush" name="imgCar">
                <button type="submit" class="btn btn-primary">Book Now</button>
              </div>
            </div>
        </div>
        </form>

        <div class="col-3">
          <form action="booking.php" method="post">
            <div class="card text-center" style="width: 18rem">
              <img src="../assets/image/ayla.png" class="card-img-top" alt="Agya" />
              <div class="card-body">
                <h5 class="card-title">Toyota Ayla</h5>
                <p class="card-text">Rp150000 / Day</p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">5 kursi</li>
                <li class="list-group-item">1200 CC</li>
                <li class="list-group-item">Manual</li>
              </ul>
              <div class="card-footer">
                <input type="hidden" value="ayla" name="imgCar">
                <button type="submit" class="btn btn-primary">Book Now</button>
              </div>
            </div>
          </form>
        </div>

        <div class="col-3">
          <form action="booking.php" method="post">
            <div class="col-3">
              <div class="card text-center" style="width: 18rem">
                <img src="../assets/image/brio.jpg" class="card-img-top" alt="Agya" />
                <div class="card-body">
                  <h5 class="card-title" name="brio">Honda Brio</h5>
                  <p class="card-text">Rp150000 / day</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">5 kursi</li>
                  <li class="list-group-item">1500 CC</li>
                  <li class="list-group-item">Automatic</li>
                </ul>
                <div class="card-footer">
                  <input type="hidden" value="brio" name="imgCar">
                  <button type="submit" class="btn btn-primary">Book Now</button>
                </div>
              </div>
            </div>
          </form>
        </div>


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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>
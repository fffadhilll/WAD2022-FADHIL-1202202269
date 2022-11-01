<?php
$book_num = $_POST["booking_number"];
$nama = $_POST["nama"];
$date = $_POST["date"];
$time = $_POST["time"];
$duration = $_POST["duration"];
$car_type = $_POST["car-type"];
$services = isset($_POST["services"]) ? $_POST["services"] : '';
$phone = $_POST["phone"];
$price = 0;
?>

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

  <!-- header -->
  <div class="row text-center mt-4">
    <div class="col-12">
      <h3>Thank you <?= $nama ?> for reserving</h3>
      <h5>Please double check your reservation details</h5>
    </div>
  </div>
  <!-- end of header -->

  <!-- main -->
  <main class="container-fluid">
    <div class="row justify-content-center mt-5">
      <div class="col-10">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Booking Number</th>
              <th scope="col">Name</th>
              <th scope="col">Check In</th>
              <th scope="col">Check Out</th>
              <th scope="col">Car Type</th>
              <th scope="col">Phone Number</th>
              <th scope="col">Services</th>
              <th scope="col">Total Price</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row"><?= $book_num ?></th>
              <td><?= $nama ?></td>
              <td><?= $date . " " . $time ?></td>
              <td>
                <?php
                $checkout = date('Y-m-d', strtotime($date . "+ {$duration} days"));
                echo $checkout . " " . $time;
                ?>
              </td>
              <td>
                <?php
                if ($car_type == "Toyota Rush") {
                  $price += 250000;
                } elseif ($car_type == "Toyota Ayla") {
                  $price += 150000;
                } elseif ($car_type == "Honda Brio") {
                  $price += 150000;
                }
                echo $car_type;
                ?>
              </td>
              <td><?= $phone ?></td>
              <td>
                <ul>
                  <?php if (!empty($_POST['services'])) : ?>
                    <?php foreach ($services as $service) : ?>
                      <?php if ($service == "Health Protocol") : ?>
                        <?php $price += 25000; ?>
                      <?php elseif ($service == "Driver") : ?>
                        <?php $price += 100000; ?>
                      <?php elseif ($service == "Fuel") : ?>
                        <?php $price += 250000; ?>
                      <?php endif; ?>
                      <li><?= $service ?></li>
                    <?php endforeach; ?>
                  <?php else : ?>
                    <li>No services</li>
                  <?php endif; ?>
                </ul>
              </td>
              <td><?= $price ?></td>
            </tr>
          </tbody>
        </table>
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
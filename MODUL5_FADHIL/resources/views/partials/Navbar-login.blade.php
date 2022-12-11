<?php 
    // require('../config/connector.php');
    // $id = $_COOKIE["id"];
    // $user = query("SELECT * FROM user_fadhil WHERE id='$id'")[0];
?>

<!-- navbar -->
<nav class="navbar navbar-expand-lg bg-<?php 
                                    // if ( isset($_COOKIE["primary"]) ) {
                                    //     echo $_COOKIE["primary"];
                                    // } elseif ( isset($_COOKIE["danger"]) ) {
                                    //     echo $_COOKIE["danger"];
                                    // } elseif ( isset($_COOKIE["success"]) ) {
                                    //     echo $_COOKIE["success"];
                                    // } else {
                                    //     echo "primary";
                                    // }
                        ?> navbar-dark ">
    <div class="container-fluid container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/listCar">MyCar</a>
                </li>
            </ul>
            <a class="btn btn-light text-primary mx-5" href="./Add-Fadhil.php">Add Car</a>
            <!-- Example single danger button -->
            <div class="btn-group">
                <button type="button" class="btn btn-light text-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <?= $_SESSION["nama"] ?>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="./Profile-Fadhil.php?id=<?= $_SESSION['id'] ?>">Profile</a></li>
                    <li><a class="dropdown-item" href="../config/logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- end of navbar -->
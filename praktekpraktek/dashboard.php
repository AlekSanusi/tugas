<?php 
  session_start();

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">   

    <!-- Custom styles for this template-->
    <link href="asset-/css/sb-admin-2.min.css" rel="stylesheet" />
    <title>produk</title>
</head>
<style>
    nav {
          position: fixed;
      }
      .navbar-brand{
        display: flex;
      }
      .cosmetic{
        line-height: 5px;
        margin-top: 40px;
      }
      .cosmetic p:first-child{
        font-weight: 700;
        font-size: 20px;
        font-family: 'Pangolin', cursive;
      }
      .cosmetic p:last-child{
        font-weight: 700;
        font-size: 15px;
        text-align: center;
        font-family: 'Pangolin', cursive;
      }
      .collapse{
          display: flex;
          position: absolute;
          right: 0;
          padding-right: 50px;
          box-sizing: border-box;
          font-family: 'Pangolin', cursive;
      }
      .nav-link {
          margin: 20px;
          color: black;
      }
      .nav-item a:hover{
          color: rgb(255, 252, 83);
      }
      .nav-item a:active{
          color: rgb(255, 147, 6);
      }
</style>
<body>
<div class="admin">

</div>
<nav class="navbar navbar-expand-lg">
        <div class="container">
            <div class="collapse navbar-collapse pt-3" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">HOME</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="dashboard.php">DASHBOARD</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">ABOUT</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">CONTACT</a>
                  </li>
                </ul>
          </div>
        </div>
      </nav>
      <hr>
        <div class="row">
            <div class="col-11">
                <div class="row">

                    <?php
  			include 'config.php';
  			$stmt = $conn->prepare('SELECT * FROM produk');
  			$stmt->execute();
  			$result = $stmt->get_result();
  			while ($row = $result->fetch_assoc()):
  		?>
                    <div class="col-md-3">
                        <form action="" class="form-submit" style="margin-left:50px;">
                            <div class="card shadow mb-4">
                                <div class="card-header px-4 d-inline-flex">
                                    <div class="row">
                                        <h6 class="mr-4 font-weight-bold text-dark ">
                                            <?= $row['product_name'] ?></h6>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <small class="mr-0 "></small>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <img class="img-fluid" src="<?= $row['product_image'] ?>" alt=""
                                        id="gambar1"style="width:100%; height:150px;">
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <span><small></small></span>
                                        </div>
                                        <input type="hidden" class="pid" name="id" value="<?= $row['id'] ?>">
                                        <input type="hidden" class="pname" name="product_name" value="<?= $row['product_name'] ?>">
                                        <input type="hidden" class="pprice" name="product_price" value="<?= $row['product_price'] ?>">
                                        <input type="hidden" class="pimage" name="product_image" value="<?= $row['product_image'] ?>">
                                        <div class="col-md-7">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <span class="text-center" name="product_price">Rp. <?= number_format($row['product_price'],2,',','.') ?> </span>
                                    </div>
                                </div>
                                <input type="hidden" name="pid" class="pid" value="<?= $row['id']?>">

                            </div>
                            
                        </form>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>


        </div>
    </div>

    <!-- Pie Chart -->





















    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <!-- Bootstrap core JavaScript-->
    <script src="asset-/vendor/jquery/jquery.min.js"></script>
    <script src="asset-/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="asset-/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="asset-/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="asset-/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="asset-/js/demo/chart-area-demo.js"></script>
    <script src="asset-/js/demo/chart-pie-demo.js"></script>

    <!-- <script src="asset-/js/spa.js"></script> -->
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>

</body>

</html>
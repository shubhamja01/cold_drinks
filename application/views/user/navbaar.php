<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User</title>

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/b8320da100.js" crossorigin="anonymous"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div class="container pt-3">
  
<nav class="navbar navbar-expand-lg navbar-dark bg-info p-2" style="border-radius: 10px;">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= base_url() ?>user/index">Cold Drinks</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left side menu -->
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url()?>user/index">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url()?>user/product_list">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url() ?>user/my_cart">
            <i class="icon-shopping-cart"></i> Cart [<?= count($cartdata) > 0 ? count($cartdata) : '0' ?>]
          </a>
        </li>

        <?php if (isset($_SESSION["customer_id"])): ?>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>user/profile">
              <i class="icon-user"></i> Profile
            </a>
          </li>
        <?php else: ?>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>user/login">
              <i class="icon-user"></i> Login / Signup
            </a>
          </li>
        <?php endif; ?>
      </ul>

      <form class="d-flex ms-lg-3 mt-2 pt-2 mt-lg-0" action="<?=base_url()?>user/search">
        <input class="form-control me-2" value="<?=$_GET['keyword'] ??  ''?>" name="keyword" type="search" placeholder="Search" aria-label="Search" />
        <button class="btn btn-dark ms-2" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<style type="text/css">
  .row1 {
    border-radius: 10px;
    border: 1px solid black;
  }

  .row1 h2 {
    color: white;
    font-weight: bold;
    text-shadow: 1px 1px black;
  }

  label {
    text-transform: capitalize;
    font-weight: bold;
    font-size: 15px !important;
  }

  input {
    font-weight: bold;
  }

  button,
  .btn {
    font-weight: bold;
    font-size: 20px !important;
  }
</style>

<div class="container">
  <div class="row1 bg-white m-4 p-4">
    <!-- Header with marquee -->
    <div class="bg-secondary text-center p-2 row1 mb-4">
        <h2>Customer Login</h2>
    </div>

    <div class="mb-3">
      <a href="<?=base_url()?>user/index">
        <button type="button" class="btn btn-success">Back</button>
      </a>
    </div>

    <form action="<?=base_url()?>user/login_verify" method="post" enctype="multipart/form-data">
      <div class="bg-light p-4 rounded">
        <div class="mb-3">
          <label for="mobile">Mobile:</label>
          <input type="number" id="mobile" name="customer_mobile" required class="form-control">
        </div>
        <div class="mb-3">
          <label for="password">Password:</label>
          <input type="password" id="password" name="customer_password" required class="form-control">
        </div>
        <div class="d-flex gap-2 mt-3">
          <button type="submit" class="btn btn-info">Login</button>
          <a href="<?=base_url()?>user/signup" class="btn btn-primary">SignUp</a>
        </div>
      </div>
    </form>
  </div>
</div>

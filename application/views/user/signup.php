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
    
    <div class="bg-secondary text-center p-2 row1 mb-4">
        <h2>Customer Signup</h2>
    </div>

    <div class="mb-3">
      <a href="<?=base_url()?>user/index">
        <button type="button" class="btn btn-success">Back</button>
      </a>
    </div>

    <form action="<?=base_url()?>user/signup_data" method="post" enctype="multipart/form-data">
      <div class="bg-light p-4 rounded">
        <div class="mb-3">
          <label for="name">Name:</label>
          <input type="text" name="customer_name" required class="form-control">
        </div>
        <div class="mb-3">
          <label for="mobile">Mobile:</label>
          <input type="number" name="customer_mobile" required class="form-control">
        </div>
        <div class="mb-3">
          <label for="email">Email:</label>
          <input type="email" name="customer_email" required class="form-control">
        </div>
        <div class="mb-3">
          <label for="password">Password:</label>
          <input type="number" name="customer_password" required class="form-control">
        </div>
        <div class="d-flex gap-2 mt-3">
          <button type="submit" class="btn btn-info">Signup</button>
          <a href="<?=base_url()?>user/login" class="btn btn-primary">Login</a>
        </div>
      </div>
    </form>
  </div>
</div>

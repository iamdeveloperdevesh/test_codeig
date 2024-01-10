<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<form class="container" method="post" action="process_login">
  <h2 class="m-5 d-flex justify-content-center">Login</h2>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" required>
  </div>
  <div class="d-flex mb-2">
    <div class="me-auto d-flex">
      <p class="me-2">Don't have an account?</p>
      <a class="form-check-label" for="exampleCheck1" href="<?= base_url() ?>signup">Signup</a>
    </div>
    <div>
      <a class="form-check-label" for="exampleCheck1" href="<?= base_url() ?>Verification_controller">Forgot Password</a>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>
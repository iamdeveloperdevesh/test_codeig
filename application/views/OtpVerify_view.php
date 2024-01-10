<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<form class="container" method="post" action="<?php echo base_url().'OtpVerify_controller/verify_otp'; ?>" >
  <h2 class="m-5 d-flex justify-content-center">Verify OTP</h2>
  <div class="d-flex justify-content-between alert alert-success" role="alert">
  <span>A Verification OTP has been sent to your email address please check it.</span>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter OTP</label>
    <input type="text" class="form-control" minlength="6" maxlength="6" placeholder="Enter OTP" name="code"  aria-label="Enter OTP" required>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
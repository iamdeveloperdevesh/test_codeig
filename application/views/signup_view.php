<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

<form class="container" method="post" action="<?php echo base_url() . 'signup_controller/handleSignup'; ?>">
    <h2 class="m-5 d-flex justify-content-center">Signup</h2>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control <?php echo form_error('email') !== "" ? 'is-invalid' : '' ?>" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        <?php echo form_error('email'); ?>
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control <?php echo form_error('password') !== "" ? 'is-invalid' : '' ?>" id="exampleInputPassword1" name="password">
        <?php echo form_error('password'); ?>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
        <input type="password"
            class="form-control <?php echo form_error('confirm_password') !== "" ? 'is-invalid' : '' ?>"
            id="exampleInputPassword2" name="confirm_password">
        <?php echo form_error('confirm_password'); ?>
    </div>
    <div class="d-flex mb-2">
        <div class="me-auto d-flex">
            <p class="me-2">Already have an account?</p>
            <a class="form-check-label" for="exampleCheck1" href="<?= base_url() ?>login">Login</a>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Signup</button>
</form>
<?php include './include/Components/auth/header.php' ?>
<div class="login-box">
    <div class="login-logo">
        <a href="index.php"><img src="assets/img/logo_transparent.png" width="75" class="align-top" alt=""></a>
    </div>
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign In Here</p>
            <form action="#" method="post">
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-success btn-block">Sign In</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
<?php include './include/Components/auth/footer.php' ?>
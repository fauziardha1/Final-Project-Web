<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view("userViews/partials/head.php") ?>
</head>
<body>
	<?php $this->load->view("userViews/partials/navbar.php") ?>
    <div class = "main">
	   <section class="sign-in">
            <div class="containerlogin">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="<?php echo base_url('img/signin-image.jpg') ?>" alt="sign up image"></figure>
                        <a href="register" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="your_name" id="your_name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="your_pass" id="your_pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
	<?php $this->load->view("userViews/partials/footer.php") ?>
</body>
</html>
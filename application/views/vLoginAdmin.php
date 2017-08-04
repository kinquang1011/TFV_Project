<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?php echo $title?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="http://giayphepthucpham.vn/public/css/login.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
 <div class="container">
        <div class="card card-container">
            
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="post"" action="<?php echo base_url()."admin/login"?>">
                 <input type="text" name="userName" id="inputUsername" class="form-control" placeholder="User name" required>
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
            </form><!-- /form -->
            <a href="#" class="forgot-password">
                Forgot the password?
            </a>
        </div><!-- /card-container -->
    </div><!-- /container -->
</body>
</html>
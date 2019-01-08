<?php
    session_start();
    require_once('inc/connection.php');
    //date_default_timezone_set("Asia/Colombo");
    //check for the form submission
    if(isset($_POST['loginBTN'])){

        $error = array();
        //check reg no and password entered properly
        if(!isset($_POST['user_id']) || strlen(trim($_POST['user_id']))<1){
            $error[]='Username is Missing/Invalid';
        }
        if(!isset($_POST['password']) || strlen(trim($_POST['password']))<1){
            $error[]='Password is Missing/Invalid';
        }
        //check if there any errors in the form
        if(empty($error)){

            //save username and password to variables
            $user_id	=mysqli_real_escape_string($connection,$_POST['user_id']);
            $password	=mysqli_real_escape_string($connection,$_POST['password']);
            $hashed_password=sha1($password);

            //prepare database query
            $query ="SELECT * FROM system_user WHERE user_id = '{$user_id}'AND password = '{$hashed_password}' LIMIT 1";
            $result_set = mysqli_query($connection,$query);
            $cus_id ="mu_";

            if($result_set){

                //if query successful
                if(mysqli_num_rows($result_set) == 1){
                    //valid user found
                    $user=mysqli_fetch_assoc($result_set);
                    $_SESSION['user_id'] =$user['user_id'];
                    $_SESSION['first_name'] =$user['first_name'];
                    $_SESSION['last_name'] =$user['last_name'];

                    //updating last login
                    $query="UPDATE system_user SET last_login = NOW() WHERE user_id='{$_SESSION['user_id']}' LIMIT 1";

                    $result_set=mysqli_query($connection,$query);

                    if(!$result_set){
                        die("Database Query Failed");
                    }
                    //redirect to home.php
                    header('Location:Home_page.php');
                }else{
                    //username and password invalid
                    $error[]='Invalid username / Password';
                }
            }else{
                $error[]='Database Query Failed';
            }
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Max Studio - Online Job Management System</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="row col-lg-12 login">
                <div class="col-lg-12">
                    <h5>Max Studio Online Job Management System</h5>
                </div>
                <marquee behavior="2" direction=""><h6>***** Max Studio - Event Management System *****</h6></marquee>
                <div class="col-lg-8">

                    <form action="index.php" method="POST" class="col-lg-12">
                        <div class="col-lg-5 col-xs-5">
                            <?php
                            if(isset($error) && !empty($error)){
                                echo '<p class="error col-lg-12">Invalid Username / Password</p>';
                            }
                            ?>
                            <?php
                            if(isset($_GET['logout'])){
                                echo '<p class="info col-lg-12">Logout successful</p>';
                            }

                            ?>
                        </div>
                        <div class="inputDiv col-lg-12">
                            <div class="row col-lg-6">
                                <div class="col-lg-12">
                                    <label for="">User Name</label>
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" class="form-control" placeholder="User Name" name="user_id" value="<?php echo "mu_"?>">
                                </div>
                            </div>
                            <div class="row col-lg-6">
                                <div class="col-lg-12">
                                    <label for="">Password</label>
                                </div>
                                <div class="col-lg-12">
                                    <input type="password" class="form-control" placeholder="Password" name="password">
                                </div>
                            </div>
                            <div class="row col-lg-6">
                                <div class="col-lg-6">
                                    <button type="reset" class="btn btn-danger fullWidthButton marginTop10px">Reset</button>
                                </div>
                                <div class="col-lg-6">
                                    <button type="submit" class="btn btn-primary fullWidthButton marginTop10px" name="loginBTN" id="loginBTN">Login</button>
                                </div>
                            </div>
                        </div>

                    </form>

                </div>
                <div class="col-lg-4 loginImage">
                    <img src="images/Max_logo.png" alt="">
                    <h6 class="textAlignRight">Max Studio</h6>
                    <h6 class="textAlignRight">No 17/A ,</h6>
                    <h6 class="textAlignRight"> Gnanodaya Mawatha,</h6>
                    <h6 class="textAlignRight"> Kalutara</h6>
                    <h6 class="textAlignRight"> 071 577 0 535 / 034 222 71 33</h6>
                    <h6 class="textAlignRight">maxstudiok@gmail.com</h6>
                </div>
                <div class="col-lg-12 pageCredits ">
                    <!--<p class="text-center">Web Solution by Dilki Sonali</p>-->
                </div>
			</div>

		</div>
	</div> <!--container-->
</body>
</html>
<?php mysqli_close($connection); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Create New account </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/1libs/jquery/1.12.4/jquery.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/signup.css">
    
</head>
<body>
    <div class="signup-form">
        <form action="" method="post">

            <div class="form-header">
                <h2>Sign Up</h2>
                <p>Fill out this form and start chatting with your friends</p>
            </div>

            <div class="form-group">
                <label>User Name</label>
                <input type="text" class="form-control" name="user_name" placeholder="Example: joy dutta" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="user_pass" placeholder="Password" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label>Email Address</label>
                <input type="email" class="form-control" name="user_email" placeholder="someone@site.com" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Country</label>
                <select class="form-control" name="user_country" required>
                    <option disabled="">Select a country</option>
                    <option>United state of america</option>
                    <option>India</option>
                    <option>china</option>
                    <option>UAE</option>
                    <option>itly</option>
                    <option>russia</option>
                </select>
           </div>
           <div class="form-group">
                <label>Gender</label>
                <select class="form-control" name="user_gender" required>
                    <option disabled="">Select your Gender</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Others</option>

                </select>
           </div>

           <div class="form-group">
                <label class="checkbox-inline"> 
                    <input type="checkbox" required> 
                    I accept the 
                        <a href="#">Terms of Use</a> &amp; 
                        <a href="#">Privacy Policy</a>
                </label> 
            </div>


            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-1g" name="sign_up">Sign up</button>
            </div>
            <?php include("signup_user.php"); ?> 

        </form>
        <div class="text-center small" style="color: #67428B;">Already have an account? <a href="signin.php">Signin Here</a></div>
    </div>
</body>
</html>
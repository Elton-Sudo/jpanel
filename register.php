<?php
// Include config file
	require_once "./include/config.php";
 
// Define variables and initialize with empty values
$first_name = $last_name = $job = $number = $facebook = $twitter = $instagram = $linkedin = $address = $about = $email = $username = $password = $confirm_password = "";
$first_name_err = $last_name_err = $job_err = $number_err = $facebook_err = $twitter_err = $instagram_err = $linkedin_err = $address_err = $about_err = $email_err = $username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
	// Validate first_name
    if(empty(trim($_POST["first_name"]))){
        $first_name_err = "Please enter your first_name.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE first_name = :first_name";
        
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":first_name", $param_first_name, PDO::PARAM_STR);
            
            // Set parameters
            $param_first_name = trim($_POST["first_name"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    $first_name_err = "This info is already taken.";
                } else{
                    $first_name = trim($_POST["first_name"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            unset($stmt);
        }
    }
 
	// Validate last_name
    if(empty(trim($_POST["last_name"]))){
        $last_name_err = "Please enter your last_name.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE last_name = :last_name";
        
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":last_name", $param_last_name, PDO::PARAM_STR);
            
            // Set parameters
            $param_last_name = trim($_POST["last_name"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    $last_name_err = "This info is already taken.";
                } else{
                    $last_name = trim($_POST["last_name"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            unset($stmt);
        }
    }
 
	// Validate job
    if(empty(trim($_POST["job"]))){
        $job_err = "Please enter job description.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE job = :job";
        
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":job", $param_job, PDO::PARAM_STR);
            
            // Set parameters
            $param_job = trim($_POST["job"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    $job_err = "This info is already taken.";
                } else{
                    $job = trim($_POST["job"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            unset($stmt);
        }
    }
 
	// Validate number
    if(empty(trim($_POST["number"]))){
        $number_err = "Please enter your number.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE number = :number";
        
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":number", $param_number, PDO::PARAM_STR);
            
            // Set parameters
            $param_number = trim($_POST["number"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    $number_err = "This info is already taken.";
                } else{
                    $number = trim($_POST["number"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            unset($stmt);
        }
    }
 
	// Validate facebook
    if(empty(trim($_POST["facebook"]))){
        $facebook_err = "Please enter facebook account link.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE facebook = :facebook";
        
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":facebook", $param_facebook, PDO::PARAM_STR);
            
            // Set parameters
            $param_facebook = trim($_POST["facebook"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    $facebook_err = "This info is already taken.";
                } else{
                    $facebook = trim($_POST["facebook"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            unset($stmt);
        }
    }
 
	// Validate twitter
    if(empty(trim($_POST["twitter"]))){
        $twitter_err = "Please enter twitter account link.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE twitter = :twitter";
        
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":twitter", $param_twitter, PDO::PARAM_STR);
            
            // Set parameters
            $param_twitter = trim($_POST["twitter"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    $twitter_err = "This info is already taken.";
                } else{
                    $twitter = trim($_POST["twitter"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            unset($stmt);
        }
    }
 
	// Validate instagram
    if(empty(trim($_POST["instagram"]))){
        $instagram_err = "Please enter instagram account link.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE instagram = :instagram";
        
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":instagram", $param_instagram, PDO::PARAM_STR);
            
            // Set parameters
            $param_instagram = trim($_POST["instagram"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    $instagram_err = "This info is already taken.";
                } else{
                    $instagram = trim($_POST["instagram"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            unset($stmt);
        }
    }
 
	// Validate linkedin
    if(empty(trim($_POST["linkedin"]))){
        $linkedin_err = "Please enter linkedin account link.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE linkedin = :linkedin";
        
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":linkedin", $param_linkedin, PDO::PARAM_STR);
            
            // Set parameters
            $param_linkedin = trim($_POST["linkedin"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    $linkedin_err = "This info is already taken.";
                } else{
                    $linkedin = trim($_POST["linkedin"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            unset($stmt);
        }
    }
 
	// Validate address
    if(empty(trim($_POST["address"]))){
        $address_err = "Please enter address.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE address = :address";
        
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":address", $param_address, PDO::PARAM_STR);
            
            // Set parameters
            $param_address = trim($_POST["address"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    $address_err = "This info is already taken.";
                } else{
                    $address = trim($_POST["address"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            unset($stmt);
        }
    }
 
	// Validate about
    if(empty(trim($_POST["about"]))){
        $about_err = "Please enter info about you.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE about = :about";
        
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":about", $param_about, PDO::PARAM_STR);
            
            // Set parameters
            $param_about = trim($_POST["about"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    $about_err = "This info is already taken.";
                } else{
                    $about = trim($_POST["about"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            unset($stmt);
        }
    }
 
	// Validate email
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter a email.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE email = :email";
        
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":email", $param_email, PDO::PARAM_STR);
            
            // Set parameters
            $param_email = trim($_POST["email"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    $email_err = "This email is already taken.";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            unset($stmt);
        }
    }
	
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = :username";
        
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            unset($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($email_err) && empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (first_name, last_name, job, number, facebook, twitter, instagram, linkedin, address, about, email, username, password) VALUES (:first_name, :last_name, :job, :number, :facebook, :twitter, :instagram, :linkedin, :address, :about, :email, :username, :password)";
         
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":first_name", $param_first_name, PDO::PARAM_STR);
            $stmt->bindParam(":last_name", $param_last_name, PDO::PARAM_STR);
            $stmt->bindParam(":job", $param_job, PDO::PARAM_STR);
            $stmt->bindParam(":number", $param_number, PDO::PARAM_STR);
            $stmt->bindParam(":facebook", $param_facebook, PDO::PARAM_STR);
            $stmt->bindParam(":twitter", $param_twitter, PDO::PARAM_STR);
            $stmt->bindParam(":instagram", $param_instagram, PDO::PARAM_STR);
            $stmt->bindParam(":linkedin", $param_linkedin, PDO::PARAM_STR);
            $stmt->bindParam(":address", $param_address, PDO::PARAM_STR);
            $stmt->bindParam(":about", $param_about, PDO::PARAM_STR);
            $stmt->bindParam(":email", $param_email, PDO::PARAM_STR);
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            $stmt->bindParam(":password", $param_password, PDO::PARAM_STR);
            
            // Set parameters
			$param_first_name = $first_name;
			$param_last_name = $last_name;
			$param_job = $job;
			$param_number = $number;
			$param_facebook = $facebook;
			$param_twitter = $twitter;
			$param_instagram = $instagram;
			$param_linkedin = $linkedin;
			$param_address = $address;
			$param_about = $about;
            $param_email = $email;
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Redirect to login page
                header("location: login");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            unset($stmt);
        }
    }
    
    // Close connection
    unset($pdo);
}
?>
 
<!doctype html>
<html lang="en">
	<head>
		<title>Sign Up</title>
		<?php
			// Meta, Scrips and Styles
			include('./include/head.php');
		?>
	</head>
<body class="bg-image">
	
	<!-- Page Content -->
    <div class="login-form">
		
		<!-- Registration Form -->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
		
			<h2>Sign Up</h2>
			<p>Please fill this form to create an account.</p>
			
            <div class="form-group <?php echo (!empty($first_name_err)) ? 'has-error' : ''; ?>">
                <label>First Name</label>
                <input type="text" name="first_name" class="form-control" value="<?php echo $first_name; ?>">
                <span class="help-block"><?php echo $first_name_err; ?></span>
            </div>
			
            <div class="form-group <?php echo (!empty($last_name_err)) ? 'has-error' : ''; ?>">
                <label>Last Name</label>
                <input type="text" name="last_name" class="form-control" value="<?php echo $last_name; ?>">
                <span class="help-block"><?php echo $last_name_err; ?></span>
            </div>
			
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>
			
			<div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
                <span class="help-block"><?php echo $email_err; ?></span>
            </div> 
			
            <div class="form-group <?php echo (!empty($number_err)) ? 'has-error' : ''; ?>">
                <label>Mobile Number</label>
                <input type="text" name="number" class="form-control" value="<?php echo $number; ?>">
                <span class="help-block"><?php echo $number_err; ?></span>
            </div>
			
            <div class="form-group <?php echo (!empty($job_err)) ? 'has-error' : ''; ?>">
                <label>Job Title</label>
                <input type="text" name="job" class="form-control" value="<?php echo $job; ?>">
                <span class="help-block"><?php echo $job_err; ?></span>
            </div>
			
            <div class="form-group <?php echo (!empty($facebook_err)) ? 'has-error' : ''; ?>">
                <label>Facebook</label>
                <input type="text" name="facebook" class="form-control" value="<?php echo $facebook; ?>">
                <span class="help-block"><?php echo $facebook_err; ?></span>
            </div>
			
            <div class="form-group <?php echo (!empty($twitter_err)) ? 'has-error' : ''; ?>">
                <label>Twitter</label>
                <input type="text" name="twitter" class="form-control" value="<?php echo $twitter; ?>">
                <span class="help-block"><?php echo $twitter_err; ?></span>
            </div>
			
            <div class="form-group <?php echo (!empty($instagram_err)) ? 'has-error' : ''; ?>">
                <label>Instagram</label>
                <input type="text" name="instagram" class="form-control" value="<?php echo $instagram; ?>">
                <span class="help-block"><?php echo $instagram_err; ?></span>
            </div>
			
            <div class="form-group <?php echo (!empty($linkedin_err)) ? 'has-error' : ''; ?>">
                <label>Linkedin</label>
                <input type="text" name="linkedin" class="form-control" value="<?php echo $linkedin; ?>">
                <span class="help-block"><?php echo $linkedin_err; ?></span>
            </div>
			
            <div class="form-group <?php echo (!empty($address_err)) ? 'has-error' : ''; ?>">
                <label>Address</label>
                <input type="text" name="address" class="form-control" value="<?php echo $address; ?>">
                <span class="help-block"><?php echo $address_err; ?></span>
            </div>
			
            <div class="form-group <?php echo (!empty($about_err)) ? 'has-error' : ''; ?>">
                <label>About You</label>
                <input type="text" name="about" class="form-control" value="<?php echo $about; ?>">
                <span class="help-block"><?php echo $about_err; ?></span>
            </div>
			
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
			
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
			
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
			
            <p>Already have an account? <a href="login">Login here</a>.</p>
        </form>
		
    </div>
	
</body>
</html>
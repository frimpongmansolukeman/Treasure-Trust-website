<?php 
$msg = "";
$msgClass = "";

if(filter_has_var(INPUT_POST, 'submit')){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if(!empty($name) && !empty($email) && !empty($message)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)=== false){
            $msg = "please use a valid email";
            $msgClass = "alert-danger";   
        }else{
            $toemail = "lukemanfrimpong@gmail.com";
            $subject = "contact request from". $name;
            $body = "<h2>contact request<h2>
                    <h4>name<h4><p>'.$name'</P>;
                    <h4>email<h4><p>'.$email'</P>
                    <h4>message<h4><p>'.$message'</P>";

            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "content-Type:text/html;charset=UTF-8"."\r\n";
            $headers .= "From:" .$name. "<".$email.">". "\r\n";
        if(mail($toemail,$body,$headers,$subject)){
            $msg = "message sent, we will contact you soon";
            $msgClass = "alert-success";
        }else{
            $msg = "message was not sent try again";
            $msgClass = "alert-danger";
        }
    }
    }else{
        $msg = "make sure you fill all fields";
        $msgClass = "alert-danger";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="styles.css"/>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light nav-bar1">
      <a class="navbar-brand" href="#"
        ><img src="./images/logo(1).png" alt="" style="width: 150px; height: 40px"
      /></a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="./index.php"
              >Home <span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./index-two.php">Gold storage</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./index3.php">insurance</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./index4.php">safety and security</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./index5.php">contact us</a>
          </li>
        </ul>
      </div>
    </nav>
<div>
    <img src="./images/contact-banner.jpg" alt="" width=100% 
    height=200px>
</div>
<div class="container">
    <div class="row" >
    <div class= "col-lg-6" >
        <h1>contact us</h1>
        <address>
        Gold Trust Security Company Limited <br>
        #EGL 27 Kings Way, <br>
        England <br>
        UK, <br>
        Tel: +447537180248 <br>
        Email: info@goldtrustsec.com
        </address>
        <address>
        Gold trust Security Company Limited <br>
        22 Crecent , Airport Street <br>
        Cantoment Accra . <br>
        Ghana. <br>
        </address>
        <address>
        Tel: +233 27 982 5052 <br>
        Email: info@goldtrustsec.com <br>
        Website: www.goldtrustsec.com <br>
        </address>
    </div>
    <div class="col-lg-6" >
    <?php if($msg != ''): ?>
        <div class="alert <?php echo  $msgClass;?>">
            <?php echo $msg ?>
         </div>
    <?php endif; ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"class="form" >
    <div class="form-group" >
    <input type="text" value="<?php echo isset($_POST['name']) ? $name : ''; ?>" name="name"class="form-control mt-5 p-3" placeholder="name" required >

    </div>
    <div class="form-group" >
    <input type="text" value="<?php echo isset($_POST['email']) ? $email : ''; ?>" name="email" class="form-control p-3" placeholder="email" required >
    </div>
    <div class="form-group" >
        <textarea name="message" id="mess"  cols="20" rows="5" 
        class="form-control"></textarea>
    </div>
<div>
    <input type="submit" value="submit" name="submit" style="padding:10px; background-color:#003049; color:white; border:none; border-radius:5px">
</div>
    </form>
    </div>
    </div>
    </div>


</body>
</html>
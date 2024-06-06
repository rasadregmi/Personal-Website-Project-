<!DOCTYPE html>
<html lang="en">

<head>
    <title>Rasad Regmi | Feedback</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="Circle Logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Feedback.css">

</head>

<body>
    <header>
        <div class='nav-links'>
            <ul>
                <li><a href='Home.html'>Home</a></li>
                <li><a href='About.html'>About Us</a></li>
                <li><a href='Contact.html'> Contact</a></li>
                <li class="active"><a href='#'>Feedback</a></li>
            </ul>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <br>
                <h1 class="text-center mt-5 font-weight-bold">Feedback</h1>
                <hr class="bg-white">
                <br><br>
            </div>
        </div>

        <form action="" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-2"></div>
            <label class="col-md-4">Full Name<br>
                <input type="text" id="text" name="Name" placeholder="Rasad Regmi" autocomplete="off" required></label>

            <label class="col-md-4">Email<br>
                <input type="text" id="text" name="Email" placeholder="theprovider@gmail.com" autocomplete="off" required></label>
        </div>

        <div class="row">
            <div class="col-md-2"></div>
            <label class="col-md-4">Phone<br>
                <input type="number" id="text" name="Phone" placeholder="98033*****" autocomplete="off" required></label>
        </div>

        <div class="row">
            <div class="col-md-2"></div>
            <label class="col-md-8">Message<br>
                <textarea id="message" name="Message" placeholder="Write yor message here" cols="48"
                    rows="5" required></textarea></label>
        </div>

        <div class="row">
            <div class="col-md-2"></div>
            <br>
            <input type="Submit" name="Submit"
                style="width: 25%; height: 50px; color: whitesmoke; border: none; background-color: brown; border-radius: 20px; position: absolute; margin-left: 32%;">
            <br>
        </div>
        </form>
    </div>
</body>

<body>
    <footer>
        <div class="footer-content">
            <p>Social Links</p>
            <ul class="socials">
                <li><a href="https://www.facebook.com/rasad.regmi/" target="_blank"><i class="fa fa-facebook"
                            aria-hidden="true"></i></a></li>
                <li><a href="https://www.instagram.com/regmi_rasad/" target="_blank"><i class="fa fa-instagram"
                            aria-hidden="true"></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>Copyright &copy; 2023. Designed by <span>Rasad</span></p>
        </div>
    </footer>
    <?php
        include 'dbconnect.php';
        if(isset($_POST['Submit']))
        {
            $Name=$_POST['Name'];
            $Email=$_POST['Email'];
            $Phone=$_POST['Phone'];
            $Message=$_POST['Message'];
            $sql="Insert into Information (Name,Email,Phone,Message)
            values('$Name','$Email','$Phone','$Message')";
            $result=mysqli_query($conn,$sql);
            if($result)
            {
                header('Location:http://localhost/WT%20Project%20(Semester%202)/Output.html');
            }
            else{
                header('Location:http://localhost/WT%20Project%20(Semester%202)/Feedback.php');
            }
        }
    ?>
</body>

</html>
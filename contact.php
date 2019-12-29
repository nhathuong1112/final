<?php
if (isset($_POST["submit"])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "customer_info"; 

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO `customer` (`name`, `address`, `question`, `message`) VALUES ('".$_POST['name']."', '".$_POST['address']."', '".$_POST['question']."', '".$_POST['question']."')";
    if (mysqli_query($conn, $sql)) {
      //echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
    
    
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="bg.css">
    <title>Easy Travel With Taiwan Special</title>
</head>

<body>
    <!-------標頭------>
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color:  rgb(221, 126, 109)">
        <a class="navbar-brand text-white" href="index.html"> @_@ TAIWAN SPECIAL</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="index.html">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="about.html">About </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-white" href="attractions.html">Attractions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="cake.html">Cake </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-white" href="contact.php">Contact </a>
                </li>

            </ul>
        </div>
    </nav>
    <!-------標頭------>
    <div class="container">
        <h1 class="mt-4 mb-3">Contact <small><i style="font-size: 20px;">Taiwan Special Group</i></small></h1>
        <nav aria-label="breadcrumb" >
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-lg-8 mb-4">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3747580.2729047206!2d117.8349517381023!3d23.469611880031557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346ef3065c07572f%3A0xe711f004bf9c5469!2sTaiwan!5e0!3m2!1sen!2stw!4v1577602155879!5m2!1sen!2stw"
                    width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
            <div class="clo-lg-4 mb-4">
                <h3>Contact Details</h3><br>
                <P class="mb-4"><b>Address: </b>No.64, Wunhua Rd., Huwei Township, <br>Yunlin County 632, Taiwan </P>
                <P class="mb-4"><b>Phone:</b> (05) 86868686</P>
                <P class="mb-4"><b>Email: </b>Taiwanspecial@gm.nfu.edu</P>
                <P class="mb-4"><b>Service Time:</b> Monday ~ Friday 9:00 ~ 17:00</P>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 mb-4">
                <form method="POST" action="">
                    <h3>Send a Message</h3>
                    <div class="form-group">
                        <label for="Name">Full Name</label>
                        <input name="name" type="text" class="form-control" id="Name"
                            placeholder="Example: Michael Jackson">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email Address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="name@example.com" name="address">
                    </div>
                    <div class="form-group">
                        <label for="Information">Question Category</label>
                        <select class="form-control" id="Information" name="question" >
                            <option>Travel Information</option>
                            <option>Saving Cost</option>
                            <option>Need Support For Setting A Tour</option>
                            <option>Others</option>
                           
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Message">Message</label>
                        <textarea class="form-control" id="Message" name="message" rows="5"></textarea>
                    </div>
                    <input type="submit" name="submit"  class="btn btn-primary" value="Send Message">
                </form>
            </div>
        </div>
    </div>

    <footer class=" bg-dark">
        <p class="text-white text-center">Copyright &copy; TaiwanSpecial2019</p>
    </footer>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
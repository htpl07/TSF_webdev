<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/navigate.css" type="text/css">

    <title>Basic Banking System</title>

</head>

<body>

    <?php
    include 'navigate.php';
    ?>

    <div class="container-fluid">
        <div class="row intro py-2" style="background-color:Grey;">
            <div class="col-sm-12 col-md">
                <div class="heading text-center my-5" >
                <marquee style="font-size:20px;font-family:Castellar;color:white;">
We're here to help you when you need financial support</marquee>
                    <h2>WELCOME TO </h2>
                    <h1>THE GRIP BANK</h1>
                </div>
            </div>
            <div class="col-sm-12 col-md img text-center">
                <img src="bank.jpg"  height="250" width="250" alt="Image resize" class="img-fluid pt-2">
            </div>
        </div>
<div class="row activity text-center">
           







            <div class="col-md act">
                <img src="payimg.png" height="400" width="400" alt="Image resize" class="img-fluid">
                <br>
                <a href="allcustomers.php"><button style="background-color: White color:black display:inline-block;">Start payment</button></a>
            </div>

            <div class="col-md act">
                <img src="history.jpg" height="300" width="300" alt="Image resize" class="img-fluid">
                <br>
                <a href="transactionhistory.php"><button style="background-color:White color:black display:inline-block ;">Transaction History</button></a>
            </div>

        </div>

    </div>

    <footer class="text-center mt-5 py-5">
        <p> Made by <b>HARSHITHA PALLIGUNTHALA</b><br>TheSparksFoundation #TSF Internship</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</body>

</html>
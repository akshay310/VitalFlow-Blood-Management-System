<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
</style>
</head>
<body>
<div class="header">
<?php
$active="home";
include('header.php');
 ?>

</div>
<?php include'ticker.php'; ?>

  <div id="page-container" style="margin-top:50px; position: relative;min-height: 84vh;   ">
    <div class="container">
    <div id="content-wrap"style="padding-bottom:75px;">
  <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active"><center>
        <img src="home.png" alt="home.png" width="400" height="350">
      </div>
      <div class="carousel-item">
        <img src="fpage.jpg" alt="fpage.jpg" width="100%" height="350">
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
<br>
        <h1 style="text-align:center;font-size:45px;">Welcome to VitalFlow- A Blood Management System</h1>
<br>
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header card bg-info text-white" >The need for blood</h4>

                        <p class="card-body overflow-auto" style="padding-left:2%;height:120px;text-align:left;">
                        1) Being treated for cancer<br>
2) Undergoing orthopedic surgeries<br>
3) Undergoing cardiovascular surgeries<br>
4) Being treated for inherited blood disorders</span>
                         </p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header card bg-info text-white">Blood Tips</h4>

                    <p class="card-body overflow-auto" style="padding-left:2%;height:120px;text-align:left;">
                    1) You must be in good health. <br>
2) Hydrate and eat a healthy meal before your donation.<br>
3) You’re never too old to donate blood. <br>
4) Rest and relaxed.<br>
5) Don’t forget your FREE post-donation snack.
                     </p>

                        </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header card bg-info text-white" >Who you could Help</h4>

                    <p class="card-body overflow-auto" style="padding-left:2%;height:120px;text-align:left;">
                    1) People who go through disasters or emergency situations.<br>
2) People who lose blood during major surgeries.<br>
3) People who have lost blood because of a gastrointestinal bleed.<br>
4) Women who have serious complications during pregnancy or childbirth.<br>
5) People with cancer or severe anemia sometimes caused by thalassemia or sickle cell disease.<br>
                     </p>


                        </div>
            </div>
</div>
<hr>
<div class="row">
            <div class="col-lg-6">
                <h2>BLOOD GROUPS</h2>
                <p>  Blood group of any human being will mainly fall in any one of the following groups.</p>
                <ul>

                  <li>A positive or A negative</li>
                  <li>B positive or B negative</li>
                  <li>O positive or O negative</li>
                  <li>AB positive or AB negative.</li>
                </ul>
                <p>Your blood group is determined by the genes you inherit from your parents.<br>
                  A healthy diet helps ensure a successful blood donation, and also makes you feel better!
                </p>

            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded" src="blooddon.jpg" alt="" >
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="row mb-4">
            <div class="col-md-8">
            <h4>UNIVERSAL DONORS AND RECIPIENTS</h4>
            <p>
            The most common blood type is O, followed by type A.

Type O individuals are often called "universal donors" since their blood can be transfused into persons with any blood type. Those with type AB blood are called "universal recipients" because they can receive blood of any type.</p>

            For emergency transfusions, blood group type O negative blood is the variety of blood that has the lowest risk of causing serious reactions for most people who receive it. Because of this, it's sometimes called the universal blood donor type.</p>
              </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-secondary btn-block" href="terms.php" style="align:center; background-color:#7FB3D5;color:#273746 ">Become a Donor </a>
            </div>
        </div>

    </div>
  </div>
  <?php include('footer.php');?>
</div>

</body>

</html>

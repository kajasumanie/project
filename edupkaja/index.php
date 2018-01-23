<!DOCTYPE html>
<html lang="en">
<head>
  <title>EMIS-NP</title>
  <link rel="shortcut icon" href="assets/page-css/Untitled-5.png" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/bootstrap-3.3.2/css/bootstrap.min.css">
<?php if(!isset($_GET['table'])) { ?>
<script src="assets/bootstrap-3.3.2/js/tests/vendor/jquery.min.js"></script>
  <script src="assets/bootstrap-3.3.2/js/bootstrap.min.js"></script>
<?php  } ?>

 <link id="theme-style" rel="stylesheet" href="assets/page-css/styles.css">

</head>

<body>
    <header class="header" href="index.html">
        <div class="container">
            <img class="profile-image img-responsive pull-left" src="assets/page-css/Untitled-5.png" alt="" />
            <div class="profile-content" style="display: inline-block;">

                <h2 class="desc">Provincial Department Of Education Northern Province</h2>
				<h2 class="desc">පළාත් අධ්‍යාපන දෙපාර්තමේන්තුව, උතුරු පළාත</h2>
				<h2 class="desc1">மாகாண கல்வி திணைக்களம், வடக்கு மாகாணம்</h2>
				<h2 class="desc">Education Management Information System</h2>

            </div><!--//profile-->
              <img class="profile-image1 img-responsive pull-right" src="assets/page-css/Untitled-6.png" alt="" />
        </div><!--//container-->
    </header><!--//header-->

<div class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">EMIS-NP</a>
                </div>
                <div class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Institutions<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Zones Divisions</a></li>
          <li><a href="#">PICTEC</a></li>
          <li><a href="#">PESC</a></li>
        </ul>
      </li>
      <li><a href="preschool/srchform.html" target="_blank">Preschools</a></li>
      <li><a href="aboutus.html">About Us</a></li>
	  <li><a href="contactus.html">Contact Us</a></li>
	  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Reports<span class="caret"></span></a>
        <ul class="dropdown-menu">
			<li><a href="index.php?table=nearest">Nearest Schools</a></li>
			<li><a href="index.php?option=schoolcount">Schools Count</a></li>
			<li><a href="index.php?table=school">Schools</a></li>
			<li><a href="index.php?option=Cadre">Cadre</a></li>
			<li><a href="index.php?option=selectstudent">Students</a></li>
			<li><a href="index.php?option=result">Results</a></li>
			<li><a href="index.php?option=phyresource">Physical Resource</a></li>
        </ul>
      </li>
    </ul>
  </div>
  </div>
  </div>

</div>
<?php if(isset($_GET['option'])){ include('search/search.php'); }
	elseif(isset($_GET['table'])){ include('table/include.php'); }

?>



<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>

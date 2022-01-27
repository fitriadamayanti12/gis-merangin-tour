
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tourism Package | Merangin Tour</title>
    
    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <style type="text/css">
    .get-started.center.wow.fadeInDown table tr td form #paket {
	font-size: 18px;
}
    .get-started.center.wow.fadeInDown div table tr td form #pilih {
	text-align: center;
}
    .get-started.center.wow.fadeInDown div table tr td form #paket {
	text-align: center;
}
    </style>
</head><!--/head-->

<body>

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                   
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                           </div>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                                        <a class="navbar-brand" href="index.html"><font face="Monotype Corsiva" size="7" color="#FFFFFF">Merangin Tour</font></a>

                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about-us.php">About Us</a></li>
                       <li class="active"><a href="tourism_package.php">Tourism Package</a></li>
                        <li><a href="maps.php">Maps</a></li>
                           <li><a href="contact-us.php">Contact</a></li>
                                            <li><a href="login.php">Login</a></li>                     
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->



            <label for="paket"></label>
            <div class="get-started center wow fadeInDown">
              <h2>Ready to get started</h2>
                <p class="lead">Choose Your Tourism Package</p>
                <div align="center">
                  <table width="230" height="100" border="0" bgcolor="#00CCCC">
                    <tr>
                      <td width="243"><form name="form1" method="post" action="">
                        <p>
                          <label for="pilih"></label>
                          <select name="pilih" id="pilih">
                           <option>-Pilih-</option>
                            <option>Paket 1(Tour 1 Hari)</option>
                            <option>Paket 2(Tour 2 Hari)</option>
                            <option>Paket 3(Tour 3 Hari)</option>
                            <option>Paket 4(Tour 4 Hari)</option>
                            <option>Paket 5(Tour 5 Hari)</option>
                            <option>Paket 6(Tour 6 Hari)</option>
                            <option>Paket 7(Tour 7 Hari)</option>
                          </select>
                          <input type="submit" name="Pilih" id="Pilih" value="Pilih">
                        </p>
                        <?php
						if(isset($_POST['Pilih'])){
						$pilih = $_POST['pilih'];
						if ($pilih == "Paket 1(Tour 1 Hari)"){
                          $pilihan="Geopark dan Green Kandis";}
						  else 	if ($pilih == "Paket 2(Tour 2 Hari)"){
                          $pilihan="Geopark, Green Kandis, Jam Gento dan Bukit Tiung";}
						  else 	if ($pilih == "Paket 3(Tour 3 Hari)"){
                          $pilihan="Geopark, Green Kandis, Jam Gento, Bukit Tiung, 
						  Dam Bentuk dan Goa Tiangko";}
						   else if ($pilih == "Paket 4(Tour 4 Hari)"){
                          $pilihan="Geopark, Green Kandis, Jam Gento, Bukit Tiung, 
						  Dam Bentuk, Goa Tiangko, Air Terjun 7 Tingkat dan Danau Pauh";}
						  else if ($pilih == "Paket 5(Tour 5 Hari)"){
                          $pilihan="Geopark, Green Kandis, Jam Gento, Bukit Tiung, 
						  Dam Bentuk, Goa Tiangko, Air Terjun 7 Tingkat, Danau Pauh, Air Terjun Sigerincing dan Danau Merangin";}
						  else if ($pilih == "Paket 6(Tour 6 Hari)"){
                          $pilihan="Geopark, Green Kandis, Jam Gento, Bukit Tiung, 
						  Dam Bentuk, Goa Tiangko, Air Terjun 7 Tingkat, Danau Pauh, Air Terjun Sigerincing, Danau Merangin, Danau Kumbang dan Telaga Biru";}
						  else if($pilih== "Paket 7(Tour 7 Hari)")
						  {
                          $pilihan="Geopark, Green Kandis, Jam Gento, Bukit Tiung, 
						  Dam Bentuk, Goa Tiangko, Air Terjun 7 Tingkat, Danau Pauh, Air Terjun Sigerincing, Danau Merangin, 
						  Danau Kumbang, Telaga Biru, Gunung Masurai dan Taman Bunga Jangk                                                                                                                                                                                  at";}
						  else {
							  $pilihan ="";
							  }
							  include "koneksi.php";
$query="insert into tourism (paket, keterangan)values ('$pilih','$pilihan')";
$result = mysql_query ($query);
							  }
							?>
                            </form></table>
                       
                        <table width="500" cellspacing="10" border="1" align="center" bgcolor="">
                       <tr>
	               <td width ="150" align="center" ><span class="media-list"><em>Paket Tour</em></span></td>
                    <td width ="150" align="center" ><span class="media-list"><em>Keterangan</em></span></td>
                   <tr><td width ="400" align="justify"><span class="media-list"><em><?php echo "$pilih : $pilihan" ; ?></em></span></td>
	                   <td width ="400" align="justify"><span class="media-list"><em><?php echo "Kami akan memilihkan guide tour untuk Anda atau Anda Dapat memilih sendiri demi kenyamanan Anda. <br> Silahkan lihat gambar dibawah untuk wisata yang akan dikunjungi.<br> Terima Kasih." ; ?></em></span></td>
                         </tr>
                         </table>
                      </form></td>
                      <td width="13"><form name="form2" method="post" action="">
                        <label for="paket"></label>
                  </form></td>
                    </tr>
                    </table>

                  <form name="form3" method="post" action="">
                  </form>
                  
              </div>
              <p class="lead">&nbsp;</p>
                <div class="request">
                
                    
                </div>
</div><!--/.get-started-->

            <div class="clients-area center wow fadeInDown">
                <h2>Good Place</h2>
              <p class="lead"></p>
            </div>

            <div class="row">
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                      <img src="images/paket/3.jpg" class="img-circle" alt="">
                      <h3></h3>
                        <h4><span>-Geopark-</h4>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                      <img src="images/paket/5.jpg" class="img-circle" alt="">
                      <h3></h3>
                        <h4><span>-Air Terjun Sigerincing-</h4>
                    </div>
                </div>
                
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                        <img src="images/paket/9.jpg" class="img-circle" alt="">
                        <h3></h3>
                        <h4><span>-Taman Bunga Jangkat-</h4>
                    </div>
                </div>
           </div>

        </div><!--/.container-->
    </section><!--/#feature-->

 <div class="row">
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                      <img src="images/paket/13.jpg" class="img-circle" alt="">
                        <h3></h3>
                        <h4><span>-Goa Tiangko-</h4>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                      <img src="images/paket/21.jpg" class="img-circle" alt="">
                        <h3></h3>
                        <h4><span>-Jam Gento-</h4>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                      <img src="images/paket/8.jpg" class="img-circle" alt="">
                        <h3></h3>
                        <h4><span>-Bukit Tiung-</h4>
                    </div>
                </div>
</div>

        </div><!--/.container-->
    </section><!--/#feature-->
    
    <div class="row">
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                      <img src="images/paket/10.jpg" class="img-circle" alt="">
                        <h3></h3>
                        <h4><span>-Air Terjun 7 Tingkat-</h4>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                      <img src="images/paket/12.jpg" class="img-circle" alt="">
                        <h3></h3>
                        <h4><span>-Danau Kumbang-</h4>
                    </div>
                </div>
                 <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                      <img src="images/paket/20.jpg" class="img-circle" alt="">
                        <h3></h3>
                        <h4><span>-Danau Pauh-</h4>
                    </div>
</div>

        </div><!--/.container-->
    </section><!--/#feature-->

 
<div class="row">
                </div>
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                      <img src="images/paket/7.jpg" class="img-circle" alt="">
                        <h3></h3>
                        <h4><span>-Gunung Masurai-</h4>
                    </div>
                </div>
                </div>
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                      <img src="images/paket/23.jpg" class="img-circle" alt="">
                        <h3></h3>
                        <h4><span>-Telaga Biru-</h4>
                    </div>
                </div>
</div>

        </div><!--/.container-->
    </section><!--/#feature-->
    
    <div class="row">
    <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                      <img src="images/paket/25.jpg" class="img-circle" alt="">
                        <h3></h3>
                        <h4><span>-Dam Bentuk-</h4>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                      <img src="images/paket/18.jpg" class="img-circle" alt="">
                        <h3></h3>
                        <h4><span>Danau Merangin-</h4>
                    </div>
                    <p>
                </div><div></div><span>
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                        <img src="images/paket/24.jpg" class="img-circle" alt="">
                        <h3>  </h3>
                        <h4><span>-Green Kandis-</h4>
                    </div>
                </div>
            
                </div>
</div>

        </div><!--/.container-->
    </section><!--/#feature-->
    
<footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6"><center>
                    &copy; 2017 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">Merangin Tour</a>. All Rights Reserved.</center>
              </div>
               
          </div>
  </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>
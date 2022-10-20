<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=tis-620">

    <style>
                    input::-webkit-outer-spin-button,
                
                    input::-webkit-inner-spin-button {
                        -webkit-appearance: none;
                        margin: 0;
                }
                    input[type=number] {
                -moz-appearance: textfield;
                }
    </style>
    
    <title>Employee Table</title>
    
    <meta name="description" content="N.Agency - Responisve Landing Page for Agency">
    <meta name="keywords" content="">
    <meta name="author" content="tabthemes">
    
    <!-- Favicons -->
    <link rel="shortcut icon" href="img/mks-logo.jpg">
    <link rel="apple-touch-icon" sizes="57x57" href="img/mks-logo.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/mks-logo.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/mks-logo.png">
    
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- CSS Files For Plugin -->
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/font-awesome/font-awesome.min.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet" />
    <link href="css/YTPlayer.css" rel="stylesheet" />
    <link rel="stylesheet" href="inc/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="inc/owlcarousel/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="inc/revolution/css/settings.css" />
    <link rel="stylesheet" href="inc/revolution/css/layers.css" />
    <link rel="stylesheet" href="inc/revolution/css/navigation.css" />
    
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="doc.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="single_post_page" data-spy="scroll" data-target=".navbar-fixed-top" data-offset="100">
    
    <!-- Preloader -->
    <div id="preloader">
        <div id="spinner"></div>
    </div>
    <!-- End Preloader-->

    
    <!-- Start Navigation -->
    <header class="nav-solid" id="home">

        <nav class="navbar navbar-fixed-top">
            <div class="navigation">
                <div class="container-fluid">
                    <div class="row">

                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <!-- Logo -->
                            <div class="logo-container">
                                <div class="logo-wrap local-scroll">
                                  <a href="index.php">
                                    <img class="logo" src="img/mks-logo.jpg" size="10px" alt="logo" data-rjs="2">
                                  </a>
                                </div>
                            </div>
                        </div> <!-- end navbar-header -->

                        <div class="col-md-8 col-xs-12 nav-wrap">
                            <div class="collapse navbar-collapse" id="navbar-collapse">

                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="index.php">MEdic TABAL</a></li>
                                    <li><a  href="Medic/newMedic.php">New Medicine</a></li>
                                    <li><a href="Medic/adData.php">stock Medicine</a></li>
                                    <li><a href="showEMP.php">Employee Table</a></li>
                                    <li><a href="emp/newEmp.php">New Employee</a></li>
                                    
                                </ul>

                            </div>
                        </div> <!-- /.col -->

                    </div> <!-- /.row -->
                </div> <!--/.container -->
            </div> <!-- /.navigation-overlay -->
        </nav> <!-- /.navbar -->

    </header>
    <!-- End Navigation -->

<?php include "connect.php";
$stmt   = "select * from dbo.tb_employee ";
$query  = sqlsrv_query($connect,$stmt);      ?>      <!-- ต่อเข้ากับฐานข้อมูล-->

    <!-- Start Intro -->
    <section id="doc-intro" class="light-bg p-top-100 p-bottom-100">
        <div class="container">
            <div class="row">
                <div class="text-center">
          
                    <h1><strong>medical room - medical storage</strong></h1>
                    <h3><strong>responsible by P.Em </strong></h3>
                    
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- End Intro -->


   
<!-- start  table -->
    <section id="doc-teble" class="p-top-60 p-bottom-60">
        <div class="container">
            <div class="row">

                <h2><strong>medic table</strong></h2>

<!-- start search bar -->

<form action="<?=$_SERVER['PHP_SELF'];?>" method="GET">
                กรอกคำค้นหา <input type="text" name="txtSearch" placeholder="กรอกคำค้นหา"  >
                            <input type="submit" value="search">
    </form>

<!-- end search bar -->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <div class="container">

    <div class="row">
        <table class="table table-condensed table-striped table-bordered background-color: while" >
        <thead>
           
           <tr>
               <th style="text-align: center">ID</th>
               <th style="text-align: center">Name</th>
               <th style="text-align: center">DepartMent</th>
               <th style="text-align: center">Position</th>
               <th style="text-align: center">edit</th>
               <th style="text-align: center">Delete</th>
           <tr>
           </thead>
           <?php
            isset( $_GET['txtSearch'] ) ? $txtSearch = $_GET['txtSearch'] : $txtSearch = ""; #เช็คตัวแปล#$txtSearch ว่าเป็นค่าว่างหรือไม่
            if($txtSearch == "") { 
               include ('search/search_E.php');  
            }else{
               
            $sql ="SELECT * FROM dbo.tb_employee WHERE employee_Id LIKE '$txtSearch' 
                                              OR employee_name LIKE '%$txtSearch%' 
                                              OR departMent LIKE '%$txtSearch%'
                                              OR Position LIKE '%$txtSearch%'" ;
            $Search = sqlsrv_query($connect,$sql);
        
           while ($result = sqlsrv_fetch_array($Search))
                {
           ?>
               <tbody>
               <tr>
                   <th><?PHP echo $result["employee_Id"]; ?></th>
                   <th><?PHP echo $result["employee_name"];?> &nbsp; </th>
                   <th><?php echo $result["departMent"];?></th>
                   <th><?PHP echo $result["Position"];?></th>
                   <th style="text-align: center">
                   <a href="emp/editEmp.php?employee_Id=<?php echo $result['employee_Id'];?>"
                   onclick="return confirm('ต้องการแก้ไขข้อมูลพนักงาน : <?php echo $result['employee_name'];?> หรือไม')"> edit</a>
                   <th style="text-align: center">
                   <a href="emp/deleteEmp.php?employee_Id=<?php echo $result['employee_Id'];?>"
                   onclick="return confirm('ต้องการลบข้อมูลพนักงาน : <?php echo $result['employee_name'];?> หรือไม่')"> delete</a>
                   
                   </th>
               </tr>
               </tbody>
               <?PHP
           }
           }
           ?>
       </table>
   </div>
</div>
<!-- End table -->

              
      <!-- start dispensoed -->            
      

     <!-- end dispensed-->




    
        </div> <!-- /container -->
    </section>
    <!-- End Portfolio -->

    <!-- Start Sliders -->
   
            </div> <!-- /row -->
        </div> <!-- /container -->
    </section>
    <!-- End Sliders -->


    <!-- Start Footer -->
    <footer class="site-footer">
        <div class="container">
            <small class="copyright pull-left">MKS .</small>
            
        </div>
        <!-- /container -->
    </footer>
    <!-- End Footer -->


    <!-- Back to top -->
    <a href="#" id="back-to-top" title="Back to top"><i class="fa fa-angle-up"></i></a>
    <!-- /Back to top -->

    
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    
    <!-- Bootstrap -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
    <!-- Components Plugin -->
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/smooth-scroll.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.mb.YTPlayer.js"></script>
    <!-- <script src="js/retina.min.js"></script> -->
    <script src="js/wow.min.js"></script>
    <script src="inc/owlcarousel/js/owl.carousel.min.js"></script>
    
    <!-- Custom Plugin -->
    <script src="js/custom.js"></script>
    
  </body>
</html>
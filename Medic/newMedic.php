<!DOCTYPE html>
<html >
<head>
<meta charset="utf-8">

    
    
    <title>NEW MEDICINE</title>
    
    <meta name="description" content="MKS">
    <meta name="keywords" content="">
    <meta name="author" content="tabthemes">
    
    <!-- Favicons -->
    <link rel="shortcut icon" href="../img/mks-logo.jpg">
   
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- CSS Files For Plugin 
    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/font-awesome/font-awesome.min.css" rel="stylesheet">
    <link href="../css/magnific-popup.css" rel="stylesheet" />
    <link href="../css/YTPlayer.css" rel="stylesheet" />
    <link rel="../stylesheet" href="inc/owlcarousel/css/owl.carousel.min.css">
    <link rel="../stylesheet" href="inc/owlcarousel/css/owl.theme.default.min.css">
    <link rel="../stylesheet" href="inc/revolution/css/settings.css" />
    <link rel="../stylesheet" href="inc/revolution/css/layers.css" />
    <link rel="../stylesheet" href="inc/revolution/css/navigation.css" />-->
    
    <!-- Custom CSS -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../doc.css" rel="stylesheet">
  </head>
  <body class="single_post_page" data-spy="scroll" data-target=".navbar-fixed-top" data-offset="100">
    
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
                                    <img class="logo" src="../img/mks-logo.jpg" size="10px" alt="logo" data-rjs="2">
                                  </a>
                                </div>
                            </div>
                        </div> <!-- end navbar-header -->

                        <div class="col-md-8 col-xs-12 nav-wrap">
                            <div class="collapse navbar-collapse" id="navbar-collapse">

                                <ul class="nav navbar-nav navbar-right">
                                    <li><a data-scroll href="#doc-start">Medic Table</a></li>
                                    <li><a data-scroll href="#doc-header">Header</a></li>
                                    <li><a data-scroll href="#doc-pe">Page Elements</a></li>
                                    <li><a data-scroll href="#doc-slider">Slider</a></li>
                                    <li><a data-scroll href="#doc-blog">Blog</a></li>
                                    <li><a data-scroll href="#doc-portfolio">Portfolio</a></li>
                                    <li><a data-scroll href="#doc-credits">Credits</a></li>
                                </ul>

                            </div>
                        </div> <!-- /.col -->

                    </div> <!-- /.row -->
                </div> <!--/.container -->
            </div> <!-- /.navigation-overlay -->
        </nav> <!-- /.navbar -->
    
</head>
<style>
table.center {
  margin-left: auto; 
  margin-right: auto;
}
.button{
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
  }
  .reset{background-color: #e23a80;
      border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;}
    
section{
        font-size: 18px;
        color: rgb(0, 0, 0);
        padding-left: 60px;
        
    }

select{
    font-size: 19.5px;
    
    }
input{
    font-size: large;
    
}
th, td {
  padding: 10px;
}
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
input[type=number] {
  -moz-appearance: textfield;
}    
input[type=sub1mit]{
    font-size: large;
}
</style>
<body  class="single_post_page" data-spy="scroll" data-target=".navbar-fixed-top" data-offset="100"><!--Add background-->


<section id="doc-intro" class="light-bg p-top-100 p-bottom-100">
    <div class="container">
    <h1><strong>new medicine    </strong></h1>
        <div class="row">
            <div class="text-center">



<form action="aMedicine.php" method="post">



 <br><br>
    <table  cellspacing="8"  class="center">   
    <tr><td>Id : </td><td><input type="number" name="Medic_Id"></td>
    <tr><td>ชื่อ : </td><td><input type="text" name="Medic_name"></td></tr>
    <tr><td>จำนวน : </td><td><input type="number" in="number" name="Medic_quan"></td></tr>
    <tr><td>หมวด : </td><td><select name="Category_name">
           <option value="แก้ปวดลดไข้">แก้ปวดลดไข้</option>
           <option value="แก้ปวดกล้ามเนิ้อ">แก้ปวดกล้ามเนื้อ</option>
           <option value="แก้แพ้ แก้คัน แก้ไอ">แก้แพ้ แก้คัน แก้ไอ</option>
           <option value="ลดกรดเคลือบกระเพาะ">ลดกรดเคลือบกระเพาะ</option>
           <option value="แก้ท้องเสีย">แก้ท้องเสีย</option>
           <option value="ยาระบบประสาท">ยาระบบประสาท</option>
           <option value="ยาน้ำ">ยาน้ำ</option>
            <option value="ยาตา">ยาตา</option>
            <option value="ยาทาภายใน/ภายนอก">ยาทาภายใน/ภายนอก</option> 
            <option value="น้ำยาฆ่าเชื้อ">น้ำยาฆ่าเชื้อ</option>
            <option value="เวชภัณฑ์">เวชภัณฑ์</option>

        </select></td></tr>
    <tr><td>หน่วย : </td><td><select name="Medic_Unit"  >
        <option value="เม็ด">Tab</option>
        <option value="ขวด">ขวด</option>
        <option value="แผง">แผง</option>
        <option value="ซอง">ซอง</option>
        <option value="cap">cap</option>
        <option value="ตลับ">ตลับ</option>
        <option value="แผ่น">แผ่น</option>
        <option value="ม้วน">ม้วน</option>
        <option value="ห่อ">ห่อ</option>
        <option value="ก้าน">ก้าน</option>
        <option value="แพ๊ก">แพ๊ก</option>
        <option value="กล่อง">กล่อง</option>
        <option value="อัน">อัน</option>
        <option value="แผ่น">แผ่น</option>
    </table><br/>

    <button type="submit" name="submit" class="button">Success</button>
    <button type="reset" name="reset" class="reset">Reset</button></br>

    
    
        </div>
    </div>
</div>
</section>
</form>

</body>
</html>   
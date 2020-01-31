<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <?php include('partials/head_link.php'); ?>
    <title>project barang</title>
</head>
<style type="text/css">
   .body{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
   }
   .container{
    position: relative;
    width: 1200px;
    height: 300px;
    margin: 240px auto;

   }
.container .box{
    position: relative;
    width: calc(350px - 30px);
    height: calc(300px - 30px);
    background: #000;
    float: left;
    margin: 50px;
    box-sizing: border-box;
    overflow: hidden;
    border-radius: 13px;
}
.container .box .icon{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #f00;
    transition: 0.5s;
    z-index: 1;
}
.container .box:hover .icon{
    top: 20px;
    left: calc(50% - 40px);
    width: 80px;
    height: 80px;
    border-radius: 50%;
}
.container .box .icon .fa{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 80px;
    transition: 0.5s;
    color: #fff;
}
.container .box:hover .icon .fa{
    font-size: 40px;
}
.container .box .content{
    position: absolute;
    top: 100%;
    height: calc(100% - 100px);
    text-align: center;
    padding: 20px;
    box-sizing: border-box;
    transition: 0.5s;
    opacity: 0;
}
.container .box:hover .content{
    top: 100px;
    opacity: 1;
}
.container .box .content h3{
    margin: 0 0 10px;
    padding: 0;
    color: #000;
    font-size: 24px;
}
.container .box .content p{
    margin: 0;
    padding: 0;
    color: #ff0;
    font-size: 15px;
}
.container .box:nth-child(1) .icon{
   
}
.container .box:nth-child(1){
    background: #d03852;
}
.container .box:nth-child(2) .icon{

}
.container .box:nth-child(2){
    background: #f54967;
}
.container .box:nth-child(3) .icon{
    background: #23798e;
}
.container .box:nth-child(3){
    background: #328fa5;
}
</style>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <?php include('partials/header.php');?>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <?php include('partials/sidebar.php'); ?>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</h2>
                                <hr>
                            </div>
                               
                            </div>
                        </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <!-- table -->
                    <div class="ecommerce-widget">
                        <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
                        <div class="card">
                                    <div class="container">
                                        <div class="box">
                                            <div class="icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
                                            <div class="content">
                                                <h3>Barang</h3>
                                                <p>abcdefghijklmn</p>
                                                <div class="toolbar ml-auto">
                                                    <a href="barang.php"><p class="text-light"> Lihat >> </p></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box">
                                             <div class="icon"><i class="fa fa-users" aria-hidden="true"></i></div>
                                            <div class="content">
                                                <h3>Supplier</h3>
                                                <p>12345678910</p>
                                                <div class="toolbar ml-auto">
                                                    <a href="supplier.php"><p class="text-light"> Lihat >> </p></a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                <!-- isi charts -->
                               <figure class="highcharts-figure">
                            <div id="container"></div>
                            </figure>
                            </div>
                        </div>
                    </div>                      
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php include('partials/footer.php'); ?>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <?php include('partials/buttom_script.php'); ?>
    <!-- chart chartist js -->

    
</body>
 
</html>
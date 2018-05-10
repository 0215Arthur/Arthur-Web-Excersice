 <?php
if (isset($_COOKIE["user"]))
{
    if($_COOKIE["right"]!="教师")
    {
       echo "<script>alert('未登录!'); history.go(-1);</script>";
    }
}
else
{
echo "<script>alert('未登录!'); history.go(-1);</script>";
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>1552286-ex6</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link   rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin.php">管理后端</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">   <a href="logout.php" class="btn btn-danger square-btn-adjust">退出</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
			   </li>
				
					
                
                     <li>
                        <a  href="select_action.php"><i class="fa fa-desktop fa-3x"></i> 查询</a>
                    </li>
                   
                      <li  >
                        <a  class="active-menu"  href="add_book.php"><i class="fa fa-table fa-3x"></i>添书</a>
                    </li>
                
                    </li>	
					
		 

					  
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
		
		
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>管理员后台</h2>   
                        <h5> 欢迎登陆 <?php echo $_COOKIE['user']?></h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
				   <div class="row">
                <div class="col-md-12">

                   <div class="panel panel-default">
                        <div class="panel-heading">
                            当前业务
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>输入书籍信息</h3>
                                     <form action="add_book_action.php" method="POST">
                                        <div class="form-group">
                                            <label>书籍编号</label>
											
                                            <input type="text" name="id" class="form-control" />
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>上架类别</label>
											 
                                            <input type="text" name="kind" class="form-control" />
                                             
                                        </div>                                       
									   <div class="form-group">
                                            <label>书名</label>
											 
                                            <input type="text" name="name" class="form-control" />
                                             
                                        </div>
                                          <div class="form-group">
                                            <label>作者</label>
											 
                                            <input type="text" name="author" class="form-control" />
                                             
                                        </div>
										 <div class="form-group">
                                            <label>价格</label>
											 
                                            <input type="text" name="price" class="form-control" />
                                             
                                        </div>
										 <div class="form-group">
                                            <label>出版社名称</label>
											 
                                            <input type="text" name="press" class="form-control" />
                                             
                                        </div>
										 <div class="form-group">
                                            <label>馆藏位置</label>
											 
                                            <input type="text" name="address" class="form-control" />
                                             
                                        </div>
                                        <button type="submit" class="btn btn-default">确认</button>
                                        <button type="reset" class="btn btn-primary">重置</button>

                                    </form>
                                    <br />
                                    
                                 
    </div>
                                
                                
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->	
            </div>
             
              		 
        </div>
                 
		 <!-- /. ROW  -->
         
                  
                 <!-- /. ROW  -->
            
    
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
 
 

<?php
include("link.php");

?>

<div class="container-fluid">
                <!-- header code -->
            <div class="row" class="back1">
                <div class="col-md-12" id="head_dash1">
                <h4 id="text1">
                     <span class="glyphicon glyphicon-cog" aria-hidden="true"  class="leaf1"></span>&nbsp;&nbsp;
                   <i class="glyphicon glyphicon-share pull-right"></i>
                   :: Morris Garage ::
                   </h4>
                </div>
            </div>

            </div>

        <div class="row">
             <div class="col-md-2">
                 

                  <!-- sideBar Code of DashBoard -->
                  <ul class="nav nav-pills nav-stacked left-menu arrows_list" id="stacked-menu">
                     <li>
                        <a href="#" data-target="#item1" data-toggle="collapse" data-parent="#stacked-menu" class="mainDept collapsed"><i class="fa fa-file"></i>&nbsp;&nbsp;Morris Garage  <span class="caret arrow "></span></a>
                        <ul class="nav nav-stacked left-submenu collapse" id="item1" style="height: 0px;">
                          <li><a href="../view/customersDashUD.php" class="dash1" >List</a></li>
                          <li><a href="backup.php" class="dash1" >Backup</a></li>
                          <li><a href="../controller/logout.php" class="dash1" >Logout</a></li>
                        </ul>
                      </li>
                    </ul>
                     </div>
                </div>
  <div class="col-md-6 col-md-offset-4">
                    <div class="col-md-1 col-md-offset-10">
                        <a href="customer1.php"><input type="submit" id="btn_save" class="btn btn-lg btn-success"  value="Add"></a>
                    </div>

                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                         </ol>
                          <!--<div class="col-md-12">-->
                               <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                                 <ol class="carousel-indicators">
                                 <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                 <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                 <!-- <li data-target="#carousel-example-generic" data-slide-to="3"></li>-->
                                </ol>

                    <!-- Wrapper for slides -->
                             <div class="carousel-inner" role="listbox">
                                  <div class="item active">
                                        <img src="../assets/images/mg1.jpg">
                                      </div>
                                      <div class="item">
                                        <img src="../assets/images/mg2.jpg">
                                      </div>
                                      <div class="item">
                                        <img src="../assets/images/mg3.jpg">
                                      </div>                                            
                                      
                                    </div>

                                    <!-- Controls -->
                                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                      <span class="sr-only">Next</span>
                                    </a>
                                  </div>                
                              </div>
       
                        </div>
                 
        </div>


</body>
</html>

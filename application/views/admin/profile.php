<!DOCTYPE html>
<html lang="en">


  <?php include('head.php'); ?>

<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php include('sidebar.php'); ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        
      <?php include('topbar.php'); ?>
          <?php include('navbar.php'); ?>

        <!-- Begin Page Content -->
       
     <div class="container">
		    <div class="card  w-100 mb-5 mx-auto">
                <img src="<?php echo base_url(); ?>assets/img/1.jpg" class="mx-auto m-3 img-thumbnail rounded-circle" 
                    style="height:170px;width:200px" data-toggle="modal" data-target="#viewfull"/>
                    
		        <div class="card-body">
		            <div class="row">
		                <div class="col-md-12">
                    <h4>Profile &nbsp<a class="btn btn-success fas fa-pen success" href="editprofile"></a></h4>
		                    <hr>
		                </div>
		            </div>
		            <div class="row">
		                <div class="col-md-12">
		                    
                              <div class="form-group row">
                                <label for="username" class="col-4 col-form-label">ID:</label> 
                                <div class="col-8">
                                  <p class="lead">1</p>
                                </div>
                              </div>
                              <hr>
                              <div class="form-group row">
                                <label for="username" class="col-4 col-form-label">Name:</label> 
                                <div class="col-8">
                                  <p class="lead">USername123</p>
                                </div>
                              </div>
                              <hr>
                              <div class="form-group row">
                                <label for="lastname" class="col-4 col-form-label">Artist Type:</label> 
                                <div class="col-8">
                                  <p class="lead">Rock</p>                                  
                                </div>
                              </div>
                              <hr>
                              <div class="form-group row">
                                <label for="text" class="col-4 col-form-label">Username:</label> 
                                <div class="col-8">
                                <p class="lead">user</p>                                  
                                </div>
                              </div>
                              <hr>
                              <div class="form-group row">
                                <label for="text" class="col-4 col-form-label">Status:</label> 
                                <div class="col-8">
                                  <p class="lead">verified</p>                                  
                                </div>
                              </div>
                              <hr>
                              <div class="form-group row">
                                <label for="text" class="col-4 col-form-label">Minimum Rate:</label> 
                                <div class="col-8">
                                  <p class="lead">$3000</p>                                  
                                </div>
                              </div>
                              <hr>
                              <div class="form-group row">
                                <label for="text" class="col-4 col-form-label">Address:</label> 
                                <div class="col-8">
                                  <p class="lead">Cebu City</p>                                  
                                </div>
                              </div>
                              <hr>
                              <div class="form-group row">
                                <label for="text" class="col-4 col-form-label">Contact Numbers:</label> 
                                <div class="col-8">
                                  <p class="lead">09505607709</p>   
                                  <p class="lead">09127055497</p>                               
                                </div>
                              </div>
                              <hr>
                              <div class="form-group row">
                                <label for="text" class="col-4 col-form-label">Number of offenses:</label> 
                                <div class="col-8">
                                  <p class="lead">10</p>                                 
                                </div>
                              </div>
                              <hr>
                              <div class="form-group row">
                                <label for="email" class="col-4 col-form-label">Email:</label> 
                                <div class="col-8">
                                  <p class="lead">gshockxd0@gmail.com</p>    
                                </div>
                              </div>
                              <hr>
                              <div class="form-group row">
                                <label for="text" class="col-4 col-form-label">Date Registered:</label> 
                                <div class="col-8">
                                  <p class="lead">09-05-2019</p>                                 
                                </div>
                              </div>
                              <hr>
                              <div class="form-group row">
                                <label for="text" class="col-4 col-form-label">Last Updated:</label> 
                                <div class="col-8">
                                  <p class="lead">09-05-2019</p>                                 
                                </div>
                              </div>
                              <hr>
                              <div class="form-group row">
                                <label for="text" class="col-4 col-form-label">Sample Outputs:</label> 
                                <div class="col-8">
                                <img src="<?php echo base_url(); ?>assets/img/1.jpg" alt="image" class="h-100 w-25 border border-primary rounded"></a>
                                <img src="<?php echo base_url(); ?>assets/img/1.jpg" alt="image" class="h-100 w-25 border border-primary rounded"></a>
                                <img src="<?php echo base_url(); ?>assets/img/1.jpg" alt="image" class="h-100 w-25 border border-primary rounded"></a>
                                </div>
                              </div>
                              <hr>
                            
		                </div>
		            </div>
		            
		        </div>
		    </div>
		</div>
	</div>
</div>
                    
             
      <!-- end -->
      
      
      
      
      </div>
      <!-- /.container-fluid -->

      </div>
            </div>
            <!-- End of Main Content -->

            

          </div>
          <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
          <i class="fas fa-angle-up"></i>
        </a>

          <?php include('logout_modal.php'); ?>
          <?php include('footer-script.php'); ?>

        
  </body>
<!-- modal image -->
<div class="modal fade" id="viewfull" tabindex="-1" role="dialog" aria-labelledby="fullview" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-basic">
        <h5 class="modal-title" id="fullview">FULL VIEW</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img src="<?php echo base_url(); ?>assets/img/1.jpg" class="m-3 rounded" style="height:500px; width:735px" >

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- end -->
</html>

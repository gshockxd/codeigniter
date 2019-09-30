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
            <div class="card mb-5">
		        <div class="card-body">
		            <div class="row">
		                <div class="col-md-12">
                        <a href="history"><button type="button" class="btn fas fa-arrow-left"></button></a>  
                        <h4 align="center">EVENT DETAILS</h4>
		                    <hr>
		                </div>
		            </div>
		            <div class="row">
		                <div class="col-md-12">
		                    
                              <div class="form-group row">
                                <label for="username" class="col-4 col-form-label">EVENT ID:</label> 
                                <div class="col-8">
                                  <p class="lead">1</p>
                                </div>      
                              </div>
                              <hr>
                              <div class="form-group row">
                                <label for="username" class="col-4 col-form-label"> Client Name:</label> 
                                <div class="col-8">
                                  <p class="lead"><img src="<?php echo base_url(); ?>assets/img/1.jpg" alt="none" style="width:50px;height:50px; border-radius:30px">&nbsp CLients</p>
                                </div>
                              </div>
                              <hr>
                              <div class="form-group row">
                                <label for="username" class="col-4 col-form-label">Performer Name:</label> 
                                <div class="col-8">
                                  <p class="lead"><img src="<?php echo base_url(); ?>assets/img/1.jpg" alt="none" style="width:50px;height:50px; border-radius:30px"> &nbspPerforer name</p>
                                </div>
                              </div>
                              <hr>
                              <div class="form-group row">
                                <label for="text" class="col-4 col-form-label">Venue:</label> 
                                <div class="col-8">
                                <p class="lead">Cebu City</p>                                  
                                </div>
                              </div>
                              <hr>
                              <div class="form-group row">
                                <label for="text" class="col-4 col-form-label">Partial Payment:</label> 
                                <div class="col-8">
                                  <p class="lead">$1500</p>                                  
                                </div>
                              </div>
                              <hr>
                              <div class="form-group row">
                                <label for="text" class="col-4 col-form-label">Total Payment:</label> 
                                <div class="col-8">
                                  <p class="lead">$3000</p>                                  
                                </div>
                              </div>
                              <hr>
                              <div class="form-group row">
                                <label for="text" class="col-4 col-form-label">Payments Made:</label> 
                                <div class="col-8">
                                  <p class="lead">Partial</p>                                  
                                </div>
                              </div>
                              <hr>
                              <div class="form-group row">
                                <label for="text" class="col-4 col-form-label">Date</label> 
                                <div class="col-8">
                                  <p class="lead">05-09-2019</p>                                  
                                </div>
                              </div>
                              <hr>
                              <div class="form-group row">
                                <label for="text" class="col-4 col-form-label">Duration:</label> 
                                <div class="col-8">
                                  <p class="lead">00:60:00</p>                                  
                                </div>
                              </div>
                              <hr>
                              <div class="form-group row">
                                <label for="text" class="col-4 col-form-label">Client Notes to performer:</label> 
                                <div class="col-8">
                                  <p class="lead">Event feedback survey questions are survey questions asked after an event has concluded to the attendees to understand their opinions about the event. ... In your opinion, the event could have been better in certain aspects such as the facilities and material provided to the attendees.9</p>                                
                                </div>
                              </div>
                              <hr>
                              <div class="form-group row">
                                <label for="text" class="col-4 col-form-label">Date Booked</label> 
                                <div class="col-8">
                                  <p class="lead">05-06-2019</p>                                  
                                </div>
                              </div>
                              
    
		                </div>
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

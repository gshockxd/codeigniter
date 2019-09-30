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
      
          <a class="collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-sort"></i>
                      <span>Search by:</span>
                      </a>
                      <div class="card" style="width:50%; margin:10px;"> 
                        <div class="card-block" >
                          <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">       
                             <div class="container-fluid">
                                <span class=" mb-0 pl-3 text-gray-800">Date</span>
                                    <form class="form-inline ml-4 mb-1 "> 
                                        <input class="form-control mr-sm-2" type="date" placeholder="Search by Date"> 
                                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" ><label class="fa fa-search"></label></button>   
                                    </form>
                                <span class=" mb-0 pl-3 text-gray-800">Name</span>
                                    <form class="form-inline ml-4 mb-1 "> 
                                        <input class="form-control mr-sm-2" type="text" placeholder="Search by name"> 
                                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" ><label class="fa fa-search"></label></button>   
                                    </form>
                              </div>           
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="d-sm-flex align-items-center justify-content-between mb-4">
                  <a href="addevent" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                    <i class="fas fa-music fa-sm text-white-50"></i> Add Event</a>
                </div>
            <div class="card mb-4">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">VENUE</th>
                            <th scope="col">CLIENT NAME</th>
                            <th scope="col">DATE</th>
                            <th scope="col">TIME</th>
                            <th scope="col">PERFORMER NAME</th>
                            <th scope="col">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <th>Cebu City</th>
                                <td>Otto</td>
                                <td>01-12-2019</td>
                                <td>10 am</td>
                                <td>ClientSample</td>
                                <td>
                                <div class="dropdown no-arrow">
                                  <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-list-alt fa-lg fa-fw text-blue-400 pl-3"></i>
                                  </a>
                                <div class="dropdown-menu dropdown-menu-down shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item fas fa-eye fa-fw" href="eventview">&nbsp More Details</a> 
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item fas fa-trash-alt fa-fw" href="#" data-toggle="modal" data-target="#delevent">&nbsp Delete</a>   
                                  </div>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <th>Cebu City</th>
                                <td>Otto</td>
                                <td>01-12-2019</td>
                                <td>10 am</td>
                                <td>ClientSample</td>
                                <td>
                                <div class="dropdown no-arrow">
                                  <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-list-alt fa-lg fa-fw text-blue-400 pl-3"></i>
                                  </a>
                                <div class="dropdown-menu dropdown-menu-down shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                  <div class="dropdown-header">Action:</div>
                                  <a class="dropdown-item fas fa-eye fa-fw" href="profile">&nbsp More Details</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item fas fa-trash-alt fa-fw" href="#">&nbsp Delete</a>   
                                  </div>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <th>Cebu City</th>
                                <td>Otto</td>
                                <td>01-12-2019</td>
                                <td>10 am</td>
                                <td>ClientSample</td>
                                <td>
                                <div class="dropdown no-arrow">
                                  <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-list-alt fa-lg fa-fw text-blue-400 pl-3"></i>
                                  </a>
                                <div class="dropdown-menu dropdown-menu-down shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                  <div class="dropdown-header">Action:</div>
                                  <a class="dropdown-item fas fa-eye fa-fw" href="profile">&nbsp More Details</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item fas fa-trash-alt fa-fw" href="#">&nbsp Delete</a>   
                                  </div>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <th>Cebu City</th>
                                <td>Otto</td>
                                <td>01-12-2019</td>
                                <td>10 am</td>
                                <td>ClientSample</td>
                                <td>
                                <div class="dropdown no-arrow">
                                  <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-list-alt fa-lg fa-fw text-blue-400 pl-3"></i>
                                  </a>
                                <div class="dropdown-menu dropdown-menu-down shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                  <div class="dropdown-header">Action:</div>
                                  <a class="dropdown-item fas fa-eye fa-fw" href="profile">&nbsp More Details</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item fas fa-trash-alt fa-fw" href="#">&nbsp Delete</a>   
                                  </div>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <th>Cebu City</th>
                                <td>Otto</td>
                                <td>01-12-2019</td>
                                <td>10 am</td>
                                <td>ClientSample</td>
                                <td>
                                <div class="dropdown no-arrow">
                                  <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-list-alt fa-lg fa-fw text-blue-400 pl-3"></i>
                                  </a>
                                <div class="dropdown-menu dropdown-menu-down shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                  <div class="dropdown-header">Action:</div>
                                  <a class="dropdown-item fas fa-eye fa-fw" href="profile">&nbsp More Details</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item fas fa-trash-alt fa-fw" href="#">&nbsp Delete</a>   
                                  </div>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <th>Cebu City</th>
                                <td>Otto</td>
                                <td>01-12-2019</td>
                                <td>10 am</td>
                                <td>ClientSample</td>
                                <td>
                                <div class="dropdown no-arrow">
                                  <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-list-alt fa-lg fa-fw text-blue-400 pl-3"></i>
                                  </a>
                                <div class="dropdown-menu dropdown-menu-down shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                  <div class="dropdown-header">Action:</div>
                                  <a class="dropdown-item fas fa-eye fa-fw" href="profile">&nbsp More Details</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item fas fa-trash-alt fa-fw" href="#">&nbsp Delete</a>   
                                  </div>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <th>Cebu City</th>
                                <td>Otto</td>
                                <td>01-12-2019</td>
                                <td>10 am</td>
                                <td>ClientSample</td>
                                <td>
                                <div class="dropdown no-arrow">
                                  <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-list-alt fa-lg fa-fw text-blue-400 pl-3"></i>
                                  </a>
                                <div class="dropdown-menu dropdown-menu-down shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                  <div class="dropdown-header">Action:</div>
                                  <a class="dropdown-item fas fa-eye fa-fw" href="profile">&nbsp More Details</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item fas fa-trash-alt fa-fw" href="#">&nbsp Delete</a>   
                                  </div>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <th>Cebu City</th>
                                <td>Otto</td>
                                <td>01-12-2019</td>
                                <td>10 am</td>
                                <td>ClientSample</td>
                                <td>
                                <div class="dropdown no-arrow">
                                  <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-list-alt fa-lg fa-fw text-blue-400 pl-3"></i>
                                  </a>
                                <div class="dropdown-menu dropdown-menu-down shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                  <div class="dropdown-header">Action:</div>
                                  <a class="dropdown-item fas fa-eye fa-fw" href="profile">&nbsp More Details</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item fas fa-trash-alt fa-fw" href="#">&nbsp Delete</a>   
                                  </div>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <th>Cebu City</th>
                                <td>Otto</td>
                                <td>01-12-2019</td>
                                <td>10 am</td>
                                <td>ClientSample</td>
                                <td>
                                <div class="dropdown no-arrow">
                                  <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-list-alt fa-lg fa-fw text-blue-400 pl-3"></i>
                                  </a>
                                <div class="dropdown-menu dropdown-menu-down shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                  <div class="dropdown-header">Action:</div>
                                  <a class="dropdown-item fas fa-eye fa-fw" href="profile">&nbsp More Details</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item fas fa-trash-alt fa-fw" href="#">&nbsp Delete</a>   
                                  </div>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <th>Cebu City</th>
                                <td>Otto</td>
                                <td>01-12-2019</td>
                                <td>10 am</td>
                                <td>ClientSample</td>
                                <td>
                                <div class="dropdown no-arrow">
                                  <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-list-alt fa-lg fa-fw text-blue-400 pl-3"></i>
                                  </a>
                                <div class="dropdown-menu dropdown-menu-down shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                  <div class="dropdown-header">Action:</div>
                                  <a class="dropdown-item fas fa-eye fa-fw" href="profile">&nbsp More Details</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item fas fa-trash-alt fa-fw" href="#">&nbsp Delete</a>   
                                  </div>
                                </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
            <div class="row mb-4">
                <div class="col-sm-12 col-md-12 offset-5">
                    <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                </div>
              
                <div class="col-sm-12 col-md-12 offset-4">
                    <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                        <ul class="pagination">
                        <li class="paginate_button page-item previous disabled" id="dataTable_previous">
                            <a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                            <li class="paginate_button page-item active"><a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                            <li class="paginate_button page-item next" id="dataTable_next"><a href="#" aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
                        </ul>
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
          <?php include('footer-script.php'); ?>
           <!-- event block modal -->
 <div class="modal fade" id="blckevent" tabindex="-1" role="dialog" aria-labelledby="blckevent" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                      BLOCK EVENT
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                <div class="modal-body">
                    <H5>Are you sure you want to Block Event?</H5>
                </div>
                <div class="modal-footer">
                   <button type="button" class="btn btn-danger">YES</button>
                   <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                </div>
            </div>
        </div>
</div>
<!-- end -->
 <!-- event delete modal -->
 <div class="modal fade" id="delevent" tabindex="-1" role="dialog" aria-labelledby="delevent" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                      DELETE EVENT
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                <div class="modal-body">
                    <H5>Are you sure you want to delete Event?</H5>
                </div>
                <div class="modal-footer">
                   <button type="button" class="btn btn-danger">YES</button>
                   <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                </div>
            </div>
        </div>
<!-- end -->

        
  </body>
</html>

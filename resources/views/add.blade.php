@extends('layout')
@section('content')
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Add Auction Details</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item">Auction</li>
                <li class="breadcrumb-item active">Add</li>
            </ol>
        </div>
        <div class="">
            <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
          <form action="#">
        <!-- Row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-outline-info">
                    <div class="card-header">
                        <h4 class="m-b-0 text-white">Event Details</h4>
                    </div>
                    <div class="card-body">
                      
                            <div class="form-body">
                                <h3 class="card-title"></h3>
                                
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Event No</label>
                                            <input type="text" id="event_no" name="event_no" class="form-control" placeholder="">
                                        <small class="form-control-feedback"> This is inline help </small> </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Tender / Event Title</label>
                                            <input type="text" id="event_name" name="event_name" class="form-control" placeholder="">
                                        <small class="form-control-feedback"> This is inline help </small> </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Event Bank</label>
                                            <input type="text" id="event_bank" name="event_bank" class="form-control" placeholder="">
                                        <small class="form-control-feedback"> This is inline help </small> </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label class="control-label">Event Branch</label>
                                            <select class="form-control custom-select" id="event_branch" name="event_branch">
                                                <option value="Sirsi">Sirsi</option>
                                                <option value="Shirali">Shirali</option>
                                                <option value="Kumta">Kumta</option>
                                                <option value="Gokarna">Gokarna</option>
                                                <option value="Jayanagara">Jayanagara</option>
                                                <option value="Honnavara">Honnavara</option>
                                                <option value="Malleshwara">Malleshwara</option>
                                                <option value="Mysuru">Mysuru</option>
                                            </select>
                                        <small class="form-control-feedback"> Select event branch</small> </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                    </div>
                </div>
            </div>
        </div>
        <!-- Row -->
        <!-- Row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-outline-info">
                    <div class="card-header">
                        <h4 class="m-b-0 text-white">Property Details</h4>
                    </div>
                    <div class="card-body">
                        
                        <div class="form-body">
                            <h3 class="card-title"></h3>
                            
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group ">
                                        <label class="control-label">Property Category</label>
                                        <select class="form-control custom-select" id="property_cat" name="property_cat">
                                            <option value="Movable">Movable</option>
                                            <option value="Inmovable">Inmovable</option>
                                            
                                        </select>
                                    <small class="form-control-feedback"> Select property category</small> </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group ">
                                        <label class="control-label">Property Sub Category</label>
                                        <select class="form-control custom-select" id="property_cat" name="property_cat">
                                            <option value="Vehicle">Vehicle</option>
                                            <option value="Land">Land</option>
                                            <option value="Flat">Flat</option>
                                            <option value="Plot">Plot</option>
                                        </select>
                                    <small class="form-control-feedback"> Select property sub category</small> </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Borrower's Name</label>
                                        <input type="text" id="borrower_name" name="borrower_name" class="form-control" placeholder="">
                                    <small class="form-control-feedback"> This is inline help </small> </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Property Description </label>
                                        <textarea name="property_desc" id="property_desc" class="form-control" rows="8"></textarea>
                                    <small class="form-control-feedback"> This is inline help </small> </div>
                                </div>
                                <!--/span-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row -->
        <!-- Row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-outline-info">
                    <div class="card-header">
                        <h4 class="m-b-0 text-white">Auction Details</h4>
                    </div>
                    <div class="card-body">
                        
                        <div class="form-body">
                            <h3 class="card-title"></h3>
                            
                            <div class="row p-t-20">
                               <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Reserve Price</label>
                                        <input type="text" id="reserve_price" name="reserve_price" class="form-control" placeholder="">
                                    <small class="form-control-feedback"> This is inline help </small> </div>
                                </div>
                                <!--/span-->
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Tender Fee</label>
                                        <input type="text" id="tender_fee" name="tender_fee" class="form-control" placeholder="">
                                    <small class="form-control-feedback"> This is inline help </small> </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Price Bid</label>
                                        <input type="text" id="price_bid" name="price_bid" class="form-control" placeholder="">
                                    <small class="form-control-feedback"> This is inline help </small> </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Bid Increment value</label>
                                        <input type="text" id="increment_value" name="increment_value" class="form-control" placeholder="">
                                    <small class="form-control-feedback"> This is inline help </small> </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row">
                             
                             
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">EMD Amount </label>
                                        <input type="text" id="emd_amount" name="emd_amount" class="form-control" placeholder="">
                                    <small class="form-control-feedback"> This is inline help </small> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">EMD Deposit Bank Name  </label>
                                        <input type="text" id="emd_bankname" name="emd_bankname" class="form-control" placeholder="">
                                    <small class="form-control-feedback"> This is inline help </small> </div>
                                </div>
                            </div>
                             <div class="row">
 
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">EMD Deposit Bank Account Number </label>
                                        <input type="text" id="emd_accountno" name="emd_accountno" class="form-control" placeholder="">
                                    <small class="form-control-feedback"> This is inline help </small> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">EMD Deposit Bank IFSC Code </label>
                                        <input type="text" id="emd_ifsccode" name="emd_ifsccode" class="form-control" placeholder="">
                                    <small class="form-control-feedback"> This is inline help </small> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row -->
          <!-- Row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-outline-info">
                    <div class="card-header">
                        <h4 class="m-b-0 text-white">Important Dates</h4>
                    </div>
                    <div class="card-body">
                        
                        <div class="form-body">
                            <h3 class="card-title"></h3>
                            
                            <div class="row p-t-20">
                               <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Press Release Date</label>
                                      <input class="form-control" type="datetime-local"  id="example-datetime-local-input" name="release_date">
                                    <small class="form-control-feedback"> This is inline help </small> </div>
                                </div>
                                <!--/span-->
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Date of Inspection of Property (From)</label>
                                      <input class="form-control" type="datetime-local"  id="example-datetime-local-input" name="date_of_inspection_from">
                                    <small class="form-control-feedback"> This is inline help </small> </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Date of Inspection of Property (To)</label>
                                      <input class="form-control" type="datetime-local"  id="example-datetime-local-input" name="date_of_inspection_to">
                                    <small class="form-control-feedback"> This is inline help </small> </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Offer (First Round Quote) Submission Last Date </label>
                                      <input class="form-control" type="datetime-local"  id="example-datetime-local-input" name="submission_last_date">
                                    <small class="form-control-feedback"> This is inline help </small> </div>
                                </div>
                            </div>
                            <div class="row">
                             <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Offer (First Round Quote) Opening Date</label>
                                      <input class="form-control" type="datetime-local"  id="example-datetime-local-input" name="opening_date">
                                    <small class="form-control-feedback"> This is inline help </small> </div>
                                </div>
                                
                            </div>
                             <div class="row">
                             <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Auction Start Date and Time</label>
                                      <input class="form-control" type="datetime-local"  id="example-datetime-local-input" name="start_date">
                                    <small class="form-control-feedback"> This is inline help </small> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Auction End Date and Time</label>
                                      <input class="form-control" type="datetime-local"  id="example-datetime-local-input" name="end_date">
                                    <small class="form-control-feedback"> This is inline help </small> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row -->
         <!-- Row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-outline-info">
                    <div class="card-header">
                        <h4 class="m-b-0 text-white">Important Dates</h4>
                    </div>
                    <div class="card-body">
                        
                        <div class="form-body">
                            <h3 class="card-title"></h3>
                            
                            <div class="row p-t-20">
                               <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Press Release Date</label>
                                      <input class="form-control" type="datetime-local"  id="example-datetime-local-input" name="release_date">
                                    <small class="form-control-feedback"> This is inline help </small> </div>
                                </div>
                                <!--/span-->
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Date of Inspection of Property (From)</label>
                                      <input class="form-control" type="datetime-local"  id="example-datetime-local-input" name="date_of_inspection_from">
                                    <small class="form-control-feedback"> This is inline help </small> </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Date of Inspection of Property (To)</label>
                                      <input class="form-control" type="datetime-local"  id="example-datetime-local-input" name="date_of_inspection_to">
                                    <small class="form-control-feedback"> This is inline help </small> </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Offer (First Round Quote) Submission Last Date </label>
                                      <input class="form-control" type="datetime-local"  id="example-datetime-local-input" name="submission_last_date">
                                    <small class="form-control-feedback"> This is inline help </small> </div>
                                </div>
                            </div>
                            <div class="row">
                             <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Offer (First Round Quote) Opening Date</label>
                                      <input class="form-control" type="datetime-local"  id="example-datetime-local-input" name="opening_date">
                                    <small class="form-control-feedback"> This is inline help </small> </div>
                                </div>
                                
                            </div>
                             <div class="row">
                             <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Auction Start Date and Time</label>
                                      <input class="form-control" type="datetime-local"  id="example-datetime-local-input" name="start_date">
                                    <small class="form-control-feedback"> This is inline help </small> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Auction End Date and Time</label>
                                      <input class="form-control" type="datetime-local"  id="example-datetime-local-input" name="end_date">
                                    <small class="form-control-feedback"> This is inline help </small> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row -->
          <!-- Row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-outline-info">
                    <div class="card-header">
                        <h4 class="m-b-0 text-white">Auction Related Documents</h4>
                    </div>
                    <div class="card-body">
                        
                        <div class="form-body">
                            <h3 class="card-title"></h3>
                            
                            <div class="row p-t-20">
                               <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">NIT Documents</label>
                                      <input class="form-control" type="file"  id="example-datetime-local-input" name="nit_documents">
                                    <small class="form-control-feedback"> This is inline help </small> </div>
                                </div>
                               
                            </div>
                           <div class="row">
                               <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Annexure 2/Details of Bidders</label>
                                      <input class="form-control" type="file"  id="example-datetime-local-input" name="annexure_2">
                                    <small class="form-control-feedback"> This is inline help </small> </div>
                                </div>
                               
                            </div>
                             <div class="row">
                               <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Annexure 3/Declaration by Bidders</label>
                                      <input class="form-control" type="file"  id="example-datetime-local-input" name="annexure_3">
                                    <small class="form-control-feedback"> This is inline help </small> </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-actions">
                                <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                <button type="button" class="btn btn-inverse">Cancel</button>
                            </div>
                        </form>
        <!-- Row -->
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <div class="right-sidebar">
            <div class="slimscrollright">
                <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                <div class="r-panel-body">
                    <ul id="themecolors" class="m-t-20">
                        <li><b>With Light sidebar</b></li>
                        <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                        <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                        <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                        <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a></li>
                        <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                        <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                        <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                        <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                        <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                        <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                        <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                        <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                        <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                    </ul>
                    <ul class="m-t-20 chatonline">
                        <li><b>Chat option</b></li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer">
        © 2019 Admin Press Admin by themedesigner.in
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
@endsection
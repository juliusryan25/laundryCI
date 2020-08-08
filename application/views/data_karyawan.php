<main role="main" class="container-fluid" style="margin-top: 7%;>
<div class="row">
            <div class="col-12">
                <div class="card" style="max-width: 100%; margin-top: 1%;margin-bottom: 2%;border-color: #FF1493;">
                    <div class="row no-gutters">
                      <div class="col-md-4" style="margin-top: 2.5%;">
                        <img src="<?php echo base_url(); ?>assets/image/lon.png" class="card-img" alt="...">
                      </div>
                      <div class="col-md-8" style="background:linear-gradient(to right,white,#FF1493);">
                        <div class="card-body" style="margin: 2%;">
                          <center>
                          <h4 class="card-title" style="color: white;">Register</h4>
                          <form action="" method="post" enctype="multipart/form-data" >
                          <div class="col-auto">
                            <label class="sr-only" for="inlineFormInputGroup">Username</label>
                            <div class="input-group mb-2">
                              <div class="input-group-prepend">
                                <div class="input-group-text">Username</div>
                              </div>
                              <input type="text" class="form-control" id="inlineFormInputGroup" name="username" placeholder="">
                            </div>
                          </div>
                          <div class="col-auto">
                            <label class="sr-only" for="inlineFormInputGroup">email</label>
                            <div class="input-group mb-2">
                              <div class="input-group-prepend">
                                <div class="input-group-text" style="width: 97px;">Email</div>
                              </div>
                              <input type="email" class="form-control" id="inlineFormInputGroup" name="email" placeholder="">
                            </div>
                          </div>
                          <div class="col-auto">
                            <label class="sr-only" for="inlineFormInputGroup">no telpon</label>
                            <div class="input-group mb-2">
                              <div class="input-group-prepend">
                                <div class="input-group-text"style="width: 97px; text-align: center;" >No.Telp</div>
                              </div>
                              <input type="text" class="form-control" id="inlineFormInputGroup" name="telepon" placeholder="">
                            </div>
                          </div>
                          <div class="col-auto">
                            <label class="sr-only" for="inlineFormInputGroup">Password</label>
                            <div class="input-group mb-2">
                              <div class="input-group-prepend">
                                <div class="input-group-text" style="width: 97px; text-align: center;">Password</div>
                              </div>
                              <input type="password" class="form-control" id="inlineFormInputGroup" name="password" placeholder="">
                            </div>
                          </div>
                          <div class="col-auto">
                            <label class="sr-only" for="inlineFormInputGroup">Status</label>
                          <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <label class="input-group-text" style="width: 97px; text-align: center;" for="inputGroupSelect01">Status</label>
                            </div>
                            <select class="custom-select" name="status" id="inputGroupSelect01">
                              <option selected>Choose...</option>
                              <option value="Admin">Admin</option>
                              <option value="Kasir">Kasir</option>
                              <option value="Owner">Owner</option>
                            </select>
                          </div>  
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text" style="width: 97px;" id="inputGroupFileAddon01" >Images</span>
                            </div>
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="inputGroupFile01" name="gambar" aria-describedby="inputGroupFileAddon01">
                              <label style="text-align:left" class="custom-file-label" for="inputGroupFile01">Choose...</label>
                            </div>
                          </div>                       
                          <button type="submit" name="save"  class="btn btn-primary"><img src="<?php echo base_url();?>assets/image/save.png" alt=""> Save</button>&nbsp&nbsp&nbsp
                         
                         </center>
                         </form>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
        <div class="row">
          <div class="col-sm-12 mt-4">
            <div class="table-responsive mb-4">
              <table id="example" class="table table-striped table-bordered" style="width:100%">
              <thead>
                <tr>
                  <td>No</td>
                  <td>Username</td>
                  <td>Email</td>
                  <td>No.Telp</td>
                  <td>Password</td>
                  <td>Status</td>
                  <td>Images</td>
                  <td>Action</td>
                </tr>
              </thead>
              <tbody>
               <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><img style="width :100px" src="" alt=""></td>
                  <td>
                  <div class="col-12">
                    <button  class=" btn btn-success btn-sm edit_data" style="width: 100%;" >  Edit </button>
                    </div>
                    <div class="col-12 mt-2" >
                    <button id="" class=" btn btn-danger btn-sm hapus_data" style="width: 100%;" >  Delete </button>
                    </div>
                  </td>
                </tr>
                
              </tbody>
          </div>
        </div>
        </div>
          
    </main>
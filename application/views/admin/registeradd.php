<?php $this->load->view('home/header');?>
  
        <div class="row mb-4" style="    min-height: calc(100vh - 400px);">
                <div class="col-md-4 offset-md-4" style="padding-top:50px;">

                <?php $errorMsg =$this->session->userdata('errorMsg');?>
                <?php if(!empty($errorMsg)) {?>
                <div class="alert alert-danger" role=alert>
                <?php echo $errorMsg;?>
                </div>
                
                <?php }?>
                
               
                  <form  action="<?php echo base_url().'register/add'?>"  name="registerForm" id="registerForm" method="post">
                <h3 class="text-center p-2">Customer Register</h3 >
                        <div class="form-group">
                          
                            <input type="text" class="form-control" id="name" name="name"  placeholder="Enter Name/username">
                            <p><?php echo form_error('name');?></p>
                        </div>
                        <div class="form-group">
                          
                            <input type="text" class="form-control" id="contact" name="contact"  placeholder="Enter Contact">
                            <p><?php echo form_error('contact');?></p>
                        </div>
                        <p class="text-center p-2">Enter Preference</p >
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="type" id="veg" value="veg" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Veg
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="type" id="nonveg" value="nonveg">
                            <label class="form-check-label" for="exampleRadios2">
                                Non Veg
                            </label>
                        </div>
                        <div class="form-group mt-3">
                          
                            <input type="text" class="form-control" id="address" name="address"  placeholder="Enter Address">
                            <p><?php echo form_error('address');?></p>
                        </div>
                        <div class="form-group">
                          
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            <p><?php echo form_error('password');?></p>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
                        </form>

                        <a  href="<?php echo base_url().'register'?>" class="btn btn-secondary btn-lg btn-block mt-3">Not a customer? Register as Restaurant.</a>
                  
               
                </div>
                
                
        </div>
        
  
        <?php $this->load->view('home/footer');?>
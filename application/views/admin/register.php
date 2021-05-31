<?php $this->load->view('home/header');?>
  
        <div class="row mb-4" style="    min-height: calc(100vh - 400px);">
                <div class="col-md-4 offset-md-4" style="padding-top:50px;">

                <?php $errorMsg =$this->session->userdata('errorMsg');?>
                <?php if(!empty($errorMsg)) {?>
                <div class="alert alert-danger" role=alert>
                <?php echo $errorMsg;?>
                </div>
                
                <?php }?>
               
               
                  <form  action="<?php echo base_url().'register'?>"  name="registerForm" id="registerForm" method="post">
                <h3 class="text-center p-2">Restaurant Register</h3 >
                        <div class="form-group">
                          
                            <input type="text" class="form-control" id="name" name="name"  placeholder="Enter Name of Restaurant/username">
                            <p><?php echo form_error('name');?></p>
                        </div>
                        <div class="form-group">
                          
                            <input type="text" class="form-control" id="contact" name="contact"  placeholder="Enter Contact">
                            <p><?php echo form_error('contact');?></p>
                        </div>
                        <div class="form-group">
                          
                            <input type="text" class="form-control" id="regn" name="regn"  placeholder="Enter Registration Number">
                            <p><?php echo form_error('regn');?></p>
                        </div>
                        <div class="form-group">
                          
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            <p><?php echo form_error('password');?></p>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
                        </form>
                        <a  href="<?php echo base_url().'register/add'?>" class="btn btn-secondary btn-lg btn-block mt-3">Not a Restaurant? Register as Customer.</a>
               
                </div>
                
                
        </div>
        
  
        <?php $this->load->view('home/footer');?>
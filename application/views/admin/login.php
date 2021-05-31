<?php $this->load->view('home/header');?>
<div class="row" style="min-height: calc(100vh - 400px);">
   <div class="col-md-4 offset-md-4" style="padding-top:50px;">
      <?php $errorMsg =$this->session->userdata('errorMsg');?>
      <?php if(!empty($errorMsg)) {?>
      <div class="alert alert-danger" role=alert>
         <?php echo $errorMsg;
            $this->session->unset_userdata('errorMsg');
            ?>
      </div>
      <?php }?>
      <form  action="<?php echo base_url().'login'?>"  name="loginForm" id="loginForm" method="post">
         <h3 class="text-center p-2">Login</h3 >
         <div class="form-group">
            <input type="text" class="form-control" id="username" name="username"  placeholder="Enter username">
            <p><?php echo form_error('username');?></p>
         </div>
         <div class="form-group">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            <p><?php echo form_error('password');?></p>
         </div>
         <button type="submit" class="btn btn-primary btn-lg btn-block mb-4">Submit</button>
      </form>
   </div>
</div>
<?php $this->load->view('home/footer');?>
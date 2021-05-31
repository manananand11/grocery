<?php $this->load->view('admin/header');?>
      <div class="content">
    
      <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                   <h3> Add New Menu Item </h3>
                  
                </div>
                <?php $errorMsg =$this->session->userdata('errorMsg');?>
                <?php if(!empty($errorMsg)) {?>
                <div class="alert alert-danger" role=alert>
                <?php echo $errorMsg;
                $this->session->unset_userdata('errorMsg');
                ?>
                </div>
                <?php }?>

                <div class="card-body">
                  
                <form name="menuForm" id="menuForm" action="<?php echo base_url().'menu/add';?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Item Name</label>
                            <input type="text" id="name" name="name" class="form-control">
                            <p class="help-block"><?php echo form_error('name')?></p>
                        </div>
                        <div class="form-group">
                            <label>Item Price</label>
                            <input type="text" id="price" name="price" class="form-control">
                            <p class="help-block"><?php echo form_error('price')?></p>
                        </div>

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

                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" id="desc" name="desc" class="form-control">
                            <p class="help-block"><?php echo form_error('desc')?></p>
                        </div>
                        <div class="form-group">
                            
                            <input type="file" id="image" name="image" class="form-control" value="upload">
                            <button class="btn btn-secondary">Upload image</button>
                            </input>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Create</button>
                        </form>

                </div>
            </div>
        </div>
    </div>

     
  
    </div>  
  </div>
        

      </div>
<?php $this->load->view('admin/footer');?>
<?php $this->load->view('admin/header');?>
      <div class="content">
      <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Statistics</h4>
        </div>
        <div class="card-body">
          <div id="account-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mb-3">
                        <div class="colleges status">
                            <h5>Menu Items</h5>
                            <h2><?php echo $this->db->where('restaurant',$_SESSION['user']['username'])->count_all_results('menus');?></h2>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 mb-3">
                        <div class="courses status">
                            <h5>Orders</h5>
                            <h2><?php echo $this->db->where('restaurant',$_SESSION['user']['username'])->count_all_results('orders');?></h2>
                        </div>
                    </div>
                    
                   
                </div>
            </div>
    
           
        </div>
      </div>
    </div>
   
  </div>
        

      </div>
<?php $this->load->view('admin/footer');?>
<?php $this->load->view('admin/header');?>
<div class="content">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="card">
               <div class="card-header">
                  <h3> Order Details </h3>
               </div>
               <div class="card-body">
                  <div class="table-responsive">
                     <table id="datatable" class="table">
                        <thead class="text-primary">
                           <th>Item</th>
                           <th>Price</th>
                           <th>Customer Name</th>
                           <th>Contact</th>
                           <th>Date</th>
                           <th></th>
                        </thead>
                        <tbody>
                           <?php if(!empty($orders))
                              {
                                  foreach($orders as $menu)
                                  {
                              ?>
                           <tr>
                              <td><?php echo $menu['item']?></td>
                              <td><?php echo $menu['price']?></td>
                              <td><?php echo $menu['customer_name']?></td>
                              <td><?php echo $menu['contact']?></td>
                              <td><?php echo $menu['created_at']?></td>
                           </tr>
                           <?php }}?>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<?php $this->load->view('admin/footer');?>
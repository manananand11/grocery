<?php $this->load->view('home/header');?>
<div class="content mb-4">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="card">
               <div class="card-header">
                  <h3> Your Orders </h3>
               </div>
               <div class="card-body">
                  <div class="table-responsive">
                     <table id="datatable" class="table">
                        <thead class="text-primary">
                           <th>Item Name</th>
                           <th>Price</th>
                           <th>Shop</th>
                           <th>Date</th>
                        </thead>
                        <tbody>
                           <?php if(empty($orders)) : ?>
                           <td>No records found. Order and enjoy.</td>
                           <?php endif; ?>
                           <?php if(!empty($orders))
                              {
                                  foreach($orders as $order)
                                  {
                              ?>
                           <tr>
                              <td><?php echo $order['item']?></td>
                              <td><?php echo $order['price']?></td>
                              <td><?php echo $order['restaurant']?></td>
                              <td><?php echo $order['created_at']?></td>
                              <td>
                              </td>
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
<?php $this->load->view('home/footer');?>

<?php $this->load->view('admin/header');?>
<div class="content">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="card">
               <div class="card-header">
                  <h3> Menu Item </h3>
               </div>
               <div class="card-body">
                  <?php $success =$this->session->userdata('success');?>
                  <?php if(!empty($success)) {?>
                  <div class="alert alert-success" role=alert>
                     <?php echo $success;
                        $this->session->unset_userdata('success');
                        ?>
                  </div>
                  <?php }?>
                  <div class="table-responsive">
                     <table id="datatable" class="table">
                        <thead class="text-primary">
                           <th>Name</th>
                           <th>Price</th>
                           <th>Type</th>
                           <th>Desc</th>
                           <th>Shop Name</th>
                           <th></th>
                        </thead>
                        <tbody>
                           <?php if(!empty($menus))
                              {
                                  foreach($menus as $menu)
                                  {
                              ?>
                           <tr>
                              <td><?php echo $menu['name']?></td>
                              <td><?php echo $menu['price']?></td>
                              <td><?php echo $menu['type']?></td>
                              <td><?php echo $menu['desc']?></td>
                              <td><?php echo $menu['restaurant']?></td>
                              <td>
                                 <a href="<?php echo base_url().'menu/edit/'.$menu['id']?>" class="btn btn-success">EDIT</a>
                                 <a href="#" onclick="deleteMenu(<?php echo $menu['id']?>)" class="btn btn-danger">DELETE</a>
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
<?php $this->load->view('admin/footer');?>
<script type="text/javascript">
   $(document).ready( function () {
       $('#datatable').DataTable();
   } );
   function deleteMenu(id){
       if(confirm("Are you sure you want to delete")){
           window.location.href="<?php echo base_url().'menu/delete/'?>" +id;
       }
   }
</script>

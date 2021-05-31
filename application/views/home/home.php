<?php $this->load->view('home/header');?>
<style>
   div.container1 {
   position: relative;
   margin: 70px auto;
   height: 470px;
   text-align: center;
   background: #fff;
   -moz-box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.1), 0px 60px 75px -25px rgba(0, 0, 0, 0.2);
   -webkit-box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.1), 0px 60px 75px -25px rgba(0, 0, 0, 0.2);
   box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.1), 0px 60px 75px -25px rgba(0, 0, 0, 0.2);
   cursor: default;
   }
   div.container1 img.img-fruit {
   width: 290px;
   margin-top: -60px;
   }
   img{
   border-radius: 50px;
   }
   div.container1 div.control-btn span {
   position: absolute;
   margin-top: 20px;
   width: 35px;
   height: 35px;
   color: #fff;
   font-size: 13px;
   display: inline-block;
   line-height: 36px;
   cursor: pointer;
   -moz-border-radius: 100%;
   -webkit-border-radius: 100%;
   border-radius: 100%;
   -moz-box-shadow: 0px 2px 7px rgba(241, 44, 51, 0.7);
   -webkit-box-shadow: 0px 2px 7px rgba(241, 44, 51, 0.7);
   box-shadow: 0px 2px 7px rgba(241, 44, 51, 0.7);
   -moz-transition: background 0.3s ease-in;
   -o-transition: background 0.3s ease-in;
   -webkit-transition: background 0.3s ease-in;
   transition: background 0.3s ease-in;
   }
   div.container1 div.control-btn span:hover {
   background: #de2128;
   }
   div.container1 span.prev {
   left: -17.5px;
   }
   div.container1 span.next {
   right: -17.5px;
   }
   div.container1 h3 {
   font-size: 30px;
   letter-spacing: 3px;
   margin-top: 35px;
   color: #ea1d24;
   }
   div.container1 p {
   font-size: 11px;
   padding: 15px 45px;
   color: #878787;
   line-height: 22px;
   }
   div.container1 div.properties {
   margin-top: 20px;
   height: 130px;
   }
   div.container1 div.properties:before, div.container div.properties:after {
   content: " ";
   display: inline-block;
   }
   div.container1 div.properties:after {
   clear: both;
   }
   div.container1 div.properties div {
   display: inline-block;
   text-align: center;
   width: 33.33%;
   float: left;
   }
   div.container1 div.properties div h4 {
   font-size: 14px;
   color: #757575;
   padding: 25px 0px;
   }
   div.containe1r div.properties .qty .fa {
   font-size: 7px;
   color: #757575;
   background: #dfdfdf;
   -moz-border-radius: 100%;
   -webkit-border-radius: 100%;
   border-radius: 100%;
   padding: 4px;
   cursor: pointer;
   }
   div.container1 div.properties .qty .number {
   font-size: 11px;
   color: #757575;
   padding: 5px;
   }
   div.container1 div.properties .price .fa {
   font-size: 18px;
   color: #757575;
   }
   div.container1 div.properties .price .amount {
   color: #646363;
   font-size: 18px;
   padding: 0 5px;
   }
   div.container1 div.properties .delivery .fa {
   font-size: 15px;
   color: #757575;
   }
   div.container1 div.properties .delivery .time {
   display: inline-block;
   color: #757575;
   font-size: 11px;
   }
   div.container1 .ip-add-cart {
   border: none;
   padding: 12px 50px;
   background: #f22d34;
   color: #fff;
   font-size: 12px;
   text-transform: uppercase;
   font-weight: bold;
   -moz-border-radius: 25px;
   -webkit-border-radius: 25px;
   border-radius: 25px;
   -moz-box-shadow: 0px 15px 45px rgba(242, 45, 52, 0.5);
   -webkit-box-shadow: 0px 15px 45px rgba(242, 45, 52, 0.5);
   box-shadow: 0px 15px 45px rgba(242, 45, 52, 0.5);
   cursor: pointer;
   -moz-transition: background 0.3s ease-in;
   -o-transition: background 0.3s ease-in;
   -webkit-transition: background 0.3s ease-in;
   transition: background 0.3s ease-in;
   }
   div.container1 .ip-add-cart:hover {
   background: #da1920;
   }
   /* Start Credit Style */
   div.credit {
   position: absolute;
   padding: 0px 10px;
   padding-bottom: 8px;
   height: 15px;
   right: 10px;
   top: 10px;
   display: inline-block;
   background: rgba(255, 255, 255, 0.7);
   font-size: 7px;
   font-weight: bold;
   color: rgba(0, 0, 0, 0.7);
   border: 1px solid rgba(0, 0, 0, 0.1);
   box-shadow: 0px 10px 15px -15px rgba(0, 0, 0, 0.3);
   cursor: default;
   }
   div.credit:hover {
   border: 1px solid rgba(0, 0, 0, 0.2);
   }
   div.credit img {
   position: relative;
   width: 14px;
   margin-left: 3px;
   top: 4px;
   }
   /* End Credit Style */
   .card-body{
   padding: 1.25rem!important;
   }
</style>
<section class="serviceoffers" id="servicediv">
<div class="container headings">
   <h1>Menu</h1>
   <main class="page-content">
      <?php $success =$this->session->userdata('success');?>
      <?php if(!empty($success)) {?>
      <div class="alert alert-success" role=alert>
         <?php echo $success;
            $this->session->unset_userdata('success');
            ?>
      </div>
      <?php }?>
      <div class="row">
         <?php if(!empty($menus))
            {
                foreach($menus as $menu)
                {
            ?>
         <div class="col-12 col-sm-3">
            <div class="container1">
               <img src="<?php echo base_url().'assets/image/'.$menu['image']?>" height=173px alt="Strawberry" class="img-fruit" />
               <h3><?php echo $menu['name']?></h3>
               <div class="control-btn">
                  <?php if($menu['type']=="veg") : ?>
                  <span class="prev" style=" background: green; -moz-box-shadow: 0px 2px 7px green;
                     -webkit-box-shadow: 0px 2px 7px green;
                     box-shadow: 0px 2px 7px green;">
                  </span>
                  <?php endif; ?>
                  <?php if($menu['type']=="nonveg") : ?>
                  <span class="prev" style=" background: red;">
                    
                  </span>
                  <?php endif; ?>
                  
               </div>
               <p>
                  <?php echo $menu['desc']?>
               </p>
               <div class="properties">
                  <div class="qty">
                     <h4>Restaurant</h4>
                     <span class="number"><?php echo $menu['restaurant']?></span>
                  </div>
                  <div class="price">
                     <h4>Total Price</h4>
                     <span class="price-inr">
                     <i class="fa fa-inr"></i>
                     <span class="amount"><?php echo $menu['price']?></span>
                     </span>
                  </div>
                  <div class="delivery">
                     <h4>Delivery</h4>
                     <i class="fa fa-fighter-jet"></i>
                     <span class="time">In 60 mins</span>
                  </div>
               </div>
               <a href="<?php echo base_url().'order/add/'.$menu['id']?>" class="ip-add-cart">Order</a>
            </div>
         </div>
         <?php }}?>
      </div>
   </main>
</div>
<?php $this->load->view('home/footer');?>
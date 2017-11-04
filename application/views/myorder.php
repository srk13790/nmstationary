<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>NM Stationary</title>
    <!-- Favicon-->
    <link rel="icon" href="<?php echo base_url();?>favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url();?>assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url();?>assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Preloader Css -->
    <link href="<?php echo base_url();?>assets/plugins/material-design-preloader/md-preloader.css" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="<?php echo base_url();?>assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url();?>assets/css/themes/all-themes.css" rel="stylesheet" />
    
    <!-- Bootstrap Select Css -->
    <link href="<?php echo base_url();?>assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery/jquery.min.js"></script>
    
    <style>
        .form-group .form-line .form-label {
    font-weight: normal;
    color: #1b1a1a;
    position: absolute;
    top: 10px;
    left: 0;
    cursor: text;
    -moz-transition: 0.2s;
    -o-transition: 0.2s;
    -webkit-transition: 0.2s;
    transition: 0.2s;
}
    </style>
    <script>
    function abc(ab){
        document.getElementById('product_id').value=ab;
    }
    </script>
    
<!--    <script type="text/javascript">

   $(document).ready(function() { 
        $("#quantity_type").change(function(){
                alert("hi");
                 var a= $('#quantity_type').val();
                 var b= $('#quantity').val();
                 alert(a);
//                    $.ajax({
//                    url:"<?php echo base_url();?>Ajaxcall/getprice/",
//                    data: {quantity_type: $(this).val()},
//                    type: "POST",
//                    success:function(data){
//                        $("#price").html(data);
//                    }
//                 });
               });
            });

   </script>-->
    
<!--    <script>
   function getprice(str) {
       
      var qtype=str;
      var quantity= document.getElementById('quantity').value;
      var abc=qtype+"&"+quantity;
       
     var xhttp = new XMLHttpRequest();
     xhttp.onreadystatechange = function() {
       if (xhttp.readyState == 4 && xhttp.status == 200) {
         document.getElementById("price").innerHTML = xhttp.responseText;
       }
     };
     xhttp.open("POST", "<?php base_url()?>Ajaxcall/getprice/"+abc, true);
     xhttp.send();
   }
   </script>-->
    
    <script type="text/javascript">
    function fetch_select(val)
    {
     var quan=document.getElementById('quantity').value;
     $.ajax({
     type: 'post',
     url: '<?php base_url()?>Ajaxcall/getprice',
     data: {
      get_option:val,
      quantity:quan,
     },
     success: function (response) {
      document.getElementById("price").innerHTML=response; 
     }
     });
    }

    </script>
    
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="md-preloader pl-size-md">
                <svg viewbox="0 0 75 75">
                    <circle cx="37.5" cy="37.5" r="33.5" class="pl-red" stroke-width="4" />
                </svg>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
<!--    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>-->
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <?php include_once 'top.php';?>
    <!-- #Top Bar -->
    <?php include_once 'sidebar.php';?>
    
    <section class="content">
        <div class="container-fluid">
        
            <?php
            //$_SESSION['errors'] =='order_saved';
            if(isset($_SESSION['errors'])){
                if($_SESSION['errors'] =='order_saved'){
                ?>
            <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    Your order has been saved successfully !
            </div>
                <?php unset($_SESSION['errors']); }else{?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <?php 
                  echo $_SESSION['errors'];
                  unset($_SESSION['errors']);
                  ?>
            </div>
                <?php }}?>
<!--            <div class="block-header">
                <h3>
                     Home Page Carousel
                    <small></small>
                </h3>
            </div>-->
            <!-- Basic Examples -->
            
            <!--POPUP-->
                <div class="modal fade in" id="defaultModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Add Order</h4>
                        </div>
                        <?php
                        echo form_open('Maker/addorder');
                        ?>
                        <div class="modal-body">
                            <div class="card">
<!--                                <div class="header">
                                    <h2>
                                        VERTICAL LAYOUT
                                        <small>With floating label</small>
                                    </h2>
                                    
                                </div>-->
                                <div class="body">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <select name="product_id" class="form-control show-tick" data-live-search="true" required onchange="abc(this.value)">
                                                    <option value="">Select Product</option>
                                                    <?php
                                                    foreach($product as $prod){
                                                    ?>
                                                    <option value="<?php echo $prod['product_id'];?>"><?php echo $prod['product_name'];?></option>
                                                    <?php }?>
                                                </select>
                                                
                                                <label class="form-label">Select Product</label>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="quantity" id="quantity" class="form-control" required>
                                                <label class="form-label">Quantity</label>
                                            </div>
                                        </div>
                                    
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <select id="quantity-type" name="quantity_type" class="form-control" required>
                                                    <option value="">Select Whether you want it in box or separate</option>
                                                    <option value="Each">Each</option>
                                                    <option value="Box">Box</option>
                                                </select>
                                                <label class="form-label">Quantity Type</label>
                                            </div>
                                        </div>
                                        
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="product_id" id="product_id">
                            <button type="submit" class="btn bg-green waves-effect">SAVE CHANGES</button>
                            <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                        <?php
                        echo form_close()
                        ?>
                    </div>
                </div>
            </div>
                <!---POPUP END--->
            
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 style="text-align: center;">
                                My Orders
                                <a data-toggle="modal" data-target="#defaultModal" style="cursor: pointer;">
                                    <i class="material-icons" style="float:right;">add</i>
                                </a>
                            </h2>
                            
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                <tr>
                                    <th>Sr No</th>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Order Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i=0;
                                    foreach($myorder as $mo){
                                     $i++;
                                    ?>
                                    <tr>
                                        <td><?php echo $i;?></td>
                                        <td><?php echo $mo['product_name'];?></td>
                                        <td><?php echo $mo['quantity'];?></td>
                                        <td>&#8377; <?php echo $mo['price'];?></td>
                                        <td>
                                           <?php 
                                           if($mo['status'] =='' && $mo['approve_status'] =='')
                                           { $order_id=$mo['order_id'];
                                             $key="13790";
                                             $order_id=  base64_encode($order_id*$key);
                                            ?>
                                            <a type="button" class="btn bg-teal waves-effect" data-toggle="modal" data-target="#update<?php echo $mo['order_id'];?>" style="cursor: pointer;">
                                              Order Saved  
                                            </a>
                                            <!---------Update Popup--------->
                                            <div class="modal fade in" id="update<?php echo $mo['order_id'];?>" tabindex="-1" role="dialog">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="defaultModalLabel">Your Order</h4>
                                                        </div>
                                                        <?php
                                                        echo form_open('Maker/placeorder');
                                                        ?>
                                                        <div class="modal-body">
                                                            <div class="card">
                                <!--                                <div class="header">
                                                                    <h2>
                                                                        VERTICAL LAYOUT
                                                                        <small>With floating label</small>
                                                                    </h2>

                                                                </div>-->
                                                                <div class="body">
                                                                   <div class="body table-responsive">
                                                                    <table class="table table-bordered">
                                                                        
                                                                            <tr>
                                                                                <th>Product Name</th>
                                                                                <td><?php echo $mo['product_name'];?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>Quantity</th>
                                                                                <td>
                                                                                    <?php echo $qu=$mo['quantity'];?> <?php echo $mo['quantity_type'];?>
                                                                                
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>Price Of Product</th>
                                                                                <td><?php echo $pr=$mo['product_price'];?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>Total Price</th>
                                                                                <td><?php echo ($qu * $pr);?></td>
                                                                            </tr>
                                                                        
                                                                    </table>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <input type="hidden" name="order_id" value="<?php echo $order_id;?>">
                                                            <button type="submit" class="btn bg-green waves-effect">Place My Order</button>
                                                            <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
                                                        </div>
                                                        <?php
                                                        echo form_close()
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <!------------End Update Popup-------------->
                                           <?php }
                                           else if($mo['approve_status'] =='No'){?>
                                            <a type="button" class="btn bg-red waves-effect" data-toggle="modal" data-target="#disapprove<?php echo $mo['order_id'];?>" style="cursor: pointer;">
                                              Order Disapproved  
                                            </a>
                                            <!---------Update Popup--------->
                                            <div class="modal fade in" id="disapprove<?php echo $mo['order_id'];?>" tabindex="-1" role="dialog" style="height: 317px;">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="defaultModalLabel">You order has been disapproved !</h4>
                                                        </div>
                                                        
                                                        <div class="modal-body">
                                                            <div class="card">
                                <!--                                <div class="header">
                                                                    <h2>
                                                                        VERTICAL LAYOUT
                                                                        <small>With floating label</small>
                                                                    </h2>

                                                                </div>-->
                                                                <div class="body">
                                                                   <div class="body table-responsive">
                                                                    <table class="table table-bordered">
                                                                            <tr>
                                                                                <td>Disapprove Reason !</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th><?php echo $qu=$mo['reason'];?></th>
                                                                            </tr>
                                                                    </table>
                                                                       <button type="button" class="btn btn-default waves-effect" data-dismiss="modal" style="margin-bottom: -15px;float: right;">CLOSE</button>   
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
<!--                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
                                                        </div>-->
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <!------------End Update Popup-------------->   
                                          <?php }
                                          else if($mo['approve_status'] =='Yes'){
                                            echo "<b style='color:#4bb44b;'>Order Approved</b>";  
                                          }
                                           else{
                                               echo "<b>Order Sent</b>";
                                           }?>
                                            
                                        </td>
                                        <td>
                                            <?php 
                                           if($mo['status'] =='' || $mo['approve_status'] =='No')
                                           { ?>
                                            <button type="button" data-toggle="modal" data-target="#updateprod<?php echo $mo['order_id'];?>" class="btn btn-primary btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">create</i>
                                            </button>
                                            
                                            <!---------Update Popup--------->
                                            <div class="modal fade in" id="updateprod<?php echo $mo['order_id'];?>" tabindex="-1" role="dialog">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="defaultModalLabel">Your Order</h4>
                                                        </div>
                                                        <?php
                                                        $order_id=$mo['order_id'];
                                                        $product_id=$mo['product_id'];
                                                        $key="13790";
                                                        $order_id=  base64_encode($order_id*$key);
                                                        $product_id=  base64_encode($product_id*$key);
                                                        echo form_open('Maker/updateorder');
                                                        ?>
                                                        <div class="modal-body">
                                                            <div class="card">
                                <!--                                <div class="header">
                                                                    <h2>
                                                                        VERTICAL LAYOUT
                                                                        <small>With floating label</small>
                                                                    </h2>

                                                                </div>-->
                                                                <div class="body">
                                                                   <div class="body table-responsive">
                                                                    <table class="table table-bordered">
                                                                        
                                                                            <tr>
                                                                                <th>Product Name</th>
                                                                                <td><?php echo $mo['product_name'];?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>Quantity</th>
                                                                                <td>
                                                                                    <input type="text" name="quantity" class="form-control" value="<?php echo $mo['quantity'];?>" required>
                                                                                    
                                                                                </td>
                                                                            </tr>
                                                                            
                                                                            <tr>
                                                                                <th>Quantity Type</th>
                                                                                <td>
                                                                                    <select name="quantity_type" class="form-control" required>
                                                                                        <?php if($mo['quantity_type']=='Box' || $mo['quantity_type']=='Boxes' ){?>
                                                                                        <option value="<?php echo $mo['quantity_type'];?>"><?php echo $mo['quantity_type'];?></option>
                                                                                        <option value="Each">Each</option>
                                                                                        <?php }else{?>
                                                                                        <option value="<?php echo $mo['quantity_type'];?>"><?php echo $mo['quantity_type'];?></option>
                                                                                        <option value="Box">Boxes</option>
                                                                                        <?php }?>
                                                                                    </select>
                                                                                    
                                                                                </td>
                                                                            </tr>
                                                                            
                                                                        
                                                                    </table>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <input type="hidden" name="order_id" value="<?php echo $order_id;?>">
                                                            <input type="hidden" name="product_id" value="<?php echo $product_id;?>">
                                                            <button type="submit" class="btn bg-green waves-effect">Update My Order</button>
                                                            <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
                                                        </div>
                                                        <?php
                                                        echo form_close()
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <!------------End Update Popup-------------->
                                           <?php }else{
                                               
                                               echo "NA";
                                           }?>
                                        </td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
            <!-- Exportable Table -->
<!--            <div class="row clearfix">
                
            </div>-->
            <!-- #END# Exportable Table -->
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="<?php echo base_url();?>assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url();?>assets/js/admin.js"></script>
    <script src="<?php echo base_url();?>assets/js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url();?>assets/js/demo.js"></script>
    
    <script type="text/javascript">
      $(".chosen").chosen();
</script>
</body>

</html>
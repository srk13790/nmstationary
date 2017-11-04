<?php
$module=$this->session->userdata['module'];
if($module == 2){
?>
<div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="Myorders" style="text-decoration: none;"><div class="info-box bg-pink hover-expand-effect" style="cursor: pointer;">
                        <div class="icon">
                            <i class="material-icons">add_shopping_cart</i>
                        </div>
                        <div class="content">
                            <div class="text">My Orders</div>
<!--                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>-->
                        </div>
                    </div></a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="ToDo" style="text-decoration: none;"><div class="info-box bg-cyan hover-expand-effect" style="cursor: pointer;">
                        <div class="icon">
                            <i class="material-icons">assignment</i>
                        </div>
                        <div class="content">
                            <div class="text">To-Do List</div>
<!--                            <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>-->
                        </div>
                    </div></a>
                </div>
</div>
<?php }else{?>
<div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="Orders" style="text-decoration: none;"><div class="info-box bg-pink hover-expand-effect" style="cursor: pointer;">
                        <div class="icon">
                            <i class="material-icons">add_shopping_cart</i>
                        </div>
                        <div class="content">
                            <div class="text">Pending Orders</div>
<!--                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>-->
                        </div>
                    </div></a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="Approved_Orders" style="text-decoration: none;"><div class="info-box bg-cyan hover-expand-effect" style="cursor: pointer;">
                        <div class="icon">
                            <i class="material-icons">assignment</i>
                        </div>
                        <div class="content">
                            <div class="text">Approved Orders</div>
<!--                            <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>-->
                        </div>
                    </div></a>
                </div>
</div>
<?php }?>
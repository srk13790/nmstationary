<style>
    .sidebar .user-info {
      background: url("<?php echo base_url();?>assets/images/default.jpg") no-repeat no-repeat;
        }
</style>
//<?php //}else{?>
<style>
.mytooltip {
    position: relative;
    display: inline-block;
    border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: black;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;

    /* Position the tooltip */
    position: absolute;
    z-index: 1;
}

.mytooltip:hover .tooltiptext {
    visibility: visible;
}
</style>
<?php //}?>

    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="#">NM Stationary</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
<!--                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>-->
                    <!-- #END# Call Search -->
                    
                    <!-- #END# Tasks -->
                    <li class="pull-right">
<!--                        <a href="logout" class="js-right-sidebar mytooltip"><i class="material-icons">power_settings_new</i></a>-->
                        <a href="logout" type="button" class="js-right-sidebar" data-toggle="tooltip" data-placement="left" title="" data-original-title="Tooltip on left"><i class="material-icons">power_settings_new</i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
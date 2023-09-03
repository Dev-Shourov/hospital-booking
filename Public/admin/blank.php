<?php require_once('../../Private/initialize.php'); ?>
<!-- ::::+--- HEAD ---+:::: -->
<?php include(PUBLIC_PATH .'/admin/layouts/head.php'); ?>

    
    <!-- ::::-- MAIN WRAPPER STARTS --:::: -->
    <div id="main-wrapper">

        <!-- :::: TOP_BAR :::: -->
        <?php include(PUBLIC_PATH . '/admin/layouts/topbar.php'); ?>

        <!-- :::: SIDE_BAR :::: -->
        <?php include(PUBLIC_PATH . '/admin/layouts/sidebar.php'); ?>

        <!-- content starts -->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <?php 
                if (isset($DB)) {
                    echo "database connected";
                }
                ?>
            </div>
            <!-- #/ container -->
        </div>
        <!-- content ends -->
        
        
        <!-- :::: FOOTER :::: -->
        <?php include(PUBLIC_PATH . '/admin/layouts/footer.php'); ?>
        
    </div>
    <!-- ::::-- MAIN WRAPPER STARTS --:::: -->

    
<!-- ::::+--- SCRIPTS ---+:::: -->
<?php include(PUBLIC_PATH . '/admin/layouts/scripts.php'); ?>
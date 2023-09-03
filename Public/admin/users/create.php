<?php require_once('../../../Private/initialize.php'); ?>
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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add new user</h4>
                            <div class="basic-form">
                                <form action="<?php url_for('/admin/users/create.php?add_user') ?>" method="POST">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Name</label>
                                            <input type="text" class="form-control" placeholder="Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Email</label>
                                            <input type="email" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label>Address[#House no, #Road no, City, Zip code]</label>
                                            <input type="text" class="form-control" placeholder="Address">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Phone</label>
                                            <input type="text" class="form-control" placeholder="Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Role</label>
                                            <select id="InputRole" class="form-control">
                                                <option selected="selected">Choose...</option>
                                                <option>Admin</option>
                                                <option>Manager</option>
                                                <option>Operator</option>
                                                <option>Deactivate</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Password</label>
                                            <input type="text" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Role</label>
                                            <input type="file" class="form-control-file">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-dark">Create</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
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
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
                <!-- col here -->
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Data Table</h4>
                            <div class="table-responsive">
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="dataTables_length" id="DataTables_Table_0_length">
                                                <label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-control form-control-sm">
                                                    <option value="10">10</option><option value="25">25</option>
                                                    <option value="50">50</option><option value="100">100</option>
                                                </select> entries</label></div></div><div class="col-sm-12 col-md-6">
                                                    <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                                        <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table class="table table-striped table-bordered zero-configuration dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" aria-sort="ascending" style="width: 57.6625px;">
                                                            Index
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 168.8px;">
                                                            Name
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 168.8px;">
                                                            Email
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 168.8px;">
                                                            Phone
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 124px;">
                                                            Role
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 271.237px;">
                                                            Action
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <?php
                                                    
                                                ?>
                                                <tbody>
                                                    <?php
                                                    $i = 1;
                                                    $result = get_all_user();
                                                    while($user = mysqli_fetch_assoc($result)){ ?>                                 
                                                        <tr role="row" class="odd">
                                                            <td class="sorting_1"><?php echo $i; $i++;?> </td>
                                                            <td><?php echo h($user['name']); ?></td>
                                                            <td><?php echo h($user['email']); ?></td>
                                                            <td><?php echo h($user['phone']); ?></td>
                                                            <td>
                                                                <?php 
                                                                    if ($user['role'] == 1) { ?>
                                                                        <span class="badge badge-danger">admin</span>
                                                                    <?php }
                                                                    elseif ($user['role'] == 2){ ?>
                                                                        <span class="badge badge-primary">manager</span>
                                                                    <?php }
                                                                    elseif ($user['role'] == 3){ ?>
                                                                        <span class="badge badge-info">manager</span>
                                                                    <?php }
                                                                    else{ ?>
                                                                        <span class="badge badge-light">Disabled</span>
                                                                    <?php }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <div class="button-group">
                                                                    <div class="btn-group-sm">
                                                                        <a class="btn btn-primary" href="<?php echo h(url_for('/admin/users/edit.php?id=' . u($user['id']))); ?>">edit</a>
                                                                        <a class="btn btn-danger" href="<?php echo h(url_for('/admin/users/edit.php?delete&id=' . u($user['id']))); ?>">delete</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php }
                                                    mysqli_free_result($result);
                                                    ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th rowspan="1" colspan="1">
                                                            Index
                                                        </th>
                                                        <th rowspan="1" colspan="1">
                                                            Name
                                                        </th>
                                                        <th rowspan="1" colspan="1">
                                                            Email
                                                        </th>
                                                        <th rowspan="1" colspan="1">
                                                            Phone
                                                        </th>
                                                        <th rowspan="1" colspan="1">
                                                            Role
                                                        </th>
                                                        <th rowspan="1" colspan="1">
                                                            Action
                                                        </th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-5">
                                            <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
                                                Showing 1 to 10 of 57 entries
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-7">
                                            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous">
                                                        <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                                    </li>
                                                    <li class="paginate_button page-item active">
                                                        <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                                    </li>
                                                    <li class="paginate_button page-item ">
                                                        <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                                                    </li>
                                                    <li class="paginate_button page-item ">
                                                        <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">3</a>
                                                    </li>
                                                    <li class="paginate_button page-item ">
                                                        <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link">4</a>
                                                    </li>
                                                    <li class="paginate_button page-item ">
                                                        <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="5" tabindex="0" class="page-link">5</a>
                                                    </li>
                                                    <li class="paginate_button page-item ">
                                                        <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="6" tabindex="0" class="page-link">6</a>
                                                    </li>
                                                    <li class="paginate_button page-item next" id="DataTables_Table_0_next">
                                                        <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
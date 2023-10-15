<ul class="nav nav-tabs" id="tab-link" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="tab-menu-module" data-toggle="pill" href="#tab-module" role="tab"
                aria-controls="tab-module" aria-selected="true">
                <i class="far fa-star"></i> Module</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="tab-menu-model" data-toggle="pill" href="#tab-model" role="tab"
                aria-controls="tab-model" aria-selected="false">
                <i class="far fa-map"></i> Model</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="tab-menu-view" data-toggle="pill" href="#tab-view" role="tab"
                aria-controls="tab-view" aria-selected="false">
                <i class="fas fa-users"></i> View</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="tab-menu-controller" data-toggle="pill" href="#tab-controller" role="tab"
                aria-controls="tab-controller" aria-selected="false">
                <i class="fa fa-cog"></i> Controller</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="tab-menu-api" data-toggle="pill" href="#tab-api" role="tab" aria-controls="tab-api"
                aria-selected="false">
                <i class="fa fa-cog"></i> API</a>
        </li>
    </ul>
    <div class="tab-content" id="tab-content">
        <div class="tab-pane fade active show" id="tab-module" role="tabpanel" aria-labelledby="tab-menu-module">
            <div class="card">
                <?php include_once("modules/develop/view/generate_module.php"); ?>
            </div>
        </div>
        <div class="tab-pane fade" id="tab-model" role="tabpanel" aria-labelledby="tab-menu-model">
            <div class="card">
                <?php include_once("modules/develop/view/generate_model.php"); ?>


                <h3>SQL</h3>
                <div class="bg-warning-light p-4 m-4">
                    <h4>VARRIABLE</h4>
                    <?php echo $varriable; ?>
                    <br>
                    <h4>SELECT</h4>
                    <?php echo $select; ?>
                    <br><br>
                    <h4>INSERT</h4>
                    <?php echo $insert; ?>
                    <br><br>
                    <h4>UPDATE</h4>
                    <?php echo $update; ?>
                    <br><br>
                    <h4>DELETE</h4>
                    <?php echo $delete; ?>
                    <br>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="tab-view" role="tabpanel" aria-labelledby="tab-menu-view">
            <div class="card">
                <script>
                    $(document).ready(function () {
                        // Add minus icon for collapse element which
                        // is open by default
                        $(".collapse.show").each(function () {
                            $(this).prev(".card-header").find(".fa")
                                .addClass("fa-minus").removeClass("fa-plus");
                        });
                        // Toggle plus minus icon on show hide
                        // of collapse element
                        $(".collapse").on('show.bs.collapse', function () {
                            $(this).prev(".card-header").find(".fa")
                                .removeClass("fa-plus").addClass("fa-minus");
                        }).on('hide.bs.collapse', function () {
                            $(this).prev(".card-header").find(".fa")
                                .removeClass("fa-minus").addClass("fa-plus");
                        });
                    });
                </script>
                <div class="accordion">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingFirst">
                                <h2 class="mb-0">
                                    <button type="button" class="btn btn-link" data-toggle="collapse"
                                        data-target="#collapseFirst">
                                        <i class="fa fa-plus"></i>
                                        <?php echo ucfirst($md) . ' Index'; ?>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFirst" class="collapse" aria-labelledby="headingFirst"
                                data-parent="#accordionExample">
                                <div class="card-body">

                                    <?php include_once("modules/develop/view/generate_index.php"); ?>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button type="button" class="btn btn-link" data-toggle="collapse"
                                        data-target="#collapseOne">
                                        <i class="fa fa-plus"></i>
                                        <?php echo ucfirst($md) . ' List'; ?>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <?php include_once("modules/develop/view/generate_list.php"); ?>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseTwo">
                                        <i class="fa fa-plus"></i>
                                        <?php echo ucfirst($md) . ' Detail'; ?>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <?php include_once("modules/develop/view/generate_detail.php"); ?>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseThree">
                                        <i class="fa fa-plus"></i>
                                        <?php echo ucfirst($md) . ' Edit'; ?>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <?php include_once("modules/develop/view/generate_edit.php"); ?>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h2 class="mb-0">
                                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseFour">
                                        <i class="fa fa-plus"></i>
                                        <?php echo ucfirst($md) . ' Add'; ?>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <?php include_once("modules/develop/view/generate_add.php"); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="tab-controller" role="tabpanel" aria-labelledby="tab-menu-controller">
            <div class="card">
                <?php include_once("modules/develop/view/generate_controller.php"); ?>
            </div>
        </div>
        <div class="tab-pane fade" id="tab-api" role="tabpanel" aria-labelledby="tab-menu-api">
            <div class="card">
                <?php include_once("modules/develop/view/generate_api.php"); ?>
            </div>
        </div>
    </div>
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
                                    <?php include_once("modules/develop/view/api_index.php"); ?>
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
                                    <?php include_once("modules/develop/view/api_list.php"); ?>
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
                                    <?php include_once("modules/develop/view/api_detail.php"); ?>
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
                                    <?php include_once("modules/develop/view/api_edit.php"); ?>
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
                                    <?php include_once("modules/develop/view/api_add.php"); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
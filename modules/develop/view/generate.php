<script src="dist/js/vue.min.js"></script>

<div class="container-fluid" id="customer-list">

    <div class="card">
        <form action="?develop" method="post">
            <div class="card-body" style="display: block;">
                <div class="form-row">
                    <div class="col-2">
                        <label>Select Modules</label>
                    </div>
                    <div class="col">
                        <select class="form-control" name="module">
                            <?php
                            foreach ($modules as $module) {
                                $se = ($md == $module['Tables_in_force']) ? ' selected ' : '';
                                echo '<option ' . $se . '>' . $module['Tables_in_force'] . '</option>';
                            }
                            ?>

                        </select>
                    </div>
                    <div class="col-1">
                        <input type="submit" class="btn btn-success">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="card">
        <form action="?main_menu" method="post">
            <div class="card-body" style="display: block;">
                <div class="form-row">
                    <div class="col-2">
                        <label>Menu Option</label>
                    </div>
                    <div class="col">
                        gfgf
                    </div>
                    <div class="col-1">
                        <input type="submit" class="btn btn-success">
                    </div>
                </div>
            </div>
        </form>
    </div>
    
    <?php include_once("modules/develop/view/generate_tab.php"); ?>

</div>
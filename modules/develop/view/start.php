<div class="container-fluid">
<div class="card">
        <form action="?develop" method="post">
            <div class="card-header bg-light-gray">
                <span class="card-title" data-card-widget="collapse"> AI Building</span>
            </div>
            <div class="card-body" style="display: block;">
                <div class="form-row">
                    <div class="col-4">
                    <div class="form-group">
                    <label>Select Modules</label>
                    <div class="row">
                        <div class="col">
                            <select class="form-control" name="module">
                                <?php
                                foreach($modules as $module){
                                    echo '<option>'.$module['Tables_in_force'].'</option>';
                                }
                                ?>

                            </select>
                        </div>
                    </div>
                </div>
                    </div>
                </div>

            </div>
            <div class="card-footer"><input type="submit" class="btn btn-success"></div>
            </form>
        </div>
        </div>
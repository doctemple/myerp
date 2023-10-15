<?php
function Profile($conn){
    $id = $_SESSION['uid'];
    $sql = "SELECT * FROM users WHERE id = '$id' LIMIT 1";
    $datas = fetch($conn,$sql);
    return $datas[0];
}


function Roles($conn){
    $id = $_SESSION['uid'];
    $sql = "SELECT * FROM roles";
    $datas = fetch($conn,$sql);
    return $datas;
}

$profile = Profile($conn);
$roles = Roles($conn);

//Debug($roles);
?>
<div class="container-fluid">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                แก้ไขข้อมูล [<?php echo $profile['name'];?>]
            </h3>
        </div>
        <div class="card-body">


            <?php if (isset($msg)){ ?>
            <div <?php echo $class_stat;?> role="alert"><?php echo $msg; ?><button type="button" class="close"
                    data-dismiss="alert"><span aria-hidden="true">&times;</span><span
                        class="sr-only">Close</span></button></div>
            <?php } ?>
            <form role="form" action="?use&edit=<?php echo $_GET['edit'];?>" method="POST">


                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="fld_username" id="fld_username" placeholder="Username"
                        required value="<?php echo $profile['user'];?>">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="fld_password" id="fld_password"
                        placeholder="Password" required value="***">
                </div>

                <div class="form-group">
                    <label for="password">Confirm Password</label>
                    <input type="password" class="form-control" name="confirm_password" id="confirm_password"
                        placeholder="Confirm Password" required value="">
                </div>

                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" required class="form-control" name="fld_email" id="fld_email"
                        placeholder="Enter email" value="<?php echo $profile['email'];?>">
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
					<select class="form-control custom-select"  name="fld_type" id="type"  >
								<?php 
									$sel = false;
								foreach($roles as $role){ 

									if ($profile['type']===$role['role']){ 
										
										echo '<option value="'.$role['role'].'" selected="selected" >'.$role['name'].'</option>'; 
										$sel = true;
										
									}else{

										echo '<option value="'.$role['role'].'" >'.$role['name'].'</option>';   
									}
									
								} 

									if(!$sel){ echo '<option value="" selected >เลือก</option>';  }

									?>
							</select>
                </div>

                <button type="submit" class="btn btn-primary" id="submit">ปรับปรุง</button>
            </form>
        </div>

    </div>
</div>
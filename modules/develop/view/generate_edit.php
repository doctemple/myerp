<?php
$config['md'] = $md?$md:$_REQUEST['module'];
$config['tab'] = 'view';
$config['fs'] = 'edit';
$config['code'] = '<?php
$mdd = $'.$mdTitle.'Detail;
$add = '."'".'<a class="btn btn-secondary" href="?'.$md.'"><i class="fa fa-arrow-left"></i> Back</a>'."'".';
$form = '."'".'<form action="modules/'.$md.'/api/index.php" class="was-validated">'."'".';
$form .= '."'".'<input type="hidden" name="ac" value="'.$config['fs'].'">'."'".'; 
$size = sizeof($form_ty);
for($i=0;$i<$size;$i++){
    $ft = $fts[$i];
    $fs = $form_ft[$i];
    switch($form_ty[$i]){
        case "no" :   break;
        case "" :   break;
        case "id" : 
            $form .= '."'".'<input type="hidden" name="'."'".'.$'.'ft.'."'".'" value="'."'.$"."mdd[$"."ft].'".'" >'."'".'; 
            break;
        case "input" : 
            $form .= '."'".'<div class="form-row">'."'".';            
            $form .= '."'".'<div class="form-group col-md">'."'".'; 
            $form .= '."'".'<label for="'."'".'.$'.'ft.'."'".'">'."'".'.$'.'fs.'."'".'</label>'."'".';
            $form .= '."'".'<input type="text" class="form-control" id="'."'".'.$'.'ft.'."'".'" name="'."'".'.$'.'ft.'."'".'" value="'."'.$"."mdd[$"."ft].'".'" placeholder="กรอกข้อมูล" required>'."'".'; 
            $form .= '."'".'<div class="valid-feedback">ผ่าน</div>'."'".';
            $form .= '."'".'<div class="invalid-feedback">กรอกข้อมูล</div>'."'".';
            $form .= '."'".'<div>'."'".';
            $form .= '."'".'<div>'."'".';
            break;
        case "visit" : 
            $form .= '."'".'<div class="form-group">'."'".'; 
            $form .= '."'".'<div class="form-check">'."'".'; 
            $form .= '."'".'<label class="form-check-label">'."'".';
            $form .= '."'".'<input class="form-check-input" type="checkbox" id="'."'".'.$'.'ft.'."'".'" name="'."'".'.$'.'ft.'."'".'" >Visit'."'".'; 
            $form .= '."'".'<div class="valid-feedback">ผ่าน</div>'."'".';
            $form .= '."'".'<div class="invalid-feedback">กรอกข้อมูล</div>'."'".';
            $form .= '."'".'</label>'."'".';
            $form .= '."'".'<div>'."'".';
            $form .= '."'".'<div>'."'".';
            break;
        case "icon" : 
            $form .= '."'".'<div class="form-row">'."'".';            
            $form .= '."'".'<div class="form-group col-md">'."'".'; 
            $form .= '."'".'<label for="'."'".'.$'.'ft.'."'".'">'."'".'.$'.'fs.'."'".'</label>'."'".';
            $form .= '."'".'<input type="text" class="form-control" id="'."'".'.$'.'ft.'."'".'" name="'."'".'.$'.'ft.'."'".'" placeholder="'."'".'.$'.'ft.'."'".'" required>'."'".'; 
            $form .= '."'".'<div class="valid-feedback">ผ่าน</div>'."'".';
            $form .= '."'".'<div class="invalid-feedback">กรอกข้อมูล</div>'."'".';
            $form .= '."'".'<div>'."'".';
            $form .= '."'".'<div>'."'".';
            break;            
        case "dropdown" : 
            $form .= '."'".'<div class="form-row">'."'".';            
            $form .= '."'".'<div class="form-group col-md">'."'".'; 
            $form .= '."'".'<label for="'."'".'.$'.'ft.'."'".'">'."'".'.$'.'fs.'."'".'</label>'."'".';
            $form .= '."'".'<input type="text" class="form-control" id="'."'".'.$'.'ft.'."'".'" name="'."'".'.$'.'ft.'."'".'" placeholder="'."'".'.$'.'ft.'."'".'" required>'."'".'; 
            $form .= '."'".'<div class="valid-feedback">ผ่าน</div>'."'".';
            $form .= '."'".'<div class="invalid-feedback">กรอกข้อมูล</div>'."'".';
            $form .= '."'".'<div>'."'".';
            $form .= '."'".'<div>'."'".';  
            break;          
        default :  
        $form .= '."'".'<div class="form-row">'."'".';            
        $form .= '."'".'<div class="form-group col-md">'."'".'; 
        $form .= '."'".'<label for="'."'".'.$'.'ft.'."'".'">'."'".'.$'.'fs.'."'".'</label>'."'".';
        $form .= '."'".'<input type="text" class="form-control" id="'."'".'.$'.'ft.'."'".'" name="'."'".'.$'.'ft.'."'".'" value="'."'.$"."mdd[$"."ft].'".'" placeholder="'."'".'.$'.'ft.'."'".'" required>'."'".'; 
        $form .= '."'".'<div class="valid-feedback">ผ่าน</div>'."'".';
        $form .= '."'".'<div class="invalid-feedback">กรอกข้อมูล6</div>'."'".';
        $form .= '."'".'<div>'."'".';
        $form .= '."'".'<div>'."'".';        
        break;      
    }

}

$form .= '."'".'<button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Save</button>'."'".';
$form .= "</form>";
echo content(card($add,$form));
?>';

$config['file_src'] = "modules/{$md}/{$config['tab']}/{$config['fs']}.php";

echo PreOpen("Code");  
echo MakeAICode($config);
SaveToFile("Save to file",$config['file_src'],$config['code'],$md,$config['tab'],$config['fs']);
echo PreClose(); 

echo bo($config['file_src']);
MakeAIFile($config);
echo bc();
?>
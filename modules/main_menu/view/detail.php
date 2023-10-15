<?php
$add = '<a class="btn btn-primary" href="?main_menu&add"><i class="fa fa-plus"></i> Add Main_menu</a>';
$form = "";
$i = 0;
foreach($form_ty as $ft){
    $form .= '<div class="form-group">'; 
    $form .= '<label for="uname">'.$form_ft[$i].'</label>';
    switch($ft){
        case "no" :  $form .= ($i+1); break;
        case "id" : 
            $form .= '<input type="text" class="form-control" id="'.$form_ft[$i].'" name="'.$form_ft[$i].'" disbled>'; 
            break;
        case "input" : 
            $form .= '<input type="text" class="form-control" id="'.$form_ft[$i].'" name="'.$form_ft[$i].'" placeholder="Enter '.$form_ft[$i].'" required>'; 
            break;
        case "visit" : $form .= $ft; break;
        case "icon" : $form .= $ft;  break;
        case "visit" : $form .= $ft;  break;
        case "dropdown" : $form .= $ft;  break;  
        default :  $form .= $ft;  break;      
    }
    $form .= '<div class="valid-feedback">Valid.</div>';
    $form .= '<div class="invalid-feedback">Please fill out this field.</div>';
    $form .= '<div>';
    $i++;
}
echo content(card($add,$form));
?>
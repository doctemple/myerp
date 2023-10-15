<?php
$mdd = $MainMenuDetail;
$add = '<a class="btn btn-secondary" href="?main_menu"><i class="fa fa-arrow-left"></i> Back</a>';
$form = '<form action="modules/main_menu/api/index.php" class="was-validated">';
$form .= '<input type="hidden" name="ac" value="edit">'; 
$size = sizeof($form_ty);
for($i=0;$i<$size;$i++){
    $ft = $fts[$i];
    $fs = $form_ft[$i];
    switch($form_ty[$i]){
        case "no" :   break;
        case "" :   break;
        case "id" : 
            $form .= '<input type="hidden" name="'.$ft.'" value="'.$mdd[$ft].'" >'; 
            break;
        case "input" : 
            $form .= '<div class="form-group row">';            
            $form .= '<label for="'.$ft.'" class="col-sm-2 col-form-label">'.$fs.'</label>';
            $form .= '<div class="col-sm-10">';            
            $form .= '<input type="text" class="form-control" id="'.$ft.'" name="'.$ft.'" value="'.$mdd[$ft].'" placeholder="กรอกข้อมูล" required>'; 
            $form .= '</div>';
            $form .= '</div>';
            break;
        case "visit" :
            $form .= '<fieldset class="form-group row">'; 
            $form .= '<label for="'.$ft.'" class="col-sm-2 col-form-label">'.$fs.'</label>';
            $form .= '<div class="col-sm-10">';

            $form .= '<div class="form-check">'; 
            $form .= '<input class="form-check-input" type="checkbox" id="'.$ft.'" name="'.$ft.'" >'; 
            $form .= '<label class="form-check-label" for="'.$ft.'" >Visit</label>';
            $form .= '</div>';

            $form .= '</div>';
            $form .= '</fieldset>';            
            break;
        case "icon" : 
            $form .= '<div class="form-group row">';            
            $form .= '<label for="'.$ft.'" class="col-sm-2 col-form-label">'.$fs.'</label>';
            $form .= '<div class="col-sm-10">';            
            $form .= '<input type="text" class="form-control" id="'.$ft.'" name="'.$ft.'" value="'.$mdd[$ft].'" placeholder="กรอกข้อมูล" required>'; 
            $form .= '</div>';
            $form .= '</div>';
            break;            
        case "dropdown" : 
            $form .= '<div class="form-group row">';            
            $form .= '<label for="'.$ft.'" class="col-sm-2 col-form-label">'.$fs.'</label>';
            $form .= '<div class="col-sm-10">';            
            $form .= '<input type="text" class="form-control" id="'.$ft.'" name="'.$ft.'" value="'.$mdd[$ft].'" placeholder="กรอกข้อมูล" required>'; 
            $form .= '</div>';
            $form .= '</div>';
            break;          
        default :  
        $form .= '<div class="form-group row">';            
        $form .= '<label for="'.$ft.'" class="col-sm-2 col-form-label">'.$fs.'</label>';
        $form .= '<div class="col-sm-10">';            
        $form .= '<input type="text" class="form-control" id="'.$ft.'" name="'.$ft.'" value="'.$mdd[$ft].'" placeholder="กรอกข้อมูล" required>'; 
        $form .= '</div>';
        $form .= '</div>';      
        break;      
    }
}
$form .= '<button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Save</button>';
$form .= "</form>";

echo content(card($add,$form));
?>
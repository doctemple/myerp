<?php
function Title($text){
    return "<h2>$text</h2>";
}

function PreOpen($title){
    return '<pre class="bg-warning-light p-4 m-4"><h2>'.$title.'</h2>';
}

function PreClose(){
    return '</pre>';
}

function bo($title){
    return '<div class="bg-warning-light p-4 m-4"><h2>'.$title.'</h2>';
}

function bc(){
    return '</div>';
}

function SaveToFile($label,$file_src,$code,$md,$tab,$fs){
  
    if(isset($_REQUEST['s2f']) && $_REQUEST['s2f'] != "" && isset($_REQUEST['fs']) && $_REQUEST['fs'] != "" && isset($_REQUEST['module']) && $_REQUEST['module'] != ""){
        $md = $_REQUEST['module'];
        $fs = $_REQUEST['fs'];  
        $source = ReplaceEmptyLine($code);
        $myfile = fopen($file_src, "w") or die("Unable to open file!");
        $fw = fwrite($myfile, $source);
        fclose($myfile); 
        if($fw){
        echo "<script> location = '?develop&module=$md&tab=$tab'; </script>";
        }
    }else{
        echo '<a href="?develop&module='.$md.'&s2f=true&fs='.$fs.'&tab='.$tab.'" class="btn btn-primary" >'.$label.' '.$md.'</a>';        
    }
}

function TestBT($label,$md,$ac,$id){
  
        echo '<a target="_blank" href="modules/'.$md.'/api/?ac='.$ac.'&id='.$id.'" class="btn btn-primary" >'.$label.' '.$md.'</a>';        

}

?>
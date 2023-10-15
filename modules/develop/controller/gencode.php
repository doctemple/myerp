<?php
function SW_Extract($array){
    $return = '';
    foreach($array as $key => $value){
        $return .= quoted_printable_encode('$')
        .quoted_printable_encode("$key").' = '
        .quoted_printable_encode('$')
        .quoted_printable_encode("_REQUEST['$key'];").' ';
    }
    return $return;
}

function SW_Filds($array){
    $return = '';
    $size = sizeof($array);
    $i = 0;
    foreach($array as $key => $value){
        $i++; 
        $return .= quoted_printable_encode("'".ucwords(str_ireplace('_',' ',$key))."'");
        $return .= ($i<$size)?', ':' ';
    }
    return $return;
}

function SW_Fns($array){
    $return = '';
    $size = sizeof($array);
    $i = 0;
    foreach($array as $key => $value){
        $i++; 
        $return .= quoted_printable_encode("'".$key."'");
        $return .= ($i<$size)?', ':' ';
    }
    return $return;
}

function SW_Types($array){
    $return = '';
    $size = sizeof($array);
    $i = 0;
    foreach($array as $key => $value){
        $i++; 
        $return .= quoted_printable_encode("'".$value."'");
        $return .= ($i<$size)?', ':' ';
    }
    return $return;
}

function getPri($table,$conn){
    $sql = "SHOW INDEX FROM $table WHERE Key_name = 'PRIMARY'";
    $datas = fetch($conn,$sql);
    extract($datas[0]);
    return($Column_name);
    }

function SW_SQL_Select($md,$array,$pri){
    $size = sizeof($array);
    $i=0;
    $se = '';
    foreach($array as $key => $value){
        $i++;        
        $se .= quoted_printable_encode(" $key");
        $se .= ($i<$size)?', ':' ';
    }

    $we = '';
    $i=0;
    foreach($array as $key => $value){
        $i++;    
        $we .= quoted_printable_encode(" $key")." = '"
        .quoted_printable_encode('$')
        .quoted_printable_encode("$key")."'";
        $we .= ($i<$size)?' AND ':' ';
    }

    $return = 'SELECT '.$se.'';  
    $return .= 'FROM '.$md.' WHERE ';
    $return .= $we;
    $return .= 'ORDER BY '.$pri.' ASC';
    return $return;
}

function SW_SQL_Detail($md,$array,$pri){
    $size = sizeof($array);
    $i=0;
    $se = '';
    foreach($array as $key => $value){
        $i++;        
        $se .= quoted_printable_encode(" $key");
        $se .= ($i<$size)?', ':' ';
    }

    $we = '';
    $i=0;
    foreach($array as $key => $value){
        $i++;    
        $we .= quoted_printable_encode(" $key")." = '"
        .quoted_printable_encode('$')
        .quoted_printable_encode("$key")."'";
        $we .= ($i<$size)?' AND ':' ';
    }

    $return = 'SELECT * ';  
    $return .= 'FROM '.$md.' WHERE ';
    $return .= $pri." = '$".$pri."' ";
    $return .= 'ORDER BY '.$pri.' ASC';
    return $return;
}

function SW_SQL_Insert($md,$array,$pri){
    $size = sizeof($array);
    $i=0;
    $st1 = '';
    foreach($array as $key => $value){
        $i++;    
        $st1 .= quoted_printable_encode("$key");
        $st1 .= ($i<$size)?', ':' ';
    }

    $i=0;

    $st2 = '';
    foreach($array as $key => $value){
        $i++;    
        $st2 .= quoted_printable_encode("'$")
        .quoted_printable_encode("$key")."'";
        $st2 .= ($i<$size)?', ':' ';
    }

    $return = 'INSERT INTO '.$md.' ';  
    $return .= '('.$st1.')';
    $return .= ' VALUES ';
    $return .= '('.$st2.')';
    return $return;
}

function SW_SQL_Update($md,$array,$pri){
    $size = sizeof($array);
    $i=0;
    $st1 = '';
    foreach($array as $key => $value){
        $i++;    
        $st1 .= quoted_printable_encode(" $key")." = '"
        .quoted_printable_encode('$')
        .quoted_printable_encode("$key")."'";
        $st1 .= ($i<$size)?', ':' ';
    }

    $st2 = '';
    $i=0;

    foreach($array as $key => $value){
        $i++;    
        $st2 .= quoted_printable_encode(" $key")." = '"
        .quoted_printable_encode('$')
        .quoted_printable_encode("$key")."'";
        $st2 .= ($i<$size)?' AND ':' ';
    }

    $return = 'UPDATE '.$md.' SET ';  
    $return .= $st1;
    $return .= ' WHERE ';
    $return .= $pri." = '$".$pri."' ";
    $return .= 'ORDER BY '.$pri.' ASC';
    return $return;
}

function SW_SQL_Delete($md,$array,$pri){
    $size = sizeof($array);
    $st1 = '';
    $i=0;

    foreach($array as $key => $value){
        $i++;    
        $st1 .= quoted_printable_encode(" $key")." = '"
        .quoted_printable_encode('$')
        .quoted_printable_encode("$key")."'";
        $st1 .= ($i<$size)?' AND ':' ';

    }

    $return = 'DELETE '.$md.' ';  
    $return .= "WHERE ";
    $return .= $pri." = '$".$pri."' ";

    return $return;
}

function MakeAICode($config){
    $code = $config['code'];
    $source = ReplaceEmptyLine($code);
    highlight_string($source);
}

function MakeAIFile($config){
    $code = $config['code'];
    $file_src = $config['file_src']; 

        if(file_exists($file_src)){ 
            highlight_file($file_src);
        }else{
            $myfile = fopen($file_src, "w") or die("Unable to open file!");
            fwrite($myfile, $code);
            fclose($myfile);
        }

}

?>
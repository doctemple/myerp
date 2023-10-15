<?php
$config['md'] = $md?$md:$_REQUEST['module'];
$config['tab'] = 'view';
$config['fs'] = 'list';
$config['code'] = '<?php
$add = '."'".'<a class="btn btn-primary" href="?'.$md.'&add"><i class="fa fa-plus"></i> Add '.ucfirst(str_ireplace('_',' ',$md)).'</a>'."'".';
echo content(card($add,array2Table(${$comm},$filde_head,true)));
?>

<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>
      
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
      
    </div>
  </div>
</div>
';

$config['file_src'] = "modules/{$md}/{$config['tab']}/{$config['fs']}.php";

echo PreOpen("Code");  
echo MakeAICode($config);
SaveToFile("Save to file",$config['file_src'],$config['code'],$md,$config['tab'],$config['fs']);
echo PreClose(); 

echo bo($config['file_src']);
MakeAIFile($config);
echo bc();
?>
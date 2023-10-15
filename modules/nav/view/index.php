<?php
$mactive = "active animate__animated animate__fadeIn";
$active = "active text-primary animate__animated animate__flash animate__infinite animate__slow";
?>
<!-- Sidebar Menu -->
<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <?php
    $sizegroup = sizeof($nav_group);
    $mm = '';
    for ($g = 0; $g < $sizegroup; $g++) {

      $mm .= '<li class="nav-item ';
      if ($subcode != "") {
        $mm .= ($subcode === trim($nav_group[$g]['sub_code'])) ? "menu-open shadow" : '';
      }
      $mm .= ' "><a href="#" class="nav-link ';
      if ($subcode != "") {
        $mm .= ($subcode === trim($nav_group[$g]['sub_code'])) ? $mactive : '';
      }
      $mm .= ' "><i class="nav-icon fas ' . $nav_group[$g]['sub_icon'] . '"></i><p>';

      $mm .= trim($nav_group[$g]['sub_name']);
      $mm .= '<i class="right fas fa-angle-left"></i></p></a>';
      $mm .= '<ul class="nav nav-treeview">';

      for ($p = 0; $p < sizeof(_MENU); $p++) {
        if (trim(_MENU[$p]['sub_code']) === trim($nav_group[$g]['sub_code'])) {
          $mm .= '<li class="nav-item">';
          $mm .= '<a href="?' . trim(_MENU[$p]['page_code']) . '" class="nav-link ';
          $mm .= ($_ROUTE === trim(_MENU[$p]['page_code'])) ? $active : '';
          $mm .= ' ">';
          $mm .= '<i class="fas ' . trim(_MENU[$p]['icon']) . ' nav-icon"></i>';
          $mm .= '<p>' . trim(_MENU[$p]['page_name']) . '</p>';
          $mm .= '</a>';
          $mm .= '</li>';
        }

      }

      $mm .= '</ul></li>';

    }

    echo $mm;
    ?>

  </ul>

</nav>
<!-- /.sidebar-menu -->
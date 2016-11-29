
   <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              
            </div>
            <div class="pull-left info">
              

              <a href="<?=base_index();?>profil"> Data Mining - KNN</a>
            </div>
          </div>
         <!--  search form
         <form action="#" method="get" class="sidebar-form">
           <div class="input-group">
             <input type="text" name="q" class="form-control" placeholder="Search..."/>
             <span class="input-group-btn">
               <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
             </span>
           </div>
         </form>
         /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            


<?php

                  
// Select all entries from the menu table
$result=$db->fetch_custom("select sys_menu.*,sys_menu_role.read_act,sys_menu_role.insert_act,sys_menu_role.update_act,sys_menu_role.delete_act,sys_menu_role.group_id from sys_menu
left join sys_menu_role on sys_menu.id=sys_menu_role.id_menu
where sys_menu_role.group_id=? and sys_menu_role.read_act=? and tampil=? ORDER BY parent, urutan_menu",array('sys_menu_role.group_id'=>$_SESSION['level'],'sys_menu_role.read_act'=>'Y','tampil'=>'Y'));


// Create a multidimensional array to list items and parents
$menu = array(
    'items' => array(),
    'parents' => array()
);
// Builds the array lists with data from the menu table
foreach ($result as $items) {

  $items = toArray($items);

      // Creates entry into items array with current menu item id ie.
    $menu['items'][$items['id']] = $items;
    // Creates entry into parents array. Parents array contains a list of all items with children
    $menu['parents'][$items['parent']][] = $items['id'];
}


echo $db->buildMenu($path_url,0, $menu);
?>

           </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
  <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">



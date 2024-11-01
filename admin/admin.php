<?php
/*
** adding necessarey files
*/
function StylishPreloaderAdminFiles() {
    wp_enqueue_style('StylishPreloaderAdminFilesMainStyle', plugins_url('/css/style.css', __FILE__));
    wp_enqueue_style('StylishPreloaderAdminFilesFontAwesome', plugins_url('/font-awesome/css/font-awesome.min.css', __FILE__));
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script('StylishPreloaderAdminFilesCutomLogic', plugins_url('/js/logic.js',__FILE__ )); 
}
add_action('admin_enqueue_scripts', 'StylishPreloaderAdminFiles');
/*Theme customize */
add_action( 'admin_menu', 'StylishPreloaderAdminPage' );
/**
 * Adds a new settings page under Setting menu
*/
function StylishPreloaderAdminPage() {
    add_options_page( __( 'Stylish Preloader' ), __( 'Stylish Preloader' ), 'manage_options', 'StylishPreloaderAdminMainPage', 'StylishPreloaderAdminPageDisplay' );
}
/**
* Tabs Method 
*/
function StylishPreloaderAdminTabs( $current = 'first' ) {
    $tabs = array(
        'first'   => __( 'Preloaders', 'plugin-textdomain' ), 
        );
    $html = '<h2 class="stylishpreloader-tabnav-tab-wrapper">';
    foreach( $tabs as $tab => $name ){
        $class = ( $tab == $current ) ? 'nav-tab-active' : '';
        $html .= '<a class="nav-tab ' . esc_html($class) . '" href="?page=StylishPreloaderAdminMainPage&tab=' . esc_html($tab) . '">' . esc_html($name) . '</a>';
    }
    $html .= '</h2>';
    echo $html ;
}

function StylishPreloaderAdminPageDisplay(){
    ?>
     <div class="container">
    <div class="cont-p-dashboard">
        <div class="stylishPreloader_header wrap">Upgrade Pro<span>Contact me for Stylish Preloader Pro, start from just $9. 
            <a href="#" class="open">Buy Now</a>
        </span>
    </div>
    <?php
    // ================== Tabs ========================//
     $tab = ( ! empty( $_GET['tab'] ) ) ? esc_attr( $_GET['tab'] ) : 'first';
     StylishPreloaderAdminTabs( $tab );  
   // =========================== Tab 1 ========================//
    if ( $tab == 'first' ) {
        ?>
       
       <div class="row">
           <div class="loeader-heading-content">
                  <h2>FEW AWESOME AND STYLISH PRELODADERS </h2>
                   <p>“Top 9 Most Captivating PreLoaders for Your Website”</p>
         </div>
         <!------------ first preloader------------------->
            <div class="loader_1">
          <a href="#" class="loader_preview1">
            <?php 
            $baseURL = plugin_dir_url( __FILE__ ).'images/';
            ?>
              <img src="<?php echo esc_html($baseURL.'new1.png'); ?>">
          </a>
            <div class="install_preview">
              <input  type="radio" name="preloader_select" id="myloader" value="1">
              <button type="button" class="install_btn1">Install</button>
           <button type="button" class="loader_preview1">preview</button>
          </div>
          </div>
        
          <!------------ 2nd preloader------------------->
         <div class="loader_1">
        <a href="#" class="loader_preview2">
              <img src="<?php echo esc_html($baseURL.'2.png'); ?>">
          </a>
          <div class="install_preview">
            <input type="radio" name="preloader_select" value="2">
             <button type="button" class="install_btn1">Install</button>
           <button type="button" class="loader_preview2">preview</button>
          </div>
          </div>
          <!------------ 3rd preloader------------------->
          <div class="loader_1">
        <a href="loader_preview3">
              <img src="<?php echo esc_html($baseURL.'3.png'); ?>">
          </a>
            <div class="install_preview">
              <input type="radio" name="preloader_select" value="3">
               <button type="button" class="install_btn1">Install</button>
           <button type="button" class="loader_preview3">preview</button>
          </div>
          </div>
          
          <!------------ 4rth preloader------------------->
          <div class="loader_1">
          <a href="#">
              <img src="<?php echo esc_html($baseURL.'4.png'); ?>">
          </a>
          <div class="install_preview">
             <input type="radio" name="preloader_select" value="4">
               <button type="button" class="install_btn1">Install</button>
           <button type="button" class="loader_preview4">preview</button>
          </div>
          </div>
              <!------------ 5th preloader------------------->
         <div class="loader_1">
        <a href="#">
              <img src="<?php echo esc_html($baseURL.'5.png'); ?>">
          </a>
          <div class="install_preview">
             <input type="radio" name="preloader_select" value="5">
               <button type="button" class="install_btn1">Install</button>
           <button type="button" class="loader_preview5">preview</button>
          </div>
          </div>
            <!------------ 6th preloader------------------->
         <div class="loader_1">
        <a href="#">
              <img src="<?php echo esc_html($baseURL.'6.png'); ?>">
          </a>
          <div class="install_preview">
             <input type="radio" name="preloader_select" value="6">
               <button type="button" class="install_btn1">Install</button>
           <button type="button" class="loader_preview6">preview</button>
          </div>
          </div>
          <!------------ 7th preloader------------------->
            <div class="loader_1">
          <a href="#">
              <img src="<?php echo esc_html($baseURL.'7.png'); ?>">
          </a>
          <div class="install_preview">
             <input type="radio" name="preloader_select" value="7">
               <button type="button" class="install_btn1">Install</button>
           <button type="button" class="loader_preview7">preview</button>
          </div>
          </div>
        <!------------ 8th preloader------------------->
         <div class="loader_1">
        <a href="#">
              <img src="<?php echo esc_html($baseURL.'8.png'); ?>">
          </a>
          <div class="install_preview">
             <input type="radio" name="preloader_select" value="8">
               <button type="button" class="install_btn1">Install</button>
           <button type="button" class="loader_preview8">preview</button>
          </div>
          </div>
            <!------------ 9th preloader------------------->
         <div class="loader_1">
        <a href="#">
              <img src="<?php echo esc_html($baseURL.'9.png'); ?>">
          </a>
          <div class="install_preview">
              <input type="radio" name="preloader_select" value="9">
               <button type="button" class="install_btn1">Install</button>
           <button type="button" class="loader_preview9">preview</button>
          </div>
          </div>
       </div>
       </div>
       <div class="pop_loader">
           <div class='loader1'>
           </div>
         </div>
         <div class="pop_loader2">
           <div class='loader2'>
           </div>
         </div>
          <div class="pop_loader3">
           <div class='loader3'>
         </div>
       </div>
          <div class="pop_loader4">
           <div class='loader4'>
         </div>
         </div>
       <div class="pop_loader5">
           <div class='loader5'>
           </div>
         </div>
          <div class="pop_loader6">
           <div class='loader6'>
           </div>
         </div>
         <div class="pop_loader7">
           <div class='loader7'>
          </div>
         </div>
         <div class="pop_loader8">
           <div class='loader8'>
         </div>
         </div>
         <div class="pop_loader9">
           <div class='loader9'>
           </div>
         </div>

         <!--Creates the popup body-->
<div class="popup-overlay">
  <!--Creates the popup content-->
  <div class="popup-content">
    <h2>Stylish Preloader Pro Comming Soon...!</h2>
    
    <!--popup's close button-->
    <button class="close">Close</button> </div>
</div>
  <?php
    }   
   }
add_action('wp_ajax_loaderUpdateSetting', 'StylishPreloaderSelectDesignSend');
function StylishPreloaderSelectDesignSend(){
    ?>
    <?php
    // use global variable for database opertation
        global $wpdb;
    // assign value that pass from form 
         $user_option = sanitize_text_field($_POST['value']);
         $user_option = trim($user_option);
          // call insert method of wpdb class
          $table_name = $wpdb->prefix . 'preloader_table';
 $wpdb->query("UPDATE $table_name SET value='$user_option' WHERE id='1'");
exit();
    }   
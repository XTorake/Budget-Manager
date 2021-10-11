<?php

// Class that handles the view rendering and page logic.
class ViewHandler{


  private $pageDefault;
  private $adminDefault;



  function __construct(){
    $this->pageDefault = PAGES_DEFAULT;
    $this->adminDefault = ADMIN_DEFAULT;
  }



  //return the view validation
  public function __getView(){

    //validate the view conditions
    $this->__validateView();

    // Check if session is not started
    if (!isset($_SESSION[SESSION_VAR])) {
      $this->__showLogin();
      return;
    }


    //show admin panel only if the variable is set and the panel is being accessed
    if ( isset($_SESSION[SESSION_VAR][SESSION_ADMIN]) && $_SESSION[SESSION_VAR][IS_ADMIN] ) {
      $this->__showAdmin();
      return;
    }

    //By default show the client page.
    $this->__showPage();

  }





  // ***************************************************************************
  // START VIEW VALIDATION
  // ***************************************************************************

  private function __validateView(){
    // Validate the admin access and client accesse
    if ( isset($_GET[EXIT_ADMIN]) ) {
      unset($_SESSION[SESSION_VAR][SESSION_ADMIN]);
      header('Location: ./');
    }

    if ( isset($_GET[ADMIN_VIEW]) && $_SESSION[SESSION_VAR][IS_ADMIN] ) {
      $_SESSION[SESSION_VAR][SESSION_ADMIN] = true;
      header('Location: ./');
    }

    if ( isset($_GET[ADMIN_VIEW]) && !$_SESSION[SESSION_VAR][IS_ADMIN] ) {
      header('Location: ./?'.NO_ACCESS);
    }
  }

  // ***************************************************************************
  // END VIEW VALIDATION
  // ***************************************************************************





  // ***************************************************************************
  // START LOGIN FUNCTIONS
  // ***************************************************************************
  private function __showLogin(){
    include(LOGIN);
  }
  // ***************************************************************************
  // END LOGIN FUNCTIONS
  // ***************************************************************************





  // ***************************************************************************
  // START ADMIN FUNCTIONS
  // ***************************************************************************

  private function __showAdmin(){
    include(ADMIN_INIT);
  }


  public function __getAdminContent(){
    $page = (isset($_GET[ADMIN_VAR])) ? $_GET[ADMIN_VAR] : ADMIN_DEFAULT;
    $path = ADMIN.$page.'/'.$page;
    if (!file_exists($path.'.php')) {
      include(NOT_FOUND);
      return;
    }
    include($path.'.php');
  }



  public function __getAdminScript(){
    $page = (isset($_GET[ADMIN_VAR])) ? $_GET[ADMIN_VAR] : ADMIN_DEFAULT;
    $path = ADMIN.$page.'/'.$page;
    if (!file_exists($path.'.js')) {
      include(NOT_FOUND);
      return;
    }
    echo "<script>";
    include($path.'.js');
    echo "</script>";
  }

  // ***************************************************************************
  // END ADMIN FUNCTIONS
  // ***************************************************************************






  // ***************************************************************************
  // START PAGES FUNCTIONS
  // ***************************************************************************

  private function __showPage(){
    include(PAGES_INIT);
  }


  public function __getPageContent(){
    $page = (isset($_GET[PAGES_VAR])) ? $_GET[PAGES_VAR] : PAGES_DEFAULT;
    $path = PAGES.$page.'/'.$page;
    if (!file_exists($path.'.php')) {
      include(NOT_FOUND);
      return;
    }
    include($path.'.php');
  }


  public function __getPageScript(){
    $page = (isset($_GET[PAGES_VAR])) ? $_GET[PAGES_VAR] : PAGES_DEFAULT;
    $path = PAGES.$page.'/'.$page;
    if (!file_exists($path.'.js')) {
      include(NOT_FOUND);
      return;
    }
    echo "<script>";
    include($path.'.js');
    echo "</script>";
  }

  // ***************************************************************************
  // END PAGES FUNCTIONS
  // ***************************************************************************





  // ***************************************************************************
  // START COMPONENT FUNCTION
  // ***************************************************************************
  public function __component($component){
    $component = COMPONENTS.$component.'.php';
    if (file_exists($component)) {
      include($component);
    }
  }
  // ***************************************************************************
  // END COMPONENT FUNCTION
  // ***************************************************************************



}


?>

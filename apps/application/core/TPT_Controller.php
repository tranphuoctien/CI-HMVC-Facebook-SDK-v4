<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* load the MX_Controller class */
require APPPATH."third_party/MX/Controller.php";

###########################################
# Controller General
# Author: TPT  
###########################################

class TPT_Controller extends MX_Controller
{
    public function __construct() {
        parent::__construct();
    }
}

###########################################
# Controller Public for User
# Author: TPT  
###########################################

class PubliController extends MX_Controller
{
    public function __construct() {
        parent::__construct();
    }
}


###########################################
# Controller Private for Admin
# Author: TPT 
###########################################
class PrivateController extends MX_Controller
{
    public function __construct() {
        parent::__construct();
    }
}
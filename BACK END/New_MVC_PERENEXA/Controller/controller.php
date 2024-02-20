<?php
require_once("Model/model.php");
class controller extends Model
{

    public function __construct()
    {
        parent::__construct();
        if (isset($_SERVER['PATH_INFO'])) {
            switch ($_SERVER['PATH_INFO']) {
                case '/home':
                    require_once("View/header.php");
                    require_once("view/home/hero_section.php");
                    require_once("view/home/explor.php");
                    require_once("view/home/chooseus.php");
                    require_once("view/home/popular.php");
                    require_once("view/home/testimonial.php");
                    require_once("View/footer.php");
                    break;
                case '/registration':
                    if (isset($_REQUEST['Submit'])) {
                        $Reg_Data = $_REQUEST;
                        $this->register($Reg_Data);
                    }
                    require_once("View/header.php");
                    require_once("View/contact/registration.php");
                    require_once("View/footer.php");
                    break;
                case '/login':
                    if (isset($_REQUEST['login'])) {
                        $Log_Data = $_REQUEST;
                        $this->login($Log_Data);
                    }
                    require_once("View/header.php");
                    require_once("View/contact/login.php");
                    require_once("View/footer.php");
                    break;



                case '/shop':
                    require_once("View/header.php");
                    require_once("View/shop.php");
                    require_once("View/footer.php");
                    break;
                case '/about':
                    require_once("View/header.php");
                    require_once("View/about_us/about.php");
                    require_once("view/home/chooseus.php");
                    require_once("View/about_us/team.php");
                    require_once("view/home/testimonial.php");
                    require_once("View/footer.php");
                    break;

                case '/services':
                    require_once("View/header.php");
                    require_once("View/services.php");
                    require_once("view/home/testimonial.php");
                    require_once("View/footer.php");
                    break;
                case '/contact':
                    require_once("View/header.php");
                    require_once("View/contact/contact.php");
                    require_once("view/contact/contact_form.php");
                    require_once("View/footer.php");
                    break;

                case '/cart':
                    require_once("View/header.php");
                    require_once("View/single.php");
                    require_once("View/footer.php");
                    break;
                case '/Admin':
                    require_once("View/Admin_Dashboard/header.php");
                    require_once("View/Admin_Dashboard/main.php");
                    require_once("View/Admin_Dashboard/last.php");
                    break;
                    
                    case '/Product_Upload':
                        require_once("View/Admin_Dashboard/header.php");
                        require_once("View/Admin_Dashboard/Product_Upload.php");
                        require_once("View/Admin_Dashboard/last.php");
                    break;
            }

        } else {
            header("location:home");
        }
    }
}
$object = new controller;
?>
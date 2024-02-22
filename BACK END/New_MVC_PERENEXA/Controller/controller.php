<?php

session_start();





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
                case '/Registration':
                    if (isset($_REQUEST['Submit'])) {
                        $data = $_REQUEST;
                        $table_name = "user_data";
                        // $this->insert_into($data, $table_name);
                        setcookie("Username", $_REQUEST['User_Name'], time()+3600);
                        // echo"<pre>";
                        // print_r($_COOKIE);
                        // print_r($_REQUEST);
                        // exit;
                        header("location:home");
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

                    $response = $this->select("products");
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
                    //     print_r($_REQUEST);
                    $data = $this->selectwhere("products", $_REQUEST);
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
                    if (isset($_REQUEST['upload'])) {
                        if (isset($_FILES)) {
                            if ($_FILES['Product_Image']['error'] == 0) {
                                // echo"hello";
                                $image = time() . $_FILES['Product_Image']['name'];
                                move_uploaded_file($_FILES['Product_Image']['tmp_name'], "Uploaded_Product/$image");
                                $data2["Product_Image"] = $image;
                            }
                        }
                        // echo "<pre>";
                        $data1[] = $_REQUEST;
                        // print_r(array_merge($data2,$data1[0]));
                        $data = array_merge($data2, $data1[0]);
                        // exit;
                        // foreach($data as $value)
                        // {
                        //     $Data = $value;
                        // }
                        // print_r($Data);
                        // echo"$Data";
                        $table_name = "products";
                        $this->insert_into($data, $table_name);

                    }
                    require_once("View/Admin_Dashboard/header.php");
                    require_once("View/Admin_Dashboard/Product_Upload.php");
                    require_once("View/Admin_Dashboard/last.php");
                    break;

                case '/Customers':
                    $tname = "user_data";
                    $response = $this->select($tname);
                    require_once("View/Admin_Dashboard/header.php");
                    require_once("View/Admin_Dashboard/customers.php");
                    require_once("View/Admin_Dashboard/last.php");
                    break;
                case '/Products':
                    $response = $this->select("products");
                    require_once("View/Admin_Dashboard/header.php");
                    require_once("View/Admin_Dashboard/product_table.php");
                    require_once("View/Admin_Dashboard/last.php");
                    break;


                case '/checkout':
                    if(isset($_REQUEST['Product_ID']))
                    {
                       print_r($_REQUEST);
                    }
                    require_once("View/header.php");
                    require_once("View/checkout.php");
                    require_once("View/footer.php");

            }

        } else {
            header("location:home");
        }
    }
}
$object = new controller;
?>
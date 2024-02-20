<?php 

class Model {
    public $connection;
    public function __construct()
    {
        try {
            $this->connection = new mysqli("localhost", "root", "", "Furni");
            // echo "success";
        } catch (\Throwable $th) {
            echo "Something went wrong";
        }

    }
// -----------------------------------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------------------------------
function register($Reg_Data)
{
//    echo "<pre>" ;
   
   if($Reg_Data)
   {
       //echo "inside if";
       array_pop($Reg_Data);
        //   print_r($Reg_Data);

        $ValueData = implode("','",array_values($Reg_Data));
        $KeyData = implode(",",array_keys($Reg_Data));
        // print_r($ValueData);
        // echo "<br>";
        // print_r($KeyData);
        
        
        echo "<br>";
        $sql = "INSERT INTO user_data ($KeyData) VALUES ('$ValueData')  ";
        // print_r($sql);

        $this->connection->query($sql);
        
    }


//------------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------
//    echo "</pre>"; 
}
function login($Log_Data)
{
    // echo"Inside model login";
    if($Log_Data)
    {

        $sql = "SELECT * FROM user_data where (User_Email ='$Log_Data[User_Email]' AND  User_Password = '$Log_Data[User_Password]')";
        // echo "$sql";
        $sqlex = $this->connection->query($sql);
        // header("location:home");
        if ($sqlex->num_rows > 0) {
            echo "Success";

            $fecthdata = $sqlex->fetch_object();
            // print_r($fecthdata);
            if ($fecthdata->Role == 1) {
                header("location:admin_dashboard");
            } else {
                header("location:home");
            }
        } else {
            echo "<script>alert('username or password is incorrect') </script>";
        }
    }
}

//-----------------------------------------------------------------------------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------------------------------------------------------------------------














//-----------------------------------------------------------------------------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------------------------------------------------------------------------
} //Model class end bracket


?>
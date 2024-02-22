<!-- <pre> -->
    
    <?php

class Model
{
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
    function insert_into($Reg_Data, $table_name)
    {
        //    echo "<pre>" ;

        if ($Reg_Data) {
            //echo "inside if";
            array_pop($Reg_Data);
            //   print_r($Reg_Data);

            $ValueData = implode("','", array_values($Reg_Data));
            $KeyData = implode(",", array_keys($Reg_Data));
            // print_r($ValueData);
            // echo "<br>";
            // print_r($KeyData);


            echo "<br>";
            $sql = "INSERT INTO $table_name ($KeyData) VALUES ('$ValueData')  ";
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
        if ($Log_Data) {

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

    public function select($table)
    {
        $sql = "SELECT * FROM $table";
        // echo"$sql";

        $sqlrx = $this->connection->query($sql);
        // print_r($sqlrx);
        if ($sqlrx->num_rows > 0) {
            while ($fetch = $sqlrx->fetch_object()) {
                $fetchdata[] = $fetch;
            }
            $response["code"] = "1";
            $response["status"] = "success";
            $response["data"] = $fetchdata;
        } else {
            $response["code"] = "0";
            $response["status"] = "Fail";
            $response["data"] = 0;

        }
        // echo"<pre>";
        // print_r($response['data']);
        // print_r($fetchdata);
        // print_r($fetch);
        return $response;

    }
    //-----------------------------------------------------------------------------------------------------------------------------------------------------
    //-----------------------------------------------------------------------------------------------------------------------------------------------------
     public function selectwhere($table , $where = "")
     {
        $sql = "Select * from $table";

        if ($where != "") {
            $sql .= " WHERE";
            foreach ($where as $key => $value) {
                $sql .= " $key = $value AND";

            }
            $sql = rtrim($sql, "AND");
        }
        // echo $sql;
        // exit;

        $sqlex = $this->connection->query($sql);

        if ($sqlex->num_rows > 0) {
            while ($fetchdata = $sqlex->fetch_object()) {
                $data[] = $fetchdata;
            }

            return $response["data"] = $data;
        } else {
            echo "no data found";
        }
     }











//-----------------------------------------------------------------------------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------------------------------------------------------------------------
} //Model class end bracket


?>
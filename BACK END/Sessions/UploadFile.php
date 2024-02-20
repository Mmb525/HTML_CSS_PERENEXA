<?php 


echo"<pre>";
// print_r($_REQUEST);
// print_r($_FILES);
echo"</pre>";


if(isset($_REQUEST['upload']))
{
   $FileName = $_FILES['image'];

   if($FileName['error']== UPLOAD_ERR_OK)
   {

    $store= "UploadedImages/";

    $targetfile = $store.uniqid()."_".$FileName["name"];
    if(move_uploaded_file($FileName["tmp_name"],$targetfile)){
        echo "File Upload Seccusfully";
   }
   else{
    echo"File has error in it";
   }
   }
   else{
    echo"something went wrong ";
   }
}
// else{
//     echo "Outside main IF";
// }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />

  </head>
  <body>
    <div class="container">
      <div class="center">
          <h1>Upload File Here</h1>
          <form method="POST" enctype="multipart/form-data">
              <div class="txt_field">
                  <input type="text" name="ImageName" required>
                  <span></span>
                  <label> Product Name</label>
              </div>
              <div class="txt_field">
                  <input type="file" name="image" required>
                  <span>File/Images</span>
                  <!-- <label>File/Images</label> -->
              </div>
              <button type="Submit" name="upload" class="signup_link">Upload</button>
             
          </form>
      </div>
  </div>
  </body>
</html>

<style>
    body{
  margin: 0;
  padding: 0;
  font-family: Roboto;
  /* background-repeat: no-repeat;
  background-size: cover;
  background: linear-gradient(120deg, #007bff, #d0314c); */
  height: 100vh;
  overflow: hidden;
  background-color: white;
}

.center{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 29vw;
  background: white;
  border-radius: 10px;
}

.center h1{
  text-align: center;
  padding: 0 0 20px 0;
  border-bottom: 1px solid silver;
}

.center form{
  padding: 0 40px;
  box-sizing: border-box;
}

form .txt_field{
  position: relative;
  border-bottom: 2px solid #adadad;
  margin: 30px 0;
}

.txt_field input{
  width: 100%;
  padding: 0 5px;
  height: 40px;
  font-size: 16px;
  border: none;
  background: none;
  outline: none;
}

.txt_field label{
  position: absolute;
  top: 50%;
  left: 5px;
  color: #adadad;
  transform: translateY(-50%);
  font-size: 16px;
  pointer-events: none;
}

.txt_field span::before{
  content: '';
  position: absolute;
  top: 40px;
  left: 0;
  width: 0px;
  height: 2px;
  background: #2691d9;
  transition: .5s;
}

.txt_field input:focus ~ label,
.txt_field input:valid ~ label{
  top: -5px;
  color: #2691d9;
}

.txt_field input:focus ~ span::before,
.txt_field input:Valid ~ span::before{
  width: 100%;
}

.pass{
  margin: -5px 0 20px 5px;
  color: #a6a6a6;
  cursor: pointer;
}

.pass:hover{
  text-decoration: underline;
}

button{
  width: 100%;
  height: 50px;
  border: 1px solid;
  border-radius: 25px;
  font-size: 18px;
  font-weight: 700;
  cursor: pointer;

}
button:hover{
  background: #2691d9;
  color: #e9f4fb;
  transition: .5s;
}

.signup_link{
  margin: 30px 0;
  text-align: center;
  font-size: 16px;
  color: #666666;
}

.signup_link a{
  color: #2691d9;
  text-decoration: none;
}

.signup_link a:hover{
  text-decoration: underline;
}

.HomeAbout{
  width: 100vw;
  height: 25vh;
}
</style>
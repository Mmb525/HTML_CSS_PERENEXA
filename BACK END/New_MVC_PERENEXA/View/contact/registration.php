<?php

if (isset($_REQUEST['Submit'])) {
    setcookie("Username", $_REQUEST['User_Name'], time() + 3600);

}



?>


<div class="untree_co-section">
    <div class="container">
        <div class="block">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-8 pb-4">
                    <div class="col-lg-4">
                        <h2>Registration Form</h2>
                    </div>
                    <form method="post">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="text-black" for="fname">User Name</label>
                                    <input type="text" class="form-control" id="fname" name="User_Name">
                                </div>
                            </div>

                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="text-black" for="email">Phone Number</label>
                                <input type="number" class="form-control" id="fname" name="User_Phone">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="text-black" for="email">Email address</label>
                                <input type="email" class="form-control" id="fname" name="User_Email">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mb-5">
                                <label class="text-black" for="message">Password</label>
                                <input type="password" class="form-control" id="fname" name="User_Password">
                            </div>
                        </div>
                        <button type="submit" name="Submit" class="  btn btn-primary-hover-outline ">Register</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<main>
    <h1>Customers</h3>

        <div class="recent-orders">
            <h2>All Customers are here:-</h2>
            <table>
                <thead>
                    <tr>
                        <th> ID</th>
                        <th> Name</th>
                        <th> Numbers</th>
                        <th> Email</th>


                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($response['data'] as $value) {
                           ?> 
                           
                           
                           <tr>
                               <td><?php echo $value->User_ID?></td>
                               <td><?php echo $value->User_Name?></td>
                               <td><?php echo $value->User_Phone?></td>
                               <td><?php echo $value->User_Email?></td>
       
                           </tr>
                           
                           <?php
                        }
                    ?>
                </tbody>
            </table>
            <a href="#">Show All</a>
        </div>

</main>
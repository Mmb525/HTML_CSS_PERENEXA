<main>
    <h1>Customers</h3>

        <div class="recent-orders">
            <h2>All Products are here:-</h2>
            <table>
                <thead>
                    <tr>
                        <th> Product ID</th>
                        <th> Product Name</th>
                        <th> Product Image name </th>
                        <th> PRoduct Price</th>
                        <th> PRoduct Description</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($response['data'] as $value) {
                           ?> 
                           
                           
                           <tr>
                               <td><?php echo $value->Product_ID;?></td>
                               <td><?php echo $value->Product_Name;?></td>
                               <td><?php echo $value->Product_Price;?></td>
                               <td><?php echo $value->Product_Image;?></td>
                               <td><?php echo $value->Product_Details;?></td>
       
                           </tr>
                           
                           <?php
                        }
                    ?>
                </tbody>
            </table>
            <a href="#">Show All</a>
        </div>

</main>
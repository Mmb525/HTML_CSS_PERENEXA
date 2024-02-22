<div class="untree_co-section product-section before-footer-section">

    <?php

    foreach ($data as $value) {
        ?>

        <div class="containerf">
            <div class="image-containert">
                <img src="Uploaded_Product/<?php echo $value->Product_Image; ?>" class="img-fluid product-thumbnail">
            </div>
            <div class="content">
                <h3>

                    <?php echo $value->Product_Name; ?>
                </h3>
                <?php echo $value->Product_Details; ?>
                <br>
                <br>
                <span>$40</span>
                <br>
                <br>
                <form action="checkout" method="post">
                    <button class="btn btn-primery me-2" name="Product_ID" value="<?php echo $value->Product_ID;?>">
                        Buy Now
                    </button>
                </form>
                <form action="" method="post">
                    <button class="btn btn-primery me-2" name="addcart" type="submit">
                        add to cart
                    </button>
                </form>
            </div>
        </div>
        <?php
    }


    ?>
</div>


<style>
    .containerf {
        display: flex;

    }

    .image-containert {
        width: 50%;
        margin-left: 50px;
    }

    .content {
        width: 50%;
        font-size: 24px;
        font-family: 10px;

    }

    span {
        font-size: 20px;
        font-weight: bolder;
        color: darkslategray;
    }
</style>
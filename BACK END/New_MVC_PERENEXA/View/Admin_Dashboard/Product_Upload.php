<main>
    <div class="recent-orders ">
        <div class="Form-Data">
            <h2>Product Upload</h2>

            <form action="" method="post" enctype="multipart/form-data">
                <div class="input-field">
                    <label for="Product_Name">Product Name</label>
                    <input type="text" name="Product_Name">
                </div>
                <div class="input-field">
                    <label for="Product_Price">Product_Price</label>
                    <input type="text" name="Product_Price">
                </div>
                <div class="input-field">
                    <label for="Product_Details">Product Details</label>
                    <input type="text" name="Product_Details">
                </div>
                <div class="input-field">
                 
                    <label for="Product_Upload">Product Upload</label>
                    <input type="file" name="Product_Upload">
                </div>
               
                    <button type="submit" name="upload" class="button">Upload</button>
               
            </form>
        </div>
    </div>
</main>






<style>
    .Form-Data {

        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background: rgba(98, 107, 185, 0.20);
        height: 80vh;
        border-radius: 25px;
    }

    .input-field {
        display: flex;
        flex-direction: column;
    }

    .input-field>input {
        width: 25rem;
        background-color: white;
        height: 2rem;
        border-radius: 20px;
        padding-left: 2rem;
    }

    .input-field>label {
        font-size: 15px;
    }
    .button{
        background: #111e88;
        width: 6rem;
        height: 2rem;
        border-radius: 20px;
        justify-content: center;
}
</style>
<?php require 'includes/header.php' ?>
    <!-- this is the view, try to put only simple if's and loops here.
    Anything complex should be calculated in the model -->
    <section class="container">
        <form method="post">
            <div class="input-group mb-3">
                <label for="product">Choose a product :</label>
                <select name='product' id='product'>
                    <?php foreach ($allProducts as $product) {
                        $productId = number_format($product->getPrice() / 100, 2);
                        echo "<option value='
                {$product->getId()}'> 
                {$product->getName()} &euro;{$productId} </option>";
                    }
                    ?>
                </select>

                <label for="customer">Choose a customer :</label>
                <select name='customer' id='customer'>
                    <?php foreach ($allCustomers as $customer) {
                        echo "<option value='{$customer->getId()}' > {$customer->getId()} {$customer->getFirstName()} {$customer->getLastName()}</option>";
                    }
                    ?>
                </select>
                <div class="input-group-append">
                    <button class="btn" type="submit">Calculate</button>
                </div>
            </div>
        </form>
        <br>
        <div class="container">
            <div class="row justify-content-center">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Discount</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row"><?php echo $firstname?></th>
                        <th scope="row"><?php echo $lastname?></th>
                        <th scope="row"><?php echo $productid?></th>
                        <th scope="row"><?php echo $price?></th>
                    </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </section>
    <?php
        //print_r($customerGroups);
    ?>
<?php require 'includes/footer.php' ?>


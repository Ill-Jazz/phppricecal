<?php require 'includes/header.php'?>
<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->
    <label for="product">Choose a product :</label>
    <select name='product' id='product'>
        <?php foreach ($allProducts as $product) {
            $productId = number_format($product->getPrice() / 100, 2);
            echo "<option value='
                {$product->getName()}'> 
                {$product->getName()} &euro;{$productId} </option>";
        }
        ?>
    </select>

    <label for="customer">Choose a customer :</label>
    <select name='customer' id='customer'>
        <?php foreach ($allCustomers as $customer) {
            echo "<option value='{$customer->getFirstName()}' > {$customer->getFirstName()} {$customer->getLastName()}</option>";
        }
        ?>
    </select>

<?php require 'includes/footer.php'?>
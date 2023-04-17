<div class="row p-5">
    <div class="col-2"></div>
    <div class="col-8">

        <h3>This is today's Menu</h3>
        <a class="btn btn-success" href="<?= base_url('Products/') ?>" role="button">Add Products</a>

        <table class=" table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Product Description</th>
                    <th>Product Price</th>
                    <th>Date Created</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product) : ?>
                    <tr>
                        <td><?php echo $product->prod_id; ?></td>
                        <td><?php echo $product->prod_name; ?></td>
                        <td><?php echo $product->prod_description; ?></td>
                        <td><?php echo $product->prod_price; ?></td>
                        <td><?php echo $product->prod_date_created; ?></td>
                        <td>
                            <a href="" class="btn btn-primary">View Product</a>
                            <a href="" class="btn btn-secondary">Edit Product</a>
                            <a href="" class="btn btn-danger">Delete Product</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <a class="btn btn-primary" href="<?= base_url('Home/') ?>" role="button">Back</a>
    </div>
</div>
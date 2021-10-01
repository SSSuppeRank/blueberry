<!-- Add new product modal -->
<div class="modal fade" id="addProduct" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add new shopper</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="../blueberry/script/addProduct.php" method="POST">
                    <div class="mb-3">
                        <label for="print" class="form-label">URL adress of print</label>
                        <input type="link" class="form-control" name="print">
                    </div>
                    <div class="mb-3">
                        <label for="printName" class="form-label">Name of print</label>
                        <input type="link" class="form-control" name="printName">
                    </div>
                    <div class="mb-3">
                        <label for="size" class="form-label">Size of shopper</label>
                        <input type="text" class="form-control" name="size">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price of shopper</label>
                        <input type="number" class="form-control" name="price">
                    </div>
                    <div class="modal-footer">
                        <button type="number" class="btn btn-outline-dark">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
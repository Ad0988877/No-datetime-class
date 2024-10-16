<!-- form.php -->
<form method="post" action="index.php" class="mt-4">
    <div class="form-group">
        <label for="invoiceDate">Invoice Date (YYYY-MM-DD):</label>
        <input type="text" name="invoiceDate" id="invoiceDate" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="expirationDate">Expiration Date (YYYY-MM-DD):</label>
        <input type="text" name="expirationDate" id="expirationDate" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php require __DIR__.'/../surround/header.php'; ?>
<div class='block'>
    <div  class='tables'>
    <label for="invoiceList" class='Hhome'>List of invoices :</label>
        <table id='invoiceList'>
        <thead>
            <tr>
                <th>Invoice number</th>
                <th>Dates</th>
                <th>Companies</th>
                <th>Type</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($invoices as $invoice) {
            ?>
            <tr>
                <td><a href="/invoice_details/id/<?php echo $invoice['invoice_id']?>"><?php echo $invoice["number"] ?></a></td>
                <td><?php echo $invoice["date"] ?></td>
                <td><?php echo $invoice["name"] ?></td>
                <td><?php echo $invoice["type"] ?></td>
            </tr>
            <?php
                }
                ?>
        </tbody>
        </table>
    </div>
</div>
<?php require __DIR__.'./../surround/footer.php' ?>

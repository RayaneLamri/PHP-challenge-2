<?php require 'header.php' ?>

<form action="" method='POST'>

<label for="companyName">Company name</label>
<input type="text" name="companyName" id="companyName">
<label for="tva">Invoice date</label>
<input type="text" name="tva" id="tva">
<label for="phone">Phone</label>
<input type="tel" name="phone" id="phone">
<label for="company">Company</label>
<select name="company" id="company">
    <option value="">-- Please choose a company --</option>
    <!-- Inject company name options -->
</select>
<input type="submit" value="Submit">
</form>

<?php require 'footer.php' ?>
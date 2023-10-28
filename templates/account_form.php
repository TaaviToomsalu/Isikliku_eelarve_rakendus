<!DOCTYPE html>
<html>
<head>
    <title>Add/Edit Account</title>
</head>
<body>
    <h1>Add/Edit Account</h1>

    <form action="process_account.php" method="post">
        <input type="hidden" name="account_id" value="<?= $account_id ?>">
        <label for="account_name">Account Name:</label>
        <input type="text" name="account_name" id="account_name" value="<?= $account_name ?>" required>
        <br>

        <label for="description">Description:</label>
        <input type="text" name="description" id="description" value="<?= $description ?>" required>
        <br>

        <label for="initial_balance">Initial Balance:</label>
        <input type="number" name="initial_balance" id="initial_balance" value="<?= $initial_balance ?>" required>
        <br>

        <label for="account_type">Account Type:</label>
        <select name="account_type" id="account_type">
            <option value="cash" <?= ($account_type === 'cash') ? 'selected' : '' ?>>Cash</option>
            <option value="bank_account" <?= ($account_type === 'bank_account') ? 'selected' : '' ?>>Bank Account</option>
            <option value="credit_card" <?= ($account_type === 'credit_card') ? 'selected' : '' ?>>Credit Card</option>
            <option value="savings" <?= ($account_type === 'savings') ? 'selected' : '' ?>>Savings</option>
        </select>
        <br>

        <button type="submit">Save</button>
    </form>
</body>
</html>

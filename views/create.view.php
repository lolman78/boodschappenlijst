<?php require("partials/header.php") ?>
<body>
    <?php require("partials/nav.php") ?>
    <p>
        <form action="/create" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value=<?= isset($_POST['name']) ? $_POST['name'] : '' ?>><br>
            <?php if (isset($errors['name'])) : ?>
                <p class="text-red-500 text-xs mt-2"><?= $errors['name'] ?></p>
            <?php endif; ?>    

            <label for="amount">Amount:</label>
            <input type="text" id="amount" name="amount" value=<?= isset($_POST['amount']) ? $_POST['amount'] : '' ?>><br>
            <?php if (isset($errors['amount'])) : ?>
                <p class="text-red-500 text-xs mt-2"><?= $errors['amount'] ?></p>
            <?php endif; ?>  

            <label for="price">Price: </label>
            <input type="text" id="price" name="price" value=<?= isset($_POST['price']) ? $_POST['price'] : '' ?>><br>
            <?php if (isset($errors['price'])) : ?>
                <p class="text-red-500 text-xs mt-2"><?= $errors['price'] ?></p>
            <?php endif; ?>  

            <br>
            <input type="submit" name="submit" value="Submit"> 
        </form>
    </p>
</body>
<?php require("partials/footer.php") ?>
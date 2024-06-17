<?php require("partials/header.php") ?>
<body>
  <?php require("partials/nav.php") ?>
  <p>
    <table id="table">
      <tr>
        <th class="text">Product</th>
        <th class="text">Prijs</th>
        <th class="text">Aantal</th>
        <th class="text">Subtotaal</th>
      </tr>
      <?php
        foreach($posts as $post){
      ?>
        <tr>
          <td class="text"><?= htmlspecialchars($post["name"]) ?></td>
          <td class="text"><?= htmlspecialchars($post["price"]) ?></td>
          <td class="text"><?= htmlspecialchars($post["number"]) ?></td>
          <td class="text"><?= htmlspecialchars($post["price"] * $post["number"]) ?></th>
        </tr> 
      <?php
        }
      ?>
    </table>
  <p>
</body>
<?php require("partials/footer.php") ?>
<?php
include 'login.php';
include 'model/food_order.php';
?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Login Page </title>
  <link rel="stylesheet" href="css\styles.css">
  <link rel="stylesheet" href="css\mdb.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="js/main.js"></script>
</head>

<body>
  <div class="table-container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Order</th>
          <th scope="col">Date</th>
          <th scope="col">Amount</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      <tbody>
        <?php

        $narudzbine = Food_order::usersOrders($conn, $_SESSION['ulogovaniKorisnik']->username);
        while ($red = $narudzbine->fetch_array()): ?>
          <tr>
            <th scope="row">
              <?php echo $red['id']; ?>
            </th>
            <td>
              <?php echo $red['order_name']; ?>
            </td>
            <td>
              <?php echo $red['order_date']; ?>
            </td>
            <td>
              <?php echo $red['amount']; ?>
            </td>
            <td>
              <button type="button" class='deleteBtn' data-value=<?php echo $red['id']; ?>>Delete</button>
            </td>
          </tr>
        <?php endwhile; ?>
    </table>
  </div>
  <br>
  <div class="container" id="newOrder">
    <form id="new-order">
      <div>
        <input type="hidden" class="form-control" id="idkorisnika" name="idkorisnika" value=<?php echo $_SESSION['ulogovaniKorisnik']->username ?> readonly>
      </div>
      <div class="form-outline mb-4">
        <select class="form-control" id="selector" name="selector" aria-label="Default select example">
          <option selected> </option>
          <option value="Palacinka">Palacinka</option>
          <option value="Burger">Burger</option>
          <option value="Pizza">Pizza</option>
        </select>
        <label class="form-label" for="selector">Order</label>
      </div>
      <div class="form-outline mb-4">
        <input type="number" id="amount" name="amount" class="form-control" />
        <label class="form-label" for="amount">Amount</label>
      </div>
      <div id="orderBtn">
        <button type="button" class="loginBtn" id="add-button">Add order</button>
      </div>
    </form>
  </div>
</body>

</html>
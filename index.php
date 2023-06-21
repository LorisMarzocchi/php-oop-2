<?php
include __DIR__ . "/data.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PHP-OOP-2</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous" defer></script>
</head>

<body>
  <div class="container p-3 d-flex flex-wrap justify-content-between">
    <?php foreach ($products as $product) : ?>
      <div class="card m-2" style="width: 26%">

        <img style="height: 360px;" src="<?php echo $product->getImage(); ?>" class="card-img-top p-2" alt="<?php echo $product->getName(); ?>" />
        <div class="card-body">
          <h5 class="card-title"><?php echo $product->getName(); ?></h5>

        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Price: <?php echo $product->getPrice(); ?></li>
          <li class="list-group-item">Category: <?php echo $product->getCategory(); ?></li>
          <li class="list-group-item">For:
            <?php echo $product->getAnimalTypeIcon(); ?>
          </li>

          <?php if ($product instanceof Toy) : ?>
            <li class="list-group-item">Material: <?php echo $product->getMaterial(); ?></li>
            <li class="list-group-item">Recommended Age: <?php echo $product->getAge(); ?></li>
          <?php elseif ($product instanceof Food) : ?>
            <li class="list-group-item">Expiration Date: <?php echo $product->getExpirationDate(); ?></li>
            <li class="list-group-item">Weight: <?php echo $product->getWeight(); ?></li>
          <?php endif; ?>
        </ul>
      </div>
    <?php endforeach; ?>
  </div>
</body>

</html>
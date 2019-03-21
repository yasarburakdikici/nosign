<?php  require_once 'products.php';?>
<!doctype html>
<html lang="en">

  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    

    <title>Without Membership in Shopping</title>

  </head>
  <body>
    <div class="container">

    <h1>Products<h1><small class="badge badge-success">On your basket you have <?php echo count($_COOKIE['basket'])?> products...</small><a href="basket.php">Go To Basket</a>
    <hr>


    <div class="row">

   <?php
    foreach($courses as $key)
    {?>
        <div class="col-md-4">
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="<?php echo $key['picture']?>" alt="Card image cap">
  
  <div class="card-body">
    <h5 class="card-title"><?php echo $key['name']?></h5>
    
    <div >
    <h5 class="card-title"><?php echo $key['price']?>TL</h5>
    <a href="processing.php?addtobasket=1&id=<?php echo $key['id']?>&unit=1" class="btn btn-primary btn-sm">Add To Basket</a>
    </div>
  </div>
</div>
</div>
    <?php } ?>
  


    </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Animal</title>
  <link rel="stylesheet" href="public/css/main.css">
</head>

<body>
  <section class="main">
    <div class="wrapper">
      <table class="table">
        <thead>
          <?php
          require_once 'core/const.php';
          foreach (DATA_ANIMAL as $key => $value) :
          ?>
            <th>
              <?php echo $value; ?>
            </th>
          <?php endforeach; ?>
        </thead>
      </table>
    </div>
  </section>
</body>

</html>
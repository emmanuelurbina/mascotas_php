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
        <tbody>
          <?php foreach ($this->model->get_all() as $animal) : ?>
            <tr>
              <td>
                <?= $animal->name; ?>
              </td>
              <td>
                <?= $animal->specie; ?>
              </td>
              <td>
                <?= $animal->breed; ?>
              </td>
              <td>
                <?= $animal->color; ?>
              </td>
              <td>
                <?= $animal->age; ?>
              </td>
              <td>
                <a href="index.php?controller=animal&action=show_by_id&id=<?= $animal->id ?>">Editar</a>
              </td>
              <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="index.php?controller=animal&action=quit&id=<?php echo $animal->id; ?>">Eliminar</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </section>
</body>

</html>
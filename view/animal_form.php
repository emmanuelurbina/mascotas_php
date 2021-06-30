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
  <section class="section__form">
    <div class="wrapper">
      <form action="index.php?controller=animal&action=save" method="post">
      <input type="hidden" name="id" id="id" value="<?=$animal->id?>">
        <div class="form__group">
          <label for="name" aria-label="Nombre de animal">Nombre</label>
          <input type="text" class="input" name="name" id="name" value="<?= $animal->name ?>">
        </div>

        <div class="form__group">
          <label for="specie" aria-label="Especie de animal">Especie</label>
          <input type="text" class="input" name="specie" id="specie" value="<?= $animal->specie ?>">
        </div>

        <div class="form__group">
          <label for="breed" aria-label="Raza de animal">Raza</label>
          <input type="text" class="input" name="breed" id="breed" value="<?= $animal->breed ?>">
        </div>

        <div class="form__group">
          <label for="genre" aria-label="Genero de animal">Género</label>
          <select name="genre" id="genre" class="input">
            <option <?php echo $animal->genre == 'Macho' ? 'Selected' : ''; ?> value='Macho'>Macho</option>
            <option <?php echo $animal->genre == 'Hembra' ? 'Selected' : ''; ?> value='Hembra'>Hembra</option>
          </select>
        </div>

        <div class="form__group">
          <label for="color" aria-label="Color de animal">Color animal</label>
          <input type="text" class="input" name="color" id="color" value="<?= $animal->color ?>">
        </div>

        <div class="form__group">
          <label for="age" aria-label="Edad meses de animal">Edad en meses</label>
          <input type="number" class="input" name="age" id="age" value="<?= $animal->age ?>">
        </div>

        <button type="submit" class="button primary" name="send">Guardar</button>
      </form>
    </div>
  </section>
</body>

</html>
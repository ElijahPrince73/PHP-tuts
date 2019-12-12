<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <!-- <header>

  <ul>
      <?php 
        foreach($names as $name) : ?>
          <li><?= $name; ?></li>
        
        <?php endforeach; ?>
    </ul>

    <ul>
      <?php 
        foreach($names as $name) {
          echo "<li>$name</li>";
        }
      ?>
    </ul>

    <ul>
        <?php foreach($animals as $animal) : ?>
            <li><?= $animal ?></li>
        <?php endforeach; ?>
    </ul>
          This is displaying the key and value of the object
    <ul>
        <?php foreach($person as $feature => $value) : ?>
          <li><strong><?= $feature ?>: </strong><?= $value ?></li>
        <?php endforeach ?>
    </ul>

    <ul>
      <li><strong>Name:</strong> <?= $task['title'] ?></li>
      <li><strong>Date: </strong> <?= $task['date'] ?></li>
      <li><strong>Personal Repsonible:</strong> <?= $task['assigned_to'] ?></li>
      <li><strong>Completed: </strong> <?= $task['completed'] ? 'Completed' : 'Incomplete' ?></li>

      <?php if($task['completed']) : ?>
        <span>&#9745;</span>
      <?php else : ?>
        <span>&#9744;</span>
      <?php endif ?>

    </ul>
  </header> -->


  <ul>
    <?php foreach ($tasks as $task) : ?>
    
      <li>
        <?php if($task -> completed) : ?>
          <strike><?= $task -> description; ?></strike>
        <?php else: ?>
          <?= $task -> description; ?>
        <?php endif ?>
      </li>
    <?php endforeach ?>
  </ul>
</body>
</html>
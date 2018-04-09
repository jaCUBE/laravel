<!doctype html>

<html>
    <head>
        <meta charset="utf-8">
    </head>
    
    <body>
      <h1>Hello, <?= $name ?>!</h1>
      
      
      <ul>
          <?php foreach($tasks as $task){ ?>
          <li>
            <?= $task ?>
          </li>        
        <?php } ?>
      </ul>
    </body>
</html>
<!DOCTYPE html>
<html land = "ru">
 <head>
   <meta charset = "UTF-8">
   <meta name = "viewport" content = "width =device-width", initial-scale = 1.0>
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Список дел</title>
      <link rel="stylesheet" href="/src/todo.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
  </head>
  <body>

        <h1>Список дел</h1>

        <form class action = "/vendor/add.php" method = "post" id="new-task-form">
          <input type="text"
                 name="task" id="task"
                 placeholder="Что требуется выполнить..."
                 class="form-control" maxlength="36">
          <button type = "submit" id = "new-task-submit"
                  name = "sendTask"
                  class = "btn-success">Добавить задачу</button>
        </form>
     </div>


     <main>
     <section class = "task-list">
       <h2>Задачи</h2>
       <div id ="tasks">
            <div class = "task">
              <div class = "content">

                <?php
        $dsn = 'mysql:host=localhost;dbname=to-do-list';
        $pdo = new PDO($dsn, 'root','root');

             echo '<ul>';
             $query = $pdo->query('SELECT * FROM `tasks` ORDER BY `id` DESC');
             while($row = $query->fetch(PDO::FETCH_OBJ)) {
               echo '<li><b>'.$row->task.'</b><a href = "/vendor/delete.php?id='.$row->id.'"><button type = "submit"
                       name = "sendTask"
                       class = "btn-delete">Удалить</button></a></li>';
               }
               echo '</ul>';
           ?>
           </div>
              </div>
            </div>
          </div>
        </section>
      </main>
     </body>
</html>

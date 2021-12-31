<?php include_once "_partials/header.php" ?> 

    <div class="container">
        <h1>Very unique TodoList in PHP</h1>
    </div>

    <div class="container d-flex flex-row">
        
        <ul class="list-group col-sm-6 px-50">
            <?php 

                $data = $database->select("items",["id", "text"]);
                
                foreach( $data as $item ) {
                    echo '<li class="list-group-item">';
                    echo    $item['text'];
                    echo '  <div class="controls">';
                    echo '      <a href="edit.php?id='. $item['id'] .'" class="edit-link">edit</a>';
                    echo '      <a href="delete.php?id='. $item['id'] .'" class="delete-link">X</a>';
                    echo '  </div>';
                    echo '</li>';

                }
            ?>
        </ul>

        <form id="add-form" class="col-sm-6" action="_inc/add-item.php" method="post">
            <div class="form-group">
                <textarea name="message" class="form-control" id="text" placeholder="Add new message..." rows="3"></textarea>
            </div>
            <input class="btn-danger" type="submit" value="Add new thing">
        </form>
    </div>

<?php include_once "_partials/footer.php" ?> 
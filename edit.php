<?php include_once "_partials/header.php" ?> 

<?php 

require_once "_inc/config.php";

$item = $database->get("items", "text", [
	"id" => $_GET["id"]
]);

if ( !$item ) {
    header('HTTP/1.0 404 Not Found');
    require_once "404.php";
    die();
}

?>


    <div class="container">
        <h1>Very unique editor</h1>
    </div>

    <div class="container d-flex flex-row">
        <form id="edit-form" class="col-sm-6" action="_inc/edit-item.php" method="post">
            <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $_GET["id"] ?>" >
                <textarea name="message" class="form-control" id="text" placeholder="Edit message..." rows="3"><?php echo $item; ?></textarea>
            </div>
            <input class="btn-danger" type="submit" value="Edit thing">
            <span class="controls">
                <a href="<?php echo $site_url ?>">Back</a>
            </span>
        </form>
    </div>

<?php include_once "_partials/footer.php" ?> 
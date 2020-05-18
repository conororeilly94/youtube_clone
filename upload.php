<?php 
require_once("includes/header.php");
require_once("includes/classes/VideoDetailsFormProvider.php");
?>


<div class="column">

    <?php
    $formProvider = new VideoDetailsFormProvider();
    echo $formProvider->createUploadForm();

    $query = $con->prepare("SELECT * FROM Categories");
    $query->execute();

    while($row = $query->fetch(PDO::FETCH_ASSOC)) {
        echo $row["name"];
    }

    ?>


</div>


<?php require_once("includes/footer.php"); ?>
                
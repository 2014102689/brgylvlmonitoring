<?php 
    include("includes/template/header.php");
?>
    <div class="jumbotron text-center text-success">
    <span class="fas fa-ok"></span>
<?php
    echo "Congratulations!".$_GET['firstname ']." Successfully Added!";
    echo "<a href='records.php'>Check Records</a>";
    include("includes/template/footer.php");
?>
</div>
<?php 
    include '../includes/head.php';
?>

<!-- navbar -->
<?php 
    include '../includes/navbar.php';
?>


<!-- insert the main content here -->
<div class="main-content container text-center px-4 py-3">
    <div class="d-flex text-center align-items-center justify-content-center">
        <div class="image-container">
            <img class="img-fluid" width="250" src="../images/Monkey.svg" alt="main-character">
        </div>
        <div class="text-container">
            <h1>Hello, Name!</h1>
        </div>
    </div>
    <div class="lesson-container py-2">
        <h2>Here are your lessons</h2>
        <hr width="130" class="mx-auto">
        <div class="lessons row g-2 text-center container px-4">
            <div class="col-lg-4">
                <?php 
                    include '../includes/lesson_card.php';
                ?>
            </div>

            <div class="col-lg-4">
                <?php 
                    include '../includes/lesson_card.php';
                ?>
            </div>

            <div class="col-lg-4">
                <?php 
                    include '../includes/lesson_card.php';
                ?>
            </div>

             

        
            
        </div>
    </div>
</div>


<?php 
    include '../includes/footer.php';
?>
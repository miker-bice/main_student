<?php 
    include './includes/head.php';
?>

<!-- navbar -->
<?php 
    include './includes/navbar.php';
?>

<div class="main-content container text-center">
    
        <img class="img-fluid" width="300" src="./images/Monkey.svg" alt="main-character">
        <h1>Hello, Name!</h1>
        <div class="buttons-container d-grid container-fluid w-50">
            <a href="./pages/lessons_page.php" class="btn btn-success btn-lg my-2">Browse Lessons</a>
            <a href="./pages/quizzes.php" class="btn btn-outline-success btn-lg my-2">Browse Quizzes</a>
        </div>
    
</div>

<?php 
    include './includes/footer.php';
?>
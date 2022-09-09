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
            <img class="img-fluid" width="220" src="../images/Monkey.svg" alt="main-character">
        </div>
        <div class="text-container">
            <h1>Hello, Name!</h1>
        </div>
    </div>
    <div class="lesson-container py-2">
        <h2>Here are your quizzes</h2>
        <hr width="130" class="mx-auto">
        <div class="lessons row g-3 text-center py-2">
            <!-- insert here the lesson cards -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body bg-success text-white">
                        <h5 class="card-title">Quiz No. 1</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime iste in reiciendis neque doloremque explicabo!</p>
                        <a href="../pages/lesson_page.php" class="btn btn-primary btn-lg">Take Quiz</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body bg-success text-white">
                        <h5 class="card-title">Quiz No. 2</h5>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem numquam ipsam, cupiditate recusandae veritatis autem alias sint odio excepturi deleniti.</p>
                        <a href="../pages/lesson_page_pptx.php" class="btn btn-primary btn-lg">Take Quiz</a>
                    </div>
                </div>
            </div>


            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body bg-success text-white">
                        <h5 class="card-title">Quiz No. 3</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum nemo excepturi asperiores natus fuga! Nihil eligendi neque culpa facere totam.</p>
                        <a href="../pages/lesson_animals.php" class="btn btn-primary btn-lg">Take Quiz</a>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</div>


<?php 
    include '../includes/footer.php';
?>
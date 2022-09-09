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
        <h2>Here are your lessons</h2>
        <hr width="130" class="mx-auto">
        <div class="lessons row g-3 text-center py-2">
            <!-- insert here the lesson cards -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-auto">
                    <img src="https://post.healthline.com/wp-content/uploads/2020/05/Close-up-of-woman-washing-her-hands-with-soap-732x549-thumbnail.jpg" class="card-img-top lesson-img" alt="sample-image">
                    <div class="card-body bg-success text-white">
                        <h5 class="card-title">How to Wash Hands</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime iste in reiciendis neque doloremque explicabo!</p>
                        <a href="../pages/lesson_page.php" class="btn btn-primary btn-lg">Open Lesson</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <img src="https://i.pinimg.com/564x/1e/4a/58/1e4a58c5c5a1946145143f0e6f041fd2--red-living-rooms-red-rooms.jpg" class="card-img-top lesson-img"  alt="sample-image">
                    <div class="card-body bg-success text-white">
                        <h5 class="card-title">What is Red?</h5>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem numquam ipsam, cupiditate recusandae veritatis autem alias sint odio excepturi deleniti.</p>
                        <a href="../pages/lesson_page_pptx.php" class="btn btn-primary btn-lg">Open Lesson</a>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <img src="https://www.seekpng.com/png/detail/11-119411_picture-of-animated-animals-image-group-animaux-de.png" class="card-img-top lesson-img"alt="sample-image">
                    <div class="card-body bg-success text-white">
                        <h5 class="card-title">The Animal Kingdom</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum nemo excepturi asperiores natus fuga! Nihil eligendi neque culpa facere totam.</p>
                        <a href="../pages/lesson_animals.php" class="btn btn-primary btn-lg">Open Lesson</a>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</div>


<?php 
    include '../includes/footer.php';
?>
<?php include "./includes/header.php"?>

<!-- main section -->
<section class="main">
    <div class="card">
        <div class="image-box">
            <img src="./static/images/watches/img1.png" alt="">
        </div>
        <div class="content">
            <h2 class="title">Custom1</h2>
            <p>it is a great custom</p>
            <h2 class="cost">49.99$</h2>
            <a class="btn btn-add" href="/mysite/add.php?item=1&price=49.99&img=img1&location=watches">Add to basket</a>
        </div>
    </div>
    <div class="card">
        <div class="image-box">
            <img src="./static/images/watches/img5.png" alt="">
        </div>
        <div class="content">
            <h2 class="title">Custom2</h2>
            <p>it is a great custom</p>
            <h2 class="cost">59.99$</h2>
            <a class="btn btn-add" href="/mysite/add.php?item=2&price=59.99&img=img5&location=watches">Add to basket</a>
        </div>
    </div>
    <div class="card">
        <div class="image-box">
            <img src="./static/images/watches/img4.png" alt="">
        </div>
        <div class="content">
            <h2 class="title">Custom3</h2>
            <p>it is a great custom</p>
            <h2 class="cost">69.99$</h2>
            <a class="btn btn-add" href="/mysite/add.php?item=3&price=69.99&img=img4&location=watches">Add to basket</a>
        </div>
    </div>
    <div class="card">
        <div class="image-box">
            <img src="./static/images/watches/img6.png" alt="">
        </div>
        <div class="content">
            <h2 class="title">Custom4</h2>
            <p>it is a great custom</p>
            <h2 class="cost">49.99$</h2>
            <a class="btn btn-add" href="/mysite/add.php?item=4&price=49.99&img=img6&location=watches">Add to basket</a>
        </div>
    </div>
    <div class="card">
        <div class="image-box">
            <img src="./static/images/watches/img7.png" alt="">
        </div>
        <div class="content">
            <h2 class="title">Custom5</h2>
            <p>it is a great custom</p>
            <h2 class="cost">99.99$</h2>
            <a class="btn btn-add" href="/mysite/add.php?item=5&price=99.99&img=img7&location=watches">Add to basket</a>
        </div>
    </div>
    <div class="card">
        <div class="image-box">
            <img src="./static/images/watches/img2.png" alt="">
        </div>
        <div class="content">
            <h2 class="title">Custom6</h2>
            <p>it is a great custom</p>
            <h2 class="cost">39.99$</h2>
            <a class="btn btn-add" href="/mysite/add.php?item=6&price=39.99&img=img2&location=watches">Add to basket</a>
        </div>
    </div>
    <div class="card">
        <div class="image-box">
            <img src="./static/images/watches/img9.png" alt="">
        </div>
        <div class="content">
            <h2 class="title">Custom7</h2>
            <p>it is a great custom</p>
            <h2 class="cost">59.99$</h2>
            <a class="btn btn-add" href="/mysite/add.php?item=7&price=59.99&img=img9&location=watches">Add to basket</a>
        </div>
    </div>
    <div class="card">
        <div class="image-box">
            <img src="./static/images/watches/img8.png" alt="">
        </div>
        <div class="content">
            <h2 class="title">Custom8</h2>
            <p>it is a great custom</p>
            <h2 class="cost">49.99$</h2>
            <a class="btn btn-add" href="/mysite/add.php?item=8&price=49.99&img=img8&location=watches">Add to basket</a>
        </div>
    </div>
    <div class="card">
        <div class="image-box">
            <img src="./static/images/watches/img3.png" alt="">
        </div>
        <div class="content">
            <h2 class="title">Custom9</h2>
            <p>it is a great custom</p>
            <h2 class="cost">49.99$</h2>
            <a class="btn btn-add" href="/mysite/add.php?item=9&price=49.99&img=img3&location=watches">Add to basket</a>
        </div>
    </div>
</section>
<script>
    let watches = document.getElementById("watches");
    watches.classList.add("active");
</script>
<?php include "./includes/footer.php"?>
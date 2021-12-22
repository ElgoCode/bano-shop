<?php include "./includes/header.php"?>

<!-- main section -->
<section class="main">
    <div class="card">
        <div class="image-box">
            <img src="./static/images/shoes/img1.png" alt="">
        </div>
        <div class="content">
            <h2 class="title">Custom1</h2>
            <p>it is a great custom</p>
            <h2 class="cost">49.99$</h2>
            <a class="btn btn-add" href="/mysite/add.php?item=1&price=49.99&img=img1&location=shoes">Add to basket</a>
        </div>
    </div>
    <div class="card">
        <div class="image-box">
            <img src="./static/images/shoes/img5.png" alt="">
        </div>
        <div class="content">
            <h2 class="title">Custom2</h2>
            <p>it is a great custom</p>
            <h2 class="cost">59.99$</h2>
            <a class="btn btn-add" href="/mysite/add.php?item=2&price=59.99&img=img5&location=shoes">Add to basket</a>
        </div>
    </div>
    <div class="card">
        <div class="image-box">
            <img src="./static/images/shoes/img4.png" alt="">
        </div>
        <div class="content">
            <h2 class="title">Custom3</h2>
            <p>it is a great custom</p>
            <h2 class="cost">69.99$</h2>
            <a class="btn btn-add" href="/mysite/add.php?item=3&price=69.99&img=img4&location=shoes">Add to basket</a>
        </div>
    </div>
    <div class="card">
        <div class="image-box">
            <img src="./static/images/shoes/img6.png" alt="">
        </div>
        <div class="content">
            <h2 class="title">Custom4</h2>
            <p>it is a great custom</p>
            <h2 class="cost">49.99$</h2>
            <a class="btn btn-add" href="/mysite/add.php?item=4&price=49.99&img=img6&location=shoes">Add to basket</a>
        </div>
    </div>
    <div class="card">
        <div class="image-box">
            <img src="./static/images/shoes/img7.png" alt="">
        </div>
        <div class="content">
            <h2 class="title">Custom5</h2>
            <p>it is a great custom</p>
            <h2 class="cost">99.99$</h2>
            <a class="btn btn-add" href="/mysite/add.php?item=5&price=99.99&img=img7&location=shoes">Add to basket</a>
        </div>
    </div>
    <div class="card">
        <div class="image-box">
            <img src="./static/images/shoes/img2.png" alt="">
        </div>
        <div class="content">
            <h2 class="title">Custom6</h2>
            <p>it is a great custom</p>
            <h2 class="cost">39.99$</h2>
            <a class="btn btn-add" href="/mysite/add.php?item=6&price=39.99&img=img2&location=shoes">Add to basket</a>
        </div>
    </div>
    <div class="card">
        <div class="image-box">
            <img src="./static/images/shoes/img9.png" alt="">
        </div>
        <div class="content">
            <h2 class="title">Custom7</h2>
            <p>it is a great custom</p>
            <h2 class="cost">59.99$</h2>
            <a class="btn btn-add" href="/mysite/add.php?item=7&price=59.99&img=img9&location=shoes">Add to basket</a>
        </div>
    </div>
    <div class="card">
        <div class="image-box">
            <img src="./static/images/shoes/img8.png" alt="">
        </div>
        <div class="content">
            <h2 class="title">Custom8</h2>
            <p>it is a great custom</p>
            <h2 class="cost">49.99$</h2>
            <a class="btn btn-add" href="/mysite/add.php?item=8&price=49.99&img=img8&location=shoes">Add to basket</a>
        </div>
    </div>
    <div class="card">
        <div class="image-box">
            <img src="./static/images/shoes/img3.png" alt="">
        </div>
        <div class="content">
            <h2 class="title">Custom9</h2>
            <p>it is a great custom</p>
            <h2 class="cost">49.99$</h2>
            <a class="btn btn-add" href="/mysite/add.php?item=9&price=49.99&img=img3&location=shoes">Add to basket</a>
        </div>
    </div>
</section>
<script>
    let shoes = document.getElementById("shoes");
    shoes.classList.add("active");
</script>
<?php include "./includes/footer.php"?>
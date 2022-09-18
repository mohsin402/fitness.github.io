<?php include'header.php' ?>
<title>gym contact</title>
  </head>
  <body>
<?php include'nav.php' ?>
<nav class="bg-dark nav-dark p-4">
<!-- <i class="fa-duotone fa-phone bg-light"></i> -->
<a href="#" class="text-light text-decoration-none ">
    <i class="fa-solid fa-phone  text-light pe-5 "></i>
    +919810730780
</a>

</nav>
<section class="contact my-5">
    <h2 class="text-center">Contact Us</h2>
    <hr class="w-25 mx-auto">
    <div class="container-fluid w-50 pt-5">
    <form method="post" action="userinfo.php">
    <div class="mb-3">
    <label for="username" class="form-label">Name</label>
    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="mb-3">
  <label for="desc" class="form-label">Comment</label>
  <textarea class="form-control" placeholder="Leave a comment here" id="desc" name="desc"></textarea>
</div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" >Submit</button>

</form>
    </div>
</section>
<?php include'footer.php' ?>

<?php
  if(isset($_GET['full_name'])){
      $name  = $_GET['full_name'];
      $email  = $_GET['email'];
      $message  = $_GET['message'];

      
  }
?>
<?php require('header.php'); ?>
<style>
div#category {
    max-width: 700px;
    width: 100%;
    margin: 0 auto;
}
div#category a {
    background: #fff;
    box-shadow: 1px 1px 17px -3px #047556;
    border: 0px solid;
    border-radius: 10px;
    padding: 20px;
    display: inline-block;
    margin-bottom: 32px;
    width: 100%;
    font-size: 16px;
    font-weight: 700;
}
.row.justify-content-center {
    justify-content: center !important;
    display: flex;
}
ol li {
    font-size: 18px;
    margin-bottom: 18px;
}
@media only screen and (max-width: 991px) {
.row.justify-content-center {
    justify-content: center !important;
    display: block;
}
}
</style>
<h1>Contact Us</h1>
<div class="calculator">
<form action="/">
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name" name="full_name" required>
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" name="email" required>
  </div>
  <div class="form-group">
    <label for="comment">Comment:</label>
    <textarea class="form-control" rows="5" id="comment" name="message"></textarea>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
<br><br>
<div id="footer-desk">Copyright © <?php echo date('Y'); ?> - <a href="/">svgcolor.com</a> - <a href="/contact">Contact Us</a>&nbsp;&nbsp;<a href="/privacy">Privacy</a></div>
</div>
</div>

</body>
</html>

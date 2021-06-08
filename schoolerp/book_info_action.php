<?php
include'header.php';
include'connect.php';
if($_POST['submit'])
{
$author=$_POST['author'];
$title=$_POST['title'];
$edition=$_POST['edition'];
$publisher=$_POST['publisher'];
$q="insert into tbl_book (author, title, edition, publisher) values('$author','$title', $edition,'$publisher')";
$r=mysqli_query($con,$q);
}
 
  ?>

<section class="section coming-soon" data-section="section3">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="right-content">
            <div class="top-content">
              <h6>Search Book</h6>
            </div>
            <form id="contact" action="book_search.php" method="post">
              <div class="row">
                <div class="col-md-12">
                  <fieldset>
                    <input name="title" type="text" class="form-control" id="phone-number" placeholder="Enter title" required="">
                  </fieldset>
                </div>                 
                <div class="col-md-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="button">Search</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section> 
<?php
 
include'footer.php';
 ?>
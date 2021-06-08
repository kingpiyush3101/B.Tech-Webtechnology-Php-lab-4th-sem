<?php
include'header.php';
include'connect.php';
  ?>

<html>
<head>
<style>
td
{
  color:white;
} 
th
{
  color:yellow;
}  
</style>
</head>


<section class="section coming-soon" data-section="section3">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="right-content">
            <div class="top-content">
              <h6>Search Book</h6>
            </div>
            <form id="contact">
              <div class="row">
                <div class="col-md-12">
                  <table border="1" class="col-md-12">
                  <fieldset>
                    <?php
                     
                    $title=$_POST['title'];
                    $q="select * from tbl_book where title like '%$title%' ";
                    $r=mysqli_query($con,$q);
                    if(mysqli_num_rows($r)>0)
                  {
                    ?>
                    <tr>
                      <th>Acc No.</th><th>Author</th><th>Title</th><th>Edition</th><th>Publisher</th></tr>
                    <?php
                     while ($t=mysqli_fetch_array($r))
                    {
                      echo "<tr><td>".$t['acc_no']."</td><td>".$t['author']."</td><td>".$t['title']."</td><td>".$t['edition']."</td><td>".$t['publisher']."</td></tr>";
                    }
                  }
                  else
                  {

                    echo "<b style='color:white'>No result found</b>";
                  }
                
                  ?>
                  </fieldset>
              </table>
                </div>                 
                 <div class="col-md-12">
                  <fieldset>
                    <button class="button"><a href="book_info_action.php" style ="color:white">New Search</a></button>
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
 </html>
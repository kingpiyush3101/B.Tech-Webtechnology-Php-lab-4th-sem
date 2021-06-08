

<?php
session_start();
session_destroy();
//unset($_SESSION["username"]);
include'header.php';
?>


<section class="section coming-soon" data-section="section3">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="right-content">
            <div class="top-content">
              <h6>Logout</h6>
            </div>
            
              <div class="row">
                <div class="col-md-12">
                  <fieldset>  
                     </fieldset> 
						<div class="top-content">
              <h6>please login again to show the dashboard</h6>
            </div>
						
					 

                  </fieldset>
                </div>
                 
              </div>
          </div>
        </div>
      </div>
    </div>
  </section> 


  <?php
 include'footer.php';
 ?>
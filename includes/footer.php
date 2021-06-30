 <?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
 <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2 logo">Beauty Parlour Management System</h2>
              <?php

$ret=mysqli_query($con,"select * from tblpage where PageType='aboutus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
              <p><?php  echo substr($row['PageDescription'],0,200);?> <a href="about.php">More.......</a></p><?php } ?>
            
            </div>
          </div>
         
                <?php
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
	            </div>
               <?php } ?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>
            Beauty Parlour Management System &copy; Group 17  </p>
          </div>
        </div>
      </div>
    </footer>
<div class="sticky-header header-section ">
      <div class="header-left">
        <button id="showLeftPush"><i class="fa fa-bars"></i></button> 
              <ul class="dropdown-menu">
                <li>
            
                   <div class="notification_desc">
                     <?php if($num>0){
while($result=mysqli_fetch_array($ret1))
{
            ?>
                 <a class="dropdown-item" href="view-appointment.php?viewid=<?php echo $result['ID'];?>">New appointment received from <?php echo $result['Name'];?> </a><br />
<?php }} else {?>
    <a class="dropdown-item" href="all-appointment.php">No New Appointment Received</a>
        <?php } ?>
                           
                  </div>
                  <div class="clearfix"></div>  
                 </a></li>
                 
                
                 <li>
                  <div class="notification_bottom">
                    <a href="new-appointment.php">See all notifications</a>
                  </div> 
                </li>
              </ul>
            </li> 
          
          </ul>
          <div class="clearfix"> </div>
        </div>
        <!--notification menu end -->
        <div class="profile_details">  
        <?php
$adid=$_SESSION['bpmsaid'];
$ret=mysqli_query($con,"select AdminName from tbladmin where ID='$adid'");
$row=mysqli_fetch_array($ret);
$name=$row['AdminName'];

?> 
        </div>  
        <div class="clearfix"> </div> 
      </div>
      <div class="clearfix"> </div> 
    </div>
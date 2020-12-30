<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    var val1=$(this).val();
   
	$('#email').attr("value",val1);
  });
 
});
</script>



			<div class="container-fluid" style="background-color:#ccebff;" >
			<div class="row">
			<div class="col-lg-12">
			<div class="card"><h3><center>Professionals Profile</center></h3></div></div></div>
			                                        <?php
			                                              $con=mysqli_connect("127.0.0.1","root","");
                                                            mysqli_select_db($con,"weare4u");
                                                            $res=mysqli_query($con,"select * from professional");
                                                           
															$n=mysqli_num_rows($res);
															if($n==0)
															{
																echo'<div class="row">
			                                                         <div class="col-lg-12"><div class="card"><h7><center>No Professionals Profile Exists.</center></h7>
																</div><p class="card-text"><small class="text-muted">Last updated 1 hour ago</small></p></div></div>';
															}
															$m=1;
	                                                        for($i=$n;$i>0;$i--,$m++)                                   
															{
																?>
											
															   
								                                  <div class="row">
													            <?php
																for($j=$n,$k=1;$j>0;$j--,$i--,$k++,$m++)
																{  
																    if($k==4)
																	   break;
																	$row=mysqli_fetch_array($res);
																	$email=$row['email'];
																	$cat=$row['category'];
	                                                               $resu=mysqli_query($con,"select * from services where id = $cat");
	                                                                $r=mysqli_fetch_array($resu);?>
																<div class="col-md-3">   									
										                            <div class="card-group">
											                           <div class="card" >
												                           <div class="card-body">
																<img class="card-img-top" src="<?php echo $row['pic'];?>" alt="Card image cap">
													                                  <p class="card-text" style="padding-left :10px;">
                                                                                       
														                                 <font color="blue" size="1px"><h6><center><?php echo $row['name'];?></center></h6><br>
														                                 <i class="fas fa-clock"></i>&nbsp;&nbsp;&nbsp;<?php echo date("g:i a F j,Y", strtotime($row['date'])); ?><br>
																						 <i class="fa fa-handshake-o"></i>&nbsp;&nbsp;<?php echo"".$r['title']; ?><br>
																						<i class="fa fa-map-marker"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['area'] ; ?>&nbsp;&nbsp;<?php echo", ".$row['pincode']; ?><br>
																						  <i class="fas fa-vote-yea"> </i>&nbsp;&nbsp; <?php echo $row['votes'];?>
																						 
                          
                           <div class="user-send-message">
                          <button class="btn btn-primary btn-addon" type="button" data-toggle="modal" data-target="#myModal1" value="<?php echo$email; ?>">
                            <i class="ti-email"></i>Send Message</button>
                          </div>
                         
                         <div style="padding:20px;">
                           <div id="msg1">
                            
                            </div>
							
                          </div></font>
													                                  </p>
																					  
													                            
												                             </div>
											                             </div>
										                            </div>
																</div>
                                                                 

																
															     <?php } ?>
															</div>
														</div>
														
														
<?php } 


?>


 <div class="modal fade" id="myModal1">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Login</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <div class="row">
 <div class="col-md-12">
    <div style="padding:15px;">
    <form action="p.php" method="post">
	
	<div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email" name="email"  readonly>
  </div>
  <div class="form-group">
    <label for="pwd">Password</label>
    <input type="password" class="form-control" id="passwd" name="passwd" required>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Login</button>&nbsp;&nbsp;  
  <button type="reset" class="btn btn-primary">Reset</button>&nbsp;&nbsp; 
  <button type="button" class="btn btn-danger float-right" data-dismiss="modal">Close</button>   
</form>
</div>
 </div>
 </div>
        </div>
      
      </div>
    </div>
  </div> 
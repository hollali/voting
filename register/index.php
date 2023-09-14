
<?php include ('head.php');?>
<body>

    <div id="wrapper">
    	<?php    
        include ('index_banner.php');
        ?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
			
					<div class="form-panel">
                      
                        <div class="form-body"> 

                         <form method = "post" enctype = "multipart/form-data">
                         	
                                <div class="form-heading">
                         		<center>Voter Registration</center>
                         		</div>
											<div class="form-field">
												<label>Voter ID</label><br/>
												<input class ="form-control" type = "text" name = "id_number" placeholder = "Voter ID" required="true">
													
											</div>
											
											<div class="form-field">											
												<label>Password</label><br/>
													<input class="form-control"  type = "password" name = "password" id = "pass" placeholder="Password" required="true"/>
											</div>
											<div class="form-field">											
												<label>Retyp Password</label><br/>
													<input class="form-control"  type = "password" name = "password1" id = "pass" placeholder="Retyp Password" required="true"/>
											</div>

											<div class="form-field">
												<label>First Name</label><br/>
													<input class="form-control" type ="text" name = "firstname" placeholder="First Name" required="true">
											</div>
											
											<div class="form-field">
												<label>Last Name</label><br/>
													<input class="form-control"  type = "text" name = "lastname" placeholder="Last Name" required="true">
											</div>

											<div class="form-field">
												<label>Gender</label> <br/>
													<select class = "form-control" name = "gender">
														<option >Male</option>
														<option >Female</option>														
													</select>
											</div>
											
											
														
													</select>
											</div>
												<br/>					
											 	 <center><button name = "save" type="submit">Create My Account</button></center>
                                            <div class="link">
											 	 <h2><center><a href="../login.php" style = "font-size:16px;">Login to vote</a></center></h2>
											</div>

						  				 </div>
                                       
										
										</form>
								
							<?php //PHP script to insert signup data into database
								require 'signUpData.php';
								
							?>

						</div>
						    
					</form>
					
                    </div>
                </div>
            
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
        <?php 
        include ('footer.php');
        ?>

    </div>
    <!-- /#wrapper -->
</body>

</html>


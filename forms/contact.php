
<?php
									if(isset($_POST['action1']))
									{
										extract($_POST);

										$contenting=$db->real_sc($message);

										$query="INSERT INTO `contact`(`name`, `email`, `phone`, `subject`, `message`) VALUES('$name','$email','$phone','$Subject','$contenting')";
										$run=$db->insert($query);
										if($run)
										{
										echo '<script> swal("Thanks For your Message!....",);</script><meta http-equiv="refresh" content="1">';
										}
										else
										{
												echo '<script>sweetAlert("Oops...", "Something went wrong!", "error");</script><meta http-equiv="refresh" content="1">';

										}
									}




									?>

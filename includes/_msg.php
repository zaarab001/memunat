<?php
if(isset($_POST['send']))
		{
			$name= $_POST['name'];
			$email= $_POST['email'];
			$subject= $_POST['subject'];
			$message= $_POST['message'];
			
			if(!(empty($name)) && !(empty($email)) && !(empty($subject)) && !(empty($message)) )
			{
			$cont_msg = mysqli_query($dbM, "INSERT INTO contact_msg
											(
											name,
											email,
											subject,
											message,
											date_sent
											)
											VALUES(
											'$name',
											'$email',
											'$subject',
											'$message',
											Now()
											)") or die (mysqli_error());// user info
											if($cont_msg)
											{
												echo '<span class="label label-success">Massage Sent</span>';
											}
											else
											{
												echo '<span class="label label-danger">Massage Not Sent</span>';
											}
				
				}//end of if input fields not empty
				else
				{
					echo 'Fill in all the fields';
					}
		}
  ?>
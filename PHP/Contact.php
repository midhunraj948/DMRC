<?php
//variable setting
$name = $_REQUEST[['name'];
$email = $_REQUEST[['Email'];
$Address = $_REQUEST[['Address'];
$Message = $_REQUEST[['Message'];

//check input fealds
if(empty($name) || empty(email) || empty(Address) || empty(Message))
{
   echo "Please fill all the fields";
}
else
{
	mail("midhunrajnrs@gmail.com","Webtech message",$message,$Address,"From:$name<$email>");
	echo"<script type='text/javascript'> alert('your message sent successfully')
	Window.history.log(-1);
	 </script>"
}
?>
<?php   

  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $linkedin=$_POST['linkedin'];
  $drupal=$_POST['drupal'];
  $position=$_POST['position'];
  $start=$_POST['start'];
  $mobile=$_POST['mobile'];
  $ccity=$_POST['ccity'];
  $cname=$_POST['cname'];
  $relocate=$_POST['relocate'];
  $lcompany=$_POST['lcompany'];
  $comments=$_POST['comments'];
  $dateTime= date('Y-m-d H:i:s',time());
  

  $con = mysqli_connect('localhost','root','','job');

  $query="INSERT INTO `Candidate`(`fname`, `lname`, `email`, `linkedin`, `drupal`, `position`, `start`, `mobile`, `ccity`, `cname`, `relocate`, `lcompany`, `comments`, `dateTime`) VALUES ('$fname','$lname','$email','$linkedin','$drupal','$position','$start','$mobile','$ccity','$cname','$relocate','$lcompany','$comments','$dateTime')";
  
  $run = mysqli_query($con,$query);

	if($run==TRUE)
     echo "<script type='text/javascript'>alert('Data Inserted Successfully');
     </script>";
     
  else
    echo "<script type='text/javascript'>alert('Error! Insert again...');
    </script>";
  
  include 'index.html';

?>

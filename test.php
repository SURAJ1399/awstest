    <?php


$con=mysqli_connect("localhost","u946746031_managementap","managementapp","u946746031_managementapp");
 echo "Index Page";
// $pname=$_POST['pname'];

// $amount=$_POST['amount'];
// $date=$_POST['date'];

// $desc=$_POST['desc'];
// $image=$_POST['image'];
// $type=$_POST['type'];
// $target_dir="Images";
// $target_dir=$target_dir."/".rand()."_".time().".jpeg";


// if(file_put_contents($target_dir,base64_decode($image)))
// {

// $sql1="UPDATE project
// SET releasedon= $date, paid=$amount
// WHERE pname = $pname";

// $sql="INSERT INTO transaction(name,amount,type,desc,image)
// VALUES ('$pname','$amount','$type','$desc','$target_dir')";

// $result=mysqli_query($con,$sql);
// $result1=mysqli_query($con,$sql1);
if($con)
{
    echo "Database Connected";
}
else
{
    echo " Failed";
}



?>
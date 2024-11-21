<?php
$servername= "localhost";
$username= "root";
$password="";
$database="kbcform";

$con= mysqli_connect( $servername, $username, $password, $database);

if(!$con)
{
    die( "connecting failled due to". mysqli_connect($con));

}
    if(isset($_POST['submit']));

    $name=$_POST['name'];
    $whatsapp=$_POST['whatsapp'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];

    $sql= "insert into kbcdata (name , whatsapp, age, gender) values ('$name' , '$whatsapp' , '$age' , '$gender')";

    if(mysqli_query($con, $sql))
    {
        echo " <script> alert('NEW TICKET IS CONFORMED')</script> ";
        echo " <script> window.open( 'form.php' ) </script> ";

    }
        else {
            echo "error:" . mysqli_error($con);
        }

        mysqli_close($con);
 ?>
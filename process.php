<?php include 'connect.php'; ?>

<?php

if(isset($_POST['insert']))
{
    $appointment = $_POST['appointment'];
    $appointment_id = $_POST['appointment_id'];
    $syndrome = $_POST['syndrome'];
    $syndrome_dt = $_POST['syndrome_dt'];

    $query = "INSERT INTO queuedb (appointment, appointment_id, syndrome, syndrome_dt)
    VALUES ('$appointment', '$appointment_id', '$syndrome', '$syndrome_dt')";
    $query_run = mysqli_query($connect,$query);

    if($query_run)
    {
        echo '<script type = "text/javasript"> alert("Data Saved") </script>';
    }
    else
    {
        echo '<script type = "text/javasript"> alert("Data Not Saved") </script>';
    }
}

?>
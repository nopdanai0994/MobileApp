<?php
session_start();
include('session.php');
$timezone = $_POST['timezone'];
date_default_timezone_set($timezone);

// รับค่าจาก POST request
$hour = $_POST['hour'];
$minute = $_POST['minute'];
$second = $_POST['second'];
$datetime = date("d/m/y"); //date time
$subtime = date("H:i:s"); //time
$timedata_user_id = $_SESSION['timedata_user_id']; // รับค่า user_id จาก session
$timedata_user_name = $_SESSION['timedata_user_name'];

// เตรียมคำสั่ง SQL สำหรับการบันทึกข้อมูล
$sql = "INSERT INTO time_data (timedata_user_id, timedata_user_name, hour, minute, second, datetime, timedataformat, subtime) 
        VALUES ('$timedata_user_id', '$timedata_user_name', '$hour', '$minute', '$second', '$datetime', 
        CONCAT(LPAD('$hour', 2, '0'), ':', LPAD('$minute', 2, '0'), ':', LPAD('$second', 2, '0')), '$subtime')";

// ทำการบันทึกข้อมูล
if ($conn->query($sql) === TRUE) {
    echo "Record saved successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// ปิดการเชื่อมต่อกับ MySQL
$conn->close();

?>

<?php

require_once 'config.php';

header('Content-Type: application/json');

$response = [

"success"=>false,

"message"=>"Unknown error"

];

if($_SERVER["REQUEST_METHOD"]!="POST"){

$response["message"]="Invalid request.";

echo json_encode($response);

exit;

}

$patient_name=trim($_POST["patient_name"] ?? "");

$phone=trim($_POST["phone"] ?? "");

$email=trim($_POST["email"] ?? "");

$age=$_POST["age"] ?? "";

$gender=$_POST["gender"] ?? "";

$address=trim($_POST["address"] ?? "");

$dentist_id=$_POST["dentist_id"] ?? "";

$service_id=$_POST["service_id"] ?? "";

$date=$_POST["appointment_date"] ?? "";

$time=$_POST["appointment_time"] ?? "";

$reason=trim($_POST["reason"] ?? "");

$insurance=trim($_POST["insurance"] ?? "");

$medical_notes=trim($_POST["medical_notes"] ?? "");

if(

empty($patient_name)

||

empty($phone)

||

empty($dentist_id)

||

empty($service_id)

||

empty($date)

||

empty($time)

){

$response["message"]="Please complete all required fields.";

echo json_encode($response);

exit;

}

if(

!empty($email)

&&

!filter_var($email,FILTER_VALIDATE_EMAIL)

){

$response["message"]="Invalid email.";

echo json_encode($response);

exit;

}

if($date<date("Y-m-d")){

$response["message"]="Appointment date cannot be in the past.";

echo json_encode($response);

exit;

}

$appointment_number="DCP-".date("Ymd")."-".rand(1000,9999);

$sql="

SELECT id

FROM appointments

WHERE

dentist_id=?

AND appointment_date=?

AND appointment_time=?

AND status<>'Cancelled'

LIMIT 1

";

$stmt=$conn->prepare($sql);

$stmt->bind_param(

"iss",

$dentist_id,

$date,

$time

);

$stmt->execute();

$result=$stmt->get_result();

if($result->num_rows>0){

$response["message"]="This time slot has already been booked.";

echo json_encode($response);

exit;

}

$sql="

INSERT INTO appointments(

appointment_number,

patient_name,

phone,

email,

age,

gender,

address,

dentist_id,

service_id,

appointment_date,

appointment_time,

reason,

insurance,

medical_notes,

status

)

VALUES(

?,?,?,?,?,?,?,?,?,?,?,?,?,?,?

)

";

$stmt=$conn->prepare($sql);

$status="Pending";

$stmt->bind_param(

"ssssissiissssss",

$appointment_number,

$patient_name,

$phone,

$email,

$age,

$gender,

$address,

$dentist_id,

$service_id,

$date,

$time,

$reason,

$insurance,

$medical_notes,

$status

);

if($stmt->execute()){

$response["success"]=true;

$response["appointment_number"]=$appointment_number;

$response["message"]="Appointment booked successfully.";

}else{

$response["message"]="Unable to save appointment.";

}

echo json_encode($response);

$stmt->close();

$conn->close();

exit;
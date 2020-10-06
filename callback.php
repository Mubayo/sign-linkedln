<?php


require_once "init.php";

$accessToken = $linkedin->getAccessToken($_GET['code']);

$profileObject = $linkedin->getPerson();
$emailObject = $linkedin->getEmail();

    // Get cURL resource
$curl = curl_init();

curl_setopt_array($curl, array(
	CURLOPT_URL => "https://api.linkedin.com/v2/search?q=companiesV2",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => array(
		"authorization: Bearer {$accessToken}"
        
	),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}
?>


<!--
<html>
<head>
<title>My Profile</title>
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css?family=Roboto&display=swap');

body{
    padding-top:40px;
  	padding-left:40px;
    background-color:#212121;
}

.column_one{
    width: 250px;
}
.column_two{
    width:250px;
}

.card{
    position:relative;
    background-color: #ffffff;
    height: 300px;
    width:500px;
    overflow: hidden;
    transition-duration: 2s;
    border-radius:5px;
}

.card img{
    border: 8px solid white;
    z-index: 100;
    height: 480px;
    widows: 480px;
    border-radius: 240px;
    margin-top:-420px;
    margin-left: 270px;
    transition-duration: 1.5s;
    right: 0px;
    overflow: hidden;
}

.card:hover img{
    margin-left:200px;
}

.text{
    font-family: 'Roboto', sans-serif;
    margin-left: 15px;
    margin-top: 30px;
}

.text h3{
    font-weight: 200;
}

.text span{
    font-weight: 800;
}

.line{
    border:1px solid gray;
    width: 220px;
    margin-bottom: 15px;
    border-radius:1px;
}

.text p{
    margin-bottom:10px;
}

.text i{
    margin-left: 3px;
    color: grey;
}

.title{
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    background-color: black;
    color: white;
    font-size: 25px;
    padding-top:5px;
    padding-left:20px;
    height: 50px;
    width:400px;
    margin-top:60px;
}

    </style>
</head>
    
    <body>
        <div class="card">
    <div class="column_one">
        <div class="text">
            <h3>STUART <span>WHITE</span></h3>
            <div class="line"></div>
            <p>I suppose if we couldn't laugh at things that don't make sense, we couldn't react to a lot of life.
            </p>
            <i class="fas fa-home fa-lg"></i>
            <i class="fas fa-envelope fa-lg"></i>
            <i class="fas fa-phone fa-lg"></i>
        </div>
        <div class="title">Web Designer</div>
    </div>
    <div class="column_two">
        <img src="https://images.unsplash.com/photo-1562940922-02c838af3fdd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80"/>
    </div>
</div>
    </body>
</html>-->

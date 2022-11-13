<?php
session_start();

include("sample databases\login\connection.php");
include("sample databases\login\\functions.php");

if($_SERVER['REQUEST_METHOD']== "POST"){
    //something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password)){
        
        // read to db
        $query = "select * from users where user_name = '$user_name' limit 1";
        $result = mysqli_query($con,$query);

        if($result){
            if($result && mysqli_num_rows($result)>0){
                
                $user_data = mysqli_fetch_assoc($result);
                if($user_data['password']===$password){
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: starter.php");
                    die;
                }
            }
        }
        echo "Wrong username or password";
    }else{
        echo "please enter some valid information!";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>My-MoOjaw | login</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">

<link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">

<link rel="stylesheet" href="../../dist/css/adminlte.min.css?v=3.2.0">
<script nonce="7c199b90-405d-4c2c-a518-8339abc67b80">(function(w,d){!function(e,f,g,h){e.zarazData=e.zarazData||{};e.zarazData.executed=[];e.zaraz={deferred:[],listeners:[]};e.zaraz.q=[];e.zaraz._f=function(i){return function(){var j=Array.prototype.slice.call(arguments);e.zaraz.q.push({m:i,a:j})}};for(const k of["track","set","debug"])e.zaraz[k]=e.zaraz._f(k);e.zaraz.init=()=>{var l=f.getElementsByTagName(h)[0],m=f.createElement(h),n=f.getElementsByTagName("title")[0];n&&(e.zarazData.t=f.getElementsByTagName("title")[0].text);e.zarazData.x=Math.random();e.zarazData.w=e.screen.width;e.zarazData.h=e.screen.height;e.zarazData.j=e.innerHeight;e.zarazData.e=e.innerWidth;e.zarazData.l=e.location.href;e.zarazData.r=f.referrer;e.zarazData.k=e.screen.colorDepth;e.zarazData.n=f.characterSet;e.zarazData.o=(new Date).getTimezoneOffset();if(e.dataLayer)for(const r of Object.entries(Object.entries(dataLayer).reduce(((s,t)=>({...s[1],...t[1]})))))zaraz.set(r[0],r[1],{scope:"page"});e.zarazData.q=[];for(;e.zaraz.q.length;){const u=e.zaraz.q.shift();e.zarazData.q.push(u)}m.defer=!0;for(const v of[localStorage,sessionStorage])Object.keys(v||{}).filter((x=>x.startsWith("_zaraz_"))).forEach((w=>{try{e.zarazData["z_"+w.slice(7)]=JSON.parse(v.getItem(w))}catch{e.zarazData["z_"+w.slice(7)]=v.getItem(w)}}));m.referrerPolicy="origin";m.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(e.zarazData)));l.parentNode.insertBefore(m,l)};["complete","interactive"].includes(f.readyState)?zaraz.init():e.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,0,"script");})(window,document);</script></head>
<body class="hold-transition login-page">
<div class="login-box">

<div class="card card-outline card-primary">
<div class="card-header text-center">
<a href="../../index2.html" class="h1"><b>My-MoOjaw</b></a>
</div>
<div class="card-body">
<p class="login-box-msg">Sign in to your My-MoOjaw Account</p>
<form method="post">
<div class="input-group mb-3">
<input id="text" type="text" class="form-control" name="user_name" placeholder="User Name">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-envelope"></span>
</div>
</div>
</div>
<div class="input-group mb-3">
<input id="text" type="password" class="form-control" name="password" placeholder="Password">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-lock"></span>
</div>
</div>
</div>
<div class="row">
<div class="col-8">
<div class="icheck-primary">
<input type="checkbox" id="remember">
<label for="remember">
Remember Me
</label>
</div>
</div>

<div class="col-4">
<button type="submit" class="btn btn-primary btn-block">Sign In</button>
</div>

</div>
</form>


<p class="mb-1">
<a href="forgot-password.html">I forgot my password</a>
</p>
<p class="mb-0">
<a href="register.php" class="text-center">Register a new membership</a>
</p>
</div>

</div>

</div>


<script src="plugins\jquery\jquery.min.js"></script>

<script src="plugins\bootstrap\js\bootstrap.bundle.min.js"></script>

<script src="dist\js\adminlte.min.js"></script>
</body>
</html>

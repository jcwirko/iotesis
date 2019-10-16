<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IoTesis</title>
    <link rel="stylesheet" href="{{asset('/libs/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/libs/font-awesome/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('libs/animate/animate.css')}}">
    <link rel="stylesheet" href="{{asset('libs/inspinia/style.css')}}">
    <link rel="stylesheet" href="{{asset('styles.css')}}">
</head>

<body class="gray-bg login ">
<div class="middle-box text-center loginscreen animated fadeInDown">
    <div class="">
        <div>
            <img src="{{asset('/backgrounds/iot1.png')}}" alt="" style="width: 300px;" class="img-circle">
        </div>
        <h2 style="font-size: 45px;"><strong>IoTesis</strong></h2>

        <form class="m-t" role="form" action="{{asset('iot')}}">
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Username" required=""
                       value="elon.musk@gmail.com">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" required="" value="asdasd">
            </div>
            <button type="submit" class="btn btn-success block full-width m-b">Login</button>
        </form>
        <p class="m-t"><small><strong>Ingeniería en Informática</strong> </small></p>
    </div>
</div>

<script src="{{asset('libs/jquery/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('libs/popper/popper.min.js')}}"></script>
<script src="{{asset('libs/bootstrap/bootstrap.js')}}"></script>

</body>

</html>

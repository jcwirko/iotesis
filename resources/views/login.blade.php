<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IoTesis</title>
        <link rel="stylesheet" href="{{asset('/libs/bootstrap/bootstrap.min.css')}}">
        <link href="{{asset('/libs/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
        <link href="{{url('libs/animate/animate.css')}}" rel="stylesheet">
        <link href="{{url('libs/inspinia/style.css')}}" rel="stylesheet">
        <link href="{{url('css.css')}}" rel="stylesheet">
    </head>

<body class="gray-bg login ">
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div class="">
            <div >
                <img src="{{url('/backgrounds/iot1.png')}}" alt="" style="width: 300px;" class="img-circle">
            </div>
            <h2 style="font-size: 45px;"><strong>IoTesis</strong></h2>

            <form class="m-t" role="form" action="{{url('iot')}}">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Username" required="" value="juanblariza@gmail.com">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="" value="asdasd">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
            </form>
            <p class="m-t"> <small>Trabajo final de carrera 2019 - <strong>Lalalel / beuJs</strong> </small> </p>
        </div>
    </div>

    <script src="{{url('libs/jquery/jquery-3.1.1.min.js')}}"></script>
    <script src="{{url('libs/popper/popper.min.js')}}"></script>
    <script src="{{url('libs/bootstrap/bootstrap.js')}}"></script>

</body>

</html>

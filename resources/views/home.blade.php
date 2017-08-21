<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
   
    <link rel="stylesheet" href="css/style2.css">

</head>
<body onload="majChrono();demarrerChrono()">
    <div id="app">
        <nav class="navbar">
                <div class="navbar-header">
                    <!-- Branding Image -->
                    <a href="{{ url('/') }}"><img src="img/logo_save.png" alt="logo" id="logo"/></a>
                    <ul class="log_name">
                        <li class="user_name">
                            <a href="#" aria-expanded="false"> {{ Auth::user()->name }}</a>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><img src="img/delete.png" alt="logout"/></a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Right Side Of Navbar -->
                    
                </div>
        </nav>
        <div class="container_time">
            <span class="time" id="minute">0 :</span>
            <span class="time" id="second">0</span>
        </div>
        <iframe id="ifr" src='http://www.programmr.com/embediframe.php?action=tf&path=Alexandre_MICHEL/files/challenges/c_1503259312/Challenge.java' width='100%' height='700' frameborder='0'></iframe>

        <pre>
            <button class="btn btn-primary" onclick="submitResult()">Valider</button>
        </pre>

        <pre>
            <h4>JSON response:</h4>
            <pre id="json_op" style="height:300px;"></pre>
        </pre>
    </div>

    <!-- Scripts -->
    <script>
    const testCodeMessage="mtestcode";
    const submitCode="msubmitcode";

    function testCode(){
        //send mtestcode string from parent window to Programmr's iFrame
        var pr_win = document.getElementById("ifr").contentWindow;
        pr_win.postMessage(testCodeMessage,"*");
    }

    function submitResult(){
        $("#json_op").html("Loading...")
        //send msubmitcode string from parent window to Programmr's iFrame
        var pr_win = document.getElementById("ifr").contentWindow;
        console.log("from parent to iframe,,");
        pr_win.postMessage(submitCode,"*");
    }

    window.onload=function(){
        console.log("onload");
        var messageEle=document.getElementById('message');
    }

    function receiveMessage(e){
        //After getting any messages from Programmr window(iFrame)
        if(!e.origin=="http://www.programmr.com"){
            console.log("domain not allowed");
            return; 
        }

    //JSON data recieved from Programmr iFrame
    console.log("recieved");        
    var obj=JSON.parse(e.data);
    var param=obj.path;
    var token=obj.token;
    //Do your API call here after getting 'path' and 'token'    
    // $.get('API/eval', function(data) {
    //     console.log(data);
    //     //simply showing a JSON you can process the information further
    //     $("#json_op").html(JSON.stringify(data,null,2)); 
    // });

    $.ajax({
      url: 'API/eval?path'+param+'&token='+token,
      success: function(data) {
        console.log(data);
        //simply showing a JSON you can process the information further
        $("#json_op").html(JSON.stringify(data,null,2)); 
        }
    });
  
} 
//Event listener to handle the event on getting messages from Programm'r window
window.addEventListener("message", receiveMessage, false);
</script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>















@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



<!doctype html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Space Science Website Template</title>
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/mobile.css')}}">
    <script src="{{asset('asset/js/mobile.js')}}" type="text/javascript"></script>
</head>
<body>
<div id="page">
    <div id="header">
        <div>
            <a href="{{url('index')}}" class="logo"><img src="{{asset('asset/images/logo.png')}}" alt=""></a>
            <ul id="navigation">
                <li class="selected">
                    <a href="{{url('index')}}">Home</a>
                </li>
                <li>
                    <a href="{{url('about')}}">About</a>
                </li>
                <li class="menu">
                    <a href="{{url('project')}}">Projects</a>
                    <ul class="primary">
                        <li>
                            <a href="{{url('proj1')}}">proj 1</a>
                        </li>
                    </ul>
                </li>
                <li class="menu">
                    <a href="{{url('blog')}}">Blog</a>
                    <ul class="secondary">
                        <li>
                            <a href="{{url('singlepost')}}">Single post</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{url('contact')}}">Contact</a>
                </li>
            </ul>
        </div>
    </div>

@yield('content')


    <div id="footer">
        <div class="connect">
            <div>
                <h1>FOLLOW OUR  MISSIONS ON</h1>
                <div>
                    <a href="http://freewebsitetemplates.com/go/facebook/" class="facebook">facebook</a>
                    <a href="http://freewebsitetemplates.com/go/twitter/" class="twitter">twitter</a>
                    <a href="http://freewebsitetemplates.com/go/googleplus/" class="googleplus">googleplus</a>
                    <a href="http://pinterest.com/fwtemplates/" class="pinterest">pinterest</a>
                </div>
            </div>
        </div>
        <div class="footnote">
            <div>
                <p>&copy; 2023 BY SPACE PROSPECTION | ALL RIGHTS RESERVED</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>

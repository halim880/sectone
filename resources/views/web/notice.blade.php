<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href ="{{asset('General/general.css')}}">
    <style>
        .EventContainer{
            height: auto;
            width: 80vw;
            display: flex;
            flex-wrap: wrap;
            position: absolute;
            top: 100px;
        }
        .EventCards{
            height: auto;
            display: flex;
            flex-wrap: wrap;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <h1>PUSAB</h1>
        </div>
        <nav class="nav-list">
            <ul>
                <li onclick="goto('home')"><a>Home</a> </li>
                <li onclick="goto('posts')"><a>Blog</a> </li>
                <li onclick="goto('contact_us')"><a href="">Contact</a> </li>
                <li onclick="goto('events')"><a href="">Events</a></li>
            </ul>
        </nav>
    </header>
    <div class="Container">
        <aside>
            <nav class="sidenav-list">
                <ul>
                    <li onclick="goto('home')"><a>Home</a></li>
                    <li onclick="goto('about')"><a>About</a></li>
                    <li onclick="goto('posts')"><a>Blog</a></li>
                    <li onclick="goto('contact_us')"><a>Contactn us</a></li>
                    <li onclick="goto('events')"><a>Events</a></li>
                    <li onclick="goto('members')"><a>Members</a></li>
                    <li onclick="goto('advisors')"><a>Our Advisors</a></li>
                    <li onclick="goto('login')"><a>Login</a></li>
                </ul>
            </nav>
            <div class="sidebar-image">
                <img src="1.jpeg" alt="">
            </div>
        </aside>

        <div class="Content">

        </div>
    </div>
    <footer>
        <div class="copyRight">
            <h3>Design & Developed by ABDUL HALIM</h3>
        </div>
    </footer>

{{-- **************************************/Starts JavaScript Code/************************************** --}}
    <script>
        function goto(url){
            window.location = url;
        }
    </script>
{{-- **************************************/Ends JavaScript Code/************************************** --}}

</body>
</html>


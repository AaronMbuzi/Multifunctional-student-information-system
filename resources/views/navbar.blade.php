<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="viewport" content="width=device-width">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" class="re">
        <!--<link rel="stylesheet" href="/css/mvp.css">-->
        <link rel="stylesheet" href="//writ.cmcenroe.me/1.0.4/writ.min.css">
        <style>
            *{
                margin:0;
                padding:0;
                font-family: 'Poppins', sans-serif;
            }
            nav{
                height: 6rem;
                display: flex;
                justify-content: space-between;
                align-items: center;
                border-bottom: 2px solid #eee;
                padding-left: 2%;
                padding-right: 2%;
            }
            nav .logo{
                text-decoration: none;
                font-size: 40px;
                font-weight: 700;
                color: #016701;
            }
            .nav-links{
                flex: 1;
                text-align: right;
            }
            .nav-links ul li{
                list-style: none;
                display: inline-block;
                padding: 8px 12px;
                position: relative;
            }
            .nav-links ul li a{
                color: #016701;
                text-decoration: none;
                font-size: 18px;
            }
            .nav-links ul li ::after{
                content: '';
                width: 0%;
                height: 2px;
                background: blueviolet;
                display: block;
                margin: auto;
                transition: 0.5s;
            }
            .nav-links ul li:hover ::after{
                width: 100%;
            }
            .fa{
                display: none;
            }
            .a{
                height: 3px;
                width: 25px;
                background-color: #016701;
                margin-top: 4px;
            }
            @media screen and (max-width: 900px){
                nav{
                    height: 5rem;
                }
            }
            @media screen and (max-width: 600px){
                nav{
                    height: 5rem;
                }
                .text-box h1{
                    font-size: 20px;
                }
                .nav-links ul li{
                    display: block;
                }
                .nav-links ul li a{
                    color: #016701;
                }
                .nav-links{
                    position: fixed;
                    background: #ff8c00;
                    height: 100vh;
                    width: 200px;
                    top: 0;
                    right: -200px;
                    text-align: left;
                    z-index: 2;
                    transition: 1s;
                }
                nav .fa{
                    display: block;
                    color: #016701;
                    margin: 5px;
                    font-size: 22px;
                    cursor: pointer;
                }
                .fa-close{
                    padding-left: 10px;
                    padding-top: 10px;
                }
                .nav-links ul{
                padding: 30px;  
                }
                .center-table {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                }
            }
        </style>
    </head>
    <body data-rsssl=1>
        <nav>
            <a href="/test" class="logo">Student Information</a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-close" aria-hidden="true" onclick="hideMenu()">X</i>

                <ul>
                    <li><a href="/test">Home</a></li>
                    <li><a href="/bio">Bio</a></li>
                    <li><a href="/accomodation">Acommodation</a></li>
                    <li><a href="/finances">Finances</a></li>
                    <li><a href="/registration">Registration</a></li>
                    <li><a href="/results">Results</a></li>
                </ul>
            </div>
            <i class="fa fa-menu" aria-hidden="true" onclick="showMenu()">
                <div class="a"></div>
                <div class="a"></div>
                <div class="a"></div>
            </i>
        </nav>
            <!--body-->
            @yield('content')
            <!--body-->
            
        <script>

            var navLinks = document.getElementById("navLinks");
            function showMenu() {
                navLinks.style.right = "0";
            }
            function hideMenu() {
                navLinks.style.right = "-200px";
            }
        </script>
        <!---->
    
    </body>
</html>
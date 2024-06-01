<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PWTI - 225150601111007 - RENGGANIS AYU NURLAILA</title>

    <!-- style css -->
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Playfair Display', serif;
            text-decoration: none;
            list-style: none;
            scroll-behavior: smooth; 
        }

        :root,
        :root.light{
            --bg-color: #002447;
            --second-bg-color: #fbeceb;
            --layer-bg-color: #fbeceb;
            --layer-text-color: #373234;
            --text-color: #373234; 
            --second-text-color: #17252a;
            --default-text-color: #fff;
            --main-color: #e6005c;
            --second-color: #feb249;

            --big-font: 5rem;
            --h2-font: 3rem;
            --p-font: 1.1rem;
        }

        :root.dark{
            --bg-color: #373234;
            --second-bg-color: #49525a;
            --layer-bg-color: #fbeceb;
            --layer-text-color: #373234;
            --text-color: #fff; 
            --second-text-color: #fff;
            --default-text-color: #fbeceb;
            --main-color: #e6005c;
            --second-color: #feb249;

            --big-font: 5rem;
            --h2-font: 3rem;
            --p-font: 1.1rem;
        }

        body{
            background: var(--bg-color);
            color: var(--text-color);
        }

        header {
            position: fixed;
            top: 0;
            right: 0;
            width: 100%;
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px 5%;
            background: transparent;
            transition: all .30s ease;
            border-bottom: 1px solid transparent;
        }

        .colorBtn{
            padding: 5px;
            justify-content: center;
            align-content: center;
            border-style: none;
            border-radius: 50%;
            background-color: var(--second-bg-color);
            cursor: pointer;
            color: var(--text-color);
        }

        .colorBtn i{
            height: 100%;
            width: 100%;
            object-fit: cover;
            font-size: 20px;
        }

        .colorBtn i:hover{
            transition: all .30s ease;
            transform: scale(1.3);
        }

        .colorBtn.light{
            display: none;
        }

        .dark .colorBtn.light{
            display: block;
        }

        .dark .colorBtn.dark{
            display: none;
        }

        .logo{
            color: var(--default-text-color);
            font-size: 35px;
            font-weight: 700;
            letter-spacing: 1px;
        }

        span{
            color: var(--main-color);
        }

        .navlist{
            display: flex;
        }

        .navlist a{
            font-size:17px;
            font-weight: 1000;
            color: var(--default-text-color);
            margin: 0 25px;
            transition: all .30s ease;
            letter-spacing: 0.5;
        }

        .navlist a:hover{
            color: var(--main-color);
            letter-spacing: 1;
            border: 1px solid var(--main-color);
            padding: 5px 10px;
        }

        .navlist a.active{
            color: var(--main-color);
        }

        #menu-icon{
            font-size: 35px;
            color: var(--text-color);
            margin-left: 25px;
            z-index: 10001;
            cursor: pointer;
            display: none;
        }

        #menu-icon:hover{
            transform: scale(1.1);
            transition: all .30s ease;
        }

        .button{
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .btn{
            display: inline-block;
            padding: 12px 28px;
            background: var(--main-color);
            color: var(--default-text-color);
            font-size: 1.1rem;
            font-weight: 600;
            border: 1px solid transparent;
            border-radius: 5px;
            transition: all .30s ease-in-out;
            margin-bottom: 1.5rem;
        }

        .btn:hover{
            transform: scale(1.05) translateX(-10px);
            letter-spacing: 2;
            cursor: pointer;
            background: var(--bg-color);
        }

        header.sticky{
            background: var(--bg-color);
            padding: 10px 5%;
        }

        .portofolio{
            padding-left: 10%;
            padding-right: 10%;
            padding-top: 8%;
            padding-bottom: 5%;
            height: max-content;
            margin-bottom: 2rem;
        }

        .portofolio-text p{
            color: var(--second-color);
            font-size: 15px;
            margin-bottom: 15px;
            text-align: center;
        }

        .portofolio-text h2{
            font-size: var(--h2-font);
            line-height: 1;
            color: var(--default-text-color);
            text-align: center;
        }

        .portofolio-content{
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, auto));
            align-items: center;
            gap: 2.5rem;
            margin-top: 5rem;
        }

        .row{
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            cursor: pointer;
        }

        .row img{
            width: 100%;
            border-radius: 8px;
            display: block;
            transition: transform 0.5s;
        }

        .layer{
            width: 100%;
            height: 0;
            background: radial-gradient(circle, var(--layer-bg-color) 45%, var(--main-color));
            position: absolute;
            border-radius: 0px;
            left: 0;
            right: 0;
            bottom: 50%;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 0 40px;
            transition: all .30s cubic-bezier(0.815, 0.005, 0.18, 1.005);
        }

        .layer h5{
            font-size: xx-large;
            font-weight: 800;
            margin-bottom: 15px;
            color: var(--layer-text-color);
        }

        .layer p{
            color: var(--layer-text-color);
            font-size: var(--p-font);
            font-weight: 500;
            line-height: 1.8;
        }

        .row:hover img{
            transform: scale(1.1);
        }

        .row:hover .layer{
            bottom: 0;
            height: 100%;
        }

        .footer{
            padding: 20px 50px;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            gap: 2rem;
            background: var(--bg-color);
        }

        .last-text p{
            color: var(--default-text-color);
            font-size: 14px;
        }

        @media (max-width: 1480px){
            header{
                padding: 12px 2.5%;
                transition: .1s;
            }
            header.sticky{
                padding: 10px 2.5%;
                transition: .1s;
            }
            section{
                padding: 110px 3% 60px;
            }
            .end{
                padding: 15px 3%;
            }
        }

        @media (max-width: 1100px){
            :root{
                --big-font: 4rem;
                --h2-font: 2.5rem;
                --p-font: 1rem;
                transition: .1s;
            }
        }

        @media (max-width: 840px){
            .navlist{
                display: none;
            }
            .logo{
                display: none;
            }
        }

        @media (max-width: 840px){
            :root{
                --big-font: 3rem;
                --h2-font: 1.5rem;
                --p-font: 0.5rem;
                transition: .1s;
            }
            .navlist{
                display: none;
            }
            .logo{
                display: none;
            }
            .box{
                width: 250px;
            }
            .portofolio-content{
                display: flex;
                flex-direction: column-reverse;
            }
        }
    </style>

    <!--boxicons link-->
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!--google font link-->   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600;700&family=Playfair+Display:ital,wght@0,400;0,600;1,400;1,600;1,800&display=swap" rel="stylesheet">

</head>
<body>

    <!--header design-->
    <header>
        <a href="#" class="logo">Ayu<span>'s Page</span></a>
        <ul class="navlist">
            <li style="list-style-type:none;"><a style="text-decoration:none" href="home">Home</a></li>
            <li style="list-style-type:none;"><a style="text-decoration:none" href="about">About</a></li>
            <li style="list-style-type:none;"><a style="text-decoration:none" href="skills">Skill</a></li>
            <li style="list-style-type:none;"><a style="text-decoration:none" href="project">Project</a></li>
            <li style="list-style-type:none;"><a style="text-decoration:none" href="contact">Contact Me</a></li>
        </ul>

        <!--theme section design-->
        <div class="theme-switch">
            <button class="colorBtn light" onclick="setTheme('Light')" title="Light Mode"><i class='bx bxs-moon'></i></button>
            <button class="colorBtn dark" onclick="setTheme('Dark')" title="Dark Mode"><i class='bx bxs-sun'></i></button>
        </div>
    </header>

    <!--portofolio section design-->
    <section class="portofolio" id="portofolio">
        <div class="portofolio-text">
            <p>Portofolio</p>
            <h2><span>Latest</span> Project</h2>
        </div>

        <div class="portofolio-content">
            <div class="row">
                <img src="img/Portofolio.png" alt="portofolio 1">
                <div class="layer">
                    <h5>FlowReach</h5>
                    <p>Web-based e-commerce application design</p>
                </div>
            </div>

            <div class="row">
                <img src="img/Portofolio(1).png" alt="portofolio 2">
                <div class="layer">
                    <h5>Lumie</h5>
                    <p>Mobile based game design</p>
                </div>
            </div>

            <div class="row">
                <img src="img/Portofolio(2).png" alt="portofolio 3">
                <div class="layer">
                    <h5>CAnFAS</h5>
                    <p>Design a desktop-based notes application</p>
                </div>
            </div>

            <div class="row">
                <img src="img/Portofolio(3).png" alt="portofolio 3">
                <div class="layer">
                    <h5>Seventeen Fan Website</h5>
                    <p>Design a web-based kpop fan website</p>
                </div>
            </div>

            <div class="row">
                <img src="img/Portofolio(4).png" alt="portofolio 3">
                <div class="layer">
                    <h5>Cybershield</h5>
                    <p>Design a mobile based Computer Ethics Learning</p>
                </div>
            </div>
        </div>
    </section>

    <!--footer section design-->
    <section class="footer">
        <div class="last-text">
            <p>Copyright © 2023 Rengganis Ayu Nurlaila. All Rights Reserved</p>
        </div>
    </section>

    <!-- js scripts -->
    <script type="text/javascript">
        const header = document.querySelector("header");
        window.addEventListener("scroll", function() {
            header.classList.toggle("sticky", window.scrollY > 100);
        })

        const setTheme = theme => document.documentElement.className = theme;

        document.getElementById('theme-select').addEventListener('change', function() {
            setTheme(this.value);
        });
    </script>
</body>
</html>
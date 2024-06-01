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
            color: var(--text-color);
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
            color: var(--text-color);
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
            background: var(--second-bg-color);
            padding: 10px 5%;
        }

        .skills{
            background: var(--second-bg-color);
            padding-left: 10%;
            padding-right: 10%;
            padding-top: 8%;
            padding-bottom: 5%;
        }

        .main-text{
            text-align: center;
        }

        .main-text h2{
            font-size: var(--h2-font);
            line-height: 1;
            color: var(--text-color);
        }

        .main-text p{
            text-align: center;
            margin-top: 20px;
            font-size: 20px;
            font-weight: 500;
        }

        .skills-content{
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            align-items: center;
            gap: 2.5rem;
            margin-top: 5rem;
        }

        .box{
            background: var(--bg-color);
            padding: 35px 45px;
            border-radius: 8px;
            transition: all .30s ease;
        }

        .box h3{
            font-size: 24px;
            font-weight: 600;
            color: var(--default-text-color);
            margin-bottom: 35px;
        }

        .box:hover{
            transform: translateY(-8px);
            cursor: pointer;
        }

        .s-icons i{
            font-size: 35px;
            margin-bottom: 20px;
            color: var(--main-color);
        }

        .s-bar{
            height: 14px;
            background: var(--text-color);
            border-radius: 3px;
        }

        .s-per{
            height: 14px;
            background: var(--second-color);
            border-radius: 3px;
            position: relative;
            animation: fillbar 2.5s 1;
        }

        .s-per::before{
            content: attr(per);
            position: absolute;
            padding: 4px 6px;
            background: var(--second-bg-color);
            border-radius: 4px;
            font-size: 12px;
            font-weight: 600;
            font-family: 'Times New Roman', Times, serif;
            top: -35px;
            right: 0;
            transform: translateX(50%);
        }

        .s-per::after{
            content: "";
            position: absolute;
            width: 10px;
            height: 10px;
            background: var(--second-bg-color);
            top: -20px;
            right: 0;
            transform: translateX(50%) rotate(45deg);
            border-radius: 2px;
        }

        @keyframes fillbar{
            from{
                width: 0;
            }
            to{
                width: 100%;
            }
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
            .home-text h3{
                font-size: 1.5rem;
            }
            .home{
                height: 87vh;
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
            .skills-content{
                display: flex;
                flex-direction: column-reverse;
            }
            .box{
                width: 250px;
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

    <!--skill section design-->
    <section class="skills" id="skills">
        <div class="main-text">
            <h2><span>My</span> Skills</h2>
            <p>These are my skills in programming and design</p>
        </div>

        <div class="skills-content">
            <div class="box">
                <div class="s-icons">
                    <i class='bx bxl-figma' ></i>
                </div>
                <h3>Figma</h3>
                <div class="s-bar">
                    <div class="s-per" per="85%" style="max-width: 85%;"></div>
                </div>
            </div>

            <div class="box">
                <div class="s-icons">
                    <i class='bx bxl-java' ></i>
                </div>
                <h3>Java</h3>
                <div class="s-bar">
                    <div class="s-per" per="50%" style="max-width: 50%;"></div>
                </div>
            </div>

            <div class="box">
                <div class="s-icons">
                    <i class='bx bxl-css3'></i>
                </div>
                <h3>CSS</h3>
                <div class="s-bar">
                    <div class="s-per" per="70%" style="max-width: 70%;"></div>
                </div>
            </div>

            <div class="box">
                <div class="s-icons">
                    <i class='bx bxl-html5' ></i>
                </div>
                <h3>HTML</h3>
                <div class="s-bar">
                    <div class="s-per" per="70%" style="max-width: 70%;"></div>
                </div>
            </div>

            <div class="box">
                <div class="s-icons">
                    <i class='bx bxl-javascript'></i>
                </div>
                <h3>JavaScript</h3>
                <div class="s-bar">
                    <div class="s-per" per="55%" style="max-width: 55%;"></div>
                </div>
            </div>

            <div class="box">
                <div class="s-icons">
                    <i class='bx bxl-php'></i>
                </div>
                <h3>PHP</h3>
                <div class="s-bar">
                    <div class="s-per" per="50%" style="max-width: 50%;"></div>
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
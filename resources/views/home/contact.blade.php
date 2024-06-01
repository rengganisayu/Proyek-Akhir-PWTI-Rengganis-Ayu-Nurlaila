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

        .contact{
            background-color: var(--second-bg-color);
            display: flex;
            align-items: center;
            padding-left: 10%;
            padding-right: 10%;
            padding-top: 8%;
            padding-bottom: 5%;
        }

        .contact-text h2{
            font-size: var(--h2-font);
            line-height: 1;
            margin-bottom: 30px;
        }

        .list{
            margin-bottom: 2.8rem;
        }

        .list li{
            margin-top: 12px;
            margin-bottom: 5px;
        }

        .list li a{
            display: block;
            color: var(--second-text-color);
            font-size: var(--p-font);
            font-weight: 500;
            transition: all .30s ease;
            font-family:'Josefin Sans';
        }

        .list li a:hover{
            color: var(--text-color);
            transform: translateX(5px);
            letter-spacing: 0.3;
            font-weight: bolder;
        }

        .contact-icons i{
            height: 40px;
            width: 40px;
            background: var(--main-color);
            color: var(--default-text-color);
            font-size: 20px;
            display: inline-flex;
            align-items: center;
            justify-self: center;
            border-radius: 8px;
            padding: 10px 10px;
            margin-right: 15px;
            margin-bottom: 1rem;
            transition: all .30s ease;
        }

        .contact-icons i:hover{
            background: var(--bg-color);
            color: var(--default-text-color);
            transform: translateY(-5px);
        }

        .contact-icons p{
            color: var(--second-text-color);
            font-size: var(--p-font);
            font-weight: bolder;
            line-height: 1.8;
            margin-top: 20px;
            margin-bottom: 20px;
            font-family: 'Times New Roman', Times, serif;
        }

        .identity h4{
            color: var(--second-text-color);
            font-size: var(--p-font);
            line-height: 1.8;
            margin-top: 20px;
            font-family: 'Times New Roman', Times, serif;
        }

        .identity p{
            color: var(--second-text-color);
            font-size: var(--p-font);
            line-height: 1.8;
            font-family: 'Times New Roman', Times, serif;
        }

        .footer{
            padding: 20px 50px;
            display: flex;
            flex-wrap: wrap;
            align-items: baseline;
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

        @media (max-width: 920px){
            .contact{
                grid-template-columns: 1fr;
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

    <!--contact section design-->
    <section class="contact" id="contact">
        <div class="contact-text">
            <h2>Contact <span>Me!</span></h2>
            <div class="list">
                <li><a href="mailto:rengganisayu@student.ub.ac.id">rengganisayu@student.ub.ac.id</a></li>
            </div>
            <div class="cv-btn">
                <a href="" class="btn">Download CV</a>
            </div>
            <div class="contact-icons">
                <p>Follow Me On: </p>
                <a href="https://www.instagram.com/rrengganisayu/" target="_blank"><i class='bx bxl-instagram-alt'></i></a>
                <a href="https://twitter.com/rren_deyn" target="_blank"><i class='bx bxl-twitter'></i></a>
                <a href="https://open.spotify.com/user/31v2gvtst3m272rm3aan7tktl3su?si=70341ee102bb4645" target="_blank"><i class='bx bxl-spotify'></i></a>
                <a href="https://www.tiktok.com/@a.bibliophile_?is_from_webapp=1&sender_device=pc" target="_blank"><i class='bx bxl-tiktok'></i></a>
            </div>
            <div class="identity">
                <h4>This Website Is Made By:</h4>
                <p>Rengganis Ayu Nurlaila</p>
                <p>225150601111007</p>
                <p>Information Technology Education</p>
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
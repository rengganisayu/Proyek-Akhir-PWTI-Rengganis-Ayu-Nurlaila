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

        .home{
            padding: 5% 10%;
            position: relative;
            width: 100%;
            height: 100vh;
            background: var(--second-bg-color);
            background-image: url(img/Frame6.png);
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            gap: 30px;
        }

        .slide{
            margin-bottom: 10px;
            display: inline-block;
            color: var(--second-text-color);
            font-size: 20px;
            font-weight: 600;
        }

        .home-text h1{
            font-size: var(--big-font);
            font-weight: 700;
            color: var(--text-color);
            line-height: 1.1;
            margin: 0 0 8px;
        }

        .home-text h3{
            font-size: 2rem;
            font-weight: 700;
            color: var(--main-color);
            line-height: 1.1;
            margin: 0 0 25px;
        }

        .home-text p{
            font-size: var(--p-font);
            font-weight: 600;
            color: var(--second-text-color);
            line-height: 1.8;
            margin-bottom: 40px;
            letter-spacing: 0.5;
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

        .about{
            padding: 5% 10%;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            align-items: center;
            gap: 4rem;
        }

        .about-img img{
            max-width: 350px;
            height: auto;
            width: 100%;
            border-radius: 8px;
        }

        .about-text h2{
            font-size: var(--h2-font);
            color: #fff;
            line-height: 1;
        }

        .about-text h4{
            font-size: 24px;
            font-weight: 800;
            color: var(--second-color);
            line-height: 1.7;
            margin: 15px 0 30px;
        }

        .about-text p{
            color: var(--default-text-color);
            font-size: var(--p-font);
            line-height: 1.8;
            margin-bottom: 1rem;
        }

        .text-highlight{
            color: var(--second-color);
        }

        .photo{
            padding: 5% 10%;
            background-image: url(img/Frame7.png);
        }

        .photo-contents{
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            align-items: center;
            gap: 2.5rem;
            margin-bottom: 1.5rem;
        }

        .photo-text h2{
            font-size: var(--h2-font);
            color: #fff;
            line-height: 1;
            margin-bottom: 2.5rem;
        }

        .about-photo-img img{
            max-width: 530px;
            height: auto;
            width: 100%;
            border-radius: 8px;
        }

        .about-photo-img img:hover{
            transform: scale(1.05);
            transition: all .30s ease-in-out;
            cursor: pointer;
            border-radius: 10px;
            box-shadow: 1px solid var(--second-bg-color);
        }

        .skills{
            background: var(--second-bg-color);
            padding: 5% 10%;
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

        .portofolio{
            padding: 5% 10%;
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

        .contact{
            padding: 5% 10%;
            background-color: var(--second-bg-color);
            display: flex;
            align-items: center;
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

        .contact-form form{
            position: relative;
        }

        .contact-form  .form-input{
            width: 100%;
            padding: 14px;
            background: var(--bg-color);
            color: var(--default-text-color);
            border: none;
            outline: none;
            font-size: 15px;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .contact-form textarea{
            resize: none;
            height: 240px;
        }

        #submit{
            display: inline-block;
            font-size: 16px;
            font-weight: 600;
            background: var(--main-color);
            color: var(--default-text-color);
            width: 160px;
            height: 40px;
            transition: all .30s ease;
            padding: 10px 10px;
            align-content: center;
            justify-content: center;
        }

        #submit:hover{
            transform: scale(1.05);
            letter-spacing: 1;
            cursor: pointer;
            background: var(--bg-color);
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

        .top i{
            padding: 10px;
            border-radius: 8px;
            font-size: 15px;
            color: var(--default-text-color);
            background: var(--main-color);
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

        @media (max-width: 920px){
            .about{
                grid-template-columns: 1fr;
            }
            .about-img{
                text-align: center;
                order: 2;
            }
            .about-img img{
                width: 100%;
                height: auto;
                max-width: 100%;
            }
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
            .svt-frame iframe{
                max-width: 450px;
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
            .photo-contents{
                gap: 0.5rem;
            }
            .svt-frame iframe{
                max-width: 250px;
            }
            .skills-content{
                display: flex;
                flex-direction: column-reverse;
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

    <!--home section design-->
    <section class="home" id="home">
        <div class="home-text">
            <div class="slide">Hello I'm</div>
            <h1>Rengganis Ayu Nurlaila</h1>
            <h3>UI/UX DESIGNER</h3>
            <p>Brawijaya University student since 2022</p>
        </div>
    </section>

    <!--about section design-->
    <section class="about" id="about">
        <div class="about-img">
            <img src="img/IMG_9088.png" alt="profile">
        </div>
        <div class="about-text">
            <h2>About <span>Me</span></h2>
            <h4>My name is Ayu.</h4>
            <p>I am a student from the city of <span class="text-highlight">Malang</span> who is currently undergoing my third semester at Brawijaya University Malang. I have interest in application design and web design. I can spend all day creating the best application design. In the midst of my daily life as a student, I do some of my hobbies, such as <span class="text-highlight">taking random photography and watching youtube</span>.</p>
        </div>
    </section>

    <!--photo section design-->
    <section class="photo">
        <div class="photo-text">
            <h2>My <span>Portraits</span></h2>
        </div>
        <div class="photo-contents">
            <div class="about-photo-img">
                <img src="img/photo1.jpg">
            </div>
            <div class="about-photo-img">
                <img src="img/photo2.jpg">
            </div>
            <div class="about-photo-img">
                <img src="img/photo3.jpg">
            </div>
            <div class="about-photo-img">
                <img src="img/photo4.jpg">
            </div>
            <div class="about-photo-img">
                <img src="img/photo6.jpg">
            </div>
            <div class="about-photo-img">
                <img src="img/photo7.jpg">
            </div>
            <div class="about-photo-img">
                <img src="img/photo8.jpg">
            </div>
            <div class="about-photo-img">
                <img src="img/photo9.jpg">
            </div>
        </div>
    </section>

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
    
    <!--contact section design-->
    <section class="contact" id="contact">
        <div class="contact-text">
            <h2>Contact <span>Me!</span></h2>
            <div class="list">
                <li><a href="mailto:rengganisayu@student.ub.ac.id">rengganisayu@student.ub.ac.id</a></li>
            </div>
            <div class="cv-btn">
                <a href="https://drive.google.com/file/d/1_057BEe-ONJm8DKftg04eSWr5Ky2kt46/view?usp=sharing" class="btn">Download CV</a>
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
        <div class="top">
            <a href="#home"><i class='bx bx-up-arrow-alt'> Back to top</i></a>
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
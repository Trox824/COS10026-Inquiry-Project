<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body id = "homepage">
    <!-- Navigation Bar-->
    <?php
        include("header.inc");
    ?>
<!--scroll Banner-->
    <div class = "body">
        <section class = "Homepagebanner">
            <div class = "banner1">
                <img class ="bannerimg" alt = "banner1" src="./images/banner1.png">   
                <div class = "text-box text-box1">
                    <aside>
                    <h1>General Information</h1>
                    <h5>Stylish Designs With Total Immersion</h5>  
                    <p>Get into your Youniverse with award-winning, precision-crafted laptops featuring the performance you demand to power your passions.
                    </p>
                    </aside>
                </div>    
            </div>  
            <div class = "banner2">
                <img class ="bannerimg" alt = "banner2" src="./images/banner2.png">   
                <div class = "text-box  text-box2">
                    <aside>
                        <h1>General Information</h1>
                        <h5>More Creative. Most Stunning</h5>  
                        <p>Pursue your passions with our latest laptops.</p>   
                    </aside>
                </div>     
            </div>   
            <div class = "banner4">
                <img class ="bannerimg" alt = "banner4" src="./images/banner4.png">   
                <div class = "text-box  text-box4" id ="textbox4">
                    <aside>
                        <h1>General Information</h1>
                        <h5>Premium design and expert craftsmanship</h5>   
                        <p>We obsess over details because you do. Meet the durable and lightweight XPS. Featuring machined aluminum and premium materials.</p> 
                    </aside>
                </div>     
            </div>  
            <div class = "banner5">
                <img class ="bannerimg" alt = "banner5" src="./images/banner5.jpg">   
                <div class = "text-box text-box5">
                    <aside>
                        <h1>General Information</h1>
                        <h5>Created for creators</h5>    
                        <p>Every XPS laptop badged with Creator Edition is fully equipped with the creative tools you need to make magic happen faster and better, so your art can be pushed to the edge.</p>
                    </aside>
                </div>
            </div>
            <div class="wrapper">
                <div class="link_wrapper">
                  <a href="#service">Explore More</a>
                  <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 268.832 268.832">
                      <path d="M265.17 125.577l-80-80c-4.88-4.88-12.796-4.88-17.677 0-4.882 4.882-4.882 12.796 0 17.678l58.66 58.66H12.5c-6.903 0-12.5 5.598-12.5 12.5 0 6.903 5.597 12.5 12.5 12.5h213.654l-58.66 58.662c-4.88 4.882-4.88 12.796 0 17.678 2.44 2.44 5.64 3.66 8.84 3.66s6.398-1.22 8.84-3.66l79.997-80c4.883-4.882 4.883-12.796 0-17.678z"/>
                    </svg>
                  </div>
                </div> 
            </div>
        </section>
        <article id = "service" class = "service">
            <aside class = "black">
                <div class = "text">
                    <h3>Power and performance</h3>
                    <br>
                    <p>You don’t settle. Neither do we. That’s why we pushed every limit of featured laptop. Featuring advanced thermal design, long battery life and powerful Intel® processors.</p>
                </div>
                <img alt = "power" src = "./images/Power.png">
            </aside>
            <aside class = "whitehomepage">
                <div class = "text">
                    <h3>Premium support you can trust</h3>
                    <br>
                    <p>With Premium Support helps you stay connected and productive with fast, dedicated expert help whenever you need it. Get one year of Premium Support included when you purchase an laptop.</p>
                </div>  
                <img alt = "Lady" src = "./images/xps-franchise-page-mod06-1920x1440.webp">
            </aside>
        </article>
    </div>    
	<?php
        include("footer.inc");
    ?>
</body>
</html>
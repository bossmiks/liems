<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="venues-images/EMS Albay Logo2.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMS Albay</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/index.style.css">
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}

header{
    z-index: 999;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 200px;
    transition: 0.5s ease;
}

header .brand img{
    width: 150px;
    height: auto;
}

header .brand:hover{
    color: #09a6d4;
}

header .navigation{
    position: relative;
}

header .navigation .navigation-items a{
    position: relative;
    color: #fff;
    font-size: 1em;
    font-weight: 500;
    text-decoration: none;
    margin-left: 30px;
    transition: 0.3s ease;
}

header .navigation .navigation-items a:before{
    content: '';
    position: absolute;
    background: #fff;
    width: 0;
    height: 3px;
    bottom: 0;
    left: 0;
    transition: 0.3s ease;
}

header .navigation .navigation-items a:hover:before{
    width: 100%;
    background: #09a6d4;
}

section{
    padding: 100px 200px;
}

.home {
    position: relative;
    width: 100%;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    flex-direction: column;
    background: rgba(0, 140, 255, 0.959);
}

.home:before{
    z-index: 777;
    content: '';
    position: absolute;
    background: rgba(251, 3, 3, 0.034);
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
}

.home .content{
    z-index: 888;
    color: #fff;
    width: 70%;
    margin-top: 50px;
    display: none;
}

.home .content.active{
    display: block;
}

.home .content h1{
    font-size: 4em;
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 5px;
    line-height: 75px;
    margin-bottom: 40px;
}

.home .content h1 span{
    font-size: .5em;
    font-weight: 600;
}

.home .content p{
    margin-bottom: 65px;
}

.home .content a{
    background: #fff;
    padding: 15px 35px;
    color: #09a6d4;
    font-size: 1.1em;
    font-weight: 500;
    text-decoration: none;
    border-radius: 2px;
}

.home .content a:hover{
    background: #7fcbd7;
    color: #fff;
}

.home .media-icons{
    z-index: 888;
    position: absolute;
    right: 30px;
    display: flex;
    flex-direction: column;
    transition: 0.5s ease;
}

.home .media-icons a{
    color: #fff;
    font-size: 1.6em;
    transition: 0.3s ease;
}

.home .media-icons a:not(:last-child){
    margin-bottom: 20px;
}

.home .media-icons a:hover{
    transform: scale(1.3);
    color: #5dd7fc;
}

.home img{
    z-index: 000;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.slider-navigation{
    z-index: 888;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    transform: translateY(80px);
    margin-bottom: 12px;
}

.slider-navigation .nav-btn{
    width: 12px;
    height: 12px;
    background: #fff;
    border-radius: 50%;
    cursor: pointer;
    box-shadow: 0 0 2px rgba(255, 255, 255, 0.5);
    transition: 0.3s ease;
}

.slider-navigation .nav-btn.active{ 
    background: #7fcbd7;
}

.slider-navigation .nav-btn:not(:last-child){
    margin-right: 20px;
}

.slider-navigation .nav-btn:hover{
    transform: scale(1);
}

.img-slide{
    position: absolute;
    width: 100%;
    clip-path: circle(0% at 0 50%);
}

.img-slide.active{
    clip-path: circle(150% at 0 50%);
    transition: 2s ease;
    transition-property: clip-path;
}

@media (max-width: 1040px){
    header{
        padding: 12px 20px;
    }
    section{
        padding: 100px 20px;
    }
    .home .media-icons{
        right: 15px;
    }
    header .navigation{
        display: none;
    }
    header .navigation.active{
        position: fixed;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        background: rgba(1, 1, 1, 0.5);
    }

    header .navigation .navigation-items a{
        color: #222;
        font-size: 1.2em;
        margin: 20px;
    }
    header .navigation .navigation-items a:before{
        background: #222;
        height: 5px;
    }
    header .navigation .navigation-items{
        background: #fff;
        width: 600px;
        max-width: 600px;
        margin: 20px;
        padding: 40px;
        display: flex;
        flex-direction: column;
        align-items: center;
        border-radius: 5px;
        box-shadow: 0 5px 25px rgb(1 1 1 / 20%);
    }
    .menu-btn{
        background: url(menu.png)no-repeat;
        background-size: 30px;
        background-position: center;
        width: 40px;
        height: 40px;
        cursor: pointer;
        transition: 0.3s ease;
    }
    .menu-btn.active{
        z-index: 999;
        background: url(close.png)no-repeat;
        background-size: 25px;
        background-position: center;
        transition: 0.3s ease;
    }
}

@media (max-width: 560px){
    .home .content h1{
        font-size: 3em;
        line-height: 60px;
    }
}
</style>
<body>

    <header>
        <a href="#" class="brand"><img src="venues-images/EMS Albay Logo2.png" alt=""></a>
        <div class="menu-btn">
            <div class="navigation">
                <div class="navigation-items">
                    <a href="#">Home</a>
                    <a href="about.php">About</a>
                    <a href="venues.php">Venues</a>
                    <a href="contact.php">Contact</a>
                </div>
            </div>
        </div>
    </header>

    <section class="home">
        <img decoding="async" class="img-slide active" src="venues-images/1.jpg" ></img>
        <img decoding="async" class="img-slide" src="venues-images/2.jpg" ></img>
        <img decoding="async" class="img-slide" src="venues-images/3.jpg" ></img>
        <img decoding="async" class="img-slide" src="venues-images/4.jpg" ></img>
        <img decoding="async" class="img-slide" src="venues-images/5.jpg" ></img>
        <div class="content active">
            <h1>EMS Albay<br><span>Crafting Unforgettable Moments, Your Way</span></h1>
            <p>This platform simplifies the entire event planning process, offering seamless scheduling, venue booking, ticketing, and attendee management. Tailored to meet the unique needs of Albay, EMS Albay enhances community engagement and promotes local culture. With real-time updates and a user-friendly interface, EMS Albay ensures that every event is organized efficiently and leaves a lasting impression. Create unforgettable moments with ease and precision, your way.</p>
          <a href="about.php">Read More</a>
        </div>
        <div class="content">
          <h1>EMS Albay<br><span>Turning Visions into Vibrant Events</span></h1>
          <p>This platform streamlines event planning with features like scheduling, venue booking, ticketing, and attendee management. Designed to cater to the unique needs of Albay, EMS Albay promotes local culture and enhances community engagement. With its user-friendly interface and real-time updates, it transforms your event visions into vibrant, memorable experiences. Organize with ease and bring your events to life with EMS Albay.</p>
          <a href="about.php">Read More</a>
        </div>
        <div class="content">
          <h1>EMS Albay<br><span>Where Every Detail Matter</span></h1>
          <p>This platform excels in streamlining every aspect of event planning, from scheduling and venue booking to ticketing and attendee management. Focused on the unique needs of Albay, EMS Albay fosters community engagement and celebrates local culture. With a user-friendly interface and real-time updates, it ensures meticulous attention to detail, making every event seamless and memorable. Trust EMS Albay to bring precision and excellence to your event planning, where every detail truly matters.</p>
          <a href="about.php">Read More</a>
        </div>
        <div class="content">
          <h1>EMS Albay<br><span>Designing Dreams, Delivering Joy</span></h1>
          <p>This platform simplifies every aspect of event planning, from scheduling and venue booking to ticketing and attendee management. Tailored to the unique needs of Albay, EMS Albay fosters community engagement and celebrates local culture. Its user-friendly interface and real-time updates ensure seamless organization, turning your event dreams into joyous, memorable realities. Experience effortless event planning and deliver unforgettable moments with EMS Albay.</p>
          <a href="about.php">Read More</a>
        </div>
        <div class="content">
          <h1>EMS Albay<br><span>We Create, You Celebrate</span></h1>
          <p>Our platform simplifies event planning with intuitive features for scheduling, venue booking, ticketing, and attendee management. Designed to reflect Albay's unique cultural identity, EMS Albay enhances community engagement and promotes local celebrations. With real-time updates and a user-centric approach, we handle the logistics so you can focus on enjoying unforgettable moments. Let EMS Albay bring your vision to life while you celebrate seamlessly.</p>
          <a href="about.php">Read More</a>
        </div>
        <div class="media-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
        <div class="slider-navigation">
            <div class="nav-btn active"></div>
            <div class="nav-btn"></div>
            <div class="nav-btn"></div>
            <div class="nav-btn"></div>
            <div class="nav-btn"></div>
        </div>
    </section> 
    <script src="index.script.js" defer data-deferred="1"></script> </body>
</html>
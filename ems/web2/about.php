<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="venues-images/EMS Albay Logo2.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/index.style.css">
    <title>EMS Albay</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');    

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
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
    background-color: #000;
}

header .brand img{
    width: 150px;
    height: auto;
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
    padding: 70px 10%;
}

.about{
    display: flex;
    text-decoration: none;
    position: relative;
    min-height: 100vh;
    width: 100%;
    justify-content: center;
    align-items: center;
}

.grid-container{
    margin-top: 100px;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 50px;
}

.grid-items{
    text-align: center;
}

.about .grid-container{
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-gap: 1.3rem;
    align-items: center;
}

.about .about-1 img{
    width: 560px;
}


.grid-items .texts h2{
    font-size: 3rem;
}

.grid-items .texts p{
    margin: 2rem 0rem .2rem;
    line-height: 1.3;
    font-size: 1rem;
    font-weight: 300;
}

.grid-items .images img{
    width: 560px;
}

.images img{
    --_g: 10% /45% 45% no-repeat linear-gradient(#000 0 0);
    --m: left var(--_i, 0%) top var(--_g), bottom var(--_i, 0%) left var(--_g),
    top var(--_i, 0%) right var(--_g), right var(--_i, 0%) bottom var(--_g);
    -webkit-mask: var(--m);
    filter: grayscale();
    transition: 0.3s linear;
    cursor: pointer;
}

.images img:hover{
    --_i: 10%;
    filter: grayscale(0);
}

.images{
    margin: 0;
    display: grid;
    min-height: 80vh;
    grid-auto-flow: column;
    place-content: center;
    gap: 40px;
}

footer{
    background-color: #000;
    color: #fff;
    padding: 20px;
    margin: 20px;
    text-align: center;
}

.footer-content{
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
}

.address,
.contact,
.social-icons,
.powered-by,
.book-now{
    margin: 10px;
}

.social-icons a{
    color: #fff;
    margin: 0 5px;
    font-size: 20px;
}

.book-now button{
    background-color: #fff;
    color: #876b38;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
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
                    <a href="index.php">Home</a>
                    <a href="about.php">About</a>
                    <a href="venues.php">Venues</a>
                    <a href="#footer">Contact</a>
                </div>
            </div>
        </div>
    </header>

    <section class="about">
        <div class="grid-container">
            <div class="grid-items">
                <div class="texts">
                    <h2>About EMS Albay</h2>
                    <p>is a cutting-edge Event Management System tailored specifically <br> for the vibrant region of Albay. This platform is designed to streamline <br> the entire event planning and execution process, making it an indispensable <br> tool for organizers of both small and large events. Whether you're coordinating a local <br> community gathering, a cultural festival, or a major conference, <br> EMS Albay has you covered. The system offers a suite of powerful features <br> including event scheduling, venue booking, ticketing, and attendee registration, <br> all in one user-friendly interface.</p>
                </div>
            </div>
            <div class="grid-items">
                <div class="images">
                    <img src="venues-images/oriental.webp" alt="">
                </div>
            </div>
            <div class="grid-items">
                <div class="images">
                    <img src="venues-images/proxy-by-oriental.jpeg" alt="">
                </div>
            </div>
            <div class="grid-items">
                <div class="text-2">
                    <h2>For Users & Attendees</h2>
                    <p>EMS Albay is designed to enhance the experience of attendees by providing <br> a seamless platform for event discovery, ticket purchase, and participation. <br> Users can easily find information about upcoming events, book tickets, <br> and receive real-time updates and notifications. The system ensures that they have all the necessary details at their fingertips, making their event experience more enjoyable and hassle-free.</p>
                </div>
            </div>
            <div class="grid-items">
                <div class="texts">
                    <h2>For Clients & Event Organizers</h2>
                    <p>EMS Albay streamlines the entire event management process, from planning to execution. It offers robust tools for scheduling, venue booking, ticketing, and attendee management. Organizers can efficiently manage their events, track registrations, and communicate with participants. The platform helps save time and resources, allowing organizers to focus on creating impactful and memorable events. Additionally, the system provides valuable insights and analytics to help improve future events.</p>
                </div>
            </div>
            <div class="grid-items">
                <div class="images">
                    <img src="venues-images/oriental.webp" alt="">
                </div>
            </div>
            <div class="grid-items">
                <div class="images">
                    <img src="venues-images/oriental.webp" alt="">
                </div>
            </div>
            <div class="grid-items">
                <div class="texts">
                    <h2>For Venue Managers</h2>
                    <p>EMS Albay simplifies venue management by offering a centralized platform for booking and scheduling. Venue managers can easily keep track of event dates, manage availability, and coordinate with event organizers. This ensures optimal utilization of spaces and reduces the chances of double bookings or scheduling conflicts. The system also aids in managing logistical requirements, ensuring that events run smoothly.</p>
                </div>
            </div>
            <div class="grid-items">
                <div class="texts">
                    <h2>For Local Community & Culture</h2>
                    <p>EMS Albay plays a crucial role in promoting local culture and fostering community engagement. By providing a platform that highlights regional events, traditions, and festivals, it helps preserve and celebrate the unique cultural identity of Albay. The system encourages community participation and supports local organizers in bringing their visions to life.</p>
                </div>
            </div>
            <div class="grid-items">
                <div class="images">
                    <img src="venues-images/oriental.webp" alt="">
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="footer-content">
            <div class="address">
                500 Terry Francine<br>
                Strett San Francisco<br>
                CA 94158
            </div>
            <div class="contact">
                <p>Tel: 123-456-7890</p>
                <p>Fax: 123-456-7890</p>
                <p>info@mysite.com</p>
            </div>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
            <div class="powered-by">
                &copy; 2024 by Lorem Ipsum Events.<br>
                Powered and Secured by Lorem.
            </div>
            <div class="book-now">
                <button>BOOK NOW</button>
            </div>
        </div>
    </footer>
</html>
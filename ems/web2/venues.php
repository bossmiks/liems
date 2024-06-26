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
    margin: 75px;
    padding: 100px 0px;
}

.container{
    font-family: 'Poppins', sans-serif;
    position: relative;
    overflow: hidden;
    margin: 20px;
    min-width: 420px;
    max-width: 580px;
    width: 100%;
    color: #141414;
    text-align: left;
    line-height: 1.5em;
    font-size: 17px;
}

.container *{
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    -webkit-transition: all 0.35s ease;
    transition: all 0.35s ease;
}

.venues{
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 50px;
    margin: 220px;
}

.container img{
    max-width: 100%;
    vertical-align: top;
}

.container .text{
    position: absolute;
    top: calc(77%);
    width: 100%;
    background-color: #fff;
    padding: 15px 25px 65px;
}

.container .text:before{
    position: absolute;
    content: '';
    z-index: 2;
    bottom: 100%;
    left: 0;
    width: 100%;
    height: 80px;
    background-image: -webkit-linear-gradient(top, transparent 0%, #fff 100%);
    background-image: linear-gradient(to bottom, transparent 0%, #fff 100%);
}

.container h3,
.container p{
    margin: 0 0 10px;
}

.container h3{
    font-weight: 300;
    font-size: 1.4em;
    line-height: 1.3em;
    font-family: 'Poppins', sans-serif;
    text-transform: uppercase;
}

.container p{
    font-size: 0.8em;
    letter-spacing: 1px;
    opacity: 0.9;
}

.container a{
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 2;
}

.container:hover .text,
.container.hover .text{
    top: 90px;
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
                    <a href="#">Venues</a>
                    <a href="contact.php">Contact</a>
                </div>
            </div>
        </div>
    </header>
    
    <section class="venues">
        <div class="container">
            <img src="venues-images/Concourse-Convention-Center.jpg" alt="">
            <div class="text">
                <h3>Concourse Convention Center</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum massa ligula, gravida eget hendrerit non, condimentum ac est. Pellentesque rhoncus,</p>
            </div>
            <a href=""></a>
        </div>
        <div class="container">
            <img src="venues-images/proxy-by-oriental.jpeg" alt="">
            <div class="text">
                <h3>Proxy by: The Oriental - Albay</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum massa ligula, gravida eget hendrerit non, condimentum ac est. Pellentesque rhoncus,</p>
            </div>
        </div>
        <div class="container">
            <img src="venues-images/la piazza.jpg" alt="">
            <div class="text">
                <h3>La Piazza Hotel & Convention Center</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum massa ligula, gravida eget hendrerit non, condimentum ac est. Pellentesque rhoncus,</p>
            </div>
        </div>
        <div class="container">
            <img src="venues-images/the-marison-hotel.jpg" alt="">
            <div class="text">
                <h3>The Marison Hotel</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum massa ligula, gravida eget hendrerit non, condimentum ac est. Pellentesque rhoncus,</p>
            </div>
        </div>
        <div class="container">
            <img src="venues-images/untitled.jpg" alt="">
            <div class="text">
                <h3>AVP Catering Services</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum massa ligula, gravida eget hendrerit non, condimentum ac est. Pellentesque rhoncus,</p>
            </div>
        </div>
        <div class="container">
            <img src="venues-images/st. ellis.jpg" alt="">
            <div class="text">
                <h3>Hotel St. Ellis</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum massa ligula, gravida eget hendrerit non, condimentum ac est. Pellentesque rhoncus,</p>
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
    <script src="index.script.js"></script>
</body>
</html>
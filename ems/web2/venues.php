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
    display: flex;
    width: 100%;
    padding: 4% 2%;
    box-sizing: border-box;
    height: 100vh;
}

.container .box{
    flex: 1;
    overflow: hidden;
    transition: .5s;
    margin: 0 2%;
    box-shadow: 0 20px 30px rgba(0, 0, 0, .1);
    line-height: 0;
}

.box > img{
    width: 200%;
    height: calc(100% - 10vh);
    object-fit: cover;
    transition: .5s;
}

.box > span{
    font-size: 3.8vh;
    display: block;
    text-align: center;
    height: 10vh;
    line-height: 2.6;
}

.box:hover{ flex: 1 1 50%;}
.box:hover > img {
    width: 100%;
    height: 100%;
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
                    <a href="#footer">Contact</a>
                </div>
            </div>
        </div>
    </header>
    
    <section class="venues">
        <div class="container">
            <div class="box">
                <img src="venues-images/the-marison-hotel.jpg" alt="">
                <span>Marison Hotel</span>
            </div>
            <div class="box">
                <img src="venues-images/oriental.webp" alt="">
                <span>Oriental Hotel</span>
            </div>
            <div class="box">
                <img src="venues-images/proxy-by-oriental.jpeg" alt="">
                <span>Proxy</span>
            </div>
            <div class="box">
                <img src="venues-images/Untitled.jpg" alt="">
                <span>AVP</span>
            </div>
            <div class="box">
                <img src="venues-images/the-marison-hotel.jpg" alt="">
                <span>Ipsum</span>
            </div>
            <div class="box">
                <img src="venues-images/the-marison-hotel.jpg" alt="">
                <span>Ipsum</span>
            </div>
            <div class="box">
                <img src="venues-images/la piazza.jpg" alt="">
                <span>La Piazza</span>
            </div>
            <div class="box">
                <img src="venues-images/Concourse-Convention-Center.jpg" alt="">
                <span>Concourse</span>
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
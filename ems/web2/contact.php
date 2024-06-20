<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="venues-images/EMS Albay Logo2.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMS Albay</title>
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
    background-color: #000;
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
    padding: 200px 200px;
}

.container {
    max-width: 800px;
    margin: 50px auto;
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    display: flex;
    overflow: hidden;
}

h1 {
    color: #000;
    margin-bottom: 20px;
}

form {
    flex: 1;
    padding: 100px;
}

input, textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
}

textarea {
    height: 100px;
    resize: vertical;
}

button {
    background-color: #00bcd4;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: #008ba3;
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
                    <a href="#footer">Contact</a>
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="container">
            <h1>Contact us</h1>
            <form action="process_form.php" method="POST">
                <input type="text" name="name" placeholder="Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <textarea name="message" placeholder="Message" required></textarea>
                <button type="submit">Send Message</button></form>
            </form>
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
    
</body>
</html>
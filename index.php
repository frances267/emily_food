<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>African Delights</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: url('images/bg.jpg') center/cover no-repeat;
            color: white;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: rgba(34, 34, 34, 0.8);
            color: #fff;
            padding: 10px 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar .logo-image {
            height: 60px;
        }

        .navbar .nav-links {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        .navbar .nav-links li {
            margin: 0 15px;
        }

        .navbar .nav-links a {
            text-decoration: none;
            color: #fff;
            font-size: 16px;
            font-weight: 500;
            transition: color 0.3s;
        }

        .navbar .nav-links a:hover {
            color: #f4c542;
        }

        .hero {
            position: relative;
            text-align: center;
            background: rgba(0, 0, 0, 0.5);
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: #fff;
            padding: 0 20px;
        }

        .hero h1 {
            font-size: 4rem;
            margin-bottom: 20px;
            text-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }

        .hero p {
            font-size: 1.5rem;
            margin-bottom: 30px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .hero .cta {
            padding: 15px 30px;
            font-size: 1.2rem;
            color: #222;
            background-color: #f4c542;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .hero .cta:hover {
            background-color: #e3b132;
        }

        .slider {
            position: relative;
            max-width: 100%;
            overflow: hidden;
        }

        .slides {
            display: flex;
            width: 300%;
            animation: slide 12s infinite;
        }

        .slides img {
            width: 100%;
            flex-shrink: 0;
        }

        @keyframes slide {
            0% { transform: translateX(0); }
            33% { transform: translateX(-100%); }
            66% { transform: translateX(-200%); }
            100% { transform: translateX(0); }
        }

        section {
            padding: 50px 20px;
            text-align: center;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .menu {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .menu-item {
            background-color: gray;
            border: 1px solid #ddd;
            border-radius: 8px;
            margin: 15px;
            padding: 20px;
            width: 300px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .menu-item img{
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-top: 4px solidrgb(0, 0, 0);
        }

        .menu-item h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .menu-item p {
            font-size: 1rem;
            margin-bottom: 10px;
            color: #555;
        }

        .menu-item .price {
            font-size: 1.2rem;
            color: #f4c542;
            font-weight: bold;
        }

        .order-form {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .order-form input, .order-form textarea, .order-form button {
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .order-form button {
            background-color: #f4c542;
            color: #222;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .order-form button:hover {
            background-color: #e3b132;
        }
    </style>
</head>
<body>

<nav class="navbar">
    <div class="logo">
        <img src="https://dynamic.design.com/preview/logodraft/773124f8-18d9-410b-bf0a-3a1e19b7ab19/image/large.png" alt="Logo" class="logo-image">
    </div>
    <ul class="nav-links">
        <li><a href="#home">Home</a></li>
        <li><a href="#menu">Menu</a></li>
        <li><a href="#order">Order Now</a></li>
    </ul>
</nav>

<section id="home" class="hero">
    <h1>African Delights</h1>
    <p>Bringing friends and family closer. Explore our menu and order now!</p>
    <a href="#menu" class="cta">View Menu</a>
</section>

<section id="menu">
    <h1>Our Menu</h1>
    <div class="menu">
        <div class="menu-item">
            <h3>Jollof Rice</h3>
            <p>This is a local dish made with tomatoes,onions pepper paprika garnished with fried plantain and savoury chicken.</p>
            <p class="price">&#8358;7000</p>
            <img src="images/jollof_rice.jpg" alt="Jollof Rice">
        </div>
        <div class="menu-item">
    <h3>Cape Maley Curry</h3>
            <p>It is locally produced with aromatic spices such as cinnamon,saffron,tumeric and chilli with created fragrant curries and stews .</p>
            <p class="price">&#8358;9000</p>
            <img src="images/south_africa.jpg" alt="Cape Maley Curry">
        </div>
        <div class="menu-item">
            <h3>Koshari Recipe</h3>
            <p>this is a traditional egyptian dish.Koshari is a hearty vegan meal made with lentil rice,pasta,chickpeas,vinegar,tomato sauce and topped with cripy thin fried onion rings</p>
            <p class="price">&#8358;5000</p>
            <img src="https://img.freepik.com/premium-photo/high-angle-traditional-asian-dish_23-2148694313.jpg?uid=R186610582&ga=GA1.1.112714775.1738649949&semt=ais_authors_boost" alt="Koshari Ricepie">
        </div>
        <div class="menu-item">
            <h3>Tsuivan</h3>
            <p>It is a simple yet satisfying noodle stir-fried made with hand-cut noodles,trypically garnished with mutton or beef and a mix of fresh vegetables like onions and carrots.</p>
            <p class="price">&#8358;10,000</p>
            <img src="https://img.freepik.com/premium-photo/asian-noodles-with-cheese-tofu_1220-5222.jpg?uid=R186610582&ga=GA1.1.112714775.1738649949&semt=ais_authors_boost" alt="Tsuvian Noodles">
        </div>
        <div class="menu-item">
            <h3>Kefta Tagine</h3>
            <p>You will love this classic morrocan recipe for meatballs,cooked in home-made tomato sauce,pouched eggs,with a little cayenne pepper.</p>
            <p class="price">&#8358;12,000</p>
            <img src="https://img.freepik.com/free-photo/delicious-goulash-ready-dinner_23-2149370913.jpg?uid=R186610582&ga=GA1.1.112714775.1738649949&semt=ais_authors_boost" alt="Kefta Tagine">
        </div>
        <div class="menu-item">
            <h3>Chipsi Mayai</h3>
            <p>It is also known as chips and eggs and it is the purest form of an omlette, with deep fried pota to chips with eggs.A wonderful breakfast on the go.</p>
            <p class="price">&#8358;8000</p>
            <img src="https://img.freepik.com/free-photo/flat-lay-delicious-spanish-tortilla-still-life_23-2150246036.jpg?uid=R186610582&ga=GA1.1.112714775.1738649949&semt=ais_authors_boost" alt="Chipsi Mayai">
        </div>
    </div>
</section>

<section id="order">
    <h1>Order Now</h1>
    <form action="#" method="POST" class="order-form">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <input type="address" name="address" placeholder="Your Address" required>
        <textarea name="order" placeholder="Your Order" rows="5" required></textarea>
        <button type="submit">Place Order</button>
    </form>
</section>

</body>
</html>


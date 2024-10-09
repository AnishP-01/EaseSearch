<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            background-image: url('https://img.freepik.com/free-photo/finance-elements-frame_23-2148080960.jpg?w=740&t=st=1699190511~exp=1699191111~hmac=aecdf65f6adca7c464017df2b148b2404d9cc8a7987e8982b93fc4087ee50587.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
        }

        header {

            background-color: #333;
            padding: 0%;
            margin: 0%;
            padding: 10px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #fff;
            font-size: 35px;
        }

        .header img {
            float: left;
            width: 125px;
            height: 100px;
        }

        .menu {
            display: flex;
            justify-content: space-around;
            list-style-type: none;
            margin: 0;
            padding: 20px;
            overflow: hidden;
            background-color: rgb(0, 0, 0);
        }

        .menu li {
            float: center;
        }

        .menu li a,
        .dropdown-btn {
            flex-grow: 1;
            display: block;
            color: white;
            text-align: center;
            padding: 20px 22px;
            text-decoration: none;
        }

        .menu li a:hover,
        .dropdown:hover .dropdown-btn {
            background-color: rgb(27, 103, 169);
        }

        .menu li.dropdown {
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: rgb(27, 103, 169);
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .footer {
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: rgb(0, 0, 0);
            color: white;
            text-align: center;
            padding: 10px;
            justify-content: center;
        }

        .footer img {
            float: left;
            width: 100px;
            height: 80px;
        }

        .container {
            width: 400px;
            height: 500px;
            padding: 16px;
            background-color: white;
            margin: 0 auto;
            margin-top: 50px;
            margin-bottom: 50px;
            border: 1px solid black;
            border-radius: 4px;
        }

        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: rgb(27, 103, 169);
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }
    </style>
</head>

<body>
    <div class="header">
        <img src="LOGO1.PNG" alt="Logo">
    </div>
    <ul class="menu">
        <li><a href="#home">Home</a></li>
        <li class="dropdown">
            <a href="#category" class="dropdown-btn">Shop by Categories</a>
            <div class="dropdown-content">
                <a href="#">Home & Living</a>
                <a href="#">Sports & Fitness</a>
                <a href="#">Health & Wellness</a>
                <a href="#">Electronics & Accessories</a>
                <a href="#">Automotive</a>
                <a href="#">Mobiles</a>
                <a href="#">Pet Supplies</a>
            </div>
        </li>
        <li class="dropdown">
            <a href="#browse" class="dropdown-btn">Browse by Website</a>
            <div class="dropdown-content">
                <a href="#">Amazon</a>
                <a href="#">Flipkart</a>
                <a href="#">Myntra</a>
                <a href="#">Paytm Mall</a>
                <a href="#">Reliance Retail</a>
            </div>
        </li>
        <li><a href="#offers">Deals & Offers</a></li>
        <li><a href="#support"> Customer Support</a></li>
        <li><a href="#about">About Us</a></li>
    </ul>

    <div class="container" id="signup">
        <form action="register1.php" method="POST">
        <a>
            <h1 style="color:rgb(27, 103, 169); text-align: center; text-decoration: none;">REGISTER YOURSELF</h1>
        </a>
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" id= "uname" name="uname" required>

        <label for="eid"><b>Email ID</b></label>
        <input type="text" placeholder="Enter your email id" id= "eid" name="eid" required>

        <label for="mno"><b>MobileNo</b></label>
        <input type="text" placeholder="Enter mobile no." id= "mno" name="mno" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" id="psw" name="psw" required>

        <button type="submit" value="Sign Up" name="signup"><a href="#" style="text-decoration: none;color:white;">Register</a></button>
        <a href="LOGIN.html" style="text-decoration: none;">
            <h3 style="color: black;text-align: center;">Already have an account!</h3>
        </a>
        </form>
    </div>

    <div class="footer">
        <img src="LOGO1.PNG" alt="Logo">
        <p>&copy; 2023 EASESEARCH Pvt Ltd. All rights reserved.</p>
        <p><a href="#" style="color: white;">Terms of Service</a> | <a href="#" style="color: white;">Privacy Policy</a>
        </p>
    </div>
</body>

</html>
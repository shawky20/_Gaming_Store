<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"> -->
    <script src="https://kit.fontawesome.com/89f7189b0f.js" crossorigin="anonymous"></script>

    <title>Gamers Patch</title>
</head>
<body>
    
    <div id="header" class="fixed top ">
        <a href="index.php"><img src="imgs/logo_small.png" alt=""  height="50"></a>

        <div>
            <ul id="navbar">
                <li><a  href="index.php">Home</a></li>
                <li><a   href="product.php" >Products</a></li>
                <li id="cat"><a href="categories.php" class="active">Categories <i class="fa-solid fa-caret-down"></i></a>
                    <div class="small-menu">
                        <ul>
                            <li><a href="ps.php">Playstation</a></li>
                            <li><a href="xbox.php">XBOX</a></li>
                            <li><a href="consoles.php">Consoles</a></li>
                            <li><a href="accesories.php">Accessories</a></li>
                        </ul>
                    </div> 

                </li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li>               
                    <form role="search" id="form">
                    <input type="search" id="query" name="q" placeholder="Search..." aria-label="Search through site content">
                    <button>
                    <svg viewBox="0 0 1024 1024"><path class="path1" d="M848.471 928l-263.059-263.059c-48.941 36.706-110.118 55.059-177.412 55.059-171.294 0-312-140.706-312-312s140.706-312 312-312c171.294 0 312 140.706 312 312 0 67.294-24.471 128.471-55.059 177.412l263.059 263.059-79.529 79.529zM189.623 408.078c0 121.364 97.091 218.455 218.455 218.455s218.455-97.091 218.455-218.455c0-121.364-103.159-218.455-218.455-218.455-121.364 0-218.455 97.091-218.455 218.455z"></path></svg>
                    </button>
                </form></li>
                
                <li><a href="cart.php" title="Shopping Cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                <li><a href="SignIn.php" title="login"><i class="fa fa-sign-in" aria-hidden="true"></i></a></li>
                <li><a href="#" title="logout"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>


            </ul>
        </div>
        <div id="mobile">
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </div>
    

<!-- 
    <section id="banner1" class="section-m1" >
    </section> -->

    <section id="most-saled" class="section-p1">
        <h1>Consoles</h1>
        <!-- <hr> -->
        <hr style="    margin: 5px -90px;
        border: 0;
        color: #000000;
        opacity: 50;
        border-top: 1px solid #000000;" >
        <div class="pro-container" >
            <div class="pro">
                <img src="imgs/dualsense-ps5-controller-black-accessory-front.webp" alt="consile1">
                <div class="des">
                    <span>sony</span>
                    <h5>Wireless Controller - Black</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>$69</h4>
                </div>
                <a href="#" class="add_to_cart"><i class="fa fa-plus" aria-hidden="true"></i></a>
            </div>
            <div class="pro">
                    <img src="imgs/dualsense-ps5-controller-black-accessory-front.webp" alt="consile1">
                    <div class="des">
                        <span>sony</span>
                        <h5>Wireless Controller - Black</h5>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h4>$69</h4>
                    </div>
                <a href="#" class="add_to_cart"><i class="fa fa-plus" aria-hidden="true"></i></a>
            </div>
            <div class="pro">
                <img src="imgs/dualsense-ps5-controller-black-accessory-front.webp" alt="consile1">
                <div class="des">
                    <span>sony</span>
                    <h5>Wireless Controller - Black</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>$69</h4>
                </div>
                <a href="#" class="add_to_cart"><i class="fa fa-plus" aria-hidden="true"></i></a>
            </div>
            <div class="pro">
                <img src="imgs/dualsense-ps5-controller-black-accessory-front.webp" alt="consile1">
                <div class="des">
                    <span>sony</span>
                    <h5>Wireless Controller - Black</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>$69</h4>
                </div>
                <a href="#" class="add_to_cart"><i class="fa fa-plus" aria-hidden="true"></i></a>
            </div>
            <div class="pro">
            <img src="imgs/dualsense-ps5-controller-black-accessory-front.webp" alt="consile1">
            <div class="des">
                <span>sony</span>
                <h5>Wireless Controller - Black</h5>
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h4>$69</h4>
            </div>
            <a href="#" class="add_to_cart"><i class="fa fa-plus" aria-hidden="true"></i></a>
            </div>
            <div class="pro">
                <img src="imgs/dualsense-ps5-controller-black-accessory-front.webp" alt="consile1">
                <div class="des">
                    <span>sony</span>
                    <h5>Wireless Controller - Black</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>$69</h4>
                </div>
                <a href="#" class="add_to_cart"><i class="fa fa-plus" aria-hidden="true"></i></a>
            </div>
            <div class="pro">
                <img src="imgs/dualsense-ps5-controller-black-accessory-front.webp" alt="consile1">
                <div class="des">
                    <span>sony</span>
                    <h5>Wireless Controller - Black</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>$69</h4>
                </div>
                <a href="#" class="add_to_cart"><i class="fa fa-plus" aria-hidden="true"></i></a>
            </div>
            <div class="pro">
                <img src="imgs/dualsense-ps5-controller-black-accessory-front.webp" alt="consile1">
                <div class="des">
                    <span>sony</span>
                    <h5>Wireless Controller - Black</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>$69</h4>
                </div>
                <a href="#" class="add_to_cart"><i class="fa fa-plus" aria-hidden="true"></i></a>
            </div>
            <div class="pro">
                <img src="imgs/dualsense-ps5-controller-black-accessory-front.webp" alt="consile1">
                <div class="des">
                    <span>sony</span>
                    <h5>Wireless Controller - Black</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>$69</h4>
                </div>
                <a href="#" class="add_to_cart"><i class="fa fa-plus" aria-hidden="true"></i></a>
            </div>
            <div class="pro">
                <img src="imgs/dualsense-ps5-controller-black-accessory-front.webp" alt="consile1">
                <div class="des">
                    <span>sony</span>
                    <h5>Wireless Controller - Black</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>$69</h4>
                </div>
                <a href="#" class="add_to_cart"><i class="fa fa-plus" aria-hidden="true"></i></a>
            </div>
            <!-- <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a> -->
        </div>



    </section>
    <br>
        <br>
        <br>
        <footer class="section-p1" id="footer" style="background-color: #232f3f; height: 250px;">
        <div class="col-1">
            <img class="logo" src="imgs/logo_checkout.png" alt="logo of the website" style="width: 100px;height: 50px;">

        </div>
        <div class="col-2.5">
            <h4 style="color: #fb3958;" ><b>Contact</b></h4>
            <p><strong>Address: 1 ElsarayatSt.,Abbaseya,Cairo</strong></p>
            <p><strong>Phone: 01223682456</strong></p>
            <p><strong>Working hours: 09:00 till 22:00</strong></p>

            <!-- <div class="follow">
                <h4 style="color: white;">follow us</h4>
                <div class="icon"style="margin-left: -5px; margin-top: -20px;"  >
                    <i class="fa fa-facebook-f" style="font-size:38px;color:#385898"></i>
                    <i class="fa fa-twitter" style="font-size:38px;color:rgb(29, 155, 240)"></i>
                    <i class="fa fa-instagram" style="font-size: 38px;color:#fb3958"></i>

                </div>

            </div> -->

        </div>
        <div class="col-2.5">
        <h4 style="color: white;font-family: verdana; font-size: 20px;"><b>Let Us Help You</b></h4>
        <a href="index.php"  style="color:white; text-decoration: none; font-family: verdana;">Home</a>
        <br> 
        <a href="category_redirect.php?type=0"  style="color:white; text-decoration: none;font-size: 14px; font-family: verdana;">Products</a>
        <br> 
        <a href="about.php"  style="color:white; text-decoration: none;font-family: verdana;">About</a>
        <br> 
        <a href="contact.php"  style="color:white; text-decoration: none;font-family: verdana;">Contact</a>
        <br> 
        </div>
        <div class="col-2.5">
        <h4 style="color: white;font-family: verdana;font-size: 20px;"><b>Categories</b></h4>
        <a href="category_redirect.php?type=1"  style="color:white; text-decoration: none;font-family: verdana;">Playstation</a>
        <br> 
        <a href="category_redirect.php?type=2" style="color:white; text-decoration: none;font-family: verdana;">XBOX</a>
        <br> 
        <a href="category_redirect.php?type=3"  style="color:white; text-decoration: none;font-family: verdana;">Consoles</a>
        <br> 
        <a href="category_redirect.php?type=4"  style="color:white; text-decoration: none;font-family: verdana;">Accesories</a> 
        </div>
        <div class="col-2.5"  style="color:white; text-decoration: none;font-family: verdana;">
        <h4 style="color: white;font-family: verdana;font-size: 20px;"><b>About</b></h4>
        <a href="#query"  style="color:white; text-decoration: none;font-family: verdana;">Search</a> 
        <br>
        <a href="cart.php"  style="color:white; text-decoration: none;font-family: verdana;">Shopping Cart</a>
        <br> 
        <a href="SignIn.php"  style="color:white; text-decoration: none;font-family: verdana;">Sign in</a> 
        
        </div>
        <div class="col-1">
            
        </div>

    </footer>
    <center><div class="follow" style="background-color:rgb(32, 41, 58) ;">
        <h4 style="color: white;">follow us</h4> 
        <br>
        <div class="icon"style="margin-left: -5px; margin-top: -20px;"  >
            <i class="fa fa-facebook-f" style="font-size:38px;color:#385898"></i>
            <i class="fa fa-twitter" style="font-size:38px;color:rgb(29, 155, 240)"></i>
            <i class="fa fa-instagram" style="font-size: 38px;color:#fb3958"></i>
            <br>
            <br>
            <br>

        </div>

    </div></center>

    <center><p>@2022 All CopyRights Reserved</p></center>
    <script src="https://kit.fontawesome.com/89f7189b0f.js" crossorigin="anonymous"></script>
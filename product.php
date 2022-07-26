<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
       <!-- Google font -->
   <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">

    <!-- Box icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="./css/styles.css" />
    <title>All Product</title>
</head>

<body>
    <!-- Navigation -->
    <nav class="nav">
        <div class="navigation container">
            <div class="logo">
                <!-- <h1>Sport Kart</h1> -->
                <img src="./images/logo3.png" alt="image">

            </div>

            <div class="menu">
                <div class="top-nav">
                    <div class="logo">
                    <!-- <h1>Sport Kart</h1> -->
                    <img src="./images/logo3.png" alt="image">                    </div>
                    <div class="close">
                        <i class="bx bx-x"></i>
                    </div>
                </div>

                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="home.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Products</a>
                    </li>
                    <li class="nav-item">
                        <a href="about.php" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contactus" class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Account</a>
                    </li>
                    <li class="nav-item">
                        <a href="cart.html" class="nav-link icon"><i class="bx bx-shopping-bag"></i></a>
                    </li>
                </ul>
            </div>

            <a href="cart.html" class="cart-icon">
                <i class="bx bx-shopping-bag"></i>
            </a>

            <div class="hamburger">
                <i class="bx bx-menu"></i>
            </div>
        </div>
    </nav>

    <!-- All Products -->
    <section class="section all-products" id="products">
        <div class="top container">
            <h1>All Products</h1>
            <form>
                <select>
                    <option value="1">Defualt Sorting</option>
                    <option value="2">Sort By Price</option>
                    <option value="3">Sort By Popularity</option>
                    <option value="4">Sort By Sale</option>
                    <option value="5">Sort By Rating</option>
                </select>
                <span><i class='bx bx-chevron-down'></i></span>
            </form>
        </div>

        <div class="product-center container">
            <div class="product">
              <div class="product-header">
                <img src="./images/Products/product (20).png" alt="">
    
                <ul class="icons">
                  <span><i class="bx bx-heart"></i></span>
                  <span><i class="bx bx-shopping-bag"></i></span>
                  <span><i class="bx bx-search"></i></span>
                </ul>
              </div>
              <div class="product-footer">
                <a href="./product details/hockey-sticks-details.html"><h3>Hockey Sticks</h3></a>
                <div class="rating">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bx-star"></i>
                </div>
                <h4 class="price">&#8377; 519</h4>
              </div>
            </div>
            <div class="product">
              <div class="product-header">
                <img src="./images/Products/product (21).png" alt="">
    
                <ul class="icons">
                  <span><i class="bx bx-heart"></i></span>
                  <span><i class="bx bx-shopping-bag"></i></span>
                  <span><i class="bx bx-search"></i></span>
                </ul>
              </div>
              <div class="product-footer">
                <a href="./product details/squash-racquet.html"><h3>Squash Racquet</h3></a>
                <div class="rating">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bx-star"></i>
                </div>
                <h4 class="price">&#8377; 499</h4>
              </div>
            </div>
            <div class="product">
              <div class="product-header">
                <img src="./images/Products/product (22).png" alt="">
    
                <ul class="icons">
                  <span><i class="bx bx-heart"></i></span>
                  <span><i class="bx bx-shopping-bag"></i></span>
                  <span><i class="bx bx-search"></i></span>
                </ul>
              </div>
              <div class="product-footer">
                <a href="./product details/best-squash-racquet-details.html"><h3>Best Squash Racquet</h3></a>
                <div class="rating">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bx-star"></i>
                </div>
                <h4 class="price">&#8377; 399</h4>
              </div>
            </div>
            <div class="product">
              <div class="product-header">
                <img src="./images/Products/product (23).png" alt="">
    
                <ul class="icons">
                  <span><i class="bx bx-heart"></i></span>
                  <span><i class="bx bx-shopping-bag"></i></span>
                  <span><i class="bx bx-search"></i></span>
                </ul>
              </div>
              <div class="product-footer">
                <a href="./product details/children-cricket-kit.html"><h3>Children Cricket Kit</h3></a>
                <div class="rating">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bx-star"></i>
                </div>
                <h4 class="price">&#8377; 99</h4>
              </div>
            </div>
            <div class="product">
              <div class="product-header">
                <img src="./images/Products/product (24).png" alt="">
    
                <ul class="icons">
                  <span><i class="bx bx-heart"></i></span>
                  <span><i class="bx bx-shopping-bag"></i></span>
                  <span><i class="bx bx-search"></i></span>
                </ul>
              </div>
              <div class="product-footer">
                <a href="#"><h3>Light Weight Children Bat</h3></a>
                <div class="rating">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bx-star"></i>
                </div>
                <h4 class="price">&#8377; 199</h4>
              </div>
            </div>
            <div class="product">
              <div class="product-header">
                <img src="./images/Products/product (25).png" alt="">
    
                <ul class="icons">
                  <span><i class="bx bx-heart"></i></span>
                  <span><i class="bx bx-shopping-bag"></i></span>
                  <span><i class="bx bx-search"></i></span>
                </ul>
              </div>
              <div class="product-footer">
                <a href="#"><h3>Cricket Ball</h3></a>
                <div class="rating">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bx-star"></i>
                </div>
                <h4 class="price">&#8377; 149</h4>
              </div>
            </div>
            <div class="product">
              <div class="product-header">
                <img src="./images/Products/product (9).png" alt="">
    
                <ul class="icons">
                  <span><i class="bx bx-heart"></i></span>
                  <span><i class="bx bx-shopping-bag"></i></span>
                  <span><i class="bx bx-search"></i></span>
                </ul>
              </div>
              <div class="product-footer">
                <a href="#"><h3>Inline Skates PU Wheels with Aluminum-Alloy</h3></a>
                <div class="rating">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bx-star"></i>
                </div>
                <h4 class="price">&#8377; 249</h4>
              </div>
            </div>
             <div class="product">
              <div class="product-header">
                <img src="./images/Products/product (12).png" alt="">
    
                <ul class="icons">
                  <span><i class="bx bx-heart"></i></span>
                  <span><i class="bx bx-shopping-bag"></i></span>
                  <span><i class="bx bx-search"></i></span>
                </ul>
              </div>
              <div class="product-footer">
                <a href="#"><h3>RAISCO Rings Pair Basketball Net</h3></a>
                <div class="rating">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bx-star"></i>
                </div>
                <h4 class="price">&#8377; 299</h4>
              </div>
            </div>
            <div class="product">
              <div class="product-header">
                <img src="./images/Products/product (1).png" alt="">
    
                <ul class="icons">
                  <span><i class="bx bx-heart"></i></span>
                  <span><i class="bx bx-shopping-bag"></i></span>
                  <span><i class="bx bx-search"></i></span>
                </ul>
              </div>
              <div class="product-footer">
                <a href="#"><h3>Regular Wicket Keeping Gloves Combo With Inner Gloves</h3></a>
                <div class="rating">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bx-star"></i>
                </div>
                <h4 class="price">&#8377; 249</h4>
              </div>
            </div> 
            <div class="product">
              <div class="product-header">
                <img src="./images/Products/product (2).png" alt="">
    
                <ul class="icons">
                  <span><i class="bx bx-heart"></i></span>
                  <span><i class="bx bx-shopping-bag"></i></span>
                  <span><i class="bx bx-search"></i></span>
                </ul>
              </div>
              <div class="product-footer">
                <a href="#"><h3>JetFire Wicket Keeping Gloves</h3></a>
                <div class="rating">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bx-star"></i>
                </div>
                <h4 class="price">&#8377; 199</h4>
              </div>
            </div>
            <div class="product">
              <div class="product-header">
                <img src="./images/Products/product (11).png" alt="">
    
                <ul class="icons">
                  <span><i class="bx bx-heart"></i></span>
                  <span><i class="bx bx-shopping-bag"></i></span>
                  <span><i class="bx bx-search"></i></span>
                </ul>
              </div>
              <div class="product-footer">
                <a href="#"><h3>VICKY Smash Bird Badminton </h3></a>
                <div class="rating">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bx-star"></i>
                </div>
                <h4 class="price">&#8377; 199</h4>
              </div>
            </div>
            <div class="product">
              <div class="product-header">
                <img src="./images/Products/product (8).png" alt="">
    
                <ul class="icons">
                  <span><i class="bx bx-heart"></i></span>
                  <span><i class="bx bx-shopping-bag"></i></span>
                  <span><i class="bx bx-search"></i></span>
                </ul>
              </div>
              <div class="product-footer">
                <a href="#"><h3>Skating Kit</h3></a>
                <div class="rating">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bx-star"></i>
                </div>
                <h4 class="price">&#8377; 799</h4>
              </div>
            </div> 
            <div class="product">
              <div class="product-header">
                <img src="./images/Products/product (5).png" alt="">
    
                <ul class="icons">
                  <span><i class="bx bx-heart"></i></span>
                  <span><i class="bx bx-shopping-bag"></i></span>
                  <span><i class="bx bx-search"></i></span>
                </ul>
              </div>
              <div class="product-footer">
                <a href="#"><h3>NIVIA Storm Football - Size: 5</h3></a>
                <div class="rating">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bx-star"></i>
                </div>
                <h4 class="price">&#8377; 329</h4>
              </div>
            </div> 
            <div class="product">
              <div class="product-header">
                <img src="./images/Products/product (13).png" alt="">
    
                <ul class="icons">
                  <span><i class="bx bx-heart"></i></span>
                  <span><i class="bx bx-shopping-bag"></i></span>
                  <span><i class="bx bx-search"></i></span>
                </ul>
              </div>
              <div class="product-footer">
                <a href="#"><h3>NIVIA Engraver Basketball - Size: 7</h3></a>
                <div class="rating">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bx-star"></i>
                </div>
                <h4 class="price">&#8377; 489</h4>
              </div>
            </div> 
            <div class="product">
              <div class="product-header">
                <img src="./images/Products/product (15).png" alt="">
    
                <ul class="icons">
                  <span><i class="bx bx-heart"></i></span>
                  <span><i class="bx bx-shopping-bag"></i></span>
                  <span><i class="bx bx-search"></i></span>
                </ul>
              </div>
              <div class="product-footer">
                <a href="#"><h3>STAR PLAYSET WITH 2 BAT,3 BALLS Table Tennis Kit</h3></a>
                <div class="rating">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bx-star"></i>
                </div>
                <h4 class="price">&#8377; 569</h4>
              </div>
            </div>
            <div class="product">
              <div class="product-header">
                <img src="./images/Products/product (16).png" alt="">
    
                <ul class="icons">
                  <span><i class="bx bx-heart"></i></span>
                  <span><i class="bx bx-shopping-bag"></i></span>
                  <span><i class="bx bx-search"></i></span>
                </ul>
              </div>
              <div class="product-footer">
                <a href="#"><h3>Nylon Volleyball Net</h3></a>
                <div class="rating">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bx-star"></i>
                </div>
                <h4 class="price">&#8377; 260</h4>
              </div>
            </div> 
            <div class="product">
              <div class="product-header">
                <img src="./images/Products/product (17).png" alt="">
    
                <ul class="icons">
                  <span><i class="bx bx-heart"></i></span>
                  <span><i class="bx bx-shopping-bag"></i></span>
                  <span><i class="bx bx-search"></i></span>
                </ul>
              </div>
              <div class="product-footer">
                <a href="#"><h3>Nivia Ball Pump</h3></a>
                <div class="rating">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bx-star"></i>
                </div>
                <h4 class="price">&#8377; 189</h4>
              </div>
            </div> 
            <div class="product">
              <div class="product-header">
                <img src="./images/Products/product (19).png" alt="">
    
                <ul class="icons">
                  <span><i class="bx bx-heart"></i></span>
                  <span><i class="bx bx-shopping-bag"></i></span>
                  <span><i class="bx bx-search"></i></span>
                </ul>
              </div>
              <div class="product-footer">
                <a href="#"><h3>Hockey With Balls</h3></a>
                <div class="rating">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bx-star"></i>
                </div>
                <h4 class="price">&#8377; 699</h4>
              </div>
            </div> 
            <div class="product">
              <div class="product-header">
                <img src="./images/Products/product (22).png" alt="">
    
                <ul class="icons">
                  <span><i class="bx bx-heart"></i></span>
                  <span><i class="bx bx-shopping-bag"></i></span>
                  <span><i class="bx bx-search"></i></span>
                </ul>
              </div>
              <div class="product-footer">
                <a href="#"><h3>Squash Racquet</h3></a>
                <div class="rating">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bx-star"></i>
                </div>
                <h4 class="price">&#8377; 499</h4>
              </div>
            </div>
            <div class="product">
              <div class="product-header">
                <img src="./images/Products/product (23).png" alt="">
    
                <ul class="icons">
                  <span><i class="bx bx-heart"></i></span>
                  <span><i class="bx bx-shopping-bag"></i></span>
                  <span><i class="bx bx-search"></i></span>
                </ul>
              </div>
              <div class="product-footer">
                <a href="#"><h3>Children Cricket Kit</h3></a>
                <div class="rating">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bx-star"></i>
                </div>
                <h4 class="price">&#8377; 599</h4>
              </div>
            </div> 
            <div class="product">
              <div class="product-header">
                <img src="./images/Products/product (24).png" alt="">
    
                <ul class="icons">
                  <span><i class="bx bx-heart"></i></span>
                  <span><i class="bx bx-shopping-bag"></i></span>
                  <span><i class="bx bx-search"></i></span>
                </ul>
              </div>
              <div class="product-footer">
                <a href="#"><h3>LYCAN Full Size PVC/Plastic Cricket Bat</h3></a>
                <div class="rating">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bx-star"></i>
                </div>
                <h4 class="price">&#8377; 349</h4>
              </div>
            </div> 
            <div class="product">
              <div class="product-header">
                <img src="./images/Products/product (14).png" alt="">
    
                <ul class="icons">
                  <span><i class="bx bx-heart"></i></span>
                  <span><i class="bx bx-shopping-bag"></i></span>
                  <span><i class="bx bx-search"></i></span>
                </ul>
              </div>
              <div class="product-footer">
                <a href="#"><h3>Basket Ball With Net</h3></a>
                <div class="rating">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bx-star"></i>
                </div>
                <h4 class="price">&#8377; 799</h4>
              </div>
            </div> 
            <div class="product">
              <div class="product-header">
                <img src="./images/Products/product (21).png" alt="">
    
                <ul class="icons">
                  <span><i class="bx bx-heart"></i></span>
                  <span><i class="bx bx-shopping-bag"></i></span>
                  <span><i class="bx bx-search"></i></span>
                </ul>
              </div>
              <div class="product-footer">
                <a href="#"><h3>Squash Racquet</h3></a>
                <div class="rating">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bx-star"></i>
                </div>
                <h4 class="price">&#8377; 449</h4>
              </div>
            </div>
            <div class="product">
              <div class="product-header">
                <img src="./images/products/product (10).png" alt="">
    
                <ul class="icons">
                  <span><i class="bx bx-heart"></i></span>
                  <span><i class="bx bx-shopping-bag"></i></span>
                  <span><i class="bx bx-search"></i></span>
                </ul>
              </div>
              <div class="product-footer">
                <a href="#"><h3>Shuttle Cocks</h3></a>
                <div class="rating">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bx-star"></i>
                </div>
                <h4 class="price">&#8377; 349</h4>
              </div>
            </div>
          </div>
    </section>

    <section class="pagination">
        <div class=" container">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span><i class='bx bx-right-arrow-alt'></i></span>
        </div>
    </section>



    <!-- Footer -->
    <footer id="footer" class="section footer">
    <div class="container">
      <div class="footer-container">
        <div class="footer-center">
          <h3>INFORMATION</h3>
          <a href="#">About Us</a>
          <a href="privacy-policy.html" target="blank">Privacy Policy</a>
          <a href="terms-condition.html" target="blank">Terms & Conditions</a>
        </div>
        <div class="footer-center">
          <h3>MY ACCOUNT</h3>
          <a href="#">My Account</a>
          <a href="#">Order History</a>
          <a href="#">Wish List</a>
          <a href="#">Returns</a>
        </div>
        <div id="contactus" class="footer-center">
          <h3>CONTACT US</h3>
          <div>
            <span>
              <i class='bx bx-map'></i>
            </span>
            MMDU, Mullana, Ambala, Haryana
          </div>
          <div>
            <span>
              <i class='bx bxs-envelope'></i>
            </span>
            sportkart@gmail.com
          </div>
          <div>
            <span>
              <i class='bx bxs-phone'></i>
            </span>
            9709808834
          </div>
          <div>
            <span>
              <!-- <i class="far fa-paper-plane"></i> -->
            </span>
          </div>
        </div>
      </div>
    </div>
    </div>
  </footer>
    <!-- End Footer -->

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <!-- Custom Script -->
    <script src="./js/index.js"></script>
</body>

</html>
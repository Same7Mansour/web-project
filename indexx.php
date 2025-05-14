
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Page</title>
    <link rel="stylesheet" href="./css/global.css" />
    <link rel="stylesheet" href="./css/header.css" />
    <link rel="shortcut icon" href="./images/bag-shopping-solid.svg" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/pages/index.css" />
    <link rel="stylesheet" href="./css/footer.css" />

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            padding: 30px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            background: #fff;
            padding: 20px;
            max-width: 500px;
            margin: auto;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"] {
            width: 95%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            margin: 5px;
            color: white;
            cursor: pointer;
        }

        input[name="Save"] {
            background-color: #4CAF50;
        }

        input[name="Save"]:hover {
            background-color: #45a049;
        }

        input[name="Edit"] {
            background-color: #2196F3;
        }

        input[name="Edit"]:hover {
            background-color: #0b7dda;
        }

        input[name="Delete"] {
            background-color: #f44336;
        }

        input[name="Delete"]:hover {
            background-color: #da190b;
        }

        input[name="Display"] {
            background-color: #ff9800;
        }

        input[name="Display"]:hover {
            background-color: #e68900;
        }

        table {
            margin: 30px auto;
            border-collapse: collapse;
            width: 80%;
            background-color: #fff;
            box-shadow: 0 0 10px #ccc;
        }

        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ccc;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>

</head>

<body>
    <div class="top-img">
        <header id="headerElement" class="flex">
            <div class="logo">
                <i class="fa-solid fa-bag-shopping"></i>
                <span style="font-weight: bold">AWU</span>
                <p style="letter-spacing: 0.5px">Shopping</p>
            </div>

            <div class="links">
                <a style="position: relative" class="cart" href="./pages/cart.html">
                    <i class="fa-solid fa-cart-shopping"></i>
                    $0.00
                    <span class="products-number">2</span>
                </a>
                <a class="sign-in" href="./pages/signin.html">
                    <i class="fa-solid fa-right-to-bracket"></i>
                    Sign in</a>
                <a class="register" href="./pages/register.html">
                    <i class="fa-solid fa-user-plus"></i>
                    Register</a>
            </div>
        </header>

        <section class="content">
            <p class="lifestyle">Lifestyle collection</p>
            <p class="men">MEN</p>
            <p class="sale">SALE UP TO <span>30% OFF</span></p>
            <p class="free-shipping">Get Free Shipping on orders over $99.00</p>
            <button>Shop Now</button>
        </section>
    </div>

    <main class="">
        <h1 class="recommended">
            <i class="fa-solid fa-check"></i>
            Recommended for you
        </h1>

        <section class="products flex">
            <article class="card">
                <a href="/pages/product-details.html">
                    <img width="266" src="images/download (3).jpeg" alt="" srcset="" />
                </a>

                <div style="width: 266px" class="content">
                    <h1 class="title">Adidas ax </h1>
                    <p class="description">
                       
                    </p>

                    <div class="flex" style="justify-content: space-between; padding-bottom: 0.7rem">
                        <div class="price">$150</div>

                        <button class="add-to-cart flex">
                            <i class="fa-solid fa-cart-plus"></i>
                            Add To Cart
                        </button>
                    </div>
                </div>
            </article>

            <article class="card">
                <a href="/pages/product-details.html">
                    <img width="266" src="images/download.jpeg" alt="" srcset="" />
                </a>

                <div style="width: 266px" class="content">
                    <h1 class="title">AirZoom</h1>
                    <p class="description">
                        
                    </p>

                    <div class="flex" style="justify-content: space-between; padding-bottom: 0.7rem">
                        <div class="price">$180</div>

                        <button class="add-to-cart flex">
                            <i class="fa-solid fa-cart-plus"></i>
                            Add To Cart
                        </button>
                    </div>
                </div>
            </article>

            <article class="card">
                <a href="/pages/product-details.html">
                    <img width="266" src="images/images (34).jpeg" alt="" srcset="" />
                </a>

                <div style="width: 266px" class="content">
                    <h1 class="title">Adidas ax</h1>
                    <p class="description">
                       
                    </p>

                    <div class="flex" style="justify-content: space-between; padding-bottom: 0.7rem">
                        <div class="price">$255</div>

                        <button class="add-to-cart flex">
                            <i class="fa-solid fa-cart-plus"></i>
                            Add To Cart
                        </button>
                    </div>
                </div>
            </article>

            <article class="card">
                <a href="/pages/product-details.html">
                    <img width="266" src="images/images (2).jpeg" alt="" srcset="" />
                </a>

                <div style="width: 266px" class="content">
                    <h1 class="title">Phantom jx</h1>
                    <p class="description">
                        
                    </p>

                    <div class="flex" style="justify-content: space-between; padding-bottom: 0.7rem">
                        <div class="price">$200</div>

                        <button class="add-to-cart flex">
                            <i class="fa-solid fa-cart-plus"></i>
                            Add To Cart
                        </button>
                    </div>
                </div>
            </article>

            <article class="card">
                <a href="/pages/product-details.html">
                    <img width="266" src="images/images.jpeg" alt="" srcset="" />
                </a>

                <div style="width: 266px" class="content">
                    <h1 class="title">Phantom jx</h1>
                    <p class="description">
                     
                    </p>

                    <div class="flex" style="justify-content: space-between; padding-bottom: 0.7rem">
                        <div class="price">$330</div>

                        <button class="add-to-cart flex">
                            <i class="fa-solid fa-cart-plus"></i>
                            Add To Cart
                        </button>
                    </div>
                </div>
            </article>

            <article class="card">
                <a href="/pages/product-details.html">
                    <img width="266" src="images/images (5).jpeg" alt="" srcset="" />
                </a>

                <div style="width: 266px" class="content">
                    <h1 class="title">F50</h1>
                    <p class="description">
                      
                    </p>

                    <div class="flex" style="justify-content: space-between; padding-bottom: 0.7rem">
                        <div class="price">$270</div>

                        <button class="add-to-cart flex">
                            <i class="fa-solid fa-cart-plus"></i>
                            Add To Cart
                        </button>
                    </div>
                </div>
            </article>

            <article class="card">
                <a href="/pages/product-details.html">
                    <img width="266" src="images/images (4).jpeg" alt="" srcset="" />
                </a>

                <div style="width: 266px" class="content">
                    <h1 class="title">AirZoom</h1>
                    <p class="description">
                  
                    </p>

                    <div class="flex" style="justify-content: space-between; padding-bottom: 0.7rem">
                        <div class="price">$220</div>

                        <button class="add-to-cart flex">
                            <i class="fa-solid fa-cart-plus"></i>
                            Add To Cart
                        </button>
                    </div>
                </div>
            </article>

            <article class="card">
                <a href="/pages/product-details.html">
                    <img width="266" src="images/images (3).jpeg" alt="" srcset="" />
                </a>

                <div style="width: 266px" class="content">
                    <h1 class="title">Phantom jx</h1>
                    <p class="description">
                       
                    </p>

                    <div class="flex" style="justify-content: space-between; padding-bottom: 0.7rem">
                        <div class="price">$275</div>

                        <button class="add-to-cart flex">
                            <i class="fa-solid fa-cart-plus"></i>
                            Add To Cart
                        </button>
                    </div>
                </div>
            </article>

            <article class="card">
                <a href="/pages/product-details.html">
                    <img width="266" src="images/download (1).jpeg" alt="" srcset="" />
                </a>

                <div style="width: 266px" class="content">
                    <h1 class="title">Adidas ax</h1>
                    <p class="description">
                        
                    </p>

                    <div class="flex" style="justify-content: space-between; padding-bottom: 0.7rem">
                        <div class="price">$360</div>

                        <button class="add-to-cart flex">
                            <i class="fa-solid fa-cart-plus"></i>
                            Add To Cart
                        </button>
                    </div>
                </div>
            </article>
            <article class="card">
                <a href="/pages/product-details.html">
                    <img width="266" src="images/images (11).jpeg" alt="" srcset="" />
                </a>

                <div style="width: 266px" class="content">
                    <h1 class="title">AirZoom</h1>
                    <p class="description">
                      
                    </p>

                    <div class="flex" style="justify-content: space-between; padding-bottom: 0.7rem">
                        <div class="price">$270</div>

                        <button class="add-to-cart flex">
                            <i class="fa-solid fa-cart-plus"></i>
                            Add To Cart
                        </button>
                    </div>
                </div>
            </article>
            <article class="card">
                <a href="/pages/product-details.html">
                    <img width="266" src="images/images (13).jpeg" alt="" srcset="" />
                </a>

                <div style="width: 266px" class="content">
                    <h1 class="title">Phantom jx</h1>
                    <p class="description">
                       
                    </p>

                    <div class="flex" style="justify-content: space-between; padding-bottom: 0.7rem">
                        <div class="price">$240</div>

                        <button class="add-to-cart flex">
                            <i class="fa-solid fa-cart-plus"></i>
                            Add To Cart
                        </button>
                    </div>
                </div>
            </article>
            <article class="card">
                <a href="/pages/product-details.html">
                    <img width="266" src="images/download (2).jpeg" alt="" srcset="" />
                </a>

                <div style="width: 266px" class="content">
                    <h1 class="title">Adidas Predator</h1>
                    <p class="description">
            
                    </p>

                    <div class="flex" style="justify-content: space-between; padding-bottom: 0.7rem">
                        <div class="price">$290</div>

                        <button class="add-to-cart flex">
                            <i class="fa-solid fa-cart-plus"></i>
                            Add To Cart
                        </button>
                    </div>
                </div>
            </article>
            <article class="card">
                <a href="/pages/product-details.html">
                    <img width="266" src="images/images (10).jpeg" alt="" srcset="" />
                </a>

                <div style="width: 266px" class="content">
                    <h1 class="title">f50</h1>
                    <p class="description">
                      
                    </p>

                    <div class="flex" style="justify-content: space-between; padding-bottom: 0.7rem">
                        <div class="price">$240</div>

                        <button class="add-to-cart flex">
                            <i class="fa-solid fa-cart-plus"></i>
                            Add To Cart
                        </button>
                    </div>
                </div>
            </article>
            <article class="card">
                <a href="/pages/product-details.html">
                    <img width="266" src="images/images (7).jpeg" alt="" srcset="" />
                </a>

                <div style="width: 266px" class="content">
                    <h1 class="title">Nike AirZoom</h1>
                    <p class="description">
                        
                    </p>

                    <div class="flex" style="justify-content: space-between; padding-bottom: 0.7rem">
                        <div class="price">$190</div>

                        <button class="add-to-cart flex">
                            <i class="fa-solid fa-cart-plus"></i>
                            Add To Cart
                        </button>
                    </div>
                </div>
            </article>
            <article class="card">
                <a href="/pages/product-details.html">
                    <img width="266" src="images/images (8).jpeg" alt="" srcset="" />
                </a>

                <div style="width: 266px" class="content">
                    <h1 class="title">Nike AirZoom</h1>
                    <p class="description">
                       
                    </p>

                    <div class="flex" style="justify-content: space-between; padding-bottom: 0.7rem">
                        <div class="price">$380</div>

                        <button class="add-to-cart flex">
                            <i class="fa-solid fa-cart-plus"></i>
                            Add To Cart
                        </button>
                    </div>
                </div>
            </article>
            <article class="card">
                <a href="/pages/product-details.html">
                    <img width="266" src="images/images (12).jpeg" alt="" srcset="" />
                </a>

                <div style="width: 266px" class="content">
                    <h1 class="title">Tertan Phantom</h1>
                    <p class="description">
                       
                    </p>

                    <div class="flex" style="justify-content: space-between; padding-bottom: 0.7rem">
                        <div class="price">$160</div>

                        <button class="add-to-cart flex">
                            <i class="fa-solid fa-cart-plus"></i>
                            Add To Cart
                        </button>
                    </div>
                </div>
            </article>
            <article class="card">
                <a href="/pages/product-details.html">
                    <img width="266" src="images/images (14).jpeg" alt="" srcset="" />
                </a>

                <div style="width: 266px" class="content">
                    <h1 class="title">Tertan Phantom</h1>
                    <p class="description">
                       
                    </p>

                    <div class="flex" style="justify-content: space-between; padding-bottom: 0.7rem">
                        <div class="price">$170</div>

                        <button class="add-to-cart flex">
                            <i class="fa-solid fa-cart-plus"></i>
                            Add To Cart
                        </button>
                    </div>
                </div>
            </article>
            <article class="card">
                <a href="/pages/product-details.html">
                    <img width="266" src="images/images (15).jpeg" alt="" srcset="" />
                </a>

                <div style="width: 266px" class="content">
                    <h1 class="title">Tertan Phantom</h1>
                    <p class="description">
                      
                    </p>

                    <div class="flex" style="justify-content: space-between; padding-bottom: 0.7rem">
                        <div class="price">$199</div>

                        <button class="add-to-cart flex">
                            <i class="fa-solid fa-cart-plus"></i>
                            Add To Cart
                        </button>
                    </div>
                </div>
            </article>
            <article class="card">
                <a href="/pages/product-details.html">
                    <img width="266" src="images/images (16).jpeg" alt="" srcset="" />
                </a>

                <div style="width: 266px" class="content">
                    <h1 class="title">Adidas Predator</h1>
                    <p class="description">
                        
                    </p>

                    <div class="flex" style="justify-content: space-between; padding-bottom: 0.7rem">
                        <div class="price">$399</div>

                        <button class="add-to-cart flex">
                            <i class="fa-solid fa-cart-plus"></i>
                            Add To Cart
                        </button>
                    </div>
                </div>
            </article>
            <article class="card">
                <a href="/pages/product-details.html">
                    <img width="266" src="images/images (17).jpeg" alt="" srcset="" />
                </a>

                <div style="width: 266px" class="content">
                    <h1 class="title">Nike</h1>
                    <p class="description">
                     
                    </p>

                    <div class="flex" style="justify-content: space-between; padding-bottom: 0.7rem">
                        <div class="price">$120</div>

                        <button class="add-to-cart flex">
                            <i class="fa-solid fa-cart-plus"></i>
                            Add To Cart
                        </button>
                    </div>
                </div>
            </article>
            <article class="card">
                <a href="/pages/product-details.html">
                    <img width="266" src="images/images (18).jpeg" alt="" srcset="" />
                </a>

                <div style="width: 266px" class="content">
                    <h1 class="title">pooma</h1>
                    <p class="description">
                      
                    </p>

                    <div class="flex" style="justify-content: space-between; padding-bottom: 0.7rem">
                        <div class="price">$170</div>

                        <button class="add-to-cart flex">
                            <i class="fa-solid fa-cart-plus"></i>
                            Add To Cart
                        </button>
                    </div>
                </div>
            </article>
            <article class="card">
                <a href="/pages/product-details.html">
                    <img width="266" src="images/images (29).jpeg" alt="" srcset="" />
                </a>

                <div style="width: 266px" class="content">
                    <h1 class="title">AirZoom</h1>
                    <p class="description">
                        
                    </p>

                    <div class="flex" style="justify-content: space-between; padding-bottom: 0.7rem">
                        <div class="price">$335</div>

                        <button class="add-to-cart flex">
                            <i class="fa-solid fa-cart-plus"></i>
                            Add To Cart
                        </button>
                    </div>
                </div>
            </article>
            <article class="card">
                <a href="/pages/product-details.html">
                    <img width="266" src="images/images (28).jpeg" alt="" srcset="" />
                </a>

                <div style="width: 266px" class="content">
                    <h1 class="title">Nike</h1>
                    <p class="description">
                     
                    </p>

                    <div class="flex" style="justify-content: space-between; padding-bottom: 0.7rem">
                        <div class="price">$440</div>

                        <button class="add-to-cart flex">
                            <i class="fa-solid fa-cart-plus"></i>
                            Add To Cart
                        </button>
                    </div>
                </div>
            </article>
            <article class="card">
                <a href="/pages/product-details.html">
                    <img width="266" src="images/images (27).jpeg" alt="" srcset="" />
                </a>

                <div style="width: 266px" class="content">
                    <h1 class="title">Adidas Predator</h1>
                    <p class="description">
                        
                    </p>

                    <div class="flex" style="justify-content: space-between; padding-bottom: 0.7rem">
                        <div class="price">$290</div>

                        <button class="add-to-cart flex">
                            <i class="fa-solid fa-cart-plus"></i>
                            Add To Cart
                        </button>
                    </div>
                </div>
            </article>
            <article class="card">
                <a href="/pages/product-details.html">
                    <img width="266" src="images/images (26).jpeg" alt="" srcset="" />
                </a>

                <div style="width: 266px" class="content">
                    <h1 class="title">F50</h1>
                    <p class="description">
                     
                    </p>

                    <div class="flex" style="justify-content: space-between; padding-bottom: 0.7rem">
                        <div class="price">$188</div>

                        <button class="add-to-cart flex">
                            <i class="fa-solid fa-cart-plus"></i>
                            Add To Cart
                        </button>
                    </div>
                </div>
            </article>
            <article class="card">
                <a href="/pages/product-details.html">
                    <img width="266" src="images/images (25).jpeg" alt="" srcset="" />
                </a>

                <div style="width: 266px" class="content">
                    <h1 class="title">Nike AirZoom</h1>
                    <p class="description">
              
                    </p>

                    <div class="flex" style="justify-content: space-between; padding-bottom: 0.7rem">
                        <div class="price">$160</div>

                        <button class="add-to-cart flex">
                            <i class="fa-solid fa-cart-plus"></i>
                            Add To Cart
                        </button>
                    </div>
                </div>
            </article>
            <article class="card">
                <a href="/pages/product-details.html">
                    <img width="266" src="images/images (24).jpeg" alt="" srcset="" />
                </a>

                <div style="width: 266px" class="content">
                    <h1 class="title">Phantom jx</h1>
                    <p class="description">
                   
                    </p>

                    <div class="flex" style="justify-content: space-between; padding-bottom: 0.7rem">
                        <div class="price">$170</div>

                        <button class="add-to-cart flex">
                            <i class="fa-solid fa-cart-plus"></i>
                            Add To Cart
                        </button>
                    </div>
                </div>
            </article>
            <article class="card">
                <a href="/pages/product-details.html">
                    <img width="266" src="images/images (23).jpeg" alt="" srcset="" />
                </a>

                <div style="width: 266px" class="content">
                    <h1 class="title">F50</h1>
                    <p class="description">
                        
                    </p>

                    <div class="flex" style="justify-content: space-between; padding-bottom: 0.7rem">
                        <div class="price">$390</div>

                        <button class="add-to-cart flex">
                            <i class="fa-solid fa-cart-plus"></i>
                            Add To Cart
                        </button>
                    </div>
                </div>
            </article>
            <article class="card">
                <a href="/pages/product-details.html">
                    <img width="266" src="images/images (22).jpeg" alt="" srcset="" />
                </a>

                <div style="width: 266px" class="content">
                    <h1 class="title">f50</h1>
                    <p class="description">
                     
                    </p>

                    <div class="flex" style="justify-content: space-between; padding-bottom: 0.7rem">
                        <div class="price">$170</div>

                        <button class="add-to-cart flex">
                            <i class="fa-solid fa-cart-plus"></i>
                            Add To Cart
                        </button>
                    </div>
                </div>
            </article>
            <article class="card">
                <a href="/pages/product-details.html">
                    <img width="266" src="images/images (21).jpeg" alt="" srcset="" />
                </a>

                <div style="width: 266px" class="content">
                    <h1 class="title">Adidas AirMax</h1>
                    <p class="description">
                   
                    </p>

                    <div class="flex" style="justify-content: space-between; padding-bottom: 0.7rem">
                        <div class="price">$270</div>

                        <button class="add-to-cart flex">
                            <i class="fa-solid fa-cart-plus"></i>
                            Add To Cart
                        </button>
                    </div>
                </div>
            </article>
            <article class="card">
                <a href="/pages/product-details.html">
                    <img width="266" src="images/images (20).jpeg" alt="" srcset="" />
                </a>

                <div style="width: 266px" class="content">
                    <h1 class="title">F50</h1>
                    <p class="description">
                       
                    </p>

                    <div class="flex" style="justify-content: space-between; padding-bottom: 0.7rem">
                        <div class="price">$170</div>

                        <button class="add-to-cart flex">
                            <i class="fa-solid fa-cart-plus"></i>
                            Add To Cart
                        </button>
                    </div>
                </div>
            </article>
            <article class="card">
                <a href="/pages/product-details.html">
                    <img width="266" src="images/images (19).jpeg" alt="" srcset="" />
                </a>

                <div style="width: 266px" class="content">
                    <h1 class="title">Nike AirMax</h1>
                    <p class="description">
                      
                    </p>

                    <div class="flex" style="justify-content: space-between; padding-bottom: 0.7rem">
                        <div class="price">$280</div>

                        <button class="add-to-cart flex">
                            <i class="fa-solid fa-cart-plus"></i>
                            Add To Cart
                        </button>
                    </div>
                </div>
            </article>






        </section>
    </main>



    
    
    <br></br>


    <h2>Save Data</h2>
    <form action="home.php" method="post">
        <label for="id">Number:</label> 
        <input type="text" id="id" name="id">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <label for="address">Address:</label>
        <input type="text" id="address" name="address">
        <input type="submit" value="Save" name="Save">
        <input type="submit" value="Edit" name="Edit">
        <input type="submit" value="Delete" name="Delete">
        <input type="submit" value="Display" name="Display">
    </form>







    <footer>
        Designed and developed by
        <span> Maher yasser </span>
        © 2025.
    </footer>


    <script src="./js/main.js"></script>








    
    
    
   
</body>

</html>



<?php
if (isset($_POST['Save'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    require_once 'con.php';
    $result = mysqli_query($link, "INSERT INTO  userss (`id`,`name`, `address`) 
VALUES ('$id','$name','$address')");
    header('Location:indexx.php');
    echo "<h3> Data saved Successfuly </h3>";
    mysqli_close($link);
}
if (isset($_POST['Edit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    require_once 'con.php';
    $sql1 = ("update userss set name= '$name' WHERE id like '$id'");
    $result = mysqli_query($link, $sql1);
    $sql2 = ("update userss set address= '$address' WHERE id like '$id'");
    $result = mysqli_query($link, $sql2);
    header('Location:indexx.php');
    mysqli_close($link);
}
if (isset($_POST['Delete'])) {
    $id = $_POST['id'];
    require_once 'con.php';
    $result = mysqli_query($link, "DELETE FROM  userss where id =$id");
    header('Location:indexx.php');
    mysqli_close($link);
}

if (isset($_POST['Display'])) {
    require_once 'con.php';
    $sql = ("SELECT * FROM userss");
    $result = mysqli_query($link, $sql);
    $count = mysqli_num_rows($result);
    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    if ($count == 0) {
        echo "<No result matches </h3>";
    } else {
        echo "<table border=1>
                            <tr>
                                 <th >ID</th>
                                 <th >Name</th>
                                  <th >Address</th>                                                       
                            </tr>";
        for ($i = 0; $i < $count; $i++) {
            $id = $data[$i]["id"];
            $name = $data[$i]["name"];
            $address = $data[$i]["address"];
            echo "<tr>";
            echo "<td>" . $id . "</td>";
            echo "<td>" . $name . "</td>";
            echo "<td>" . $address . "</td>";
        }
        echo "</table>";
    }
}
?>
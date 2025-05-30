<?php
// Start the session
session_start();

if (isset($_SESSION["username"]) && !empty($_SESSION["username"])) {
  // Set the link URL and text based on the session variable
  $linkUrl = "index.php"; // Example link
  $linkText = "Welcome, " . htmlspecialchars($_SESSION["username"]);
  $profileLink = "php/profile.php";
} else {
  // Default link URL and text if the session variable is not set
  $linkUrl = "./php/login_register.php"; // Example link
  $linkText = "Login";
}
?>
<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Savoria - Your food tent</title>
  <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="./css/main.css">
</head>

<body>
  <header class="header">
    <nav class="header__nav">
      <a class="header__brand" href="./index.php">
        <img src="./img/savoria-logo.svg" alt="Logo" />
      </a>
      <ul class="header__list">
        <li class="header__list-item active">
          <a href="./index.php">Home</a>
        </li>
        <li class="header__list-item">
          <a href="./html/about.html">About</a>
        </li>
        <li class="header__list-item">
          <a href="./html/contact.html">Contact</a>
        </li>
        <?php
        if (isset($_SESSION["username"]) && !empty($_SESSION["username"])) {

        ?>
          <li class="header__list-item">
            <a href="<?php echo $profileLink; ?>">view profile</a>
          </li>
        <?php
        }
        ?>
        <li class="header__list-item">
          <a href="<?php echo $linkUrl; ?>"><?php echo $linkText; ?></a>
        </li>




      </ul>
    </nav>
  </header>
  <!-- close .header -->
  <section class="hero">
    <div class="hero__container">
      <div class="hero__img">
        <img src="./img/hero-img-default.png" alt="Empanadas" />
      </div>
      <div class="hero__info">
        <h3 class="hero__info-title">
          Enjoy Your Traditional and Delicious Food
        </h3>
        <p class="hero__info-text">
          Savour the Flavors, Order with Savouir - Your Ultimate Online Food Destination
        </p>
        <a class="hero__info-button" href="./html/products/index.html">Shop now</a>
      </div>
    </div>
  </section>
  <main class="main">
    <section class="container categories">
      <h3 class="title"><span>Our Products</span></h3>
      <h4 class="subtitle">Check Our Selected Products</h4>
      <div class="categories__content">
        <article class="categories__item" style="background-image: url('./img/category-chilean-food.jpg')">
          <h3 class="categories__item-title">Chilean food</h3>
          <p class="categories__item-description">
            Rich in seafood and grilled meats, Chilean cuisine boasts
            flavorful dishes like empanadas, cazuela (stew), and pastel de
            choclo (corn pie).
          </p>
          <a class="categories__item-button" href="./html/products/index.html">View category</a>
        </article>
        <!-- close .categories__item -->
        <article class="categories__item" style="background-image: url('./img/category-chinesse-food.jpg')">
          <h3 class="categories__item-title">Chinesse food</h3>
          <p class="categories__item-description">
            Bursting with diverse flavors and ingredients, Chinese cuisine
            offers delectable dishes like dim sum, stir-fries, and Peking
            duck.
          </p>
          <a class="categories__item-button" href="./html/products/index.html">View category</a>
        </article>
        <!-- close .categories__item -->
        <article class="categories__item" style="background-image: url('./img/category-greek-food.jpg')">
          <h3 class="categories__item-title">Greek food</h3>
          <p class="categories__item-description">
            A Mediterranean delight, Greek cuisine features fresh ingredients
            and iconic dishes like souvlaki, moussaka, and spanakopita
            (spinach pie).
          </p>
          <a class="categories__item-button" href="./html/products/index.html">View category</a>
        </article>
        <!-- close .categories__item -->
        <article class="categories__item" style="background-image: url('./img/category-indian-food.jpg')">
          <h3 class="categories__item-title">Indian food</h3>
          <p class="categories__item-description">
            An explosion of spices and flavors, Indian cuisine offers
            tantalizing dishes like curry, biryani, and samosas, which cater
            to diverse tastes.
          </p>
          <a class="categories__item-button" href="./html/products/index.html">View category</a>
        </article>
        <!-- close .categories__item -->
        <article class="categories__item" style="background-image: url('./img/category-italian-food.jpg')">
          <h3 class="categories__item-title">Italian food</h3>
          <p class="categories__item-description">
            Known for its simplicity and emphasis on quality ingredients,
            Italian cuisine includes classics like pizza, pasta, and risotto,
            loved worldwide.
          </p>
          <a class="categories__item-button" href="./html/products/index.html">View category</a>
        </article>
        <!-- close .categories__item -->
        <article class="categories__item" style="background-image: url('./img/category-mexican-food.jpg')">
          <h3 class="categories__item-title">Mexican food</h3>
          <p class="categories__item-description">
            Spicy and vibrant, Mexican cuisine delights with dishes like
            tacos, enchiladas, and guacamole, celebrating the perfect balance
            of flavors.
          </p>
          <a class="categories__item-button" href="./html/products/index.html">View category</a>
        </article>
        <!-- close .categories__item -->
        <article class="categories__item" style="background-image: url('./img/category-peruvian-food.jpg')">
          <h3 class="categories__item-title">Peruvian food</h3>
          <p class="categories__item-description">
            A fusion of indigenous and international influences, Peruvian
            cuisine offers ceviche, lomo saltado (beef stir-fry), and causa
            (potato dish).
          </p>
          <a class="categories__item-button" href="./html/products/index.html">View category</a>
        </article>
        <!-- close .categories__item -->
        <article class="categories__item" style="background-image: url('./img/category-soft-drinks.jpg')">
          <h3 class="categories__item-title">Soft drinks</h3>
          <p class="categories__item-description">
            Refreshing and fizzy, soft drinks quench your thirst with options
            like cola, lemon-lime soda, and root beer, perfect for any
            occasion.
          </p>
          <a class="categories__item-button" href="./html/products/index.html">View category</a>
        </article>
        <!-- close .categories__item -->
        <article class="categories__item" style="background-image: url('./img/category-desserts.jpg')">
          <h3 class="categories__item-title">Desserts</h3>
          <p class="categories__item-description">
            Sweet indulgence at its finest, desserts offer delights like
            chocolate cake, creamy cheesecake, and fruit-filled pies,
            satisfying your sweet tooth.
          </p>
          <a class="categories__item-button" href="./html/products/index.html">View category</a>
        </article>
        <!-- close .categories__item -->
      </div>
    </section>
  </main>
  <footer class="footer">
    <div class="footer__items">
      <div class="footer__item">
        <img class="footer__item-brand" src="./img/savoria-logo-white.svg" alt="Logo" />
      </div>
      <div class="footer__item">
        <h3 class="footer__item-title">Contact</h3>
        <ul class="footer__item-list">
          <li>
            <address>265 Yorkland Blvd #400, North York, ON M2J 1S5</address>
          </li>
          <li><a href="mailto:contact@savoria.ca">contact@savoria.ca</a></li>
          <li><a href="tel:+14164852098">+1 (416) 485-2098</a></li>
        </ul>
      </div>
    </div>
    <div class="footer__copyright">
      <p>Savoria&copy; 2025, all rights reserved</p>
    </div>
  </footer>
</body>

</html>
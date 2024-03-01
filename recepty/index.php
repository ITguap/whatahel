<?php
    session_start();
    require 'check_if_added.php';
    
?>

<?php

@include 'config.php';

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

   if(mysqli_num_rows($select_cart) > 0){
   }else{
      $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
   }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<head>
        <link rel="shortcut icon" href="" />
        <title >VKUSOVED</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Bootstrap - Grid -->
<link rel="stylesheet" href="./assets/css/bootstrap-grid.min.css">

<!-- CSS -->
<link rel="stylesheet" href="./assets/css/styles.css">
<link rel="stylesheet" href="./assets/css/fontawesome-min.css">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    </head>
</head>
<body style="background-color: rgb(194 189 194 / 70%);">
<div id="menu-top">
            <div class="container">
                <div class="d-flex">
                    <div class="logo">
                        <a href="#">VKUSO<span>VED</span></a>
                    </div>
                    <nav class="menu-links">
                        <ul>
                        <?php
                           if(isset($_SESSION['email'])){
                           ?>
                            <li class="active"><a href="#">Receitas</a></li>
                            <li><a href="#">Categorias</a></li>
                            <li><a href="#">Vídeos</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contato</a></li>
                            <?php
                           }else{
                            ?>
                            <li class="active"><a href="#">Receitas</a></li>
                            <li><a href="#">Categorias</a></li>
                            <li><a href="#">Vídeos</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contato</a></li>
                              <?php
                           }
                           ?>
                        </ul>
                    </nav>
                </div>
                <div class="d-flex">
                    <div class="search d-flex">
                        <input type="text" placeholder="Bolo de morango com cobert...">
                        <i class="fas fa-search d-flex"></i>
                    </div>
                    <a href="login.php" class="login d-flex">
                        Entrar 
                        <i class="fas fa-user-circle"></i>
                    </a>
                </div>
            </div>
        </div>
<section id="welcome">
            <div class="container">
                <div class="welcome-text">
                    <h2>Vkusoved</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem <br>Ipsum has been the industry's standard dummy text ever since the 1500s..</p>
                    <button>VER MAIS</button>
                </div>
            </div>
        </section>
<section id="destaques">
            <div class="section-header">
                <header class="d-flex">
                    <h2><b>САМЫЕ НОВЫЕ РЕЦЕПТЫ<b></h2>
                </header>
                <div class="section-header-bar"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="articles">
                            <div class="row">
                                <article class="article d-flex">
                                    <div class="article-description">
                                        <h2>VANILLA CAKE</h2>
                                        <small>Por <span>CakeLand</span></small>
                                        <p>Um delicioso bolo com a massa tradicional da<br>casa especialmente feito para festas...</p>
                                        <div class="article-social d-flex">
                                            <div class="article-likes">
                                                <i class="fas fa-heart"></i>
                                                <span>305</span>
                                            </div>
                                            <div class="article-comments">
                                                <i class="fas fa-comment"></i>
                                                <span>123</span>
                                            </div>
                                            <div class="article-shares">
                                                <i class="fas fa-share-alt"></i>
                                                <span>123</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="article-bar"></div>
                                    <div class="article-image">
                                        <img src="./assets/images/cake1.jpg" alt="Bolo">
                                    </div>
                                </article>
                            </div>
                            <div class="row">
                                <article class="article d-flex">
                                    <div class="article-description">
                                        <h2>VANILLA CAKE</h2>
                                        <small>Por <span>CakeLand</span></small>
                                        <p>Um delicioso bolo com a massa tradicional da<br>casa especialmente feito para festas...</p>
                                        <div class="article-social d-flex">
                                            <div class="article-likes">
                                                <i class="fas fa-heart"></i>
                                                <span>305</span>
                                            </div>
                                            <div class="article-comments">
                                                <i class="fas fa-comment"></i>
                                                <span>123</span>
                                            </div>
                                            <div class="article-shares">
                                                <i class="fas fa-share-alt"></i>
                                                <span>123</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="article-bar"></div>
                                    <div class="article-image">
                                        <img src="./assets/images/cake1.jpg" alt="Bolo">
                                    </div>
                                </article>
                            </div>
                            <div class="row">
                                <article class="article d-flex">
                                    <div class="article-description">
                                        <h2>VANILLA CAKE</h2>
                                        <small>Por <span>CakeLand</span></small>
                                        <p>Um delicioso bolo com a massa tradicional da<br>casa especialmente feito para festas...</p>
                                        <div class="article-social d-flex">
                                            <div class="article-likes">
                                                <i class="fas fa-heart"></i>
                                                <span>305</span>
                                            </div>
                                            <div class="article-comments">
                                                <i class="fas fa-comment"></i>
                                                <span>123</span>
                                            </div>
                                            <div class="article-shares">
                                                <i class="fas fa-share-alt"></i>
                                                <span>123</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="article-bar"></div>
                                    <div class="article-image">
                                        <img src="./assets/images/cake1.jpg" alt="Bolo">
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <article class="highlight">
                                <div class="article-header">
                                    <img src="./assets/images/highlight.jpg" alt="Bolo em destaque">
                                </div>
                                <div class="article-description">
                                    <h2>VANILLA CAKE</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur maiores molestiae deleniti nam cumque corporis libero.</p>
                                    <a href="#">VER RECEITA</a>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="categorias">
            <div class="section-header">
                <header class="d-flex">
                    <h2>CATEGORIAS</h2>
                </header>
                <div class="section-header-bar"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <article class="article">
                            <div class="article-image">
                                <img src="./assets/images/bolo-de-casamento.jpg" alt="">
                            </div>
                            <div class="article-description d-flex">
                                <h2>BOLOS DE CASAMENTO</h2>
                            </div>
                        </article>
                    </div>
                    <div class="col-4">
                        <article class="article">
                            <div class="article-image">
                                <img src="./assets/images/bolo-de-camada.jpg" alt="">
                            </div>
                            <div class="article-description d-flex">
                                <h2>BOLOS DE CAMADAS</h2>
                            </div>
                        </article>
                    </div>
                    <div class="col-4">
                        <article class="article">
                            <div class="article-image">
                                <img src="./assets/images/bolo-tsunami.jpg" alt="">
                            </div>
                            <div class="article-description d-flex">
                                <h2>BOLOS TSUNAMI</h2>
                            </div>
                        </article>
                    </div>
                    <div class="col-4">
                        <article class="article">
                            <div class="article-image">
                                <img src="./assets/images/bolo-de-morango.jpg" alt="">
                            </div>
                            <div class="article-description d-flex">
                                <h2>BOLOS DE MORANGO</h2>
                            </div>
                        </article>
                    </div>
                    <div class="col-4">
                        <article class="article">
                            <div class="article-image">
                                <img src="./assets/images/bolo-de-fuba.jpg" alt="">
                            </div>
                            <div class="article-description d-flex">
                                <h2>BOLOS DE FUBÁ</h2>
                            </div>
                        </article>
                    </div>
                    <div class="col-4">
                        <article class="article">
                            <div class="article-image">
                                <img src="./assets/images/bolo-de-brigadeiro.jpg" alt="">
                            </div>
                            <div class="article-description d-flex">
                                <h2>BOLOS DE BRIGADEIRO</h2>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="circles row d-flex">
                    <div class="circles d-flex">
                        <div class="circle"></div>
                        <div class="circle"></div>
                        <div class="circle"></div>
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Categorias -->

        <!-- Rodapé -->
        <footer id="footer">
            <div class="news d-flex">
                <div class="container d-flex">
                    <div>
                        <h3>RECEBA AS ÚLTIMAS RECEITAS!</h3>
                    </div>
                    <div class="search d-flex">
                        <input type="text" placeholder="Digite aqui o seu e-mail mais usado">
                        <i class="fas fa-search d-flex"></i>
                    </div>
                </div>
            </div>
            <div class="footer-links">
                <div class="container d-flex">
                    <div class="about">
                        <h3>SOBRE NÓS</h3>
                        <ul>
                            <li>História</li>
                            <li>Políticas de privacidade</li>
                            <li>Formas de contato</li>
                        </ul>
                    </div>
                    <div class="social">
                        <h3>NOSSAS REDES SOCIAIS</h3>
                        <ul class="d-flex">
                            <li><i class="fab fa-facebook-square"></i></li>
                            <li><i class="fab fa-instagram-square"></i></li>
                            <li><i class="fab fa-twitter-square"></i></li>
                            <li><i class="fab fa-github-square"></i></li>
                        </ul>
                    </div>
                    <div class="social">
                        <h3>NÃO SEI O QUE BOTAR AQUI</h3>
                        <ul>
                            <li>AQUI TAMBÉM NÃO</li>
                            <li>TÃO MENOS AQUI</li>
                            <li>HERE TOO</li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr>
            <div class="copyright">
                <div class="container">
                    <p>© COPYRIGHT 2020 - TODOS OS DIREITOS RESERVADOS</p>
                </div>
            </div>
        </footer>


<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>


</body>
</div>
</div>
</html>
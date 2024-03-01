<nav class="navbar navbar-inverse  navbar navbar-dark navabar-fixed-top  " >
               <div class="container">
                   <div class="navbar-header">
                       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                       </button>
                       <a href="index.php" class="navbar-brand" style="color: white;">VKUSOVED</a>
                       
                   </div>
                   
                   <div class="collapse navbar-collapse"  id="myNavbar">
                       <ul class="nav navbar-nav navbar-right">
                           <?php
                           if(isset($_SESSION['email'])){
                           ?>
                           <li><a href="contacts.php"><span class="glyphicon glyphicon-earphone"></span> Контакты</a></li>
                           <li><a href="services.php"><span class="glyphicon glyphicon-th-list"></span> Наши услуги</a></li>
                           <li><a href="products.php"><span class="	glyphicon glyphicon-gift"></span>Все товары</a></li>
                           <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Корзина</a></li>
                           <!-- <li><a href="admin.php"><span class="glyphicon glyphicon-plus"></span>Добавить товар</a></li>-->
                           <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Настройки</a></li>
                           <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Выйти из аккаунта</a></li>
                           <?php
                           }else{
                            ?>
                            <li><a href="contacts.php"><span class="glyphicon glyphicon-earphone"></span> Контакты</a></li>
                           <li><a href="services.php"><span class="glyphicon glyphicon-th-list"></span> Наши услуги</a></li>
                           <li><a href="products.php"><span class="glyphicon glyphicon-gift"></span>Все товары</a></li>
                           <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Зарегистрироваться</a></li>
                           <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Войти в аккаунт</a></li>
                           
                           <?php
                           }
                           ?>
                           
                       </ul>
                   </div>
               </div>
</nav>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>
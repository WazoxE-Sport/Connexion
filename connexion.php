<div class="header__slogan">
                <h1 class="h__slogan--title">Wazox pour la vie</h1>
                <a href="" class="btn">Contactez-nous</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="form">
        <?php
       if(isset($_GET['login_err']))
       {
           $err = htmlspecialchars($_GET['login_err']);

           switch($err)
           {
               case 'password':
                ?>
                    <div class='alert alert-danger'>
                        <strong>Erreur</strong> mot de passe incorrect 
                    </div>
                <?php
                break;

                case 'email':
                ?>
                    <div class='alert alert-danger'>
                        <strong>Erreur</strong> email incorrect 
                    </div>
                <?php
                break;

                case 'already':
                ?>
                    <div class='alert alert-danger'>
                        <strong>Erreur</strong> compte non existant
                    </div>
                <?php
                break;
           }
       }
       ?>
            <div class="form__title">Connexion</div>
            <form class="form__inner" action="connexion.php">
              <div class="form__line">
                <div class="form__block">
                    <h4 class="form__label">Email</h4>
                    <input class="form__input" type="text">
                </div>
              </div>
              <div class="form__line">
                <div class="form__block">
                   <h4 class="form__label">Mot de passe</h4>
                   <input class="form__input" type="text">
               </div>
             </div>
             <button class="btn">Se connecter</button>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="public/css/img/js/app.js"></script>
   </body>
</html>
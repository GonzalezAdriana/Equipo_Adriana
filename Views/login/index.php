
<body id="LoginForm">
<div class="container">
    <h1 class="form-heading"></h1>
 
<br>
    <div class="login-form">
        <div class="main-div">
            <div><?php echo isset($_SESSION["error_login"])?$_SESSION["error_login"]:""?></div>

            <div class="panel">
                <h2>Inicio de sesión</h2>
                <p>Por favor coloca tu cuenta y contraseña</p>
            </div>
            <form id="form-signin" class="form-signin" method="post" action="<?php echo URL?>login/Verify">


                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="email" id="nickname"  name="nickname" class="form-control" placeholder="Correo">

                </div>
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-unlock"></i></span>
                    </div>
                    <input type="password" id="pass" name="pass" class="form-control" placeholder="Contraseña">
                </div>



                <div class="form-group">
                    <!--<button type="submit" id="signin" class="col s12 btn btn-large waves-effect indigo">Entrar</button> -->
                    <button type='submit' name='btn_login' class='btn btn-primary'>Entrar</button>
                </div>




                <div class="container">
                    <p class="text text-black-50 mx-auto mt-2 mb-10">¿Aún no tienes cuenta con nosotros?</p>
                    <a  href="<?php echo URL?>Personas" class="btn btn-primary js-scroll-trigger" id="signin">Registrate</a>

                </div>
            </form>
        </div>
    </div>
</div>
</body>


<<<<<<< HEAD
<body id="LoginForm">
<div class="container">
    <h1 class="form-heading"></h1>
    <div class="login-form">
        <div class="main-div">
            <div class="panel">
                <h2>Inicio de sesión</h2>
                <p>Por favor coloca tu cuenta y contraseña</p>
            </div>
            <form id="Login">
                <div class="form-group">
                    <input type="text" class="form-control" id="cuenta" placeholder="Numero de cuenta">
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Contraseña">
                </div>

                <div class="form-group">
                    <button type="submit" id="signin" class="btn btn-primary">Entrar</button>
                </div>

                <div class="container">
                    <p class="text text-black-50 mx-auto mt-2 mb-10">¿Aún no tienes cuenta con nosotros?</p>
                    <a  href="<?php echo URL?>login/registrar" class="btn btn-primary js-scroll-trigger" id="signin">Registrate</a>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
=======

<div class="container"  >

    <div class="col d-flex justify-content-center">
        <div class="card">
            <div class="card center" style="width: 20rem;"  >
                <img id="profile-img" class="profile-img-card" src="Public/img/admin.jpg" />
                <p id="profile-name" class="profile-name-card"></p>
                <form class="form-signin">
                    <span id="reauth-email" class="reauth-email"></span>
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                    <div id="remember" class="checkbox">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
                </form><!-- /form -->
                <a href="#" class="forgot-password">
                    Forgot the password?
                </a>
            </div>
            </card>
        </div>
</div><!-- /

container -->
>>>>>>> 60e9f25c8db99138fcced039f180b03aca9892c4

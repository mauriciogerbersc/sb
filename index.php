<!doctype html>
<!--[if lte IE 9]> <html class="lte-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no"/>
    <title>SB - Sistema de Geração de Propostas Comerciais</title>

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500' rel='stylesheet' type='text/css'>

    <!-- uikit -->
    <link rel="stylesheet" href="bower_components/uikit/css/uikit.almost-flat.min.css"/>

    <link rel="stylesheet" href="assets/css/login_page.css" />

</head>
<body class="login_page">

    <div class="login_page_wrapper">
        <div class="md-card" id="login_card">
            <div class="md-card-content large-padding" id="login_form">
              
                <form method="GET" action="/">
                    <div class="uk-form-row">
                        <label for="login_username">Usuário</label>
                        <input class="md-input" type="text" id="login_username" name="login_username" />
                    </div>
                    <div class="uk-form-row">
                        <label for="login_password">Senha</label>
                        <input class="md-input" type="password" id="login_password" name="login_password" />
                    </div>
                    <div class="uk-margin-medium-top">
                        <a href="dashboard.php" class="md-btn md-btn-primary md-btn-block md-btn-large">Acessar</a>
                    </div>
                  
                    <div class="uk-margin-top">
                        <a href="#" id="login_help_show" class="uk-float-right">Precisa de ajuda?</a>
                        <span class="icheck-inline">
                            <input type="checkbox" name="login_page_stay_signed" id="login_page_stay_signed" data-md-icheck />
                            <label for="login_page_stay_signed" class="inline-label">Permanecer Logado</label>
                        </span>
                    </div>
                </form>
            </div>
            <div class="md-card-content large-padding uk-position-relative" id="login_help" style="display: none">
                <button type="button" class="uk-position-top-right uk-close uk-margin-right uk-margin-top back_to_login"></button>
                <h2 class="heading_b uk-text-success">Não consegue acessar?</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p> Mauris eget volutpat purus. Curabitur ultrices eget ex sed vestibulum. Donec et pharetra mauris, id mollis ipsum</p>
                <p>Morbi eu sem sed eros vestibulum lacinia. <a href="#" id="password_reset_show">Resetar sua senha</a>.</p>
            </div>
            <div class="md-card-content large-padding" id="login_password_reset" style="display: none">
                <button type="button" class="uk-position-top-right uk-close uk-margin-right uk-margin-top back_to_login"></button>
                <h2 class="heading_a uk-margin-large-bottom">Resete sua senha</h2>
                <form>
                    <div class="uk-form-row">
                        <label for="login_email_reset">Seu e-mail</label>
                        <input class="md-input" type="text" id="login_email_reset" name="login_email_reset" />
                    </div>
                    <div class="uk-margin-medium-top">
                        <a href="index.html" class="md-btn md-btn-primary md-btn-block">Resetar senha</a>
                    </div>
                </form>
            </div>
        </div>
    
    </div>

    <!-- common functions -->
    <script src="assets/js/common.min.js"></script>
    <!-- uikit functions -->
    <script src="assets/js/uikit_custom.min.js"></script>
    <!-- altair core functions -->
    <script src="assets/js/altair_admin_common.min.js"></script>

    <!-- altair login page functions -->
    <script src="assets/js/pages/login.min.js"></script>

    <script>
        // check for theme
        if (typeof(Storage) !== "undefined") {
            var root = document.getElementsByTagName( 'html' )[0],
                theme = localStorage.getItem("altair_theme");
            if(theme == 'app_theme_dark' || root.classList.contains('app_theme_dark')) {
                root.className += ' app_theme_dark';
            }
        }
    </script>

</body>
</html>
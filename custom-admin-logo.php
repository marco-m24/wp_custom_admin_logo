// Personalizziamo il logo

function mrc_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(URL DEL TUO LOGO);
        height:100px;
        width:300px;
        background-size: 300px 100px;
        background-repeat: no-repeat;
        padding-bottom: 10px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'mrc_login_logo' );


// Personalizziamo l'url del logo

function mrc_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'mrc_login_logo_url' );

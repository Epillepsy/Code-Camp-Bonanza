<?php if(!class_exists('raintpl')){exit;}?>


<!-- <div class="ui inverted vertical masthead center aligned segment" style="min-height: 150px;"> -->
<!-- Following Menu -->
<link rel="stylesheet" type="text/css" href="./../includes/components/popup.css">
<link rel="stylesheet" type="text/css" href="./../includes/components/dropdown.css">
<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<script src="./../includes/components/popup.js"></script>
<script src="./../includes/components/dropdown.js"></script>
<!-- MENU BLEU !!! -->
<div class="ui large top fixed hidden menu inverted blue">
<div class="ui container">
<a class="open-sidebar view-ui toc item"  style="border:none;">
<img src="./../images/logo.png" width="5px" style="display: inline; padding-right: 5px;"></img> MENU&nbsp;<i class="fa fa-arrow-right"></i> 
</a>

<?php if( $co==0 ){ ?>

<div class="right menu">
    <div class="ui pointing top dropdown button basic inverted" style="margin-bottom: 12px; margin-top: 12px; margin-right: 60px;">
        Connexion
        <div class="menu">
            <div class="header">Gestion utilisateur</div>
            <div class="item">
                <a class="ui button fade animated colored blue login_button" style="margin: 0 auto; background-color: #167e95; opacity: 0.85;">
                    <div class="visible content">
                        Se connecter

                    </div>
                    <div class="hidden content">
                        <i class="fa fa-check"></i>
                    </div>
                </a>
            </div>
            <div class="ui divider"></div>
            <center>
                <div class="item inverted">
                    <a class="ui button fade animated colored green register_button" style="margin: 0 auto">
                        <div class="visible content">
                            S'inscrire
                        </div>
                        <div class="hidden content">
                            <i class="fa fa-sign-out"></i>
                        </div>
                    </a>
                </div>
            </center>
        </div>
        <!--<div class="right menu">
            <div class="item">
            <a class="ui button fade animated black inverted login_button">
            <div class="visible content">
            Se connecter
            </div>
            <div class="hidden content">
            <i class="fa fa-check"></i>
            </div>
            </a>
            </div>
            <div class="item">
            <a class="ui button fade animated black inverted register_button">
            <div class="visible content">
            S'inscrire
            </div>
            <div class="hidden content">
            <i class="fa fa-check"></i>
            </div>
            </a>
            </div>
            </div>-->
        <?php }else{ ?>

        <div class="right menu">
            <div class="ui pointing top dropdown button basic inverted blue_powa" style="margin-bottom: 12px; margin-top: 12px; margin-right: 60px;">
                Connecté
                <div class="menu">
                    <div class="header">Gestion utilisateur</div>
                    <div class="item disabled">
                        <center>
                            <a class="ui button disabled fade animated black">
                                <div class="visible content">
                                    <?php echo $nom_complet;?>


                                </div>
                                <div class="hidden content">
                                    <i class="fa fa-check"></i>
                                </div>
                            </a>
                        </center>
                    </div>
                    <div class="ui divider"></div>
                    <center>
                        <div class="item inverted">
                            <a href="/src/log_out.php" class="ui button fade animated colored red" style="margin: 0 auto">
                                <div class="visible content">
                                    Log out
                                </div>
                                <div class="hidden content">
                                    <i class="fa fa-sign-out"></i>
                                </div>
                            </a>
                        </div>
                    </center>
                </div>
            </div>
        </div>
        <!--
            <div class="right menu">
            <div class="item">
            <a class="ui button disabled fade animated black inverted login_button">
            <div class="visible content">
            <?php echo $nom_complet;?>

            </div>
            <div class="hidden content">
            <i class="fa fa-check"></i>
            </div>
            </a>
            </div>
            <div class="item">
            <a class="ui button fade animated blue inverted login_button">
            <div class="visible content">
            Log out
            </div>
            <div class="hidden content">
            <i class="fa fa-sign-out"></i>
            </div>
            </a>
            </div>
            </div>-->
        <?php } ?>

    </div>
</div>
<!-- Sidebar Menu -->
<div class="ui vertical sidebar labeled icon transition fade menu">
    <a class="active item" href="/src/list_stages.php">
        <div class="icon"><i class="fa fa-search"></i></div>
        Stages
    </a>
    <a class="item" href="/src/msg.php">
        <div class="icon"><i class="fa fa-envelope"></i></div>
        Messagerie
    </a>
    <a class="item" href="/src/inscription_ext.php">
        <div class="icon"><i class="fa fa-sitemap"></i></div>
        Reseaux
    </a>
    <a class="item" href="/src/suivi.php">
        <div class="icon"><i class="fa fa-bell"></i></div>
        Suivi des candidatures
    </a>
    <a class="item" href="/src/profil.php">
        <div class="icon"><i class="fa fa-child"></i></div>
        Profile
    </a>
    <a class="item" href="/src/change_send.php">
        <div class="icon"><i class="fa fa-cogs"></i></div>
        Settings
    </a>
    <a class="item" href="/src/rss.php">
        <div class="icon"><i class="fa fa-rss"></i></div>
        Flux RSS
    </a>
    <a class="item" href="/src/view_map.php">
        <div class="icon"><i class="fa fa-map"></i></div>
        Carte
    </a>
    <?php if( $role==2 ){ ?>

        <a class="active red colored item" href="/src/form_add_internship.php">
        <div class="icon"><i class="fa fa-plus"></i></div>
        Ajouter un stage
        </a>
        <a class="active red colored item" href="/src/ask_answer.php">
        <div class="icon"><i class="fa fa-eye"></i></div>
        Voir vos demandes
        </a>
    <?php } ?>

    <?php if( $role==0 ){ ?>

        <a class="active red colored item" href="/src/employer.php">
        <div class="icon"><i class="fa fa-plus"></i></div>
        Ajouter un recruteur
        </a>
        <a class="active red colored item" href="/src/form_add_internship.php">
        <div class="icon"><i class="fa fa-plus"></i></div>
        Ajouter un stage
        </a>
        <a class="active red colored item" href="/src/ask_answer.php">
        <div class="icon"><i class="fa fa-eye"></i></div>
        Voir vos demandes
        </a>
    <?php } ?>


</div>
<!-- Page Contents -->
<div class="pusher">
<div class="ui inverted vertical masthead center aligned segment" style="min-height: 150px;">
<div class="ui container">
    <div class="ui secondary large inverted pointing menu">
        <!--
            <a class="active item">Home</a>
            <a class="item">Work</a>
            <a class="item">Company</a>
            <a class="item">Careers</a>
            -->
        <a class="ui inverted open-sidebar view-ui item" style="">
        <img src="./../images/logo.png" width="5px" style="display: inline; padding-right: 5px;"></img>
        MENU&nbsp;<i class="fa fa-arrow-right"></i> 
        </a>
        <?php if( $co==0 ){ ?>

        <div class="right menu">
            <div class="ui pointing top dropdown button basic inverted" style="margin-bottom: 12px; margin-top: 12px; margin-right: 60px;">
                Connexion
                <div class="menu">
                    <div class="header">Gestion utilisateur</div>
                    <div class="item">
                        <a class="ui button fade animated black login_button" style="background-color: #167e95; opacity: 0.85;">
                            <div class="visible content">
                                Se connecter
                            </div>
                            <div class="hidden content">
                                <i class="fa fa-check"></i>
                            </div>
                        </a>
                    </div>
                    <div class="ui divider"></div>
                    <center>
                        <div class="item inverted">
                            <a class="ui button fade animated colored green register_button" style="margin: 0 auto">
                                <div class="visible content">
                                    S'inscrire
                                </div>
                                <div class="hidden content">
                                    <i class="fa fa-sign-out"></i>
                                </div>
                            </a>
                        </div>
                    </center>
                </div>
            </div>
        </div>
        <?php }else{ ?>

        <div class="right menu">
            <div class="ui pointing top dropdown button basic inverted" style="margin-bottom: 12px; margin-top: 12px; margin-right: 60px;">
                Connecté
                <div class="menu">
                    <div class="header">Gestion utilisateur</div>
                    <div class="item disabled">
                        <a class="ui button disabled fade animated black">
                            <div class="visible content">
                                <?php echo $nom_complet;?>

                            </div>
                            <div class="hidden content">
                                <i class="fa fa-check"></i>
                            </div>
                        </a>
                    </div>
                    <div class="ui divider"></div>
                    <center>
                        <div class="item inverted">
                            <a href="/src/log_out.php" class="ui button fade animated colored red" style="margin: 0 auto">
                                <div class="visible content">
                                    Log out
                                </div>
                                <div class="hidden content">
                                    <i class="fa fa-sign-out"></i>
                                </div>
                            </a>
                        </div>
                    </center>
                </div>
            </div>
        </div>
        <?php } ?>

    </div>
</div>
<script>
    /*$('.u_dropdown')
    .popup({on: 'click'});
    ;*/
    $('.custom.button')
    .popup({
    popup : $('.custom.popup'),
    on    : 'click'
    })
    ;
    $('.dropdown')
    .dropdown()
    ;
    $('.blue_powa')
    .dropdown()
    ;
</script>


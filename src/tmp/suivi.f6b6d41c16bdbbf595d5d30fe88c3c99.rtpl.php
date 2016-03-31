<?php if(!class_exists('raintpl')){exit;}?><!DOCTYPE html>
<html>
    <head>
        <!-- Standard Meta -->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <!-- Site Properities -->
        <title>Bonanza</title>
        <link rel="stylesheet" type="text/css" href="./../includes/components/reset.css">
        <link rel="stylesheet" type="text/css" href="./../includes/components/site.css">
        <link rel="stylesheet" type="text/css" href="./../includes/components/container.css">
        <link rel="stylesheet" type="text/css" href="./../includes/components/grid.css">
        <link rel="stylesheet" type="text/css" href="./../includes/components/header.css">
        <link rel="stylesheet" type="text/css" href="./../includes/components/image.css">
        <link rel="stylesheet" type="text/css" href="./../includes/components/menu.css">
        <link rel="stylesheet" type="text/css" href="./../includes/components/divider.css">
        <link rel="stylesheet" type="text/css" href="./../includes/components/dropdown.css">
        <link rel="stylesheet" type="text/css" href="./../includes/components/segment.css">
        <link rel="stylesheet" type="text/css" href="./../includes/components/button.css">
        <link rel="stylesheet" type="text/css" href="./../includes/components/list.css">
        <link rel="stylesheet" type="text/css" href="./../includes/components/icon.css">
        <link rel="stylesheet" type="text/css" href="./../includes/components/sidebar.css">
        <link rel="stylesheet" type="text/css" href="./../includes/components/transition.css">
        <link rel="stylesheet" type="text/css" href="./../includes/components/dimmer.css">
        <link rel="stylesheet" type="text/css" href="./../includes/components/modal.css">
        <link rel="stylesheet" type="text/css" href="./../includes/components/form.css">
        <link rel="stylesheet" type="text/css" href="./../includes/components/checkbox.css">
        <link rel="stylesheet" type="text/css" href="./../includes/components/tab.css">
        <link rel="stylesheet" type="text/css" href="./../includes/components/card.css">
        <link rel="stylesheet" type="text/css" href="./../includes/components/label.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <style type="text/css">
            .hidden.menu {
            display: none;
            }
            .masthead {
            background-image: url('../images/masthead.jpg');
            box-shadow: 0px 0px 5px black !important;
            background-attachment: fixed;
            }
            .masthead.segment {
            min-height: 700px;
            padding: 1em 0em;
            }
            .masthead .logo.item img {
            margin-right: 1em;
            }
            .masthead .ui.menu .ui.button {
            margin-left: 0.5em;
            }
            .masthead h1.ui.header {
            margin-top: 3em;
            margin-bottom: 0em;
            font-size: 4em;
            font-weight: normal;
            }
            .masthead h2 {
            font-size: 1.7em;
            font-weight: normal;
            }
            .ui.vertical.stripe {
            padding: 8em 0em;
            }
            .ui.vertical.stripe h3 {
            font-size: 2em;
            }
            .ui.vertical.stripe .button + h3,
            .ui.vertical.stripe p + h3 {
            margin-top: 3em;
            }
            .ui.vertical.stripe .floated.image {
            clear: both;
            }
            .ui.vertical.stripe p {
            font-size: 1.33em;
            }
            .ui.vertical.stripe .horizontal.divider {
            margin: 3em 0em;
            }
            .quote.stripe.segment {
            padding: 0em;
            }
            .quote.stripe.segment .grid .column {
            padding-top: 5em;
            padding-bottom: 5em;
            }
            .footer.segment {
            padding: 5em 0em;
            }
            .sidebar {
            z-index: 999;
            }
            @media only screen and (max-width: 700px) {
            /*.ui.fixed.menu {
            display: none !important;
            }*/
            /*.secondary.pointing.menu .item,
            .secondary.pointing.menu .menu {
            display: none;
            }*/
            .masthead.segment {
            min-height: 350px;
            }
            .masthead h1.ui.header {
            font-size: 2em;
            margin-top: 1.5em;
            }
            .masthead h2 {
            margin-top: 0.5em;
            font-size: 1.5em;
            }
            .fa-arrow-right {
            margin-left: 5px;
            }
            }
        </style>
        <script src="./../includes/jquery.js"></script>
        <script src="./../includes/components/visibility.js"></script>
        <script src="./../includes/components/sidebar.js"></script>
        <script src="./../includes/components/transition.js"></script>
        <script src="./../includes/components/dimmer.js"></script>
        <script src="./../includes/components/modal.js"></script>
        <script src="./../includes/components/form.js"></script>
        <script src="./../includes/components/checkbox.js"></script>
        <script src="./../includes/components/tab.js"></script>
        <script src="./../includes/components/card.js"></script>
        <script src="./../includes/components/label.js"></script>
        <script>
            $(document)
              .ready(function() {
            
                // fix menu when passed
                $('.masthead')
                  .visibility({
                    once: false,
                    onBottomPassed: function() {
                      $('.fixed.menu').transition('slide down');
                    },
                    onBottomPassedReverse: function() {
                      $('.fixed.menu').transition('slide down');
                    }
                  })
                ;
            
                // create sidebar and attach to menu open
                $('.ui.sidebar')
                  .sidebar('attach events', '.open-sidebar.item');
              });
        </script>
    </head>
    <body>
        <?php $tpl = new RainTPL;$tpl->assign( $this->var );$tpl->draw( "modal" );?>

        <!--<div class="ui page dimmer">
            <div class="content center">
              <h2 class="ui inverted icon header">
                  <div class="icon"><i class="fa fa-sign-in"></i></div>
                  Connexion
            
                     <div class="ui inverted segment">
                      <div class="ui inverted form">
                        <div class="two fields">
                          <div class="field">
            <label>First Name</label>
                            <input placeholder="First Name" type="text">
                          </div>
                          <div class="field">
                            <label>Last Name</label>
                            <input placeholder="Last Name" type="text">
                          </div>
                        </div>
                        <div class="inline field">
                          <div class="ui checkbox">
                            <input class="hidden" tabindex="0" type="checkbox">
                            <label>I agree to the terms and conditions</label>
                          </div>
                        </div>
                        <div class="ui submit button">Submit</div>
                      </div>
                    </div>
            
                </h2>
            </div>
            </div> -->
        <?php $tpl = new RainTPL;$tpl->assign( $this->var );$tpl->draw( "menu" );?>

        <div class="ui text container">
            <h1 class="ui inverted header" style="margin-top: 0px !important;">
                <!--<a href="/../index.php"><img src="./../images/logo.png" width="100px"></img></a><br />-->
            </h1>
        </div>
        </div>
        <div class="ui vertical stripe segment">
            <div class="ui middle aligned stackable grid container">
                <div class="row">
                    <div class="twelve center wide column">
                        <h3 class="ui header">Suivi de vos demandes de stages
                        </h3>
                        <div class="ui grid" style="padding-top: 20px;">
                            <div class="ui menu fluid three item top no_reload_menu segment tall stacked" style="padding: 0px; margin-bottom: 40px;">
                                <a class="active item" data-tab="1" style="color: green"><i class="fa fa-smile-o"></i> &nbsp;Acceptes</a>
                                <a class="item" data-tab="2" style="color: orange"><i class="fa fa-meh-o"></i> &nbsp;En attente</a>
                                <a class="item" data-tab="3" style="color: red"><i class="fa fa-frown-o"></i> &nbsp;Refuses</a>
                            </div>
                            <div class="ui bottom piled very padded attached segment" style="margin: 1px auto">
                                <div class="ui tab active" data-tab="1" style="margin: 0 auto">
                                    <div class="ui cards green one column center">
                                        <?php $counter1=-1; if( isset($intern_a) && is_array($intern_a) && sizeof($intern_a) ) foreach( $intern_a as $key1 => $value1 ){ $counter1++; ?>

                                        <div class="card column">
                                            <div class="content row">
                                                <?php $counter2=-1; if( isset($value1) && is_array($value1) && sizeof($value1) ) foreach( $value1 as $key2 => $value2 ){ $counter2++; ?>

                                                <?php if( $key2 == 'name' ){ ?>

                                                <div class="header" style="text-transform: uppercase;">&nbsp;<?php echo $value2;?></div>
                                                <?php }else{ ?> 
                                                <div class="ui grid">
                                                    <div class="two column row">
                                                        <div class="column">
                                                            <div class="description">
                                                                <?php if( $key2 == 'place' ){ ?>

                                                                Lieu
                                                                <?php } ?>

                                                            </div>
                                                            <div class="description">
                                                                <?php if( $key2 == 'skills' ){ ?>

                                                                Competences ou diplome attendues                   
                                                                <?php } ?>

                                                            </div>
                                                            <div class="description">
                                                                <?php if( $key2 == 'society' ){ ?>

                                                                Nom de la societe                    
                                                                <?php } ?>

                                                            </div>
                                                        </div>
                                                        <div class="column">
                                                            <div class="description">
                                                                <?php if( $key2 == 'place' ){ ?>

                                                                <center><a class="ui basic label column"><?php echo $value2;?></a></center>
                                                                <?php } ?>

                                                            </div>
                                                            <div class="description">
                                                                <?php if( $key2 == 'skills' ){ ?>                      
                                                                <center><a class="ui basic label column"><?php echo $value2;?></a></center>
                                                                <?php } ?>

                                                            </div>
                                                            <div class="description">
                                                                <?php if( $key2 == 'society' ){ ?>                       
                                                                <center><a class="ui basic green label column"><?php echo $value2;?></a></center>
                                                                <?php } ?>

                                                            </div>
                                                        </div>
                                                        <!--    DESCRIPTION    -->
                                                        <!--                   -->
                                                    </div>
                                                    <?php if( $key2 == 'description' ){ ?>

                                                    <div class="description" style="padding-bottom: 20px;">
                                                        <p><?php echo $value2;?></p>
                                                    </div>
                                                    <?php } ?>

                                                </div>
                                                <?php } ?>

                                                <?php } ?>

                                            </div>
                                        </div>
                                        <?php } ?>

                                    </div>
                                </div>
                                <div class="ui tab" data-tab="2" style="margin: 0 auto">
                                    <div class="ui cards orange one column center">
                                        <?php $counter1=-1; if( isset($intern_w) && is_array($intern_w) && sizeof($intern_w) ) foreach( $intern_w as $key1 => $value1 ){ $counter1++; ?>

                                        <div class="card column">
                                            <div class="content row">
                                                <?php $counter2=-1; if( isset($value1) && is_array($value1) && sizeof($value1) ) foreach( $value1 as $key2 => $value2 ){ $counter2++; ?>

                                                <?php if( $key2 == 'name' ){ ?>

                                                <div class="header" style="text-transform: uppercase;">&nbsp;<?php echo $value2;?></div>
                                                <?php }else{ ?> 
                                                <div class="ui grid">
                                                    <div class="two column row">
                                                        <div class="column">
                                                            <div class="description">
                                                                <?php if( $key2 == 'place' ){ ?>

                                                                Lieu
                                                                <?php } ?>

                                                            </div>
                                                            <div class="description">
                                                                <?php if( $key2 == 'skills' ){ ?>

                                                                Competences ou diplome attendues                   
                                                                <?php } ?>

                                                            </div>
                                                            <div class="description">
                                                                <?php if( $key2 == 'society' ){ ?>

                                                                Nom de la societe                    
                                                                <?php } ?>

                                                            </div>
                                                        </div>
                                                        <div class="column">
                                                            <div class="description">
                                                                <?php if( $key2 == 'place' ){ ?>

                                                                <center><a class="ui basic label column"><?php echo $value2;?></a></center>
                                                                <?php } ?>

                                                            </div>
                                                            <div class="description">
                                                                <?php if( $key2 == 'skills' ){ ?>                      
                                                                <center><a class="ui basic label column"><?php echo $value2;?></a></center>
                                                                <?php } ?>

                                                            </div>
                                                            <div class="description">
                                                                <?php if( $key2 == 'society' ){ ?>                       
                                                                <center><a class="ui basic orange label column"><?php echo $value2;?></a></center>
                                                                <?php } ?>

                                                            </div>
                                                        </div>
                                                        <!--    DESCRIPTION    -->
                                                        <!--                   -->
                                                    </div>
                                                    <?php if( $key2 == 'description' ){ ?>

                                                    <div class="description" style="padding-bottom: 20px;">
                                                        <p><?php echo $value2;?></p>
                                                    </div>
                                                    <?php } ?>

                                                </div>
                                                <?php } ?>

                                                <?php } ?>

                                            </div>
                                        </div>
                                        <?php } ?>

                                    </div>
                                </div>
                                <div class="ui tab" data-tab="3" style="margin: 0 auto">
                                    <div class="ui cards red one column center">
                                        <?php $counter1=-1; if( isset($intern_r) && is_array($intern_r) && sizeof($intern_r) ) foreach( $intern_r as $key1 => $value1 ){ $counter1++; ?>

                                        <div class="card column">
                                            <div class="content row">
                                                <?php $counter2=-1; if( isset($value1) && is_array($value1) && sizeof($value1) ) foreach( $value1 as $key2 => $value2 ){ $counter2++; ?>

                                                <?php if( $key2 == 'name' ){ ?>

                                                <div class="header" style="text-transform: uppercase;">&nbsp;<?php echo $value2;?></div>
                                                <?php }else{ ?> 
                                                <div class="ui grid">
                                                    <div class="two column row">
                                                        <div class="column">
                                                            <div class="description">
                                                                <?php if( $key2 == 'place' ){ ?>

                                                                Lieu
                                                                <?php } ?>

                                                            </div>
                                                            <div class="description">
                                                                <?php if( $key2 == 'skills' ){ ?>

                                                                Competences ou diplome attendues                   
                                                                <?php } ?>

                                                            </div>
                                                            <div class="description">
                                                                <?php if( $key2 == 'society' ){ ?>

                                                                Nom de la societe                    
                                                                <?php } ?>

                                                            </div>
                                                        </div>
                                                        <div class="column">
                                                            <div class="description">
                                                                <?php if( $key2 == 'place' ){ ?>

                                                                <center><a class="ui basic label column"><?php echo $value2;?></a></center>
                                                                <?php } ?>

                                                            </div>
                                                            <div class="description">
                                                                <?php if( $key2 == 'skills' ){ ?>                      
                                                                <center><a class="ui basic label column"><?php echo $value2;?></a></center>
                                                                <?php } ?>

                                                            </div>
                                                            <div class="description">
                                                                <?php if( $key2 == 'society' ){ ?>                       
                                                                <center><a class="ui basic label column" style="background-color: #e74c3c; color: white"><?php echo $value2;?></a></center>
                                                                <?php } ?>

                                                            </div>
                                                        </div>
                                                        <!--    DESCRIPTION    -->
                                                        <!--                   -->
                                                    </div>
                                                    <?php if( $key2 == 'description' ){ ?>

                                                    <div class="description" style="padding-bottom: 20px;">
                                                        <p><?php echo $value2;?></p>
                                                    </div>
                                                    <?php } ?>

                                                </div>
                                                <?php } ?>

                                                <?php } ?>

                                            </div>
                                        </div>
                                        <?php } ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   <?php $tpl = new RainTPL;$tpl->assign( $this->var );$tpl->draw( "footer" );?>

        </div>
        <script>
            $('.login_button').on('click', function() {
              $('.ui.modal.login').modal('show')
              ;
            });
            $('.register_button').on('click', function() {
              $('.ui.modal.register').modal('show')
              ;
            });
            
            $('.ui.slider.checkbox')
              .checkbox()
            ;
            $(document).ready(function(){
            $('.no_reload_menu .item').tab({history:false});
            });
            
        </script>
    </body>
</html>


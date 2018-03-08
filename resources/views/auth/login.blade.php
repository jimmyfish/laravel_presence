<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description" content="bootstrap material admin template">
        <meta name="author" content="">
        
        <title>MRV Sys</title>
        
        <link rel="apple-touch-icon" href="../../assets/images/apple-touch-icon.png">
        <link rel="shortcut icon" href="../../assets/images/favicon.ico">
        
        <!-- Stylesheets -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap-extend.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/site.min.css') }}">
        
        <!-- Plugins -->
        <link rel="stylesheet" href="{{ asset('vendor/animsition/animsition.css') }}">
        <!-- <link rel="stylesheet" href="../../../global/vendor/asscrollable/asScrollable.css">
        <link rel="stylesheet" href="../../../global/vendor/switchery/switchery.css">
        <link rel="stylesheet" href="../../../global/vendor/intro-js/introjs.css">
        <link rel="stylesheet" href="../../../global/vendor/slidepanel/slidePanel.css">
        <link rel="stylesheet" href="../../../global/vendor/flag-icon-css/flag-icon.css">
        <link rel="stylesheet" href="../../../global/vendor/waves/waves.css"> -->
        <link rel="stylesheet" href="{{ asset('css/login-v3.min.css') }}">
        
        
        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('fonts/material-design/material-design.min.css') }}">
        <link rel="stylesheet" href="{{ asset('fonts/brand-icons/brand-icons.min.css') }}">
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
        
        <!--[if lt IE 9]>
        <script src="../../../global/vendor/html5shiv/html5shiv.min.js"></script>
        <![endif]-->
        
        <!--[if lt IE 10]>
        <script src="../../../global/vendor/media-match/media.match.min.js"></script>
        <script src="../../../global/vendor/respond/respond.min.js"></script>
        <![endif]-->
        
        <!-- Scripts -->
        <script src="{{ asset('vendor/breakpoints/breakpoints.js') }}"></script>
        <script>
        Breakpoints();
        </script>
    </head>
    <body class="animsition page-login-v3 layout-full">
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- Page -->
        <div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">>
            <div class="page-content vertical-align-middle">
                <div class="panel">
                    <div class="panel-body">
                        <div class="brand">
                            <img class="brand-img" src="{{ asset('images/fix.png') }}" alt="..." height="100">
                            <!-- <h2 class="brand-text font-size-18">Remark</h2> -->
                        </div>
                        <form method="post" action="{{ route('client_login_post') }}" autocomplete="off">
                            {{ csrf_field() }}
                            <div class="form-group form-material floating" data-plugin="formMaterial">
                                <input type="text" class="form-control" name="username" />
                                <label class="floating-label">Username</label>
                            </div>
                            <div class="form-group form-material floating" data-plugin="formMaterial">
                                <input type="password" class="form-control" name="password" />
                                <label class="floating-label">Password</label>
                            </div>
                            
                            <button type="submit" class="btn btn-primary btn-block btn-lg mt-40">Sign in</button>
                        </form>
                        <!-- <p>Still no account? Please go to <a href="register-v3.html">Sign up</a></p> -->
                    </div>
                </div>
                <footer class="page-copyright page-copyright-inverse">
                    <p>MRV System v2.0</p>
                    <p>© 2018. All RIGHT RESERVED.</p>
                </footer>
            </div>
        </div>
        <!-- End Page -->
        <!-- Core  -->
        <script src="{{ asset('vendor/babel-external-helpers/babel-external-helpers.js') }}"></script>
        <script src="{{ asset('vendor/jquery/jquery.js') }}"></script>
        <!-- <script src="{{ asset('vendor/popper-js/umd/popper.min.js') }}"></script> -->
        <script src="{{ asset('vendor/bootstrap/bootstrap.js') }}"></script>
        <script src="{{ asset('vendor/animsition/animsition.js') }}"></script>
        <!-- <script src="../../../global/vendor/mousewheel/jquery.mousewheel.js"></script>
        <script src="../../../global/vendor/asscrollbar/jquery-asScrollbar.js"></script>
        <script src="../../../global/vendor/asscrollable/jquery-asScrollable.js"></script>
        <script src="../../../global/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
        <script src="../../../global/vendor/waves/waves.js"></script> -->
        
        <!-- Plugins -->
        <!-- <script src="../../../global/vendor/switchery/switchery.js"></script>
        <script src="../../../global/vendor/intro-js/intro.js"></script>
        <script src="../../../global/vendor/screenfull/screenfull.js"></script>
        <script src="../../../global/vendor/slidepanel/jquery-slidePanel.js"></script>
        <script src="../../../global/vendor/jquery-placeholder/jquery.placeholder.js"></script> -->
        
        <!-- Scripts -->
        <script src="{{ asset('js/Component.js') }}"></script>
        <script src="{{ asset('js/Plugin.js') }}"></script>
        <script src="{{ asset('js/Base.js') }}"></script>
        <script src="{{ asset('js/Config.js') }}"></script>
        
        <!-- <script src="../../assets/js/Section/Menubar.js"></script>
        <script src="../../assets/js/Section/GridMenu.js"></script>
        <script src="../../assets/js/Section/Sidebar.js"></script>
        <script src="../../assets/js/Section/PageAside.js"></script>
        <script src="../../assets/js/Plugin/menu.js"></script>
        
        <script src="../../../global/js/config/colors.js"></script>
        <script src="../../assets/js/config/tour.js"></script> -->
        <script>Config.set('assets', '{{ asset('') }}');</script>
        <script src="{{ asset('js/Site.js') }}"></script>
        <!-- <script src="../../../global/js/Plugin/asscrollable.js"></script>
        <script src="../../../global/js/Plugin/slidepanel.js"></script>
        <script src="../../../global/js/Plugin/switchery.js"></script> -->
        <script src="{{ asset('js/Plugin/jquery-placeholder.js') }}"></script>
        <script src="{{ asset('js/Plugin/material.js') }}"></script>
        
        <script>
        (function(document, window, $){
        'use strict';
        
        var Site = window.Site;
        $(document).ready(function(){
        Site.run();
        });
        })(document, window, jQuery);
        </script>
        
    </body>
</html>
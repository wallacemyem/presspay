<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
$this->load->view('web/sub/header');
?>
</head><!--/head-->


<body>
    <section id="error-page">
        <div class="error-page-inner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-center">
                            <div class="bg-404">
                                <div class="error-image">                                
                                    <img class="img-responsive" src="images/404.png" alt="">  
                                </div>
                            </div>
                            <h2>PAGE NOT FOUND</h2>
                            <p>The page you are looking for might have been removed, had its name changed.</p>
                            <a href="index.html" class="btn btn-error">RETURN TO THE HOMEPAGE</a>
                            <div class="social-link">
                                <span><a href="#"><i class="fa fa-facebook"></i></a></span>
                                <span><a href="#"><i class="fa fa-twitter"></i></a></span>
                                <span><a href="#"><i class="fa fa-google-plus"></i></a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
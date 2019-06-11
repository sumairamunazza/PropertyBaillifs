<?php
    //session_start();
    include("lib/connection.php");
    include("lib/variables.php");
    //include("lib/session.php");
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>
        News
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="images/icon/favicon.jpg" type="image/x-icon">
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,300italic,400italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/jquery.nouislider.min.css">
        <link rel="stylesheet" href="css/style-selector.css"> 
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/shortcode.css">
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="css/citilights-shortcode.css">
        <link id="style-main-color" rel="stylesheet" href="css/color/color1.css">
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-6655257-31', 'auto');
          ga('send', 'pageview');
        </script>
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
<body class="home page-fullwidth">
    <div class="site">
    <!-- Strart Header -->
    <?php
        include("includes/header.php");
    ?>
    <!-- End Header -->
        <div class="main" role="main">
            <div id="content" class="content full">
                <div class="container">
                    <div class="page">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="alert alert-default fade in">
                                <br><br>
                                <h3><b>Residential Property Management</b></h3>
                                <br>
                                <p class="text-justify">For any Landlord, managing a property can be a daunting task as they have to worry about getting rent on time, probably running after handy man to do odd jobs every now and then, ensuring the property is in good condition, to name a few.</p>
                                <br><br>
                                <p class="text-justify">We at Property Bailiffs strive to manage all and every aspect of your property so you can focus on other important things in life. Our well versed and professional team will take care of all matters of your property.</p>
                                <br><br>
                                <p class="text-justify">We pride in our bespoke service, tailored to the individual requirements. Our high standards are continuously reviewed so we are geared to address all possibilities just so you are at ease.</p>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="main" role="main">
    <div id="content" class="content full">
        <div class="container">
            <div class="page">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <center><h3><b>Latest News</b></h3></center>
                        <br>
                        <br>
                    </div>
                        <br>
                    <?php
                        $Query = "SELECT id, heading, description, date FROM news 
                        WHERE status = 1 ORDER BY id DESC LIMIT 0,6";
                        $result = mysqli_query($conn,$Query);
                        while ($row = mysqli_fetch_array($result))
                        {
                    ?>
                    <div class="col-md-4 col-sm-4">
                        <div class="alert alert-default fade in">
                            <div class="well">
                                <h5><?php echo $row['heading'];?></h5>
                                <p class="text-justify">
                                <?php echo $row['description'];?>
                                </p>
                                <br>
                                <h6><?php echo $row['date'];?></h6>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Footer Start -->
        <?php
            include("includes/footer.php");
        ?>
    <!-- Footer End -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="js/SmoothScroll.js"></script>
    <script type="text/javascript" src="js/jquery.cookie.js"></script>
    <script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
    <script type="text/javascript" src="js/jquery.touchSwipe.min.js"></script>
    <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="js/jquery.nouislider.all.min.js"></script>
    <script type="text/javascript" src="js/style.selector.js"></script>
    <script type="text/javascript" src="js/property-slider.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript">/* <![CDATA[ */(function(d,s,a,i,j,r,l,m,t){try{l=d.getElementsByTagName('a');t=d.createElement('textarea');for(i=0;l.length-i;i++){try{a=l[i].href;s=a.indexOf('/cdn-cgi/l/email-protection');m=a.length;if(a&&s>-1&&m>28){j=28+s;s='';if(j<m){r='0x'+a.substr(j,2)|0;for(j+=2;j<m&&a.charAt(j)!='X';j+=2)s+='%'+('0'+('0x'+a.substr(j,2)^r).toString(16)).slice(-2);j++;s=decodeURIComponent(s)+a.substr(j,m-j)}t.innerHTML=s.replace(/</g,'&lt;').replace(/>/g,'&gt;');l[i].href='mailto:'+t.value}}catch(e){}}}catch(e){}})(document);/* ]]> */</script>
</body>
</html>
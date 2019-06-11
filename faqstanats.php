<?php
//session_start();
    include("lib/connection.php");
    include("lib/variables.php");
    // include("lib/session.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>
        FAQs
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
            <?php
                include("includes/header.php");
            ?>
            <div class="noo-wrapper">
                <div class="container noo-mainbody">
                    <div class="noo-mainbody-inner">
                        <div class="row clearfix">
                    <?php
                        $query1 = "SELECT question, answer FROM faqstanants";
                        $result1 = mysqli_query($conn, $query1);
                        while ($row = mysqli_fetch_array($result1))
                        {
                    ?>
                            <div class="noo-content col-xs-12"> 
                                <div class="row noo-row accordion-shortcode clearfix">
                                    <div class="col-sm-12 col-md-6 col-lg-12 noo-col">
                                        <div class="noo-text-block">
                                            <div class="well">
                                                <h3><b><?php echo $row['question'];?></b></h3>
                                                <p><?php echo $row['answer'];?></p>
                                            </div>
                                        </div>
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
    </div>
</div>
</div>
</div>
</div> 
<div class="site">
    <?php 
        include("includes/footer.php");
        ?>
   <footer class="footer">
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
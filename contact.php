    <?php
    //session_start();
    include("lib/connection.php");
    include("lib/variables.php");
    //include("lib/session.php");
    if (isset($_REQUEST["BtnSave"]))
    {
        $Query = "INSERT INTO contact (code,firstname, lastname, phonenumber, email,
        address, monedaryfield, enquiry,ip)
        VALUES
        (
        '".$_REQUEST['TxtCode']."',
        '".$_REQUEST['TxtFirstName']."',
        '".$_REQUEST['TxtLastNAme']."',
        '".$_REQUEST['TxtPhone']."',
        '".$_REQUEST['TxtEmail']."',
        '".$_REQUEST['TxtAddress']."',
        '".$_REQUEST['TxtMonedaryField']."',
        '".$_REQUEST['TxtEnquiry']."',
        '".$_SERVER['REMOTE_ADDR']."'
    )";
             
        if (mysqli_query($conn, $Query))
        {
                                    

            header("location: result.php");
            
            
        }
        else
        {
            echo "ERROR: Could not able to execute $Query. " . mysqli_error($conn);
        }    
    }
    ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>
        Contact
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
                    <div class="noo-content col-xs-12">
                        <div class="row clearfix contact-map-form">
                            <div class="col-sm-12 col-md-12 col-sm-12">
                                <div class="row contact-desc-1">
                                    <div class="noo-col col-md-12">
                                        <h3><b>Property Bailiffs</b></h3><br>
                                        <b>By Telephone:</b><span>  020 7739 1032</span><br>
                                        <b>By E-mail:</b><span> info@propertybailiffs.co.uk</span><br><br>
                                        <div class="text-block">
                                            <h4><b>Send us an Enquiry</b></h4>
                                        </div>
                                        
                                        <hr class="noo-gap">
                                        <form name="FormContact" action="contact.php">
                                            <p>
                                                <span class="form-group form-control-wrap your-name">
                                                    <input type="text" name="TxtCode" class="form-control" value="" size="20" placeholder="Property Code*">
                                                </span>
                                            </p>
                                            <p>
                                                <span class="form-group form-control-wrap your-name">
                                                    <input type="text" name="TxtFirstName" class="form-control" value="" size="20" placeholder="First Name*">
                                                </span>
                                            </p>
                                            <p>
                                                <span class="form-group form-control-wrap your-email">
                                                    <input type="text" name="TxtLastNAme" class="form-control" value="" size="40" placeholder="Last Name*">
                                                </span>
                                            </p>
                                            <p>
                                                <span class="form-group form-control-wrap your-subject">
                                                    <input type="number" name="TxtPhone" class="form-control" value="" size="40" placeholder="Phone Number*">
                                                </span>
                                            </p>
                                            <p>
                                                <span class="form-group form-control-wrap your-subject">
                                                    <input type="email" name="TxtEmail" class="form-control" value="" size="40" placeholder="Email*">
                                                </span>
                                            </p>
                                            <p>
                                                <span class="form-group form-control-wrap your-subject">
                                                    <input type="text" name="TxtAddress" class="form-control" value="" size="40" placeholder="Address*">
                                                </span>
                                            </p>
                                            <p>
                                                <span class="form-group form-control-wrap your-subject">
                                                    <input type="text" name="TxtMonedaryField" class="form-control" value="" size="40" placeholder="*Denotes a mandatory Field">
                                                </span>
                                            </p>
                                            <p>
                                                <span class="form-group form-control-wrap your-subject">
                                                    <textarea name="TxtEnquiry" class="form-control" value="" size="40" placeholder="Enquiry/Comments"></textarea>
                                                </span>
                                            </p>
                                            <div class="text-right">
                                                <button type="button" class="btn btn-primary">RESET </button>
                                                <button type="submit" name="BtnSave" class="btn btn-primary">SUBMIT </button>
                                            </div>
                                            <br><br>
                                            <pre><b>Note:</b>  Have you seen our <u><a href="faqslandlord.php">FAQ</a></u>  page? You may find the answer to query there.</pre>
                                            <br><br><br>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include("includes/footer.php");
    ?>
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
    <script type="text/javascript">/* <![CDATA[ */(function(d,s,a,i,j,r,l,m,t){try{l=d.getElementsByTagName('a');t=d.createElement('textarea');for(i=0;l.length-i;i++){try{a=l[i].href;s=a.indexOf('/cdn-cgi/l/email-protection');m=a.length;if(a&&s>-1&&m>28){j=28+s;s='';if(j<m){r='0x'+a.substr(j,2)|0;for(j+=2;j<m&&a.charAt(j)!='X';j+=2)s+='%'+('0'+('0x'+a.substr(j,2)^r).toString(16)).slice(-2);j++;s=decodeURIComponent(s)+a.substr(j,m-j)}t.innerHTML=s.replace(/</g,'&lt;').replace(/>/g,'&gt;');l[i].href='mailto:'+t.value}}catch(e){}}}catch(e){}})(document);/* ]]> */</script></body>
    </html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title></title>
        <link rel="stylesheet" href="css/css_sablonu.css"/>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript">
        $(document).ready(function() {
	$(".tab_content").hide();
	$("ul.tabs li:first").addClass("active").show(); 
	$(".tab_content:first").show(); 
	
	$("ul.tabs li").click(function() {
		$("ul.tabs li").removeClass("active"); 
		$(this).addClass("active"); 
		$(".tab_content").hide(); 
		var activeTab = $(this).find("a").attr("href"); 
		$(activeTab).fadeIn(); 
		return false;
            });

        });
        </script>
    </head>
    <body class="anasayfa">
        <div class="sablonum">
            <div class="container">
            <div class="logo"></div>
            <div class="menu">
                <ul>
                <ul class="tabs">
                    <li><a href="#tab1">Anasayfa</a></li>
                    <li><a href="#tab2">Uçaklarımız</a></li>
                    <li><a href="#tab3">Hakkımızda</a></li>
                    <li><a href="#tab4">iletişim</a></li>
                    <li><a href="#tab5">Paketlerimiz</a></li>
                    <li><a href="#tab6">Anket</a></li>
                </ul>
                <li><a href="logo1.php">Neden mi Biz?</a></li>
                </ul>
            </div>
            <div class="insta"><a href="https://www.instagram.com/brkn02"><img src="image/ins.png"></img></a></div>
            <div id="sen" class="tab_container">
            <div id="tab1" class="tab_content">
		
		</div>
                <div id="tab2" class="tab_content" align="center">
                sdadsasdaasd
		</div>
		<div id="tab3" class="tab_content" align="center">
		giris
		</div>
                <div id="tab4" class="tab_content" align="center">
		diqqat et bebeğim
		</div>
                <div id="tab5" class="tab_content" align="center">
		fındık ağası
		</div>
                <div id="tab6" class="tab_content" align="center">
		sen atlama
		</div>
                <div id="logo1.php"
                     include(logo1.php);
            </div>
		</div>
            </div>
            
          
            <div class="slider">
                
            </div>
            <div class="alt"></div>
            
           
           </div>
        </div>

    </body>
</html>
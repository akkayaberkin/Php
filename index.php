<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>A U</title>
        <link rel="stylesheet" href="css/css_sablonu.css"/>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.js"></script>
        

<link rel="shortcut icon" href="512.png">
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
                
                <ul class="tabs">
                    <li><a href="#tab1">Anasayfa</a></li>
                    <li><a href="#tab2">Uçaklarımız</a></li>
                    <li><a href="#tab3">Hakkımızda</a></li>
                    <li><a href="#tab4">iletişim</a></li>
                    <li><a href="#tab5">Paketlerimiz</a></li>
                    <li><a href="#tab6"> <?php include 'img.php'
                    ?></a></li>
                    <li><a href="#tab7">neden biz?</a></li>
                </ul>
               
               
            </div>
            <div class="insta"><a href="https://www.instagram.com/brkn02"><img src="image/ins.png"></img></a></div>
            <div id="sen" class="tab_container">
            <div id="tab1" class="tab_content">
                
                <div class="form">
                    <form action="veriler.php" method="post" >
                    
                        Adınız:<br><input type="text" name="ad" id="ad" />
                             <br>Soyadınız:<input type="text" name="soyad"   id="soyad" />  
                                 TC:<input type="number" name="tc" id="tc" maxlength="11"  />
                                     Tarih:<input type="text" name="tarih"    id="tarih"/>  
                            <input type="submit" name="gonder">
                                
                </form>
                </div>  
                
                
            </div>
                <div id="tab2" class="tab_content" align="center">

                    <img src="img/air.png"
             </div>
		</div>
		<div id="tab3" class="tab_content" align="left" >
                    <br><br><br>
                                <h4> &nbsp; • AtladaUcurayım Ailesi Olarak Her zaman yolcu haklıdır prensibine uymuş ve yolcularımızın<br> memnuniyetini önemsemişizdir.<br><br><br><br><br>
                    &nbsp; • Bir Üniversite Projesi sonucunda ortaya çıkmış olup 2018-2019 yılbaşı ikramiyesinin <br>Kurucumuza çıkışıyla birlikte hayal olan proje Gerçeğe Dönüştürülmüştür.<br><br><br><br>
&nbsp; • Ülkenin Önde gelen firmalarıyla rekabet halinde olan firmamız her zaman yenilmiş<br> ama asla pes etmemiştir..<br><br><br><br>
&nbsp; • İnanmak Başarmanın yarısıdır prensibine uyarak çıktığımız bu yolda sadece inanarak yolun<br> yarısını kat etmiş geri kalanını da bir şekilde kat edecektir.<br><br><br><br>
                    &nbsp; • Kimse Başarı Merdivenlerini Elleri Cebinde Tırmanmamıştır Sözünü Benimser ve bu söze<br> dayanarak ksjdgjksng inandınız mı cidden. <br><br><br><br></h4>






                    <div class="istg">
                        
                <img src="image/hk.png">
                    </div>
		</div>
                <div id="tab4" class="tab_content" align="center">
		<?php
                include 'iletisim.php';
                ?>
		</div>
                <div id="tab5" class="tab_content" align="center">
                    <div id="bl"
                         <img src="img/bl.png"
                    <?php
                    
                include("listele.php");
                ?>
                </div>
		</div>
                <div id="tab6" class="tab_content" align="center">
		<?php include 'yil.php';
                ?>
		</div>
                 <div id="tab7" class="tab_content" align="center">
		<div id="slider">
                  <?php
                include("standard.php");
                ?> 
                </div>
		</div>
		</div>
            </div>
            
        </div>            <div class="alt">
            
        </div>
        </div>        
          
            
            
           
           </div>
      

    </body>
</html>
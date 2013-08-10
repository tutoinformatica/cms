<?php 
	include('admin/config.php');
	session_start();
 ?>
<!DOCTYPE html>
<html>
	<head>
		<title>my web page</title>
		<style type="text/css">
			*{
				margin:0;
				padding:0;
			}
			html{
				height:100%
			}
			body{
				background:#2F2827;
				color: #5D5D5D; 
			}
			#main{
				margin-left: auto;
				margin-right: auto;
				padding-bottom: 20px;
			}
			h1,h2,h3,h4,h5,h6{
				font: normal 179% 'century gothic', arial, sans-serif;
  				color: #43423F;
  				margin: 0 0 15px 0;
  				padding: 15px 0 5px 0;
			}
			h2{
				font: normal 145% 'century gothic', arial, sans-serif;
				color:#B60000;
			}
			/*=============================================
			  =================== CABECERA=================
			  =============================================*/
			#header{
				width:898px;
				background: #2F2827;

				height:170px;
			}
			#logo{
				width:860px;
				height: 170px;
				position:relative;
				margin-right: auto;
				margin-left: auto;
				background:url(img/logo.jpg)no-repeat;
				
			}
			#logo #logo_text{
				position: absolute;
				top:60px;
				left:0;
			}
			#logo h1 , #logo h2{
				font:normal 300% 'century gothic', arial, sans-serif;
				border-bottom:0;
				text-transform: none;
				margin:0;
			}
			#logo_text h1 , #logo h1 a , #logo_text h1 a:hover{
				font-size: 170%;
				padding: 22px 0 0 0;
				color:#FFF;
				text-decoration: none;
			}
			#logo_text h1 a .logo_colour{
				color:#E4EC04;
			}
			#logo_text h1 a:hover .logo_colour{
				color:#FFF;
			}
			#logo_text h2{
				font-size:120%;
				padding:4px 0 0 0;
				color:#B7B9A7;
			}
			/*========================================
			  ============= MENU =====================
			  ========================================*/
			  #menubar{
			  	position: relative;
			  	margin:0 auto 0 auto;
			  	width:898px;
			  	height:46px;
			  	padding: 0 0 0 4px;
			  	
			  }
			  #menubar ul#menu{
			  	float:right;
			  	margin:0;
			  	padding: 0;
			  }
			  #menubar ul#menu li{
			  	float:left;
			  	margin:5px;
			  	list-style: none;
			  	margin:3px 2px 0 0;
			  	background: #635B53 url(img/tab.png)no-repeat 0 0;
			  }
			 	#menubar ul#menu li a {
			  	font: normal'lucida sans unicode', sans-serif;
			  	display:block;
			  	float:left;
			  	height: 20px;
			  	padding: 7px 22px 4px 16px;
			  	text-align: center;
			  	color:#FFF;
			  	text-decoration: none;
			  	background: #635B52 url('img/tab.png') no-repeat 100% 0;
			  }
			  #menubar ul#menu li.selected a ,
			  #menubar ul#menu li.selected a:hover{
			  	height: 20px;
			  	padding: 7px 22px 4px 16px;
			  	background: #FFF;
			  	color:#111;
			  }
			  #menubar ul#menu li a:hover{ 
				color: #E4EC04;
			  }
			  /*========================================
			  ============= CONTENIDO =====================
			  ========================================*/
			  #side_content{
			  	width:858px;
			  	/*background: yellow;*/
			  	overflow:hidden;
			  	margin:0 auto 0 auto;
			  	padding:10px 20px 20px 20px;
			  	background: #F6F6F0 url(img/back.png)repeat-y;
			  }
			  #content{
			  	text-align: left;
			  	width:613px;
			  	padding:0;
			  }
			  #content ul{
			  	margin:2px 0 22px 0px;
			  }
			  #content ul li{
			  	list-style: none;
			  	background: url(img/bullet.png)no-repeat;
			  	margin: 0 0 0 0;
			  	padding: 0 0 4px 25px;
			  	line-height: 1.5em;
			  }
			 /*========================================
			  ============= SIDE-BAR =====================
			  ========================================*/
			  .sidebar{
			  	width:190px;
			  	float:right;
			  }
			  .sidebar h4{
					margin: 0;
  					padding: 0 0 5px 0;
  					font: normal 120% arial, sans-serif;
  					color: #B60000;
			  }

		
		</style>
	</head>

	<body>
		<div id="main">
			<header>
				<div id="logo">
					<div id="logo_text">
						<h1><a href="">tuto<span class="logo_colour">informatica</span></a></h1>
						<h2>Pagina web simple pero novedosa</h2>
					</div>
				</div>
				<div id="menubar">
					<ul id="menu">
						<li class="selected"><a href="">home</a></li>
						<li><a href="">ejemplos</a></li>
						<li><a href="">algoritmos</a></li>
						<li><a href="">ia</a></li>
						<li><a href="">robotica</a></li>
					</ul>
				</div>
			</header>
			<div id="side_content">
				<div class="sidebar">
					<h1>Ultimas noticias</h1>
					<h4>nueva pagina lanzada</h4>
					<h5 class="fecha">1 de agosto de 2013</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, ea, nam maiores illum molestiae amet modi facilis labore excepturi sint quam ipsa itaque eaque suscipit placeat quasi neque dignissimos et!</p>


				</div>
				<div id="content">
					<h1>Welcome to the simplestyle_5 template</h1>
        			<p>
        				<?php 
        				$conexion = new PDO(DB_DSN,DB_USUARIO,DB_PASSWORD);
						$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
						$sql = "SELECT texto FROM articulo";
						$stmt = $conexion->prepare($sql);
						$stmt->execute();
						$result = $stmt->fetchAll();
						foreach($result as $row){
    						echo $row['texto'];
						}



        				 ?>
        				
        			</p>
        			 <ul>
			          <li>Internet Explorer 8</li>
			          <li>Internet Explorer 7</li>
			          <li>FireFox 3.5</li>
			          <li>Google Chrome 6</li>
			          <li>Safari 4</li>
			        </ul>

				</div>
			</div>
			


		</div>
	</body>
</html>
<?php

function wpst_splashmin() {
    ?>
    <style>
      .wrapper {
        position: relative;
        margin: 10px 20px 0 2px;
        max-width: 100%;
        font-size: 15px;
        display: block;
      }
      .welcome-panel {
          position: relative;
          overflow: auto;
          margin: 16px 0;
          padding: 23px 10px 0;
          border: 1px solid #e5e5e5;
          -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.04);
          box-shadow: 0 1px 1px rgba(0,0,0,.04);
          background: #fff;
          font-size: 13px;
          line-height: 2.1em;
      }
      .welcome-panel h2 {
      margin: 0;
      font-size: 21px;
      font-weight: 400;
      line-height: 1.2;
      }

      .polaroid {
        position: relative;
        width: 225px;
      }

      .polaroid img {
        border: 10px solid #fff;
        border-bottom: 50px solid #fff;
        -webkit-box-shadow: 1px 1px 1px 1px #777;
           -moz-box-shadow: 1px 1px 1px 1px #777;
                box-shadow: 1px 1px 1px 1px #777;
      }

      .polaroid p {
        padding-top: 20px;
        position: absolute;
        text-align: center;
        width: 100%;
        bottom: 0px;
        color: #888;
        font-size: 15px;
        line-height: 16px;
      }

      /* Estilo de Tickets */
      .box{
        margin-top:20px;
        background:#FFF9EE url(http://subtlepatterns.com/patterns/lightpaperfibers.png);
        color:#333;
        text-transform:uppercase;
        width:300px;
        font-weight:bold;
        text-shadow:0px 1px 0px #fff;
        font-size: 11px;
      }

      .inner{
        border: 2px dashed rgba(51, 51, 51, 0.5);
        min-height:100px;
        padding:8px;

      }
      .inner h1{
        padding:5px 0px;
        margin:0px;
        font-size:18px;
        border-bottom: 1px solid rgba(51, 51, 51, 0.3);
        text-align:center;
      }
      .info{
        width:100%;
        margin-top:5px;
      }
      .info .wp{
        float: left;
        padding: 5px;
        width: 83px;
        text-align: center;
      }
      .info .wp h2{
        margin: 8px;
      }
      .total{
        border-top: 1px solid rgba(51, 51, 51, 0.3);
      }

      .clearfix:after {
        content: ".";
        display: block;
        height: 0;
        clear: both;
        visibility: hidden;
      }

      .total p{float:right;margin:0px;margin-right: 15px;}

      a.buy{
        color:#fff;
        text-align:center;
        font-size:25px;
        text-decoration:none;
        display:block;
        width:200px;
        margin:0px auto;
        margin-top:50px;
        padding:5px;
        background:rgba(0,0,0,0.5);
      }

      .contactenos-home {
        position: absolute;
        top: 10px;
        right: 10px;
        padding: 10px 15px 10px 21px;
        font-size: 13px;
        line-height: 1.23076923;
        text-decoration: none;
      }
      .columna-contenido {
        width: 60%;
        min-width: 200px;
        float: left;
      }
      .post-container {
        overflow: auto
      }
      .post-thumb {
          float: left
      }
      .post-thumb img {
          display: block
      }
      .post-content {
          margin-top: 3%
      }
      .post-title {
          font-weight: bold;
          font-size: 200%
      }
    </style>
    <div class="wrapper">
      <!--Custom Section-->
          <div id="welcome-panel" class="welcome-panel">
            <p class="contactenos-home"><a href="https://wpsupport.team/contact-us/" class="button button-primary button-hero load-customize hide-if-no-customize" style="text-transform: uppercase;" target="_blank"><strong>Contáctenos</strong></a></p>
          <div class="welcome-panel-content">
                <!-- Bienvenida -->
                <div class="post-container">
                <div class="post-thumb"><img src="https://cloubits.io/wp-content/uploads/2017/01/03-Escala-de-Grises.png" width="150" ></div>
                <div class="post-content">
                    <h2 class="post-title">Bienvenid@ a <a href="https://wpsupport.team" target="_blank">WPSupport Team</a>!</h2>
                    <p class="about-description">Somos  y podemos ayudarte a llegar más lejos:</p></div>
                </div>
                <!--END Bienvenida-->
          <div class="welcome-panel-content">
            <div class="welcome-panel-column-container">
          	<div class="welcome-panel-column">
          					<h3>Planes de Soporte WordPress</h3>
          			<a class="button button-primary button-hero load-customize hide-if-no-customize" href="https://wpsupport.team/wordpress-support-plans/" target="_blank">Ver Planes</a>
                <a class="button button-primary button-hero load-customize hide-if-no-customize" href="https://wpsupport.team/" target="_blank">Más Información</a>
                <!--Ticket-->
                <div class="box">
                  <div class='inner'>
                  <h1>Academia de Las Grandes Ligas</h1>
                    <div class='info clearfix'>
                        <div class='wp'>Tickets<h2>1</h2></div>
                        <div class='wp'>Codigo<h2><a href="https://wpsupport.team/?coupon_code=FM2017" target="_blank">FM2017</a></h2></div>
                        <div class='wp'>Desc<h2>40%</h2></div>
                    </div>
                  </div>
                </div>
                <!--END Ticket-->
          	</div>
          	<div class="columna-contenido">
          		<h3>Servicios:</h3>
          		<ul>
          			<li>
                  <div class="polaroid">
                  <p><a href="https://wpsupport.team/wordpress-support-plans/" target="_blank">Planes de Soporte</a><br />Desde USD$69.00/Mes</p>
                  <img src="https://wpsupport.team/wp-content/uploads/2016/12/Basic.png" width="195px" height="195px"/>
          	</div>
          	<div class="welcome-panel-column">
          		<h3>Servicios:</h3>
          		<ul>
          			<li>
                  <div class="polaroid">
                  <p><a href="https://wpsupport.team/wordpress-support-plans/" target="_blank">Planes de Soporte</a><br />Desde USD$69.00/Mes</p>
                  <img src="https://wpsupport.team/wp-content/uploads/2016/12/Basic.png" width="195px" height="195px"/>
                  </div>
                </li>
          		</ul>
          	</div>
          	<div class="welcome-panel-column welcome-panel-last">
          		<h3>Otros Servicios</h3>
          		<ul>
                <li>
                  <div class="polaroid">
                  <p><a href="https://wpsupport.team/wordpress-support-plans/mini-plan/" target="_blank">Mini Plan</a><br />USD$29.00/Mes</p>
                  <img src="https://wpsupport.team/wp-content/uploads/2016/12/Mini-1.png" width="195px" height="195px"/>
                  </div>
                </li>
          		</ul>
          	</div>
          </div>
            <p class="about-description">También puedes comunicarte con nosotros si necesitas cambiar tu servicio de alojamiento web y correo electrónico profesional a un excelente precio, solo tienes que escribirnos a <a href="mailto:hola@wpsupport.team">hola@wpsupport.team</a> con tus consultas y un agente se pondrá en contacto.</p>
            <br />
        </div>
        </div>
      <!--End Custom Section-->
    </div>
    <?php

}
?>

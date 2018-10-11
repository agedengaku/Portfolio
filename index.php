<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>JM Taylor</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-9ralMzdK1QYsk4yBY680hmsb4/hJ98xK3w0TIaJ3ll4POWpWUYaA2bRjGGujGT8w" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,300i,700|Raleway:200,400" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="resources/css/style.css">
  <link rel="stylesheet" href="resources/css/queries.css">
</head>

<body>

  
   <nav class="navbar sticky-top navbar-toggleable-md navbar-inverse navbar-color">
    
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <!--<span class="navbar-toggler-icon"></span>-->
      <div id="nav-icon0">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
       </div>
    </button>

    <a class="navbar-brand" href="#">
      jmtaylor<span class="animated infinite flash">_</span> 
    </a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="nav navbar-nav mr-auto"></ul>
      <ul class="nav navbar-nav">
        <li class="nav-item active">
          <a class="nav-link intro-link" data-toggle="pill" href="#intro-block"><p>About</p></a>
        </li>
        <li class="nav-item">
          <a class="nav-link portfolio-link" data-toggle="pill" href="#portfolio-block"><p>Portfolio</p></a>
        </li>
        <li class="nav-item">
          <a class="nav-link contact-link" data-toggle="pill" href="#contact-block"><p>Contact</p></a>
        </li>
      </ul>
    </div> <!-- #navbarNav -->

</nav> <!-- END OF NAVBAR -->


<!-- INTRO BLOCK STARTS HERE -->
<div class="container">
   
    <div class="row justify-content-md-center"> <!-- .row.justify-content-md-center 1 -->
    
        <div id="intro-block" class="content-block col-12 col-lg-auto">
         <div class="row spacer1"></div>
          <div class="row">
            <div id="intro-block-body" class="col-md-8 text-right">Web design & development is a passion of mine. There isn't a day I'm not either working on personal projects or continuing to learn web technologies. In the future, I plan to move into mobile apps and software for smart devices.</div>
            <div class="col-md-4"><img id="circle-pic" src="https://en.gravatar.com/userimage/27569311/49b5d4c8c1114783cc08646adb285384.jpg?size=400" alt="" class="img-fluid" /></div>
<!--            </div>-->
          </div> <!-- .row -->
          <div class="row spacer1"></div>
        </div> <!-- #intro-block -->
    
    </div> <!-- .row.justify-content-md-center -->
  </div>    
    <!-- PORTFOLIO BLOCK STARTS HERE -->
   <div class="container"> 
    <div class="row justify-content-md-center"> <!-- .row.justify-content-md-center 2 -->
        <div id="portfolio-block" class="content-block col-12 col-lg-auto">
          <h2 class="text-center">Portfolio</h2>
          
          <div class="row">
            
            <div class="card-columns">
  
   								<div class="card"> 	
                  <h5 class="card-title p-3"><a href="https://streetfighter2ttt.com">Tic Tac Toe</a></h5>					
									<div class="card-img-frame">
                    <a href="https://streetfighter2ttt.com"><img class="card-img-top" src="resources/img/tictactoe-web.jpg" alt="Card image cap"></a>
									</div>	
									<div class="card-body p-3">
									  <div class="card-body-content pb-3">
                      <p class="card-text">"Street Fighter 2" themed Tic Tac Toe game with variable difficulty modes and two selectable characters. Integrated minimax to create an unwinnable hard mode. Uses sprite maps and animated GIFs for animation, complete with intro video, title screen, character select, etc., to simulate the Street Fighter 2 game experience. Also uses Web Audio API to create seamless looping background music.</p>
                      <p class="card-text"><small class="text-muted">Works best on Chrome and Firefox</small></p>
										</div>
										<button class="btn btn-show-hide"></button>
									</div>
								</div>
  
								<div class="card">
                  <h5 class="card-title p-3"><a href="https://codepen.io/agedengaku/full/gjLOra/" target="_blank">Simon Game</a></h5>
									<div class="card-img-frame">
										<a href="https://codepen.io/agedengaku/full/gjLOra/" target="_blank"><img class="card-img-top" src="resources/img/simon-web.jpg" alt="Card image cap"></a>
									</div>
									<div class="card-body p-3">	
									  <div class="card-body-content pb-3">
                      <p class="card-text">Spiced up the original Simon game by using Street Fighter 2 themes, music, sound effects, and some animated feedback.</p>
                      <p class="card-text"><small class="text-muted">Works best on Chrome and Firefox</small></p>
										</div>
										<button class="btn btn-show-hide"></button>									
									</div>
								</div>
  
   								<div class="card"> 	
                  <h5 class="card-title p-3"><a href="https://codepen.io/agedengaku/full/NYPyWy/" target="_blank">Javascript Calculator</a></h5>					
									<div class="card-img-frame">
										<a href="https://codepen.io/agedengaku/full/NYPyWy/" target="_blank"><img class="card-img-top" src="resources/img/calculator-web.jpg" alt="Card image cap"></a>
									</div>	
									<div class="card-body p-3">
										<div class="card-body-content pb-3">
                      <p class="card-text">Improved on the original task of creating a Javascript calcultor by increasing decimal precision, making the results always similar to what you would get from a real calculator. Precision is achieved using a Decimal type by integrating decimal.js.</p>
										</div>
										<button class="btn btn-show-hide"></button>										
									</div>
								</div>
 
  								<div class="card">
                  <h5 class="card-title p-3">Pomodoro Clock</h5>
									<div class="card-img-frame">
										<img class="card-img-top" src="resources/img/pomodoro-web.jpg" alt="Card image cap">
									</div>
									<div class="card-body p-3">
										<p class="card-text">Goes beyond the assignment of building a productivity clock by adding animations and original recorded sound clips to guide the user on the current state of the clock.</p>
									</div>
								</div>
    
   								<div class="card"> 	
                  <h5 class="card-title p-3">Japanese Lessons Tokyo</h5>					
									<div class="card-img-frame">
										<img class="card-img-top" src="resources/img/jlt-web.jpg" alt="Card image cap">
									</div>	
									<div class="card-body p-3">
										<p class="card-text">Built a website that helped a Japanese language teacher from almost going out of business, and allowed him to quit his part-time jobs to focus solely on teaching.</p>
									</div>
								</div>

  								<div class="card">
                  <h5 class="card-title p-3">XPS Tokyo</h5>
									<div class="card-img-frame">
										<img class="card-img-top" src="resources/img/xpstokyo-web.jpg" alt="Card image cap">
									</div>
									<div class="card-body p-3">
										<p class="card-text">An exercises in redesigning an old and outdated website, including a new modern logo. Done on Wordpress, but the theme was coded completely from scratch using PHP. <a href='http://www.xpstokyo.com' target='_blank'>Click here to see the original website.</a></p>
									</div>
								</div>
  
  
  
  
  
  
     								<div class="card"> 	
                  <h5 class="card-title p-3">Color Game</h5>					
									<div class="card-img-frame">
										<img class="card-img-top" src="resources/img/color-web.jpg" alt="Card image cap">
									</div>	
									<div class="card-body p-3">
										<p class="card-text">A game for web designers testing their knowledge of RGB colors. This was an exercise from an online web development bootcamp, and was my first Javascript project.</p>
									</div>
								</div>
  
  
  
  
  
  								<div class="card">
                  <h5 class="card-title p-3">Duterte Ipsum</h5>
									<div class="card-img-frame">
										<img class="card-img-top" src="resources/img/duterte-web.jpg" alt="Card image cap">
									</div>
									<div class="card-body p-3">
										<p class="card-text">Inspired by <a href='https://trumpipsum.net/' target='_blank'>Trump Ipsum</a>, this Lorem Ipsum generator uses some of President Duterte's ridiculous quotes intersperesed with tech and web design related words.<br />Coded with PHP.</p>
									</div>
								</div>
  
  
  
  
  
  
  
  
  
  
  
  
</div>
          </div>
          
          
          
          
          
          
          <div class="row">
          
							<div class="col-md-6 d-flex align-items-stretch mb-3">   
 								<div class="card"> 	
                  <h5 class="card-title p-3">Tic Tac Toe</h5>					
									<div class="card-img-frame">
										<img class="card-img-top" src="resources/img/tictactoe-web.jpg" alt="Card image cap">
									</div>	
									<div class="card-body p-3">
										<p class="card-text test1">"Street Fighter 2" themed Tic Tac Toe game with variable difficulty modes and two selectable characters. Integrated minimax to create an unwinnable hard mode. Uses sprite maps and animated GIFs for animation, complete with intro video, title screen, character select, etc., to simulate the Street Fighter 2 game experience. Also uses Web Audio API to create seamless looping background music.</p>
										<p class="card-text"><small class="text-muted">Works best on Chrome and Firefox</small></p>
										<button class="btn-test">Show</button>
									</div>
								</div>
							</div>
															
							<div class="col-md-6 d-flex align-items-stretch mb-3">
								<div class="card">
                  <h5 class="card-title p-3">Simon Game</h5>
									<div class="card-img-frame">
										<img class="card-img-top" src="resources/img/simon-web.jpg" alt="Card image cap">
									</div>
									<div class="card-body p-3">
										<p class="card-text">Spiced up the original Simon game by using Street Fighter 2 themes, music, sound effects, and some animated feedback.</p>
										<p class="card-text"><small class="text-muted">Works best on Chrome and Firefox</small></p>
									</div>
								</div>
							</div>
         
          </div>

          <div class="row">
          
							<div class="col-md-6 d-flex align-items-stretch mb-3">   
 								<div class="card"> 	
                  <h5 class="card-title p-3">Javascript Calculator</h5>					
									<div class="card-img-frame">
										<img class="card-img-top" src="resources/img/calculator-web.jpg" alt="Card image cap">
									</div>	
									<div class="card-body p-3">
										<p class="card-text">Improved on the original task of creating a Javascript calcultor by increasing decimal precision, making the results always similar to what you would get from a real calculator. Precision is achieved using a Decimal type by integrating decimal.js.</p>
									</div>
								</div>
							</div>
															
							<div class="col-md-6 d-flex align-items-stretch mb-3">
								<div class="card">
                  <h5 class="card-title p-3">Pomodoro Clock</h5>
									<div class="card-img-frame">
										<img class="card-img-top" src="resources/img/pomodoro-web.jpg" alt="Card image cap">
									</div>
									<div class="card-body p-3">
										<p class="card-text">Goes beyond the assignment of building a productivity clock by adding animations and original recorded sound clips to guide the user on the current state of the clock.</p>
									</div>
								</div>
							</div>
         
          </div>                    
           
          <div class="row">
<!--          	<div class="card-deck">-->
							<div class="col-md-6 d-flex align-items-stretch">    	
  							<div class="card">
									<img class="card-img-top" src=".../100px200/" alt="Card image cap">
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
										<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
									</div>
								</div>
							</div>
															
							<div class="col-md-6 d-flex align-items-stretch">
								<div class="card">
									<img class="card-img-top" src=".../100px200/" alt="Card image cap">
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
										<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
									</div>
								</div>
							</div>
<!--						</div>-->
          </div>        
          
          <div class="row">
            
            <div class="col-md-6 portfolio-pic-container" data-toggle="popover" data-placement="bottom" title="Tic Tac Toe - Street Fighter 2 version<span class='close-popover'><i class='fal fa-times fa-lg'></i></span>" data-content="Integrated minimax to create an unwinnable difficulty mode (Hard mode). Animations created using a combination of sprite maps and animated GIFs, complete with intro video, title screen, character select, etc. to simulate the Street Fighter 2 game experience. Also uses Web Audio API to create seamless looping BGM.<br /><br />Works best on Chrome and Firefox">
                <div class="portfolio-pic">
                <span class="pic-title">Tic Tac Toe</span>
              <a href="http://streetfighter2ttt.com" target="_blank">
                <img src="resources/img/tictactoe-web.jpg" class="img-fluid" alt="Street Fighter 2 - Tic Tac Toe">
              </a>
              </div>
            </div>
            
            <div class="col-md-6 portfolio-pic-container" data-toggle="popover" data-placement="bottom" title="Simon Game - Street Fighter 2 version<span class='close-popover'><i class='fal fa-times fa-lg'></i></span>" data-content="Spiced up the original Simon game by using Street Fighter 2 themes, music, sfx, and some animated feedback.<br /><br />Works best on Chrome and Firefox">  
              <a href="https://codepen.io/agedengaku/full/gjLOra/" target="_blank">
              <img src="resources/img/simon-web.jpg" class="img-fluid portfolio-pic effectfront" alt="Street Fighter 2 - Simon Game">
              </a>
            </div>
            
          </div> <!-- .row -->        
          
          <div class="row">
            
            <div class="col-md-6 portfolio-pic-container" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-html="true" title="Javascript Calculator<span class='close-popover'><i class='fal fa-times fa-lg'></i></span>" data-content="Improved on the original task of creating a Javascript calcultor by increasing decimal precision, making the results always similar to what you would get from a real calculator. Precision is achieved using a Decimal type by integrating decimal.js.">
              <a href="https://codepen.io/agedengaku/full/NYPyWy/" target="_blank">
                <img src="resources/img/calculator-web.jpg" class="img-fluid portfolio-pic effectfront" alt="Javascript Calcultar">
              </a>
            </div>
            
            <div class="col-md-6 portfolio-pic-container" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-html="true" title="Pomodoro Clock<span class='close-popover'><i class='fal fa-times fa-lg'></i></span>" data-content="Goes beyond the assignment of building a productivity clock by adding animations and original recorded sound clips to guide the user on the current state of the clock.">  
              <a href="https://codepen.io/agedengaku/full/bvZbGx/" target="_blank">
              <img src="resources/img/pomodoro-web.jpg" class="img-fluid portfolio-pic effectfront" alt="Pomodoro Clock">
              </a>
            </div>
            
          </div> <!-- .row -->      
          
          <div class="row">
            
            <div class="col-md-6 portfolio-pic-container" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-html="true" title="Japanese Lessons Tokyo<span class='close-popover'><i class='fal fa-times fa-lg'></i></span>" data-content="Built a website that helped a Japanese language teacher from almost going out of business, and allowed him to quit his part-time jobs to focus solely on teaching.">
              <a href="https://japaneselessonstokyo.com" target="_blank">
                <img src="resources/img/jlt-web.jpg" class="img-fluid portfolio-pic effectfront" alt="Japanese Lessons Tokyo website picture">
              </a>
            </div>
            
            <div class="col-md-6 portfolio-pic-container" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-html="true" title="Redesign of outdated website<span class='close-popover'><i class='fal fa-times fa-lg'></i></span>" data-content="An exercises in redesigning an old and outdated website, including a new modern logo. Done on Wordpress, but the theme was coded completely from scratch using PHP. <a href='http://www.xpstokyo.com' target='_blank'>Click here to see the original website.</a>">  
              <a href="/xps" target="_blank">
              <img src="resources/img/xpstokyo-web.jpg" class="img-fluid portfolio-pic effectfront" alt="XPS Tokyo website picture">
              </a>
            </div>
            
          </div> <!-- .row -->
          
          <div class="row">
            
            <div class="col-md-6 portfolio-pic-container" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-html="true" title="Color Game<span class='close-popover'><i class='fal fa-times fa-lg'></i></span>" data-content="A game for web designers testing their knowledge of RGB colors. This was an exercise from an online web development bootcamp, and was my first Javascript project.">  
              <a href="/hello/colorgame" target="_blank">
              <img src="resources/img/color-web.jpg" class="img-fluid portfolio-pic effectfront" alt="Color Game web app picture">
              </a>
            </div>
            
            <div class="col-md-6 portfolio-pic-container" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-html="true" title="Duterte Ipsum<span class='close-popover'><i class='fal fa-times fa-lg'></i></span>" data-content="Inspired by <a href='https://trumpipsum.net/' target='_blank'>Trump Ipsum</a>, this Lorem Ipsum generator uses some of President Duterte's ridiculous quotes intersperesed with tech and web design related words.<br />Coded with PHP.">  
              <a href="http://www.duterteipsum.com" target="_blank">
              <img src="resources/img/duterte-web.jpg" class="img-fluid portfolio-pic effectfront" alt="Duterte Ipsum website picture">
              </a>
            </div>
            
          </div> <!-- .row -->
          
        <div class="row">
            
            <div class="col-md-6 portfolio-pic-container" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-html="true" title="Design Quotes<span class='close-popover'><i class='fal fa-times fa-lg'></i></span>" data-content="A certification project wherein a quotes-generating API and Twitter API are integrated to build a random quote machine with Twitter functionality.">  
              <a href="/designquotes" target="_blank">
              <img src="resources/img/quotes-web.jpg" class="img-fluid portfolio-pic effectfront" alt="Design Quotes website picture">
              </a>
            </div>
            
            <div class="col-md-6 portfolio-pic-container">  
              <a href="/wikiviewer" target="_blank">
              <img src="resources/img/wiki-web.jpg" class="img-fluid portfolio-pic effectfront" alt="Wikiviewer website picture">
              </a>
            </div>
            
          </div> <!-- .row -->
          
        </div> <!-- portfolio-block -->
    
    </div> <!-- .row.justify-content-md-center 2 -->
    
    <!-- CONTACT FORM STARTS HERE -->
    
    <div class="row justify-content-md-center"> <!-- .row.justify-content-md-center 3 -->
    
      <div id="contact-block" class="content-block col-12 col-lg-auto">
        <h2 class="text-center">Contact Me</h2>
    
        <!-- <custom gradient hr --> 
        <div class="gradient-border-white identity-border"></div>
        
        <div class="row">
          <div class="col-md-6">
            
            <form method="get" action="/thisdoesntworkyet.html">
              
              <div class="form-group">
                <div class="label-div">
                  <label class="js-name-label" for="name">Name</label>
                </div>  
                <input type="text" class="form-control js-name-input" id="name" placeholder="Name">
              </div>
              
              <div class="form-group">
                <div class="label-div">
                  <label class="js-email-label" for="email">Email</label>
                </div>
                <input type="text" class="form-control js-email-input" id="email" placeholder="Email">
              </div>
              
              <div class="form-group">
                <div class="label-div">
                  <label class="js-phone-label" for="phone">Phone</label>
                </div>
                <input type="text" class="form-control  js-phone-input" id="phone" placeholder="Phone">
              </div>
              
              <div class="form-group">
                <div class="label-div">
                  <label class="js-message-label" for="message">Message</label>
                </div>
                <textarea id="contact-textarea" class="form-control js-message-input" id="message" rows="5" placeholder="Message"></textarea>
              </div>
              
              <button type="submit" class="btn submit-button">Submit</button>
              
            </form>
            
          </div> <!-- .col-md-6 -->
          <div class="col-md-6" id="contact-text">
            If you'd like to get in touch to talk about web design and development, or perhaps you need advice for your lovelife, feel free to contact me using the form. I'll get back to you within 24 hours!
          </div>
          
        </div> <!-- .row -->
        
      </div> <!-- #contactBlock -->
    
    </div> <!-- .row.justify-content-md-center 3 -->
</div> <!-- .container -->
<footer id="footer-1" class="footer">
  <div class="container">
    
    <div class="row">
      
      <div class="col-sm-6">
        
        <div class="footer-h2">
          <h2 class="text-center">ABOUT THIS PAGE</h2>
        </div>
        
        <p class="text-center">Made with &nbsp;
          <a href="https://codepen.io" target="_blank">
            <img src="http://cdn.onlinewebfonts.com/svg/img_336066.svg" alt="CodePen logo" /></a>&nbsp;&nbsp;
          <a href="http://v4-alpha.getbootstrap.com/" target="_blank">
            <img src="https://v4-alpha.getbootstrap.com/apple-touch-icon.png" alt="Bootstrap-4 logo" />
          </a>&nbsp;
          <a href="http://jquery.com/" target="_blank">
            <img src="https://uploads.toptal.io/blog/category/logo/40/jquery.png" alt="jQuery logo" />
          </a>&nbsp;
          <a href="http://fontawesome.io/" target="_blank">
            <i class="fa fa-font-awesome" aria-hidden="true"></i>
          </a></p>
        
      </div> <!-- .col-sm-6 -->
      
      <div class="col-sm-6">
        
        <div class="footer-h2">
          <h2 class="text-center">AROUND THE WEB</h2>
        </div>
        
        <div class="text-center">
          <a href="https://twitter.com/jmotaylor" target="_blank">
            <span class="fal-stack fa-lg">
              <i class="fal fa-circle-o fa-stack-2x" aria-hidden="true"></i>
              <i class="fal fa-twitter fa-stack-1x" aria-hidden="true"></i>
            </span>
          </a>
          <a href="https://github.com/agedengaku" target="_blank">
            <span class="fal-stack fa-lg">
              <i class="fal fa-circle-o fa-stack-2x" aria-hidden="true"></i>
              <i class="fal fa-github fa-stack-1x" aria-hidden="true"></i>
            </span>
          </a>
          <a href="https://www.instagram.com/taylor.jm/" target="=blank">
            <span class="fal-stack fa-lg">
              <i class="fal fa-circle-o fa-stack-2x" aria-hidden="true"></i>
              <i class="fal fa-instagram fa-stack-1x" aria-hidden="true"></i>
            </span>
          </a>
          <a href="https://www.facebook.com/therealjmtaylor" target="_blank">
            <span class="fal-stack fa-lg">
              <i class="fal fa-circle-o fa-stack-2x" aria-hidden="true"></i>
              <i class="fal fa-facebook fa-stack-1x" aria-hidden="true"></i>
            </span>
          </a>  
        </div> <!-- .text-center -->
        
      </div> <!-- .col-sm-6 -->
      
    </div> <!-- .row -->
    
  </div> <!-- .container -->
</footer>

<footer id="footer-2" class="footer">
  <div class="container">
    <div class="text-center">JM Taylor &#169; <?php echo date('Y'); ?> - All Rights Reserved</div>
  </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="resources/js/script.js"></script>
</body>
</html>
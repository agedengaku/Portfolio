<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JM Taylor</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">  
  <!--  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-9ralMzdK1QYsk4yBY680hmsb4/hJ98xK3w0TIaJ3ll4POWpWUYaA2bRjGGujGT8w" crossorigin="anonymous">-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,300i,700|Raleway:200,400" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="resources/css/style.css">
    <link rel="stylesheet" href="resources/css/queries.css">
    <script src='https://www.google.com/recaptcha/api.js'></script>
  </head>

  <body>

    <nav class="navbar sticky-top navbar-toggleable-md navbar-inverse navbar-color">

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
      <span class="myname">JM Taylor</span> 
    </a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="nav navbar-nav mr-auto"></ul>
      <ul class="nav navbar-nav">
        <li class="nav-item">
          <a class="nav-link intro-link" data-toggle="pill" href="#intro-block"><p>About</p></a>
        </li>
        <li class="nav-item">
          <a class="nav-link portfolio-link" data-toggle="pill" href="#portfolio-block"><p>Portfolio</p></a>
        </li>        
        <li class="nav-item">
          <a class="nav-link education-link" data-toggle="pill" href="#education-block"><p>Education</p></a>
        </li>
        <li class="nav-item">
          <a class="nav-link contact-link" data-toggle="pill" href="#contact-block"><p>Contact</p></a>
        </li>
      </ul>
    </div> <!-- #navbarNav -->

    </nav> <!-- END OF NAVBAR -->

    <div class="container">
     
      <!-- INTRO BLOCK STARTS HERE -->
      <div class="row ">
          <div id="intro-block" class="content-block">
            <div class="row">
              <div class="col-md-4 mb-3">
                <img id="circle-pic" src="https://en.gravatar.com/userimage/27569311/49b5d4c8c1114783cc08646adb285384.jpg?size=400" alt="" class="img-fluid" />
              </div> 
              <div id="intro-block-body" class="col-md-8 text-left">
              <h1>JM Taylor</h1>
              <p>Web design & development is a passion of mine. There isn't a day I'm not either working on personal projects or continuing to learn web technologies.</p>  
               <div id="skill-box">
                <div class="row">
                  <div class="col-md-4 col-sm-6 col-6">
                    <p><i class="fab fa-html5"></i>&nbsp;HTML</p>
                  </div>              
                   <div class="col-md-4 col-sm-6 col-6">
                    <p><i class="fab fa-css3"></i>&nbsp;CSS</p>
                  </div>
                   <div class="col-md-4 col-sm-6 col-6">
                    <p><i class="fab fa-js"></i>&nbsp;Javascript</p>
                  </div>
                   <div class="col-md-4 col-sm-6 col-6">
                    <p><span class="icon-jquery"></span>&nbsp;jQuery</p>
                  </div>
                   <div class="col-md-4 col-sm-6 col-6">
                    <p><i class="fab fa-php"></i>&nbsp;PHP</p>
                  </div>
                   <div class="col-md-4 col-sm-6 col-6">
                    <p><i class="fab fa-laravel"></i>&nbsp;Laravel</p>
                  </div>                                                        
                </div>  
              </div>
              </div>
            </div> <!-- .row -->
          </div> <!-- #intro-block -->
      </div> <!-- .row.justify-content-md-center -->

      <!-- PORTFOLIO BLOCK STARTS HERE -->
      <div class="row justify-content-md-center"> <!-- .row.justify-content-md-center -->
          <div id="portfolio-block" class="content-block col-12 col-lg-auto">

            <h2 class="text-center">Portfolio</h2>

                <div class="row">

                  <div class="col-md-6 mb-3"> 	
                    <div class="card"> 	
                    <h5 class="card-title p-3"><a href="https://streetfighter2ttt.com" target="_blank">Tic Tac Toe</a></h5>					
                    <div class="card-img-frame">
                      <a href="https://streetfighter2ttt.com" target="_blank"><img class="card-img-top" src="resources/img/tictactoe-web.jpg" alt="Tic Tac Toe image" target="_blank"></a>
                    </div>

                    <div class="card-body p-3">
                      <div class="card-body-content pb-3">
                        <p class="card-text">"Street Fighter 2" themed Tic Tac Toe game with variable difficulty modes and two selectable characters. Integrated minimax to create an unwinnable hard mode. Uses sprite maps and animated GIFs for animation, complete with intro video, title screen, character select, etc., to simulate the Street Fighter 2 game experience. Also uses Web Audio API to create seamless looping background music.</p>
                        <p class="card-text">
                          <small class="text-muted">HTML - CSS - JS - Web Audio API</small>
                        </p>                    	
                        <p class="card-text">                      	
                          <small class="text-muted">Photoshop - Premiere - Audacity</small>
                        </p>
                        <p class="card-text">                     	
                          <small class="text-muted"><span class="note">*</span>Works best on Chrome and Firefox</small>
                        </p>
                      </div> <!-- .card-body-content -->
                      <button class="btn btn-show-hide"></button>
                    </div> <!-- .card-body -->
                  </div>
                </div> <!-- .col-md-6 mb-3 -->

                <div class="col-md-6 mb-3"> 
                  <div class="card">
                    <h5 class="card-title p-3"><a href="https://codepen.io/agedengaku/full/gjLOra/" target="_blank">Simon Game</a></h5>
                    <div class="card-img-frame">
                      <a href="https://codepen.io/agedengaku/full/gjLOra/" target="_blank"><img class="card-img-top" src="resources/img/simon-web.jpg" alt="Simon game image" target="_blank"></a>
                    </div>

                    <div class="card-body p-3">	
                      <div class="card-body-content pb-3">
                        <p class="card-text">Spiced up the original Simon game by using Street Fighter 2 themes, music, sound effects, and some animated feedback.</p>
                        <p class="card-text">
                          <small class="text-muted">HTML - CSS - JS - Animate.css</small>
                        </p>                    	
                        <p class="card-text">                      	
                          <small class="text-muted">Photoshop - Audacity</small>
                        </p>                      
                        <p class="card-text">
                          <small class="text-muted"><span class="note">*</span>Works best on Chrome and Firefox</small>
                        </p>
                      </div> <!-- .card-body-content -->
                      <button class="btn btn-show-hide"></button>									
                    </div> <!-- .card-body -->
                  </div>
                </div> <!-- .col-md-6 mb-3 -->

              </div> <!-- .row -->

              <div class="row">

                  <div class="col-md-6 mb-3"> 	
                    <div class="card"> 	
                    <h5 class="card-title p-3"><a href="https://codepen.io/agedengaku/full/NYPyWy/" target="_blank">Javascript Calculator</a></h5>					
                    <div class="card-img-frame">
                      <a href="https://codepen.io/agedengaku/full/NYPyWy/"><img class="card-img-top" src="resources/img/calculator-web.jpg" alt="Javascript Calculator image" target="_blank"></a>
                    </div>

                    <div class="card-body p-3">
                      <div class="card-body-content pb-3">
                        <p class="card-text">Improved on the original task of creating a Javascript calcultor by increasing decimal precision, making the results always similar to what you would get from a real calculator. Precision is achieved using a Decimal type by integrating decimal.js.</p>
                        <p class="card-text">
                          <small class="text-muted">HTML - CSS - JS - Decimal.js</small>
                        </p>                    	                      
                      </div> <!-- .card-body-content -->
                      <button class="btn btn-show-hide"></button>
                    </div> <!-- .card-body -->
                  </div>
                </div> <!-- .col-md-6 mb-3 -->

                <div class="col-md-6 mb-3"> 
                  <div class="card">
                    <h5 class="card-title p-3"><a href="https://codepen.io/agedengaku/full/bvZbGx/" target="_blank">Pomodoro Clock</a></h5>
                    <div class="card-img-frame">
                      <a href="https://codepen.io/agedengaku/full/bvZbGx/" target="_blank"><img class="card-img-top" src="resources/img/pomodoro-web.jpg" alt="Pomodoro Clock image" target="_blank"></a>
                    </div>

                    <div class="card-body p-3">	
                      <div class="card-body-content pb-3">
                        <p class="card-text">Goes beyond the assignment of building a productivity clock by adding animations and original recorded sound clips to guide the user on the current state of the timer.</p>
                        <p class="card-text">
                          <small class="text-muted">HTML - CSS - JS</small>
                        </p>                    	
                        <p class="card-text">                      	
                          <small class="text-muted">Audacity - Audio recording</small>
                        </p>                       
                      </div> <!-- .card-body-content -->
                      <button class="btn btn-show-hide"></button>									
                    </div> <!-- .card-body -->
                  </div>
                </div> <!-- .col-md-6 mb-3 -->

              </div> <!-- .row -->

              <div class="row">

                  <div class="col-md-6 mb-3"> 	
                    <div class="card"> 	
                    <h5 class="card-title p-3"><a href="https://japaneselessonstokyo.com" target="_blank">Japanese Lessons Tokyo</a></h5>					
                    <div class="card-img-frame">
                      <a href="https://japaneselessonstokyo.com" target="_blank"><img class="card-img-top" src="resources/img/jlt-web.jpg" alt="Japanese Lessons Tokyo website image"></a>
                    </div>

                    <div class="card-body p-3">
                      <div class="card-body-content pb-3">
                        <p class="card-text">Built a website that helped a Japanese language teacher avoid going out of business, allowing him to quit his part-time job to focus solely on teaching.</p>
                        <p class="card-text">
                          <small class="text-muted">HTML - CSS - jQuery - Animate.css</small>
                        </p>                    	
                        <p class="card-text">                      	
                          <small class="text-muted">Photoshop - Photography</small>
                        </p>                       
                      </div> <!-- .card-body-content -->
                      <button class="btn btn-show-hide"></button>
                    </div> <!-- .card-body -->
                  </div>
                </div> <!-- .col-md-6 mb-3 -->

                <div class="col-md-6 mb-3"> 
                  <div class="card">
                    <h5 class="card-title p-3"><a href="http://jmotaylor.com/xps/" target="_blank">XPS Tokyo</a></h5>
                    <div class="card-img-frame">
                      <a href="http://jmotaylor.com/xps/" target="_blank"><img class="card-img-top" src="resources/img/xpstokyo-web.jpg" alt="XPS Tokyo website image"></a>
                    </div>

                    <div class="card-body p-3">	
                      <div class="card-body-content pb-3">
                        <p class="card-text">An exercise in redesigning an old and outdated website, which includes designing a new logo. Done on Wordpress, but the theme was coded completely from scratch using PHP.</p><p><a href='http://www.xpstokyo.com' target='_blank'>Click here to see the original website</a></p>
                        <p class="card-text">
                          <small class="text-muted">HTML - CSS - JS - PHP - Wordpress</small>
                        </p>                    	
                        <p class="card-text">                      	
                          <small class="text-muted">Photoshop - Photography</small>
                        </p>                       
                      </div> <!-- .card-body-content -->
                      <button class="btn btn-show-hide"></button>									
                    </div> <!-- .card-body -->
                  </div>
                </div> <!-- .col-md-6 mb-3 -->

              </div> <!-- .row -->		

              <div class="row">

                <div class="col-md-6 mb-3"> 	
                    <div class="card"> 	
                    <h5 class="card-title p-3"><a href="/designquotes" target="_blank">Design Quotes</a></h5>					
                    <div class="card-img-frame">
                      <a href="/designquotes" target="_blank"><img class="card-img-top" src="resources/img/quotes-web.jpg" alt="Design Quotes website image"></a>
                    </div>

                    <div class="card-body p-3">
                      <div class="card-body-content pb-3">
                        <p class="card-text">A certification project wherein a quote-generating API and Twitter API are integrated to build a random quote machine with Twitter functionality.</p>
                        <p class="card-text">
                          <small class="text-muted">HTML - CSS - jQuery - Twitter API</small>
                        </p>                    	                      
                      </div> <!-- .card-body-content -->
                      <button class="btn btn-show-hide"></button>
                    </div> <!-- .card-body -->
                  </div>
                </div> <!-- .col-md-6 mb-3 --> 						

                  <div class="col-md-6 mb-3"> 	
                    <div class="card"> 	
                    <h5 class="card-title p-3"><a href="https://duterteipsum.com" target="_blank">Duterte Ipsum</a></h5>					
                    <div class="card-img-frame">
                      <a href="https://duterteipsum.com" target="_blank"><img class="card-img-top" src="resources/img/duterte-web.jpg" alt="Duterte Ipsum website image"></a>
                    </div>

                    <div class="card-body p-3">
                      <div class="card-body-content pb-3">
                        <p class="card-text">Inspired by <a href='https://trumpipsum.net/' target='_blank'>Trump Ipsum</a>, this Lorem Ipsum generator uses some of Philippine President Duterte's ridiculous quotes intersperesed with tech and web design related words.</p>
                        <p class="card-text">
                          <small class="text-muted">HTML - CSS - JS - PHP</small>
                        </p>                    	
                        <p class="card-text">                      	
                          <small class="text-muted">Photoshop</small>
                        </p>                       
                      </div> <!-- .card-body-content -->
                      <button class="btn btn-show-hide"></button>
                    </div> <!-- .card-body -->
                  </div>
                </div> <!-- .col-md-6 mb-3 -->

            </div> <!-- .row -->

              <div class="row">

                <div class="col-md-6 mb-3"> 
                  <div class="card">
                    <h5 class="card-title p-3"><a href="/wikiviewer" target="_blank">Wikipedia Viewer</a></h5>
                    <div class="card-img-frame">
                      <a href="/wikiviewer" target="_blank"><img class="card-img-top" src="resources/img/wiki-web.jpg" alt="Wikipedia Viewer image"></a>
                    </div>

                    <div class="card-body p-3">	
                      <div class="card-body-content pb-3">
                        <p class="card-text">A certification project using the MediaWiki action API to load the introduction text of search entry results.</p>
                        <p class="card-text">
                          <small class="text-muted">HTML - CSS - jQuery - MediaWiki action API</small>
                        </p>                    	                     
                      </div> <!-- .card-body-content -->
                      <button class="btn btn-show-hide"></button>									
                    </div> <!-- .card-body -->
                  </div>
                </div> <!-- .col-md-6 mb-3 -->  							

                <div class="col-md-6 mb-3"> 
                  <div class="card">
                    <h5 class="card-title p-3"><a href="/hello/colorgame" target="_blank">Color Game</a></h5>
                    <div class="card-img-frame">
                      <a href="/hello/colorgame" target="_blank"><img class="card-img-top" src="resources/img/color-web.jpg" alt="Color Game image"></a>
                    </div>

                    <div class="card-body p-3">	
                      <div class="card-body-content pb-3">
                        <p class="card-text">A game for web designers testing their knowledge of RGB colors. This was an exercise from an online web development bootcamp, and was my first Javascript project.</p>
                        <p class="card-text">
                          <small class="text-muted">HTML - CSS - JS</small>
                        </p>                    	                     
                      </div> <!-- .card-body-content -->
                      <button class="btn btn-show-hide"></button>									
                    </div> <!-- .card-body -->
                  </div>
                </div> <!-- .col-md-6 mb-3 -->  

            </div> <!-- .row -->          

          </div> <!-- portfolio-block -->
      </div> <!-- .row.justify-content-md-center -->
    
      <!-- EDUCATION STARTS HERE -->
      <div class="row justify-content-md-center">

        <div id="education-block" class="content-block col-12 col-lg-auto">
          <h2 class="text-center">IT-Related Education</h2>     
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><a href="http://www.ateneo.edu/ls/sose/iscs/bachelor-science-management-information-systems" target="_blank" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="The BS in Management Information Systems (BS MIS) program is an interdisciplinary offering of the Department of Information Systems and Computer Science and the School of Management. Students in this program enroll in computer science courses, management engineering courses, and core MIS courses.">Bachelor of Science - Management Information Systems - Ateneo de Manila University</a></li>
            <li class="list-group-item"><a href="https://www.freecodecamp.org/certification/agedengaku/legacy-front-end" target="_blank" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Front End Development Certification representing approximately 400 hours of coursework">Front End Development Certificate - FreeCodeCamp</a></li>
            <li class="list-group-item"><a href="https://www.freecodecamp.org/certification/agedengaku/javascript-algorithms-and-data-structures" target="_blank" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="JavaScript Algorithms and Data Structures Developer Certification, representing approximately 300 hours of coursework">Javascript Algorithms and Data Structures Certificate - FreeCodeCamp</a></li>
            <li class="list-group-item"><a href="https://www.udemy.com/certificate/UC-QJ3DBNMS/" target="_blank" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="The course covers tools and technologies including HTML5, CSS3, JavaScript, Bootstrap, SemanticUI, DOM Manipulation, jQuery, Unix(Command Line) Commands, NodeJS, NPM, ExpressJS, REST, and MongoDB.">Web Developer Bootcamp - Udemy</a></li>
            <li class="list-group-item"><a href="https://www.udemy.com/certificate/UC-EIQ3O54Y/" target="_blank" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="The basics of Javascript including primitive types, arrays, objects, functions, assignment operators, the window object, constructors, prototype inheritance, scope, execution context and more.">Javascript Essentials - Udemy</a></li>
            <li class="list-group-item"><a href="https://www.udemy.com/certificate/UC-OR6PJ9R7/" target="_blank" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="The fundamentals of procedural PHP, object oriented PHP, MYSQLi and building a CMS.">PHP for Beginners - Udemy</a></li>
            <li class="list-group-item"><a href="https://www.udemy.com/certificate/UC-LIB5PN33/" target="_blank" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Building applications using Laravel, and learning about Laravel ORM, Tinker, Eloquent, middleware and security.">PHP with Laravel - Udemy</a></li>
            <li class="list-group-item"><a href="https://laracasts.com/series/laravel-from-scratch-2017" target="_blank" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="A series taking learners from installing Laravel, all the way up to mastering the essentials of the framework.">Laravel 5.4 From Scratch - Laracasts</a></li>
            <li class="list-group-item"><a href="https://www.udemy.com/certificate/UC-1LUEW2YJ/" target="_blank" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Learn modern web design, HTML5 and CSS3 step-by-step from scratch. ">Responsive Websites with HTML5 and CSS3 - Udemy</a></li>
            <li class="list-group-item"><a href="https://www.udemy.com/certificate/UC-HBR1Y0XX/" target="_blank" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Setting up MySQL, creating databases and queries, using logical operators, manipulating tables/rows/data, joins, building web applications with PHP, HTML and CSS along with MySQL as the database layer, and performing CRUD and authentication from web applications.">MySQL Developer Course - Udemy</a></li>
            <li class="list-group-item"><a href="https://www.udemy.com/learn-to-create-wordpress-themes-by-building-10-projects/learn/v4/overview" target="_blank" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="The course combines knowledge of HTML 5, CSS and PHP and shows how to use the different APIs and widgets from WordPress to create new themes. Also covers functions such as PostLoop, Hook/Actions, Widgets, WP_Query, Theme Customizer API, and WordPress Frameworks such as Bootstrap, Foundation, Ink, Gridism and W3.">Wordpress Themes - Udemy</a></li>
          </ul>
          <br>
          <br>
          <h2 class="text-center">Currently Learning</h2>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><a href="https://www.udemy.com/js-algorithms-and-data-structures-masterclass/" target="_blank" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="This course crams months of computer science and interview prep material into 20 hours of video. The content is based directly on coding bootcamps. Includes Big O notation, recursion, sorting algorithms, and data structures.">Javascript Algorithms and Data Structures Masterclass - Udemy</a></li>
            <li class="list-group-item">Responsive Web Design Projects Certificate - FreeCodeCamp</li>
            <li class="list-group-item">AWS Certified - Solutions Architect Associates (CSA) - Udemy</li>
            <li class="list-group-item">Advanced Web Developer Bootcamp (React) - Udemy</li>
          </ul>

        </div>
      </div>
      <!-- EDUCATION ENDS HERE -->
    
      <!-- CONTACT FORM STARTS HERE -->
      <div class="row justify-content-md-center"> <!-- .row.justify-content-md-center 3 -->

        <div id="contact-block" class="content-block col-12 col-lg-auto">
          <h2 class="text-center">Contact Me!</h2>

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
                <div class="g-recaptcha" data-sitekey="6LdBMSITAAAAAK4q1wXuP6kSr-OFI-1Pxnp0FOWM"></div>

              </form>

            </div> <!-- .col-md-6 -->
            <div class="col-md-6" id="contact-text">
              <p>I'm available for work! You can get in touch with me using the form, or email me at <a href="mailto:jm@jmotaylor.com">jm@jmotaylor.com</a>.</p>
              <p>You can also send me a message through my LinkedIn account here.</p>
            </div>

          </div> <!-- .row -->

        </div> <!-- #contactBlock -->

      </div> <!-- .row.justify-content-md-center 3 -->
    
  </div> <!-- .container -->

<!--
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
        
      </div>
      
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
        </div> 
        
      </div> 
      
    </div>
    
  </div> 
</footer>
-->

<footer class="footer">
  <div class="container">
<!--    <div class="text-center">JM Taylor <?php echo date('Y'); ?></div>-->
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
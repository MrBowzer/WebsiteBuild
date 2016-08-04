<!DOCTYPE html>
<html>
    <head>
        <title>Website Build</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--link to bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
        <style>
        
        /*    .wrestlingpics{
             margin-top:20px;
             margin-bottom:20px;
             margin-left:20px;
             margin-right:20px;
            }
        */
        
        .intro{ 
            padding-top:18%;
            padding-bottom:18%;
            
        }
        
        
        .jumbotron{
          margin-bottom:0px;
          padding-top: 100px;
          padding-bottom: 50px;

        }
        
        .story{
           background-color:#00ff00; 
           padding-top: 40px;
           padding-bottom: 60px;
           padding-right: 100px;
           padding-left: 100px;
        }
        
        .aboutme{
            padding-top: 40px;
            padding-bottom: 60px;
            padding-left: 100px;
            padding-right: 100px;
            
        }
        
        .img-responsive {
            border-radius:50%;
        }
        
        .center-align{
            text-align:center;
        }
        

            
        </style>

    </head>
    
    <body>
        <!--NAV Begins-->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class=navbar-header>
                    <a class="navbar-brand" href="#">Web Builder</a>
                </div>
                <ul class="nav navbar-nav  ">
                    <li><a href="#">What its about</a></li>
                    <li><a href="#">what it does</a></li>
                    <li><a href="#">why i use it</a></li>
                </ul>
            </div>
        </nav>
        <!--NAV Ends-->
        
        <!--jumbotron begins-->
        <div class="jumbotron text-center">
            <!--Image goes here-->
            <div class="container intro">
                <h1>Welcome to the Website</h1>
                <p>Where Im going to learn how to bulid a site step by step</p>
            </div>
        </div>
        <!--jumbotron ends-->
        
       <!--my story-->
        <div class="container-fluid xs-1 text-center story">
            <h3>Who am I </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        </div>
        <!--story ends-->
            
            
         <!--About me begins-->
        <div class="container-fluid xs-2 text-center aboutme">
            <div class="row">
                <h2>A little about Myself</h2>
            </div>
            
            <div class="row">
                <div class="col-xs-4 center-align">
                    <p>This is me getting second in my district</p>
                   <img src="images/district.jpg">
                </div>
                
                 <div class="col-xs-4 center-align">
                    <p>This is me getting second in my district</p>
                    <img src="images/district.jpg">
                </div>
                
                 <div class="col-xs-4 center-align">
                    <p>This is me getting second in my district</p>
                    <img src="images/district.jpg">
                </div>
                
            </div>
        </div>
        <!--about me ends-->
        
        <div class="container-fluid xs-2 text-center">
            
        </div>
        
        
    </body>



</html>
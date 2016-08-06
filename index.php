<!DOCTYPE html>
<html>
    <head>
        <title>Website Build</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--link to bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!--link to font Lato-->
       <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <style>
        
        .html{
            font-family:'Lato', sans-serif !important;
        }

        .jumbotron{
          margin-bottom:0px;
          padding-top: 20%;
          padding-bottom:22%;
          background-image: url("images/jumbotron.jpe");
          color:#fff;
        }
        
        .jumbotron, container-fluid{
            background-color:#93C178;
            opacity:.91;
        }
        
        .story {
           background-color:#F7EF6A; 
           padding-top: 40px;
           padding-bottom: 60px;
           padding-right: 100px;
           padding-left: 100px;
           font-size:20px;
        }
        
        .h3,h3{
            font-size:50px;
        }
        
        .h2,h2{
            font-size:40px;
        }
        
        p{
            font-size:20px;
            
        }
        
        .aboutme {
            padding-top: 40px;
            padding-bottom: 60px;
            padding-left: 100px;
            padding-right: 100px;
            background-color:#465C8B;
            color:#fff;
            
        }
        
        .center-align{
            text-align:center;
        }
        
        .btn {
            background-color:#93C178;
            border-color:transparent;
            
        }
        
        .btn:hover{
            background-color:yellow;
        }
        
        .a:visited{
            background-color:#93C178;
        }
        
            
        </style>

    </head>
    
    <body>

        
        <!--jumbotron begins-->
        <div class="jumbotron text-center">
            <!--Image goes here-->
            <div class="container-fluid ">
                <h1>Welcome to the Website</h1>
                <p>Where Im going to learn how to bulid a site step by step</p>
                <a href="#"><button type="button" class="btn btn-default btn-lg">Learn more about me</button></a>
            </div>
        </div>
        <!--jumbotron ends-->
        
       <!--my story-->
        <div class="container-fluid story">
            <div class="row">
                <div class="col-xs-9">
                    <h3>Who am I </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>  
                <div class="col-xs-3">
                    <img src="images/pro.jpg" width="300" height="450">
                </div>
            </div>
        </div>
        <!--story ends-->
            
            
         <!--About me begins-->
        <div class="container-fluid text-center aboutme">
            <div class="row">
                <div class="col-xs-12">
                    <h2>A little about Myself</h2>
                </div>
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
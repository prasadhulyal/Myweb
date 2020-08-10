<!doctype html>
<html>
    <head>
    
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>PRASAD TECH SITE</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        
        </head>
        <style>
    
                
            marquee{
                

                background-color:skyblue;
                padding: 1em;
                
                }
                .social-menu{
                    height: 100vh;
                    display: flex;
                    justify-content: center;
                    left: 0px;
                
                    
                }
                body{
                    position: relative;
                    background-color:floralwhite;
                }
                H1{background-color: aquamarine;
                    position:absolute;
                    display: flex;
                    top: 55%;
                    left:15%;
                    right: 15%;
                    text-align: center;
                }
                footer  UL {
                    bottom: 5%;
                    float: left;
                    margin:0px;
                    padding: 0px;
                    
                    
                }
             </style>
        <body>
            
            <marquee >WELCOME TO PRASAD TECH SITE</marquee></P>
            <div class="nav-bar">
                <img  src="logo.png" >
                <div class="menu-right">
                    <span onClick="myFunction()">&#9776</span>
                    <ul id="menu">
                       
                        <li><a  class="active" href="projects.html" style="text-decoration:none"><b>PROJECTS</b></a></li>
                        
                        <li><a class="active" href="about.html" style="text-decoration:none" ><b>ABOUT</b></a></li>
                        <li><a class="active" href=" PRASAD RESUME.pdf" target="blank"  style="text-decoration:none"> <b> MY CV</b></a></li>
                    </ul>

                </div>
               
            </div>
            <script>
                function myFunction(){
                    var x=document.getElementById("menu");
                    if(x.style.display == "block")
                    {
                        x.style.display ="none";
                    }
                    else{
                        x.style.display="block";
                    }

                }
            </script>
            <h1>
                KNOWLEDGE WITHOUT ACTION IS MEANINGLESS
            </h1>
            <footer style="position: relative;">
    
            <div class="social-menu">
                <ul>
                    <li><a  href="https://www.facebook.com/prasad.hulyal.7"><i class="fa fa-facebook" ></i></a></li>
                    <li><a href="https://twitter.com/Prasad11883155"" ><i class="fa fa-twitter"></i></a></li>
                    
                    <li><a href="https://www.linkedin.com/in/sce17cs0056/"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="https://www.instagram.com/p_b_hulyal/"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UC4JlIOdo10_TKuRpVtVmgEQ?view_as=subscriber"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="https://github.com/prasadhulyal"><i class="fa fa-github"></i></a></li>
                    <li><a href="tel:+917338625546"><i class="fa fa-phone"></i></a></li>
                    <li><a href="mailto:prasadhulyal543210@gmail.com"><i class="fa fa-envelope-o"></i></a></li>
                
                </ul>
            
            </div>
        </footer>
        




        </body>
        
</html>

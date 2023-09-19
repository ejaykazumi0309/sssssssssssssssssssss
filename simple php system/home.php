<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>
index-4.html
<!DOCTYPE html>

<html lang="en">

         <head>

               <style>

@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap");

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

body {
  background-color: #353836;
  color: white;
  font-family: "Poppins", sans-serif;
}

header a {
  text-decoration: none;
}

header {
  padding: 0 5px;
  background-color: #1d1f1d;
  height: 50px;
  display: flex;
  justify-content: space-between;
}

#brand {
  font-weight: bold;
  font-size: 15px;
  display: flex;
  align-items: center;
}

#brand a {
  color: #09c372;
}

.shesh {
  list-style: none;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: space-around;
}

ul a {
  color: white;
}

ul li {
  padding: 5px;
  margin-left: 5px;
}

.shesh li {
  padding: 5px;
  margin-left: 1px;
  }

.shesh li:hover {
  transform: scale(1.1);
  transition: 0.3s;
}

#login,
#signup {
  border-radius: 5px;
  padding: 5px 8px;
}

#login {
  border: 1px solid #498afb;
}

#signup {
  border: 1px solid #ff3860;
}

#signup a {
  color: #ff3860;
}

#login a {
  color: #498afb;
}

#hamburger-icon {
  margin: auto 0;
  display: none;
  cursor: pointer;
}


.open .bar1 {
  -webkit-transform: rotate(-45deg) translate(-6px, 6px);
  transform: rotate(-45deg) translate(-6px, 6px);
}

.open .bar2 {
  opacity: 0;
}

.open .bar3 {
  -webkit-transform: rotate(45deg) translate(-6px, -8px);
  transform: rotate(45deg) translate(-6px, -8px);
}

.open .mobile-menu {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: flex-start;
}

.mobile-menu {
  display: none;
  position: absolute;
  top: 50px;
  left: 0;
  height: calc(10vh - 50px);
  width: 100%;
}

.mobile-menu li {
  margin-bottom: 10px;
}

               
               .popup .overlay {
                position:fixed;
                top:0px;
                left:0px;
                width:100vw;
                height:100vh;
                background:rgba(0,0,0,0,.7);
                z-index:1;
                display:none;

               }  
               
               .popup .content {
                  position:absolute;
                  top:50%;
                  left:50%;
                  transform:translate(-50%,-50%)scale(0);
                  background:#565e64;
                  width:350px;
                  height:220px;
                  z-index:2;
                  text-align:center;
                  padding:20px;
                  box-sizing:border-box;

               }

               .popup .close-btn {
                cursor:pointer;
                position:absolute;
                right:20px;
                top:20px;
                width:30px;
                background:#222;
                color:#fff;
                font-size:25px;
                font-weight:600;
                line-height:30px;
                text-align:center;
                border-radius:50%;
               }

               .popup.active .overlay {
                display:block;
               }

               .popup.active .content {
                transition:all 300ms ease-in-out;
                transform:translate(-50%,-50%) scale(1);
               }
               @import url("https://fonts.googleapis.com/css2?family=Michroma&display=swap");
* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

body {
  font-family: "Michroma", sans-serif;
  height: 100vh;
}

.container {
  background-color: black;
  color: #fff;
  height: 100%;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
}

.loading-page {
  position: absolute;
  top: 0;
  left: 0;
  background: linear-gradient(to right, #2c5364, #203a43, #0f2027);

  height: 100%;
  width: 100%;
  display: flex;
  flex-direction: column;
  gap: 1.5rem;
  align-items: center;
  justify-content: center;
  color: #191654;
}

#svg {
  height: 150px;
  width: 150px;
  stroke: white;
  fill-opacity: 0;
  stroke-width: 3px;
  stroke-dasharray: 4500;
  animation: draw 8s ease;
}

@keyframes draw {
  0% {
    stroke-dashoffset: 4500;
  }
  100% {
    stroke-dashoffset: 0;
  }
}

.name-container {
  height: 30px;
  overflow: hidden;
}

.logo-name {
  color: #fff;
  font-size: 20px;
  letter-spacing: 12px;
  text-transform: uppercase;
  margin-left: 20px;
  font-weight: bolder;
}</style><style>
               
  
body {

    font-family: Arial, sans-serif;

}



h1 {

    text-align: center;

}



ul {

    list-style-type: none;

    padding: 0;

}



li {

    margin-bottom: 10px;

}



.book-link {

    text-decoration: none;

    color: #FFFFFF;

    font-weight: bold;

    margin-right: 10px;

}



.download-btn {

    padding: 5px 10px;

    background-color: #007BFF;

    color: #fff;

    border: none;

    cursor: pointer;

} 

.close-btn {

padding: 5px 10px;

background-color: #36454f;

color: #fff;

border: none;

cursor: pointer;

} 


body {
        background-color: #0E2433;
        color: #fff;
        ;
      }



        </style> 



    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Davao Oriental Research Articles</title>

    

         </head>

<body>

  <header>
    <div id="brand"><a href="">DORA</a></div>
    <nav>
      <ul class="shesh">
        <li><a href="">Home</a></li>
        <li><a href="https://ejaykazumi0309.github.io/browser/">Browser</a></li>
        <li><a href="https://ejaykazumi0309.github.io/profile/">Info</a></li>
        <li id="login"><a href="https://ejaykazumi0309.github.io/login/" >Login</a></li>
        <li id="signup"><a href="https://ejaykazumi0309.github.io/signup/">Signup</a></li>
      </ul>
    </nav>
    <div id="hamburger-icon" onclick="toggleMobileMenu(this)">
      <div class="bar1"></div>
      <div class="bar2"></div>
      <div class="bar3"></div>
      <ul class="mobile-menu">
        <li><a href="">Home</a></li>
        <li><a href="/browser">Browser</a></li>
        <li><a href="/info">Info</a></li>
        <li id="login"><a href="/login" >Login</a></li>
        <li id="signup"><a href="/signup">Signup</a></li>
      </ul>
    </div>
  </header>


    <div class="loading-page">
        <svg id="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">

            <path
                d="M415.44 512h-95.11L212.12 357.46v91.1L125.69 512H28V29.82L68.47 0h108.05l123.74 176.13V63.45L386.69 0h97.69v461.5zM38.77 35.27V496l72-52.88V194l215.5 307.64h84.79l52.35-38.17h-78.27L69 13zm82.54 466.61l80-58.78v-101l-79.76-114.4v220.94L49 501.89h72.34zM80.63 10.77l310.6 442.57h82.37V10.77h-79.75v317.56L170.91 10.77zM311 191.65l72 102.81V15.93l-72 53v122.72z" />
        </svg>


        <div class="name-container">
            <div class="logo-name">DORA</div>
        </div>
    </div>

  
      
    <h1><br><b>Davao Oriental Research Articles</b></h1>
    <div class="popup" id="popup-1">
       <div class="overlay"></div>
       <div class="content">
         <div class="close-btn">&times;</div>
         <h1><b>Disclaimer</b></h1>
         <h1></h1><p>We dont claim any Research Article that appear on this app/web the purpose of this app is to gather all Research on particular Area this app was made <b>By: Ejay Rosete</b></p></h1>
       </div>
    </div>

    <button class="close-btn" onclick="togglePopup()">©</button>
    <br>
    <br>
    <div class="filter-bar">
        <input type="text" id="filterInput" placeholder="Search...">
        <button  onclick="filterList()">Search</button>
    </div>
    
    <ul id="itemList">
    </ul>
    <br>
    
    

    <ul id="book-list">
    
   <p>
 <b>  Article List: </b> 
   <br>
   </p>
   <br>
        <li><a href="#" class="book-link" data-title="Book 1"> • Flood risk assessment for Davao Oriental in the Philippinesusing geographic information system-based multi-criteriaanalysis and the maximum entropy model</a> <button class="download-btn" onclick="location.href='https://onlinelibrary.wiley.com/doi/epdf/10.1111/jfr3.12607'" data-title="Book 1">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">• Performance of SEAGOP (Sea Garbage Obtaining Pump Bin) in Magapo, Mati City, Davao Oriental, Philippines</a> <button class="download-btn" onclick="location.href='https://drive.google.com/file/d/1QHxCIZPoUP1hs5W0espQ6qq4Z4HCEody/view?usp=drive_link'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">• Community structure of macroinvertebrates in protected and exploited areas of Baganga, Davao Oriental, Philippines</a> <button class="download-btn" onclick="location.href='https://drive.google.com/file/d/11rZy5UkNiOWWLMrdyoHYndj8-hopMd51/view?usp=drive_link'" data-title="Book 3">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">• Improving Grade 7 students' news writing skills using worksheets assessed through online interviews</a> <button class="download-btn" onclick="location.href='https://davaoresearchjournal.ph/index.php/main/article/download/9/8/49'" data-title="Book 4">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>
        
        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>
        
        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>
        
        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>
        
        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>
        
        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>
        
        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>
        
        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>
        
        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>
        
        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>
        
        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>
        
        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>
        
        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>
        
        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>
        
        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>
        
        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>
        
        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>
        
        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>
        
        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>
        
        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>

        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>
        
        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>
        
        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>
        
        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>
        
        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>
        
        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>
        
        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>
        
        <li><a href="#" class="book-link" data-title="Book 2">RESEARCH ARTICLE NAME</a> <button class="download-btn" onclick="location.href='PUT LINK HERE'" data-title="Book 2">Download</button></li>
        
        
    </ul>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"
    integrity="sha512-gmwBmiTVER57N3jYS3LinA9eb8aHrJua5iQD7yqYCKa5x6Jjc7VDVaEA0je0Lu0bP9j7tEjV3+1qUm6loO99Kw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="./script.js"></script>

     <script>gsap.fromTo(
    ".loading-page",
    { opacity: 1 },
    {
      opacity: 0,
      display: "none",
      duration: 1.5,
      delay: 3.5,
    }
  );
  
  gsap.fromTo(
    ".logo-name",
    {
      y: 50,
      opacity: 0,
    },
    {
      y: 0,
      opacity: 1,
      display: "none",
      duration: 2,
      delay: 0.5,
    }
  
  );</script>
                     <script>
                              function togglePopup(){
                                document.getElementById("popup-1").classList.toggle("active");
                              }
  
                  </script>

    <script>
    
    document.addEventListener('DOMContentLoaded', function() {

    const bookLinks = document.querySelectorAll('.book-link');

    const downloadBtns = document.querySelectorAll('.download-btn');



    bookLinks.forEach(link => {

        link.addEventListener('click', function(event) {

            event.preventDefault();

            const title = this.dataset.title;

            alert(You clicked on ${title}.);

        });

    });



    downloadBtns.forEach(btn => {

        btn.addEventListener('click', function() {

            const title = this.dataset.title;

            alert(You clicked download for ${title}.);

        });

    });

});	

function filterList() {
    var input, filter, ul, li, txtValue;
    input = document.getElementById('filterInput');
    filter = input.value.toUpperCase();
    ul = document.getElementById('itemList');
    li = ul.getElementsByTagName('li');

    for (var i = 0; i < li.length; i++) {
        txtValue = li[i].textContent || li[i].innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = '';
        } else {
            li[i].style.display = 'none';
        }
    }
}

</script>
<script>function toggleMobileMenu(menu) {
  menu.classList.toggle('open');
}</script>

</body>

</html>	    
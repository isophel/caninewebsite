<?php require_once('config.php');?>
<?php require_once(ROOT_PATH . '/includes/header.php'); ?>
<?php  require_once(ROOT_PATH . '/includes/registration_login.php'); ?>
<style>
  
  .timeline::after {
  content: '';
  position: absolute;
  width: 2px;
  background-color: #7b97af;
  top: 0;
  bottom: 0;
  margin-left: -3px;
margin-top: 15px;
margin-bottom: 20px;
}


/* Container around content */
.container {
  padding: 10px 40px;
  position: relative;
  background-color: inherit;
  width: 50%;
  padding-bottom: 0px !important;
    cursor: pointer;
}

/* The circles on the timeline */
.container::after {
  content: '';
  position: absolute;
  width: 17px;
  height: 17px;
  right: -17px;
  background-color: white;
  border: 2px solid #7b97af;
  top: 15px;
  border-radius: 50%;
  z-index: 1;
}
</style>

.itineraryBox { height: 370px !important; } 
</style>
   
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script>
function checkScroll1() {
    var $win = $('#divRight');
    alert($win.scrollTop());
}


//window.onscroll = function() {myFunction()};
  function reset() { 
 
var styleElem1 = document.head.appendChild(document.createElement("style"));
var styleElem2 = document.head.appendChild(document.createElement("style"));
var styleElem3 = document.head.appendChild(document.createElement("style"));
var styleElem4 = document.head.appendChild(document.createElement("style"));
var styleElem5 = document.head.appendChild(document.createElement("style"));
var styleElem6 = document.head.appendChild(document.createElement("style"));
var styleElem7 = document.head.appendChild(document.createElement("style"));
var styleElem8 = document.head.appendChild(document.createElement("style"));
var styleElem9 = document.head.appendChild(document.createElement("style"));

var styleDeparture = document.head.appendChild(document.createElement("style"));
var styleElemincludes = document.head.appendChild(document.createElement("style"));
var styleElemexcludes = document.head.appendChild(document.createElement("style"));
var styleElemdisclaimer = document.head.appendChild(document.createElement("style"));
var styleElempayment = document.head.appendChild(document.createElement("style"));
var styleEleminformation = document.head.appendChild(document.createElement("style"));

styleElem1.innerHTML ="#contentday1:after {background: white;}";
styleElem2.innerHTML ="#contentday2:after {background: white;}";
styleElem3.innerHTML ="#contentday3:after {background: white;}";
styleElem4.innerHTML ="#contentday4:after {background: white;}";
styleElem5.innerHTML ="#contentday5:after {background: white;}";
styleElem2.innerHTML ="#contentday6:after {background: white;}";
styleElem3.innerHTML ="#contentday7:after {background: white;}";
styleElem4.innerHTML ="#contentday8:after {background: white;}";
styleElem5.innerHTML ="#contentday9:after {background: white;}";
styleDeparture.innerHTML ="#contentdeparture:after {background: white;}";
styleElemincludes.innerHTML ="#contentincludes:after {background: white;}";
styleElemexcludes.innerHTML ="#contentexcludes:after {background: white;}";
styleElemdisclaimer.innerHTML ="#contentdisclaimer:after {background: white;}";
styleElempayment.innerHTML ="#contentpayment:after {background: white;}";


document.getElementById("contentday1").style.background = "#f6f7f9";
document.getElementById("contentday2").style.background = "#f6f7f9";
document.getElementById("contentday3").style.background = "#f6f7f9";
document.getElementById("contentday4").style.background = "#f6f7f9";
document.getElementById("contentday5").style.background = "#f6f7f9";
document.getElementById("contentday6").style.background = "#f6f7f9";
document.getElementById("contentday7").style.background = "#f6f7f9";
document.getElementById("contentday8").style.background = "#f6f7f9";
document.getElementById("contentday9").style.background = "#f6f7f9";
document.getElementById("contentdeparture").style.background = "#f6f7f9";
document.getElementById("contentincludes").style.background = "#f6f7f9";
document.getElementById("contentexcludes").style.background = "#f6f7f9";
document.getElementById("contentdisclaimer").style.background = "#f6f7f9";
document.getElementById("contentpayment").style.background = "#f6f7f9";

}

function scrollTest() {
  var $win = $('#divRight');
 alert($win.scrollTop());

}

function checkScroll() {
  var $win = $('#divRight');
 //alert($win.scrollTop());

if($win.scrollTop() >  0 && $win.scrollTop() < 500) { 

reset();



var styleElem100 = document.head.appendChild(document.createElement("style"));

styleElem100.innerHTML ="#contentday1:after {background: black;}";

document.getElementById("contentday1").style.background = "#fff";
//alert($win.scrollTop());

}


if($win.scrollTop() >  501 && $win.scrollTop() < 2740) { 
  reset();

var styleElem100 = document.head.appendChild(document.createElement("style"));
styleElem100.innerHTML ="#contentday2:after {background: black;}";
document.getElementById("contentday2").style.background = "#fff";

  }



if($win.scrollTop() >  2741 && $win.scrollTop() < 4695) { 
  reset();

var styleElem100 = document.head.appendChild(document.createElement("style"));
styleElem100.innerHTML ="#contentday3:after {background: black;}";
document.getElementById("contentday3").style.background = "#fff";
}





if($win.scrollTop() >  4696 && $win.scrollTop() < 6280) { 
  reset();

var styleElem100 = document.head.appendChild(document.createElement("style"));
styleElem100.innerHTML ="#contentday4:after {background: black;}";
document.getElementById("contentday4").style.background = "#fff";

}



if($win.scrollTop() >  6281 && $win.scrollTop() < 7450) { 
  reset();

var styleElem100 = document.head.appendChild(document.createElement("style"));
styleElem100.innerHTML ="#contentday5:after {background: black;}";
document.getElementById("contentday5").style.background = "#fff";

}

if($win.scrollTop() >  6281 && $win.scrollTop() < 7450) { 
  reset();

var styleElem100 = document.head.appendChild(document.createElement("style"));
styleElem100.innerHTML ="#contentday6:after {background: black;}";
document.getElementById("contentday6").style.background = "#fff";

}


if($win.scrollTop() >  6281 && $win.scrollTop() < 7450) { 
  reset();

var styleElem100 = document.head.appendChild(document.createElement("style"));
styleElem100.innerHTML ="#contentday7:after {background: black;}";
document.getElementById("contentday7").style.background = "#fff";

}


if($win.scrollTop() >  6281 && $win.scrollTop() < 7450) { 
  reset();

var styleElem100 = document.head.appendChild(document.createElement("style"));
styleElem100.innerHTML ="#contentday8:after {background: black;}";
document.getElementById("contentday8").style.background = "#fff";

}


if($win.scrollTop() >  6281 && $win.scrollTop() < 7450) { 
  reset();

var styleElem100 = document.head.appendChild(document.createElement("style"));
styleElem100.innerHTML ="#contentday9:after {background: black;}";
document.getElementById("contentday9").style.background = "#fff";

}



if($win.scrollTop() >  7450 && $win.scrollTop() < 8140) { 
  reset();

var styleElem100 = document.head.appendChild(document.createElement("style"));
styleElem100.innerHTML ="#contentdeparture:after {background: black;}";
document.getElementById("contentdeparture").style.background = "#fff";
}

if($win.scrollTop() >  8141 && $win.scrollTop() < 10080) { 
  reset();

var styleElem100 = document.head.appendChild(document.createElement("style"));
styleElem100.innerHTML ="#contentincludes:after {background: black;}";
document.getElementById("contentincludes").style.background = "#fff";

}

if($win.scrollTop() >  10081 && $win.scrollTop() < 12260) { 
  reset();

var styleElem100 = document.head.appendChild(document.createElement("style"));
styleElem100.innerHTML ="#contentexcludes:after {background: black;}";
document.getElementById("contentexcludes").style.background = "#fff";

}

if($win.scrollTop() >  12261 && $win.scrollTop() < 14450) { 
  reset();

var styleElem100 = document.head.appendChild(document.createElement("style"));
styleElem100.innerHTML ="#contentdisclaimer:after {background: black;}";
document.getElementById("contentdisclaimer").style.background = "#fff";

}

if($win.scrollTop() >  14451 && $win.scrollTop() < 14780) { 
  reset();

var styleElem100 = document.head.appendChild(document.createElement("style"));
styleElem100.innerHTML ="#contentpayment:after {background: black;}";
document.getElementById("contentpayment").style.background = "#fff";

}

}


$win.scroll(checkScroll);



function myFunction(day) {


  var elmnt = document.getElementById(day);
  elmnt.scrollIntoView({ block: 'start',  behavior: 'smooth' });

  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;

}


</script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



    <!--Site Title-->
    <title>9 Days Experience Tanzania Culture And Safari Adventure Comfort</title>
    <meta name="description" content="Join us as we explore Tanzania on this amazing 9 Days Experience Tanzania Culture And Safari Adventure Comfort trip of a lifetime Safari with Easy Travel">
    
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--Stylesheets-->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

    <!--Bootstrap-->
    <link rel="stylesheet" href="css/style.css">
<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/.."><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script><[endif]-->

  </head>


  <body>
      
          <!--The Main Wrapper-->
    <div class="page">
      <!--
      ========================================================
                              HEADER
      ========================================================
      -->
<script async src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-103805139-1"></script>
<script async>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-103805139-1');
</script>

<!-- Hotjar Tracking Code for https://www.easytravel.co.tz/ -->
<script async>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:994387,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>

 <script src="https://www.google.com/recaptcha/api.js?render=6LeW1PoUAAAAANMCOCoPzFQsgWTDjUulSVTKXWHe"></script>
 <script>
      function onClick(e) {
        e.preventDefault();
        grecaptcha.ready(function() {
          grecaptcha.execute('6LeW1PoUAAAAANMCOCoPzFQsgWTDjUulSVTKXWHe', {action: 'submit'}).then(function(token) {
              // Add your logic to submit to your backend server here.
          });
        });
      }
  </script>
<style>.grecaptcha-badge {
    bottom: 40px !important;
} </style>

<!--Start of Zendesk Chat Script-->
<!--End of Zendesk Chat Script-->
<style>.alert-box {
    width: 100%;
    z-index: 1111;
    background: #eaeced;
    display: flex;
    padding: 14px 22px;
    justify-content: space-between;
    align-items: center;
    color: #fff;
    float:left;
    width:100%;
    position:relative;
}

.alert-box p {
    font-size: 14px;
    color:#4c4c4c;
}
.alert-box i {
    cursor: pointer;
    color:#4c4c4c;
}
.alert-box a {
    font-weight: 600;
    color:#4c4c4c;
    text-decoration: underline;
}</style>
<div class="alert-box">
<p>COVID-19 Health and Safety Guidelines for our Guest and Staff: <a href="https://www.easytravel.co.tz/coronavirus">Read Easy Travel Standard Operating Procedures</a> | <a href="https://www.easytravel.co.tz/covid-faq">Read Easy Travel Coronavirus FAQ </a></p> <i class="fa fa-times" aria-hidden="true"></i>
</div>

 
   
      </header>     
      <section class="topImage">
          <!--Swiper-->
          <div> <img style="width:100%" data-src="images/acacia-tree-tanzania.jpg"  class="lozad responsive hidden-sm hidden-xs"> </div>

        </section>

         <section>
          <!--Swiper-->
          <div> <img style="width:100%" data-src="images/acacia-tree.jpg"  class="lozad responsive hidden-md hidden-lg"> </div>

        </section>





      <!--
      ========================================================
                              CONTENT
      ========================================================
      -->
      <main class="page-content">
<div style="width: 100%" class="paddingContainer">
  <div class="container1">
         <section class="text-center">
         
            <div class="row">
              <div class="col-sm-12 headerGap">
                <h1>9 Days Experience Tanzania Safari and Culture </h1>
               
              
               <p class="lead big">With five of our best destinations covered in nine magnificent days, this trip is packed with action and full of wildlife highlights. From Arusha, we journey westwards to huge, diverse Tarangire National Park, to be followed by a visit to see the beautiful natural wonder of the Ngorongoro Conservation Area with its incomparable crater <span id="dots">...</span>
                 <span id="more">
               From there, we head to the endless plains of the magnificent Serengeti, where we are lucky enough to have extended time, before continuing to Lake Eyasi to experience the area’s rich human culture. Finally, we visit beautiful Lake Manyara National Park, returning from there to the airport. We combine outstanding wildlife-spotting, incredible scenery and fascinating encounters with some of our tribespeople.
               </span>
               <div style="margin: auto; display: inline-block;"><button onclick="readMore()" id="myBtn" class="visible-xs" style="color:#f08908"><b>Read more</b></button></div>
               
               </p>
               
               
              </div>


                     <div class="col-xs-12">

                <div class="col-xs-12">
                    
                   


   <div class="panel-group" id="accordion">             
                            <div class="col-sm-3">
                 
                  <div class="col-sm-12 itineraryBox">

           <div  > Tour Duration </div>

                    
                 <br>

                       <p class="boxParagraph"><b>9 days, 8 nights</b> </p> <hr class="boxLine">

                      <p class="boxParagraph">1 nights in Arusha</strong> </p> <hr class="boxLine">

                      <p class="boxParagraph">2 night in Tarangire</strong> </p> <hr class="boxLine">

                      <p class="boxParagraph">1 night in Ngorongoro</p> <hr class="boxLine">
                      
                      <p class="boxParagraph">2 nights in Serengeti</p> <hr class="boxLine">

                      <p class="boxParagraph">1 nights Lake Eyasi</p> <hr class="boxLine">

                      <p class="boxParagraph">1 nights in Manyara</p> <hr class="boxLine">
     
     
 

  </div>
  
  
                </div>







                 <div class="col-sm-3"  >
                 
                  <div class="col-sm-12 itineraryBox">

           <div  > Areas to Visit</div>

                    
                 <br>


                       <p class="boxParagraph"><b>Parks & Conservation</b></p> <hr class="boxLine">

                       <p class="boxParagraph">Tarangire National Park</p> <hr class="boxLine">

                       <p class="boxParagraph">Ngorongoro Conservation Area</p> <hr class="boxLine">

                       <p class="boxParagraph">Serengeti National Park</p> <hr class="boxLine">

                       <p class="boxParagraph">Lake Manyara National Park</p> <hr class="boxLine">

                       <p class="boxParagraph"> <b>Lakes</b></p> <hr class="boxLine">

                       <p class="boxParagraph">Lake Eyasi</p> <hr class="boxLine">

                       


 
  </div>
                </div>






              
                <div class="col-sm-3" >
                 
                   


<div class="col-sm-12 itineraryBox">

           <div > Tour Style </div>

                    
                 <br>

                    
                <p class="boxParagraph">Accommodation on this tour is in our <b>Comfort </b> category, </p> <hr style="border-top: 1px solid #eaeced">

                   <p class="boxParagraph">With one night’s <b>hotel </b>accommodation in Arusha and other nights spent out in our relaxing, <b>atmospheric camp</b></p> <hr style="border-top: 1px solid #eaeced">

                  <p class="boxParagraph">Our <b>Comfort level</b> accommodations are carefully selected by Easy Travel to provide the the perfect balance between<br> <b>price and quality</b>, and all offer private, en-suite facilities. </p>



 
  </div>
             
                </div>


                   <div class="col-sm-3" >
                 
                  
<div class="col-sm-12 itineraryBox">

           <div > Physical Rating </div>

                    
                 <br>

                    
                   <p class="boxParagraph">Leisurely. Our safaris with the Leisurely rating are perfectly suitable for people with an <strong>average level </strong> of fitness</p> <hr style="border-top: 1px solid #eaeced">

                      <p class="boxParagraph" >Assuming that you already have that level, no physical preparation is necessary in advance of one of these trips, and <strong> no strenuous exercise is expected </strong> on them</p> <hr style="border-top: 1px solid #eaeced">

                      <p class="boxParagraph">All visitors will spend some significant time in our <strong>comfortable vehicles</strong> on the rather rough roads of Tanzania</p>


 
  </div>
             
                </div>
                
                
                
           
                
                
                
                
                
</div>

              </div>
            </div>
            </div>
          
        </section>
        
        
        
</div>
</div>
 

<div style="text-align: center; margin-bottom: 40px;">
    <a href="#enquiry"><button class="btn btn-primary btn-xs"> Enquire Now</button></a>
</div>


  <div style="display: none;" onclick="checkScroll1()"> check </div>
    <div class="outerContainer" >
  <div class="container1" style=" padding-left: 20px; padding-right: 20px; max-width: 1300px; margin: auto !important">
    <br>

 
    <br><br>
  


 
<div class="col-sm-6 col-xs-12">
  
   <div class="days">  Day to Day Program </div>  
 
 
<div class="timeline">



<div id="contentday1" class="container right">
    <div class="content" onclick="myFunction('day1')" >
     <div class="days col-sm-2"> DAY 1 </div> <div class="destinations col-sm-10">Arrival Day and Welcome to Tanzania</div> 
    </div>
  
  </div>


<div  id="contentday2" class="container right">
    <div class="content" onclick="myFunction('day2')">
          <div class="days col-sm-2"> DAY 2 </div> <div class="destinations col-sm-10">Arusha – Tarangire </div> 
     
    </div>
  </div>


<div id="contentday3" class="container right">
    <div  class="content" onclick="myFunction('day3')">
    <div class="days col-sm-2"> DAY 3 </div> <div class="destinations col-sm-10">Tarangire National Park</div> 
    </div>
  </div>

  <div id="contentday4" class="container right">
    <div  class="content" onclick="myFunction('day4')">
    <div class="days col-sm-2"> DAY 4 </div> <div class="destinations col-sm-10">Tarangire - Ngorongoro </div> 
    </div>
  </div>


<div id="contentday5" class="container right">
    <div class="content" onclick="myFunction('day5')">
     <div class="days col-sm-2"> DAY 5 </div> <div class="destinations col-sm-10"> Ngorongoro – Serengeti National Park </div> 
    </div>
</div>


<div id="contentday6" class="container right">
    <div class="content" onclick="myFunction('day6')">
     <div class="days col-sm-2"> DAY 6 </div> <div class="destinations col-sm-10"> Serengeti National Park  </div> 
    </div>
</div>


  <div id="contentday7" class="container right">
    <div class="content" onclick="myFunction('day7')">
   <div class="days col-sm-2"> DAY 7 </div> <div class="destinations col-sm-10">Serengeti National Park – Lake Eyasi</div> 
    </div>
  </div>

 

   <div id="contentday8" class="container right">
    <div class="content" onclick="myFunction('day8')">
   <div class="days col-sm-2"> DAY 8 </div> <div class="destinations col-sm-10">Lake Eyasi – Lake Manyara </div> 
    </div>
  </div>


    <div id="contentday9" class="container right">
    <div class="content" onclick="myFunction('day9')">
   <div class="days col-sm-2"> DAY 9 </div> <div class="destinations col-sm-10">Lake Manyara – Kilimanjaro International Airport  </div> 
    </div>
  </div>



  <div id="contentdeparture" class="container right">
    <div class="content" onclick="myFunction('departure')">
 <div class="days col-sm-12"> Departure Instructions</div> 
    </div>
  </div>


    <div id="contentincludes" class="container right">
    <div class="content" onclick="myFunction('includes')">
 <div class="days col-sm-12"> Trip Includes</div> 
    </div>
  </div>

    <div id="contentexcludes" class="container right">
    <div class="content" onclick="myFunction('excludes')">
 <div class="days col-sm-12"> Trip Excludes </div> 
    </div>
  </div>


    <div id="contentdisclaimer" class="container right">
    <div class="content" onclick="myFunction('disclaimer')">
 <div class="days col-sm-12"> Disclaimer - Important!</div> 
    </div>
  </div>

<div id="contentpayment" class="container right">
    <div class="content" onclick="myFunction('payment')">
 <div class="days col-sm-12"> Payment Policy</div> 
    </div>
  </div>

<div class="container right">
    <a href="#enquiry"><button class="btn btn-primary btn-xs"> Enquire Now</button></a>
</div>

</div>

 <br><br><br> </div>


 
 
<div onscroll="checkScroll()" id="divRight" class="col-sm-6 col-xs-12" >
 
 
                
    

<div id="day1"   style="padding-top: 50px"  >
  <br>
  
   

  <div class="daysNumber" style="text-align: left"> DAY 1 </div>
  <div class="destinations"><b>Arrival Day and Welcome to Tanzania</b></div>

  <br>
 
 
  <div class="itinerary">Whatever your arrival time at Kilimanjaro International Airport, your Easy Travel driver-guide will be waiting for you with a warm welcoming smile. Kick back and relax in your comfortable vehicle as he takes you to your hotel in Arusha, Tanzania’s self-styled ‘safari capital.’ On your journey to the hotel, you will get a brief impression of this large, bustling, commercial city. Depending on your arrival time, you may have your pre-safari briefing today; if not, it will take place early tomorrow morning.</div><br>

<div class="accommodationBox">
<div class="itinerary"><b> Accommodation </b></div>

<div  style="padding-right: 7px; padding-left:unset;  padding-bottom: 15px; padding-top: 15px" class="col-sm-6"><img class="lozad" data-src="images/accomodations/african-tulip/the-african-tulip-arusha.jpg" style="width:100%"></div>
<div style="padding-left: 7px; padding-right:unset; padding-bottom: 15px;  padding-top: 15px;"class="col-sm-6"><img class="lozad" data-src="images/accomodations/african-tulip/the-african-tulip-bed-room.jpg" style="width:100%"></div>

<div  style="padding-right: 7px; padding-left:unset;  padding-bottom: 15px; padding-top: 0px" class="col-sm-6"><img class="lozad" data-src="images/accomodations/african-tulip/the-african-tulip-drinks.jpg" style="width:100%"> </div>
<div style="padding-left: 7px; padding-right:unset; padding-bottom: 15px;  padding-top: 0px;"class="col-sm-6"><img class="lozad" data-src="images/accomodations/african-tulip/african-tulip-dinning-interior-view.jpg" style="width:100%"></div>
<div class="itinerary">A compact hotel choice in central Arusha, <b>The African Tulip</b> simply oozes comfort and draws inspiration for its artistic décor from Tanzania and its captivating natural environment.
Here is the perfect place to relax, either before or after your safari, with comfortable and spacious rooms and suites, a popular bar and an inviting swimming-pool to cool you down after a hot day. What’s more, the excellent ‘Baobab’ restaurant offers truly international cuisine, with influences from Tanzania, South India and the wider world – there’s something tasty to please everyone.
Best of all, you are assured of a warm, Tanzanian welcome from the hotel team, dedicated to making your stay here as comfortable as possible.
</div>


  <br>
<div class="itinerary"><b>Meal Plan</b> Dinner at your hotel. </div>
</div>

</div>


 




<div id="day2"   style="padding-top: 50px"  >
  <br>
  

  
  <div class="daysNumber" style="text-align: left"> DAY 2 </div>
  <div class="destinations"><b>Arusha – Tarangire </b></div>

  <br>
 
 
    <div class="itinerary"><b>Tour Briefing</b></div>
<div class="itinerary">Unless your arrival time yesterday allowed time for your safari briefing, then this will take place after breakfast. We will provide you with all the essential information, before we set off to our first safari destination, the diverse Tarangire National Park, where we will enjoy lunch, take an afternoon game drive and spend the night.</div><br>

<div class="itinerary"><b>Journey: Arusha to Tarangire National Park</b></div>
<div class="itinerary">Our two-hour morning journey first takes us westwards from Arusha. Along the route, your eyes will be opened to all the colours and character of Tanzania: perhaps some Maasai herdsmen driving their flocks of goats to new pastures. You’ll get to know your driver-guide, amazed at his depth of knowledge as he effortlessly answers all your questions. </div><br>


<div class="itinerary"><b>Day’s Highlight</b></div>
<div class="itinerary">Your game drive in Tarangire, with its incredible diversity, massive baobab trees and herds of elephants.</div><br>


<div class="itinerary"><b>Safari (Game Drive) in Tarangire National Park</b></div>
<div class="itinerary">Tarangire is huge. As you stand at the park gate and look south, it stretches as far as the eye can see. Known as the ‘Elephant Playground,’ this phenomenal park contains huge herds of these mighty mammals. But Tarangire is also home to buffalo, lion, wildebeest, zebra and gazelle and the park can rival Serengeti for sheer animal densities. What might you see today? Perhaps a solitary male lion stretched out beneath a tree, perhaps a trio of male cheetah enjoying some lazy bonding-time in the sun. Maybe some graceful Grant’s gazelle or zebra bounding away from the road or a couple of giraffe munching happily from the choicest acacia branches. For Tarangire specialities, look out for kudu and oryx.<br>
Here as in other parks, it pays not to ignore the small animals. It’s so easy to be mesmerized by the power and majesty of an elephant or the elegance of the giraffe. Ask your guide to find you an agama lizard, especially a male one who changes colour in front of you according to the temperature! Or a hyrax, known as pimpi, an insignificant-looking creature of around 30cm in length…who astonishingly is related to the elephant!<br>
Not many trees will pass you by without something of avian interest catching your eye. A memorable flash of colour might be a lilac-breasted roller or blue-eared starling. Ostrich are plentiful and it’s hard not to chuckle at the sighting of the well-named, studious-looking secretary bird as it awkwardly pads across the grasslands. <br>
The park is also famous for its splendid baobab trees, rolling savannah and acacia woodland. It can be dusty – wear a scarf over your mouth - but this is a minor inconvenience for sighting wildlife in such abundance. 

</div><br>


<div class="accommodationBox">
<div class="itinerary"><b>Accommodation</b></div>

<div  style="padding-right: 7px; padding-left:unset;  padding-bottom: 15px; padding-top: 15px" class="col-sm-6"><img class="lozad" data-src="images/accomodations/tortiliscamps/tarangire-tortilis-camp-beside-baobab-tree.jpg" style="width:100%"></div>
<div style="padding-left: 7px; padding-right:unset; padding-bottom: 15px;  padding-top: 15px;"class="col-sm-6"><img class="lozad" data-src="images/accomodations/tortiliscamps/tarangire-tortilis-camp-in-a-greenish-top-view.jpg" style="width:100%"></div>

<div  style="padding-right: 7px; padding-left:unset;  padding-bottom: 15px; padding-top: 0px" class="col-sm-6"><img class="lozad" data-src="images/accomodations/tortiliscamps/water-hall-area-tortilis-tanzania.jpg" style="width:100%"> </div>
<div style="padding-left: 7px; padding-right:unset; padding-bottom: 15px;  padding-top: 0px;"class="col-sm-6"><img class="lozad" data-src="images/accomodations/tortiliscamps/tarangire-tortilis-chef-with-clients.jpg" style="width:100%"></div>
<div class="itinerary">Our accommodation tonight will be at the <b>Tarangire Tortilis Camp</b>. Off the beaten track, and far from the park’s other camps and lodges, this is a great wilderness experience. The nearby Gursi swamplands ensure that warthog, zebra and other mammals are attracted to this area as they come to drink. After a long day, you can kick back, take a drink yourself and watch an unforgettable sunset.<br>
Tarangire Tortilis is located around four magnificent specimen of the iconic baobab tree, which is characteristic of Tarangire National Park. Away from the noise of the busy park gates, this safari camp combines comfort with tranqullity, a sense of freedom and being at one with nature.
You can be assured that you will be warmly welcomed by an enthusiastic team, keen to turn your stay here into something rather special. You’ll enjoy dinner tonight at the camp.


</div>


<br>
<div class="itinerary"><b> Meal plan </b></div>
<div class="itinerary">Breakfast will be provided by your Arusha hotel. Lunch will be a nutritious and balanced meal provided by the hotel for you to take out on safari. Your evening meal will be a full, cooked dinner created by the chef and his team at the Tarangire Tortilis Camp.</div>
</div>


</div>
  





<div id="day3"   style="padding-top: 50px"  >
    <br>
    
  <div class="daysNumber" style="text-align: left"> DAY 3 </div>
  <div class="destinations"><b>Tarangire National Park </b></div>
  

 <br>
 
  
<div class="itinerary"><b>Day’s Highlight </b></div>
<div class="itinerary">Your close encounters with nature and wildlife on your morning walking safari.</div><br>


<div class="itinerary"><b>Walking Safari in Tarangire</b></div>

<div class="itinerary">Up close and personal: that could be the motto for a walking safari, and Tarangire is a fantastic location to again leave the comfort of your safari vehicle and enjoy the landscape on foot. With a Park Ranger for safety and accompanied by your expert driver-guide, you will be amazed at how much more you can learn from a couple of hours walking in the bush. The great unknown, of course, is what you will see…and who you might meet! Your senses are challenged and heightened, with unfamiliar sounds and smells meeting you throughout your journey. You’ll find out about animal tracks and dung, learn what to do if you get too close to a grazing elephant and discover who lives in those emblematic, strange-shaped termite mounds (and it’s not just termites, far from it!) Being this close to nature may be a whole new experience for you, but the memories will stay with you forever – of that we are sure.<br>
After our walking safari, we will take a break for lunch, before we take our afternoon game drive.

</div><br>


<div class="itinerary"><b>Afternoon Safari (Game Drive) in Tarangire National Park</b></div>

<div class="itinerary">You may have thought that you have seen all that Tarangire has to offer, but you will certainly enjoy some new experiences as we explore the park further in our afternoon game-drive.<br>
The varied terrain in itself could be considered a wonder, with riverine woodlands and grasslands, acacia and baobab. Tarangire is a true dry season refuge for the region’s wildlife. Amazingly, some 550 bird species have been recorded here, and it won’t be long before an air-bound blaze of colour alerts you to something interesting. You might recognise an ostrich or a stork, but if you can’t identify the smaller species, there’s no need to worry – that is what your expert driver-guide is here for!<br>
The birds are exotic and so are the names: what about the ‘white-bellied go-away bird’ or the ‘Madagascar bee-eater’ for example? But of course, we will also see plenty more large mammals this afternoon.

</div><br>


<div class="accommodationBox">
<div class="itinerary"><b>Accommodation</b></div>

<div  style="padding-right: 7px; padding-left:unset;  padding-bottom: 15px; padding-top: 15px" class="col-sm-6"><img class="lozad" data-src="images/accomodations/tortiliscamps/tarangire-tortilis-camp-beside-baobab-tree.jpg" style="width:100%"></div>
<div style="padding-left: 7px; padding-right:unset; padding-bottom: 15px;  padding-top: 15px;"class="col-sm-6"><img class="lozad" data-src="images/accomodations/tortiliscamps/tarangire-tortilis-camp-in-a-greenish-top-view.jpg" style="width:100%"></div>

<div  style="padding-right: 7px; padding-left:unset;  padding-bottom: 15px; padding-top: 0px" class="col-sm-6"><img class="lozad" data-src="images/accomodations/tortiliscamps/water-hall-area-tortilis-tanzania.jpg" style="width:100%"> </div>
<div style="padding-left: 7px; padding-right:unset; padding-bottom: 15px;  padding-top: 0px;"class="col-sm-6"><img class="lozad" data-src="images/accomodations/tortiliscamps/tarangire-tortilis-chef-with-clients.jpg" style="width:100%"></div>
<div class="itinerary">After your afternoon game-drive in Tarangire, we will take you back to your accommodation for some relaxation, maybe a drink, a chat around the campfire, dinner and your all-important night’s rest.

</div>

<br>
<div class="itinerary"><b>Meal plan</b></div>
<div class="itinerary">Breakfast will be provided by your Tarangire accommodation, lunch will be also be provided by them to enjoy while out on safari. Your evening meal will be a full, cooked dinner, prepared and eaten at your Tarangire accommodation.</div> <br>

   </div>

   
</div>

 







<div id="day4"   style="padding-top: 50px"  >
    <br>
    
  <div class="daysNumber" style="text-align: left"> DAY 4 </div>
  <div class="destinations"> <b>Tarangire - Ngorongoro </b> </div>
  

 <br>
 
  
 <div class="itinerary">Today we leave Tarangire, but not before taking a final look with a game-drive through the park on our way to Ngorongoro. We lunch on arrival at Ngorongoro, before descending into the crater in the afternoon.</div> <br>


<div class="itinerary"><b>Journey: Tarangire-Ngorongoro</b></div>
<div class="itinerary">Our journey from Tarangire to Ngorongoro takes us to the northwest, a journey of around 4 ½ hours.
</div><br>



<div class="itinerary"><b>Day’s Highlight </b></div>
<div class="itinerary">Like nothing else on Earth, the stunning crater of Ngorongoro is a unique home for many, many species of Tanzania’s wildlife. With some luck, you may even see a black rhino here. 
</div><br>

<div class="itinerary"><b>Safari in Ngorongoro Crater     </b></div>
<div class="itinerary">From the rim, we admire the incredible view then  descend into the vast crater itself.  At one side there’s the Lerai Forest, classic mountain forest landscape with almost tropical characteristics. This is good elephant country, so keep your eyes peeled. By the side of the nearby swampland is what is sometimes called the ‘elephant graveyard’ as the mighty male tuskers at the end of their lives come to chew on the soft, swampland grasses once their teeth have failed them. <br>
The crater has a population of around 120 lions, with well-defined territories; 15,000 wildebeest, 9,000 zebra, 400 hyenas, and around 50 black rhino. Many wildebeest and other herd animals are resident, benefiting from the many sources of year-round waters and are boosted by some migrators in season. Buffalo, Thomson’s gazelle and eland are also present in numbers. Hippos can be found in pools and swampland and highland birdlife is colourful and plentiful around the waters. Flamingos can often be seen in Lake Magadi, which occupies part of the crater floor.

</div><br>



<div class="accommodationBox">
<div class="itinerary"><b>Accommodation</b></div>

<div  style="padding-right: 7px; padding-left:unset;  padding-bottom: 15px; padding-top: 15px" class="col-sm-6"><img class="lozad" data-src="images/accomodations/tortiliscamps/ngorongoro-tortilis-camp-under-acacia-tree-tanzania.jpg.jpg" style="width:100%"></div>
<div style="padding-left: 7px; padding-right:unset; padding-bottom: 15px;  padding-top: 15px;"class="col-sm-6"><img class="lozad" data-src="images/accomodations/tortiliscamps/ngorongoro-tortilis-camp-bed-room.jpg" style="width:100%"></div>

<div  style="padding-right: 7px; padding-left:unset;  padding-bottom: 15px; padding-top: 0px" class="col-sm-6"><img class="lozad" data-src="images/accomodations/tortiliscamps/ngorongoro-tortilis-rest-room.jpg" style="width:100%"> </div>
<div style="padding-left: 7px; padding-right:unset; padding-bottom: 15px;  padding-top: 0px;"class="col-sm-6"><img class="lozad" data-src="images/accomodations/tortiliscamps/ngorongoro-tortilis-camp-greenish-environment.jpg" style="width:100%"></div>
<div class="itinerary">Our <b>Ngorongoro Tortilis Camp</b> is only a 20km drive from the crater itself (around 40 minutes), set beneath an atmospheric acacia ‘umbrella,’ located in dense, sloping woodland and adjacent to a traditional Maasai community.  Some will call the set-up here ‘glamping’, and it certainly offers a great level of comfort, considering the wilderness location. The nearby Ol Mote and Makarot mountains give it an added dimension, but it is the warm welcome of the staff which is the highlight for many of the visitors here. You’ll enjoy the team’s singing and dancing, perhaps you will even be tempted to join in. You can relax, have a drink, sit in front of the camp fire, and listen to the sounds of the noisy tree hyrax who live nearby. Then, enjoy dinner - and fall asleep, dreaming of the day’s highlights.


</div>


<br>

<div class="itinerary"><b>Meal plan</b></div>
<div class="itinerary">Breakfast will be enjoyed at the Tarangire Tortilis Camp. Lunch will be a nutritious and balanced meal, enjoyed at Ngorongoro.Your evening meal will be a full, cooked dinner created by the chef and his team at the Ngorongoro Tortilis Camp. </div> <br>

   </div>


   
</div>

 



 








<div id="day5"   style="padding-top: 50px"  >
    <br>
    
  <div class="daysNumber" style="text-align: left"> DAY 5 </div>
  <div class="destinations"><b>Ngorongoro – Serengeti National Park </b></div>
  

 <br>

<div class="itinerary"><b>Journey: Ngorongoro to Serengeti</b></div>
<div class="itinerary">After breakfast, we set off for our next destination, Serengeti, a distance of 145km and a journey time of around 3 ½ hours. On arrival, we take lunch and have an afternoon game drive. </div><br>

<div class="itinerary"><b>Day’s Highlight </b></div>
<div class="itinerary">Here’s a National Park which will offer you a whole variety of wildlife surprises over the next few days, but perhaps today’s highlight – certainly for first-time visitors - will simply be the Serengeti terrain itself. The sheer vastness, as the plains roll away in front of you into eternity, will leave you with a sense of awe. 
</div><br>

<div class="itinerary"><b>Safari in Serengeti National Park </b></div>
<div class="itinerary">At last! Serengeti, the incomparable wonder of Tanzania, will be the stage for the natural animal theatrics which will be performed over the next few days. Your game drive here combines the known with the unknown, the certainty that you will be amazed with the uncertainty of exactly what you will see and when. Changing light, a changing cast of animal actors, ensuring that at every turn there is a new experience. Snap off some memorable photos, but don’t forget to simply take a deep breath and enjoy nature in its real-time, raw beauty.
</div><br>

<div class="accommodationBox">
<div class="itinerary"><b>Accommodation</b></div>

<div  style="padding-right: 7px; padding-left:unset;  padding-bottom: 15px; padding-top: 15px" class="col-sm-6"><img class="lozad" data-src="images/accomodations/tortiliscamps/serengeti-tortilis-camp-entrace-area.jpg" style="width:100%"></div>
<div style="padding-left: 7px; padding-right:unset; padding-bottom: 15px;  padding-top: 15px;"class="col-sm-6"><img class="lozad" data-src="images/accomodations/tortiliscamps/serengeti-tortilis-camp-exterior-top-view.jpg" style="width:100%"></div>

<div  style="padding-right: 7px; padding-left:unset;  padding-bottom: 15px; padding-top: 0px" class="col-sm-6"><img class="lozad" data-src="images/accomodations/tortiliscamps/walking-activity-serengeti-tortilis-camp.jpg" style="width:100%"> </div>
<div style="padding-left: 7px; padding-right:unset; padding-bottom: 15px;  padding-top: 0px;"class="col-sm-6"><img class="lozad" data-src="images/accomodations/tortiliscamps/tortilis-firecamp-ground-area.jpg" style="width:100%"></div>
<div class="itinerary"> <b>Serengeti Tortilis Camp</b> is superbly situated, a wilderness experience like no other. This is what some call ‘glamping,’ with a high degree of comfort in the heart of this famous National Park. The team here is totally dedicated to your enjoyment, providing the warmest of welcomes which might include a bit of singing and dancing: bring your sense of rhythm! You may not be alone here, as the wildlife like to roam freely amongst the tents. But don’t worry, our staff will keep you safe.  Enjoy a drink at our outdoor ‘fireplace’ while listening to the calls of the wild.<br> 
Then, feast yourselves on a truly superb dinner and your driver-guide will discuss the plans for the next day’s itinerary in the Serengeti. Afterwards, review the photos that have captured the day’s highlights, before falling asleep to get ready for another day of adventure.
 </div>
<br>

<div class="itinerary"><b> Meal plan </b></div>
<div class="itinerary">Breakfast is served at the Ngorongoro Tortilis Camp. Lunch will be prepared by the camp team. Your dinner will be a full, cooked meal created by the team at the Serengeti Tortilis Camp.</div><br>

</div>

   
</div>

 






<div id="day6"   style="padding-top: 50px"  >
    <br>
    
  <div class="daysNumber" style="text-align: left"> DAY 6 </div>
  <div class="destinations"><b>Serengeti National Park </b></div>
  

 <br>

<div class="itinerary"><b>Day’s Highlight</b></div>
<div class="itinerary">Today, we set off from our accommodation in the Central Serengeti. Wildlife is abundant: sometimes you may think it has come to find you, rather than the other way around. Today’s highlight is unknown, as the animals don’t publish their schedule (!) What we see also depends on the season, but this area is where bushland meets grassland, a favorite spot for big cats looking for prey. Cheetah, leopard and lions are all possibilities today.</div><br>


<div class="itinerary"><b>Safari in Serengeti National Park  </b></div>
<div class="itinerary">Today is a full day of discovery, a chance to enjoy the varied landscapes of the Central Serengeti. The Seronera River weaves its way through this area, providing waters for all species of wildlife. You will also see the distinctive rocky outcrops, the famous kopjes which characterize the Serengeti landscape. Lunch will be an unforgettable experience, enjoyed in the middle of the bush. Everything here varies with the seasons, but in May, November and December migrating herds join the already rich population of resident animals which live here year-round. (In the rainy season, the landscape turns black with hundreds of thousands of wildebeest – a simply incredible sight.)

</div><br>


<div class="accommodationBox">
<div class="itinerary"><b>Accommodation</b></div>

<div  style="padding-right: 7px; padding-left:unset;  padding-bottom: 15px; padding-top: 15px" class="col-sm-6"><img class="lozad" data-src="images/accomodations/tortiliscamps/serengeti-tortilis-camp-entrace-area.jpg" style="width:100%"></div>
<div style="padding-left: 7px; padding-right:unset; padding-bottom: 15px;  padding-top: 15px;"class="col-sm-6"><img class="lozad" data-src="images/accomodations/tortiliscamps/serengeti-tortilis-camp-exterior-top-view.jpg" style="width:100%"></div>

<div  style="padding-right: 7px; padding-left:unset;  padding-bottom: 15px; padding-top: 0px" class="col-sm-6"><img class="lozad" data-src="images/accomodations/tortiliscamps/walking-activity-serengeti-tortilis-camp.jpg" style="width:100%"> </div>
<div style="padding-left: 7px; padding-right:unset; padding-bottom: 15px;  padding-top: 0px;"class="col-sm-6"><img class="lozad" data-src="images/accomodations/tortiliscamps/tortilis-firecamp-ground-area.jpg" style="width:100%"></div>
<div class="itinerary">After your day of thrilling game drives, your driver will return you safely for another relaxing night your Serengeti accommodation (see above). Drink, relax, dine and sleep, all out in the wilderness of the Serengeti. What could be better?
</div>


<br>

<div class="itinerary"><b> Meal plan </b></div>
<div class="itinerary">Breakfast is served at your Serengeti accommodation. Lunch will be prepared by your accommodation, for you to enjoy while out on safari. Your dinner will be a full, cooked meal prepared at your accommodation.</div><br>

<div class="itinerary" style="border: 1px solid #000; padding: 10px; font-weight: normal;">Note: for those who have booked the Balloon Safari for today, you will be picked up from the lodge at 05.00 hours for a 06.00 hours departure. After your 60 – 90-minute aerial adventure, bush breakfast and champagne, your driver will pick you up for your full-day game drive.</div>

</div>
   
</div>

 









<div id="day7"   style="padding-top: 50px"  >
    <br>
    
  <div class="daysNumber" style="text-align: left"> DAY 7 </div>
<div class="destinations"><b>Serengeti National Park – Lake Eyasi </b></div>
  

 <br>


   
<div class="itinerary"><b>Journey: Serengeti National Park – Lake Eyasi</b></div>
<div class="itinerary">After a morning game drive and lunch, this afternoon we will head south to Lake Eyasi, a journey of around 4 ½ hours.</div><br>

<div class="itinerary"><b>Day’s Highlight</b></div>
<div class="itinerary">Although we will have another chance this morning to marvel at the Serengeti, perhaps today’s highlight will be our meeting with some of our country’s fascinating tribespeople. Today, we will meet the Datoga in their traditional village houses.</div><br>


<div class="itinerary"><b>Safari in Serengeti National Park <b></div>
<div class="itinerary">With its informative visitor centre, the Seronera area of Central Serengeti is the national park’s most popular area. And it is very popular with the wildlife, too. The Seronera river enjoys year-round waterflow, so there is always something of interest to observe. Several game drives can be undertaken here and might reveal lions in sizeable prides, hippo or herds of elephants - whose populations in the park have risen in recent times. Depending on other attractions, we may choose to call in at the Serengeti Visitor Centre, where there is an excellent explanation of the park’s eco-system and a chance to understand the history of conservation in this area. In particular, you will find out about the work of Bernhard Grzimek and the Frankfurt Zoological Society who had the foresighted vision of preserving the Serengeti’s eco-system. Even at the center, you may well find wildlife: populations of hyrax and mongoose, as well as many small bird species.  
</div><br> 


<div class="itinerary"><b>Datoga tribe, Lake Eyasi <b></div>
<div class="itinerary">After lunch, we head south to Lake Eyasi. Here, we have an opportunity to remind ourselves that Tanzania is rich in human culture, as well as rich in fantastic wildlife. The Datoga tribe are our hosts this afternoon, as we are introduced to their village, customs and traditions. A colorful experience, not to be forgotten!
</div><br> 

<div class="accommodationBox">
<div class="itinerary"><b>Accommodation</b></div>

<div  style="padding-right: 7px; padding-left:unset;  padding-bottom: 15px; padding-top: 15px" class="col-sm-6"><img class="lozad" data-src="images/accomodations/lake-eyasi-lodge/lake-eyasi-safari-lodge-exterior-view.jpg" style="width:100%"></div>
<div style="padding-left: 7px; padding-right:unset; padding-bottom: 15px;  padding-top: 15px;"class="col-sm-6"><img class="lozad" data-src="images/accomodations/lake-eyasi-lodge/lake-eyasi-safari-lodge-bead-room.jpg" style="width:100%"></div>

<div  style="padding-right: 7px; padding-left:unset;  padding-bottom: 15px; padding-top: 0px" class="col-sm-6"><img class="lozad" data-src="images/accomodations/lake-eyasi-lodge/lake-eyasi-safari-lodge.jpg" style="width:100%"> </div>
<div style="padding-left: 7px; padding-right:unset; padding-bottom: 15px;  padding-top: 0px;"class="col-sm-6"><img class="lozad" data-src="images/accomodations/lake-eyasi-lodge/lake-eyasi-safari-lounge.jpg" style="width:100%"></div>
<div class="itinerary">With views towards the seasonal soda lake of Eyasi, and to the Ngorongoro Conservation area in the distance, the <b>Lake Eyasi Safari Lodge</b> combines elegance and simplicity to provide the perfect home-from-home to discover this fascinating region.<br>
The main building of the lodge houses the reception and lounge, as well as both indoor and outdoor dining areas. A welcoming swimming-pool provides a focal point for relaxation and tempts guests to take the plunge and cool down. Accommodation is provided by way of separate ‘cottages,’ each  spacious and with ensuite facilities, each simply furnished and with either double or twin beds. Cottages have their own verandas, allowing guests to enjoy the spectacular views of the surroundings.


</div>
<br>

<div class="itinerary"><b> Meal plan </b></div>
<div class="itinerary">Breakfast is enjoyed at the Serengeti Tortilis Camp. Lunch will be a nutritious and balanced meal, also provided by the camp for you to take out on safari. Your dinner will be a full, cooked meal provided by the Lake Eyasi Safari Lodge.</div>
</div>  
   
</div>

 









<div id="day8"   style="padding-top: 50px"  >
    <br>
    
  <div class="daysNumber" style="text-align: left"> DAY 8 </div>
  <div class="destinations"><b>Lake Eyasi – Lake Manyara </b></div>
  

 <br>


<div class="itinerary"><b>Journey: Lake Eyasi – Lake Manyara</b></div>
<div class="itinerary">After breakfast and our morning visits to see the Hadzabe hunter-gatherers and the local blacksmith, we d journey to Lake Manyara, a 2-hour journey, where we have our lunch and embark on our afternoon game drive.</div><br>

<div class="itinerary"><b>Day’s Highlight</b></div>
<div class="itinerary">Everyone will have their own, favorite cultural experience today. But perhaps your lasting memory will be of the Hadzabe hunter-gatherers. Their lifestyle will make you ponder how uncomplicated – though not easy - life can be. </div><br>


<div class="itinerary"><b>Lake Eyasi and its Tribespeople  <b></div>
<div class="itinerary">Lake Eyasi is located in the Great Rift Valley, southwest of the Ngorongoro Crater. Its salt-water levels experience dramatic changes with the seasons: in years with little rainfall, the lake can almost disappear. Near to the shimmering lake, we will first experience a hunting trip with the Hadzabe, the last hunter-gatherers in Tanzania, before visiting a local blacksmith as he practises his craft, fashioning pots and weapons from scrap metal. <br> 
We then continue to Lake Manyara, where we have our lunch and take our afternoon game drive.
  
</div><br>

<div class="itinerary"><b>Safari (Game Drive) in Lake Manyara National Park<b></div>
<div class="itinerary">After our lunch, we jump in our vehicle to cover the highlights of this park. Set against the rugged Rift Valley escarpment, and characterised by its shimmering lake, Manyara is rich in vegetation and the wildlife that thrives here. Enjoy the tranquillity as majestic pink flamingos wade elegantly, picking out a meal of algae from the shallow, alkaline waters. On land, Manyara’s terrain is compact, yet boasts differing environments such as diverse forests fed by waters seeping from the nearby escarpment. Monkeys are abundant, but look out too for the lions, giraffe, warthog and grumpy Cape buffalo who all call this park ‘home’. Hold your nose when we reach the hippo pool, because these big lumps smell!
</div><br> 
 

<div class="accommodationBox">
<div class="itinerary"><b>Accommodation</b></div>

<div  style="padding-right: 7px; padding-left:unset;  padding-bottom: 15px; padding-top: 15px" class="col-sm-6"><img class="lozad" data-src="images/accomodations/tortiliscamps/outside-view-of-tortilis-tent.jpg" style="width:100%"></div>
<div style="padding-left: 7px; padding-right:unset; padding-bottom: 15px;  padding-top: 15px;"class="col-sm-6"><img class="lozad" data-src="images/accomodations/tortiliscamps/lake-manyara-tortilis-camp-top-view.jpg" style="width:100%"></div>

<div  style="padding-right: 7px; padding-left:unset;  padding-bottom: 15px; padding-top: 0px" class="col-sm-6"><img class="lozad" data-src="images/accomodations/tortiliscamps/lake-view-at-lake-manyara-tortilis-tent.jpg" style="width:100%"> </div>
<div style="padding-left: 7px; padding-right:unset; padding-bottom: 15px;  padding-top: 0px;"class="col-sm-6"><img class="lozad" data-src="images/accomodations/tortiliscamps/clients-having-breakfast-at-lake-manyara-tortilis-camp.jpg" style="width:100%"></div>
<div class="itinerary">Set high above the lake, and below the escarpment, ‘glamping’ at <b>Lake Manyara Tortilis Camp</b> will provide you with a night to remember. Unlike many accommodations in this area, this unique camp is located actually inside the National Park, and it’s also perfectly placed for spectacular sunrises. Small and intimate, it is staffed by a team of warm and welcoming personnel, eager to ensure you enjoy your stay here. Wildlife roam freely amongst the tents, there’s an atmospheric ‘fireplace’ for you to take a drink, and the tents themselves will surprise you with their levels of comfort. 


</div>
<br>

<div class="itinerary"><b> Meal plan </b></div>
<div class="itinerary">Breakfast will be provided by the Lake Eyasi Safari Lodge. Lunch will be a nutritious and balanced meal, also provided by the lodge for you to take out on safari. Your evening meal will be a full, cooked dinner created by the chef and his team at the Lake Manyara Tortilis Camp.</div>
</div> 

   
</div>

 











<div id="day9"   style="padding-top: 50px"  >
    <br>
    
  <div class="daysNumber" style="text-align: left"> DAY 9 </div>
   <div class="destinations"><b>Lake Manyara – Kilimanjaro International Airport  </b></div>
  

 <br>

<div class="itinerary"><b>Journey: Lake Manyara – Kilimanjaro International Airport</b></div>
<div class="itinerary">After our morning walking safari in Lake Manyara, we take lunch and then have a 3½ hour journey, covering the 175km back to Kilimanjaro International Airport.</div><br>

<div class="itinerary"><b>Day’s Highlight</b></div>
<div class="itinerary">Your walking safari in Lake Manyara will ensure you leave Tanzania with truly wonderful memories!</div><br>


<div class="itinerary"><b>Lake Manyara Walking Safari</b></div>
<div class="itinerary">Our morning walking safari gets you very quickly into the safari mood. Accompanied by a park ranger, you will be so close to Mother Nature, discovering wonders too small to see from a 4x 4 vehicle. Perhaps your guide and ranger will explain the importance of the rhino-horned dung beetle, or exchange bird calls with the sulphur-breasted bull shrike. Maybe you’ll taste a desert date, a popular snack for monkeys! And all the time, you’ll feel the tension that only a walking safari can bring: the desire to find large mammals conflicting with the need to stay safe!<br>
In silence, in single file, you’ll make your way through the bush, perhaps stumbling across a giraffe chomping on high branches or a herd of elephants grazing gently. Don’t worry, your ranger is an expert: your safety is his chief concern.

</div><br>

<div class="accommodationBox">
<div class="itinerary"><b> Meal plan </b></div>

<div  style="padding-right: 7px; padding-left:unset;  padding-bottom: 15px; padding-top: 15px" class="col-sm-6"><img class="lozad" data-src="images/accomodations/kilimanjaro/kilimanjaro-international-airport.jpg" style="width:100%"></div>
<div style="padding-left: 7px; padding-right:unset; padding-bottom: 15px;  padding-top: 15px;"class="col-sm-6"><img class="lozad" data-src="images/accomodations/kilimanjaro/safari-to-kilimanjaro-with-easytravel-vehicle.jpg" style="width:100%"></div>
<div class="itinerary">Breakfast is served at your Lake Manyara accommodation. Lunch will also be prepared by your Lake Manyara accommodation and enjoyed after your morning walking safari before we return you to the airport for your flight home. As today is the departure day of your safari, please note that dinner tonight is not included in the tour.</div>
</div>
   
</div>

 



 







     
    





 <div id="departure"  style="padding-top: 50px"  >

<button class="destinations"   ><b>Departure Instructions</b></button>


<!-- Modal -->


<div class="itinerary">Please note that this 9 Days Experience Tanzania Culture and Safari: Tarangire, Ngorongoro, Serengeti, Lake Eyasi, Manyara tour ends at Kilimanjaro International Airport at 17.30 hours. Your departure can only take place today if you have pre-booked a domestic flight which leaves from Kilimanjaro International Airport at 19.40 hours or after, or an international flight which leaves at 21.00 hours or after. Otherwise, you will need to book an extra night’s accommodation (not included in the tour price) and take a flight the following day.  </div><br><br>

<div class="itinerary" style="border: 1px solid #000; padding: 10px; font-weight: normal;">Note: after your exhilarating time on safari, you may want to extend your Tanzanian holiday with time on Zanzibar’s wonderful beaches. Please <a href="./contact-us.php"><b>contact us</b></a> for details.</div>
  


 

 <div id="includes"   style="padding-top: 50px"  >
  
    <br>


  <button class="daysNumber"   > Trip Includes </button>






<div class="destinations" style="padding-top: 20px"><b>Easy Travel Trip Safety:</b></div>
<div class="itinerary"> AMREF Flying Doctor Insurance. A Flying doctor Insurance to Air transfer you before dark from nearest airstrip to hospital during Emergency</div><br>

<div class="destinations"><b>Easy Travel – Transport:</b></div><div class="itinerary">4X4 Custom built – Toyota Landcruiser</div>

<div class="itinerary">
<ul>
    <li>Pop-up Roof, Opening Sliding windows, Seat Belts, Heavy duty wheels, and Extra Fuel tanks. Refrigerator for cooling drinks, one pair of binoculars per couple, Eco friendly Trash Bag. Wi-Fi on board during safari, Charging Outlets type Plug G for charging Cameras and smart phones</li>
    
</ul>
</div>

<br>

<div class="destinations"><b>Easy Travel – Trip Crew:</b></div>
<div class="itinerary"> Professional English-Speaking Driver guide. A Friendly, Experienced and Passionate Driver Guide expert at a wide variety of skills: Flora and Fauna, Tanzania’s cultural and natural history</div><br>

<div class="destinations"><b>Easy Travel Treat:</b></div>

<div class="itinerary"> A Special Safari Hamper</div>

<div class="itinerary">

<ul>
  <li>Soft drinks, Coffee/tea and Water during game drives</li>

</ul>

</div>

<div class="itinerary"><ul><li>A bottle of Wine</li></ul> </div> 
<br>


<div class="destinations"><b>Arrival and Departure Transfer: </b></div> 
<div class="itinerary">TO/FROM Kilimanjaro International or Arusha Airport
<ul> <li>One arrival Transfer</li>
<li>One departure Transfer</li>
</ul>
</div>

<br>

   



<div class="destinations"><b>Accommodation:</b> </div> 
<div class="itinerary"> 1 night in Arusha, 7 nights on Safari</div><br>

<div class="destinations">1<sup>st</sup> night -  African Tulip </div>
<div class="itinerary" style="margin-top:-10px"><span class="small"> Half Board ( Dinner, Breakfast )</span> </div><br>

<div class="destinations">2<sup>nd</sup> night - Tarangire Tortilis Camp </div>
<div class="itinerary" style="margin-top:-10px">  <span class="small"> Full Board (Dinner, Breakfast, picnic lunch box) </span></div><br>

<div class="destinations">3<sup>rd</sup> night - Tarangire Tortilis Camp    </div>
<div class="itinerary" style="margin-top:-10px"><span class="small"> Full Board (Dinner, Breakfast, picnic lunch box</span>)</div><br>

<div class="destinations">4<sup>th</sup> night - Ngorongoro Tortilis Camp  </div>
<div class="itinerary" style="margin-top:-10px"><span class="small"> Full Board (Dinner, Breakfast, picnic lunch box</span>)</div><br>

<div class="destinations">5<sup>th</sup> night - Serengeti Tortilis Camp  </div>
<div class="itinerary" style="margin-top:-10px" ><span class="small"> Full Board (Dinner, Breakfast, picnic lunch box)</span></div><br>

<div class="destinations">6<sup>th</sup> night - Serengeti Tortilis Camp </div>
<div class="itinerary" style="margin-top:-10px" ><span class="small"> Full Board (Dinner, Breakfast, picnic lunch box)</span></div><br>

<div class="destinations">7<sup>th</sup> night - Lake Eyasi Safari Lodge  </div>
<div class="itinerary" style="margin-top:-10px" ><span class="small"> Full Board (Dinner, Breakfast, picnic lunch box)</span></div><br>

<div class="destinations">8<sup>th</sup> night - Lake Manyara Tortilis Camp </div>
<div class="itinerary" style="margin-top:-10px" ><span class="small"> Full Board (Dinner, Breakfast, picnic lunch box)</span></div><br>



<div class="destinations"><b>Photographic Safari:</b> </div>
<div class="itinerary"> Experience Wildlife with Easy Travel 4X4 Safari Vehicle

<ul>
  <li>Game drive in Tarangire National Park</li>
  <li>Game drive in Ngorongoro Crater</li>
  <li>Game drive in Serengeti National Park</li>
  <li>Game drive in Lake Manyara National Park</li>
</ul>

</div>
<br>

<div class="itinerary"><b>Park Entrance Fee:</b></div>

<div class="itinerary">
<ul>
  <li>Park fee for Tarangire National Park</li>
  <li>Park fee for Ngorongoro Crater</li>
  <li>Park fee for Serengeti National Park</li>
 <li>Park fee for Lake Manyara National Park</li>
</ul>
</div>

<br>

<div class="itinerary"><b>Taxes:</b></div>
<div class="itinerary">18 % VAT (Value Added Tax)</div>


</div>
  


<div id="excludes"   style="padding-top: 50px"  >
  
  <br>
 <button class="daysNumber"   > Trip Excludes </button>


 
<div style="padding-top: 20px" class="destinations"><b>Tipping:</b></div>
<div class="itinerary">
Tipping is of course discretionary, but is an expected part of the way in which business is done in Tanzania. It counts as an expression of gratitude to those who – hopefully – have made your experience an unforgettable one and enables you to directly reward those people.
Our passengers come from all around the world, with different cultural attitudes to tipping, but a tip is of great significance here in Tanzania and will be hugely appreciated by the recipient. We know that the act of giving of a tip can be a bit awkward and we would suggest that the best way to remove this ‘awkwardness’ is for each couple to put their tip anonymously into an envelope and for the envelopes to be presented by the couple to the staff member. As a guideline, you should consider tipping at the following levels:
<br><br>
<div style="padding-bottom: 10px"> Driver guide: $25 US per day, per couple. </div>

For hotels/lodges/tented camps, please do not tip individual staff members, but instead use the ‘Tip Box’, which you should find at the reception of your accommodation. For guidance, you should consider tipping between $5-7 US per day, per guest, at each accommodation.
<br><br>

<div class="destinations"> <b>Balloon Safari:</b></div>
<div class="itinerary">Experience 60 – 90 minute (depending on wind condition) aerial adventure, followed by bush breakfast and champagne.
</div><br>

<div class="descriptions"><b>Any Changes done by you:</b></div>
<div class="itinerary">The trip excludes changes done by you during safari or before safari which deviates from the original program
</div><br>

<div class="descriptions"><b>Post Night Accommodation in Arusha:</b></div>
<div class="itinerary">
This Tour ends at Kilimanjaro International Airport at 17:30hrs, you can only depart on this day if you have booked a Domestic flight which departs from Kilimanjaro International Airport at 19:40hrs and onwards or an International Flight which departs at 21:00hrs and onwards. Otherwise, you will need to book a post night Accommodation if you are departing with any earlier flight.  Please <a href="./contact-us.php"><b>contact us</b> </a>for details. 

</div><br>

<div class="itinerary"><b>Visa:</b></div>
<div class="itinerary">The trip costs Excludes all visa costs including arrival visas and transit visas
</div><br>

<div class="itinerary"><b>Medical Insurance:</b></div>
<div class="itinerary">The trip cost Excludes Medical Insurance which is mandatory
</div><br>

<div class="itinerary"><b>Travel Insurance:</b></div>
<div class="itinerary">The trip cost Excludes Travel Insurance which is mandatory
</div><br>

<div class="itinerary"><b>Laundry Service:</b></div>
<div class="itinerary"> If you require to launder your clothes while on your safari, then you will need to pay an amount that the accommodation charges as per their rate sheet.</div><br>

<div class="itinerary"><b>Drinks at the lodges/camps:</b></div>
<div class="itinerary">All kinds of soft drinks and hard drinks at the lodges/camps are not included</div>
<br>

<div class="itinerary"><b>Drones:</b></div>
<div class="itinerary">The government of Tanzania does not allow anyone to bring Drone in the Country.</div>
    
</div>
</div>

   



<div id="disclaimer"   style="padding-top: 50px"  >
    
  <br>
<button class="daysNumber"  > Disclaimer - Important! </button>

 

<div class="destinations" style="padding-top: 20px"><b>Trip Duration</b></div>

<div class="itinerary">
  Please note that all our itineraries begin at Kilimanjaro International Airport, with an overnight hotel stay in Arusha included in the price. This means that where an itinerary is entitled, for example, ‘9 Days Experience Tanzania Culture and Safari: Tarangire, Ngorongoro, Serengeti, Lake Eyasi, Manyara,’ then the arrival day and Arusha overnight stay will count as Day 1. This is simply because our visitors come from all over the world and the flights can arrive at any time of day. If you are already in Arusha prior to the start of the safari and do not need the Arusha overnight stay that we provide, please inform your Easy Travel tour consultant and we will remove the cost of the Arusha hotel from the tour price. <br><br></div>



<br><br>

<div class="destinations"><b>Options To ‘Fly In/Fly Out’</b></div>
<div class="itinerary">
This itinerary is based on transportation by vehicle. Our reliable, comfortable 4 x 4 vehicles will pick you up at the airport at the start of your safari and take you back to the airport at the end. Our Tanzanian roads are very rough in places and distances between the national parks are not insignificant. On this safari, there may be the option to reduce the time spent in your vehicle, by flying to your first safari destination at the start of your safari, or by flying back at the end of your safari, or both. These options of taking an internal flight or flights do attract an extra cost. If this is of interest to you, please ask your Easy Travel tour consultant at the time of booking your safari and they will be happy to advise you </div> <br>

<div class="destinations"><b>Back Pain</b></div>
<div class="itinerary"> All visitors will spend some significant time in our comfortable vehicles on the rather rough roads of Tanzania. Anyone who is liable to back pain may experience severe discomfort and should satisfy themselves as to the suitability of a safari (and take medical advice if appropriate) before booking.</div><br>



<div class="destinations"><b>Visitors With Limited Mobility</b></div>
<div class="itinerary">Please note that our itineraries are not suitable for those with limited mobility or who are physically disabled. Our vehicles are not capable of being adapted to accommodate those people, unfortunately.</div>
<br>

<div class="destinations"><b>Wildlife Spotting</b></div>
<div class="itinerary">
Please note that we cannot guarantee the sighting of any particular animal or bird during our safaris. In our itinerary descriptions, we make reference to many of the animals you may see, but these references are for illustrative purposes only. For example, your driver-guide will do all he can to find you a black rhino if you are visiting Ngorongoro, but such animals are rare. While no sightings of any particular animal can be guaranteed, a quick read of our visitor reviews on Tripadvisor will show you what incredible wildlife experiences our visitors enjoy. And remember: the more days you book, the more wildlife encounters you will have.</div> <br>

<div class="destinations"> <b>Types of Safari:  Migration Safaris</b> </div>
<div class="itinerary">
All of our Migration Safari itineraries are designed to give visitors the best possible opportunities of seeing The Great Migration, and our driver-guides are passionate and experienced in finding you the best wildlife experiences. Visitors should be aware, however, that the wildlife act according to the availability of water, not to the schedule of any safari operator. When booking a Migration Safari, you may have an expectation of witnessing a ‘river crossing’ but there can be no guarantee that this will take place on any particular day. If the wildebeest don’t want to cross, then no crossing will take place. Many of our Migration Safaris will visit two different locations – for example the Western Serengeti and the Northern Serengeti. But should you see a crossing in Western Serengeti, do not also expect to see one in the Northern Serengeti on the same safari. Nature and the rains will always dictate the whereabouts of the animals, and the migrating herds cannot be in two separate places at the same time!</div>


<br>
<div class="destinations"> <b>Serengeti National Park: Programme Changes</b> </div> 
<div class="itinerary">
Our aim is always to keep you safe and to give you the best experiences. We will only make changes to your chosen itinerary for one of those two reasons. Bear in mind that as accommodation is pre-booked, your itinerary will not change substantially. However, where visitors are spending multiple days in Serengeti National Park, the driver-guide may change the itinerary from day-to-day, according to conditions, travelling time and what is happening in the park. So, where – for example - the itinerary description indicates that you will go to the Visitor Centre on Day 4, your driver-guide may decide to visit it on Day 5 instead. If he does make a programme change, he will have a good reason for it and he will inform you.      
</div> 

<br>
<div class="destinations"><b>A word about our lunches</b></div>
<div class="itinerary">
We know that a day’s safari can make you hungry and we ensure that we always provide you with a balanced and nutritious lunch that will leave you satisfied. Generally, we provide you with either a picnic lunchbox or a hamper lunch. You can read more about these here. On any particular day, we wish to remain flexible: after all, there may be times when the last thing you want to do is interrupt your wildlife-watching simply to watch your driver-guide set up a picnic table. On such occasions, it may be preferable to eat a lunchbox at the designated picnic sites, to ensure that you don’t miss any excitement! We will try to offer you something different each day, working with the hotels, camps and lodges to ensure that your midday meals are a pleasurable experience. 
Bon appetit! 
</div> 

  

<div id="payment"   style="padding-top: 50px"  >
 
<br>


<button class="daysNumber"  > Payment Policy: </button>



 
<div class="itinerary">

To reserve this tour, a payment of 20% of the total price must be made at the time of reservation. The balance of 80% can be made on arrival in Tanzania, prior to the departure of your tour.

<br><br>Your deposit can either be made by means of a Bank Transfer, with the addition of a 45 US Dollar fee, or by Credit Card which incurs an additional bank charge of 3.5%.<br>

<br>The final payment can be made either by Credit Card, again with the addition of a 3.5% bank charge, or in cash in US Dollars (US Dollar Bills should not be older than year 2009).
</div>


<div id="cancelation" class="daysNumber" style="padding-top: 50px"><b>Cancellation Policy:</b></div>
<div class="itinerary" style="overflow-x:auto;">
Cancellation of a holiday must be made in writing and is effective from the date we receive the written notification. Cancellation charges are expressed at a percentage of quoted price as follows –

<br><br>
<div class="table-responsive">
 <table class="table table-striped">
    <thead>
      <tr style="color: #4c4c4c">
        <th>Period</th>
        <th style="display: block ruby">Cancellation Charge</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>From time of confirmation up to 15 days prior to arrival  0%</td>
        <td style="text-align: center;">0%</td>
      
      </tr>
      <tr>
       <td>From 14 days to 01 day  20%</td>
        <td style="text-align: center;"> 20%</td>
       
      </tr>
      <tr>
        <td>From the start of the Tour  100%</td>
        <td style="text-align: center;">100%</td>
       
      </tr>
    </tbody>
  </table>
</div>

</div>

<div class="itinerary">If the reason for cancellation is covered under the terms of your insurance policy, you may be able to reclaim the cancellation charges from your insurance company. Notwithstanding the above, if we have issued your domestic airline tickets and you choose at any time to cancel them then the cancelling for Domestic Tickets will be 100% .<br><br>
</div>

<br> 

<div class="itinerary paymentMargin"><b>*The above Payment and Cancellation policy is specifically for 9 Days Experience Tanzania Safari and Culture and it does not apply to other tours.</b></div>




</div>




</div>


</div>



</div></div></div>

   







  <div class="container1 paddingContainer">

  
                    
                    <div   class="row" > 
                 
                <div class="col-sm-12 headerGap">
                <h1 style="text-align: center;">Gallery</h1>
                <p class="lead big " style="text-align: center;">Let us take you…in the best vehicles, driven by the finest driver-guides, to see spectacular wildlife in its beautiful, natural settings. All we need to complete our gallery is you, our very special guest. </p>
              </div>


  


   

  <div class="col-sm-12">
  <div class="col-sm-4 imgPadding">

   
       <img class="lozad" data-src="images/arusha-city-tanzania.jpg" style="width:100%">

  </div>

  
      
     <div class="col-sm-4 imgPadding">  

           <img  class="lozad" data-src="images/safari-with-easy-travel.jpg" style="width:100%">  

      </div>
   

 
      <div class="col-sm-4 imgPadding">  
      <img  class="lozad" data-src="images/lake-manyara-walking-safari.jpg" style="width:100%">

      </div>



      <div class="col-sm-4 imgPadding">      
<img class="lozad" data-src="images/bed-view-tortilis-camps.jpg" style="width:100%"> 

      </div>





            <div class="col-sm-4 imgPadding">  
        <img class="lozad" data-src="images/comfort-safari-tent.jpg" style="width:100%">
</div>


            <div class="col-sm-4 imgPadding">  
           <img class="lozad" data-src="images/breakfast-tortilis-camp.jpg" style="width:100%"> 
        
      </div>





 
</div>



</div><br><br></div>




      </main>
      <!--
      ========================================================
                              FOOTER
      ========================================================
      --> 
<style type="text/css">hr { margin-top: 20px; margin-bottom: 20px;  } 

.lead.big { margin-bottom: 20px } 
</style>




    
  <div class="outerContainer">
  <div class="container1 paddingContainer" >

 <div  style="text-align: center;" class="col-sm-2"></div>

     <div  style="text-align: center;" class="col-sm-8">
               
                
              <div id="enquiry"></div>

<div class="col-sm-12 headerGap">
                <h1 style="text-align: center;">Enquire Now</h1>

                <p class="lead big text-center">We have a dedicated team ready to help you with any queries. They’ll be able to give you great assistance and apply their valuable expertise in putting together the best itinerary to suit your travel needs.</p>
              </div>

                <style type="text/css">.form-control { height: 45px !important } </style>

        <form action="#" id="form" method="post" name="form">
                <div style="margin-top: -54px;">
                <label for="exampleInputText1" class=" small--mod-1"></label>
                    <input type="text" required="required"  placeholder="Full Name" id="fullName" name="fullName" class="bookingFontSize form-control" >
                  
                   <div  style="padding-left: unset !important;"  class="paddingRight col-sm-6">
                    <label for="exampleInputText1" class=" small--mod-1"></label>
                    <input type="email" placeholder="Email Address" id="emailAddress" name="emailAddress" class="bookingFontSize form-control" > </div>
                   
                    <div  style="padding-right: unset !important;"  class="paddingLeft col-sm-6">
                    <label for="exampleInputText1" class=" small--mod-1"></label>
                    <input type="text" placeholder="Contact Number" id="contactNumber" name="contactNumber" class="bookingFontSize form-control" ></div>
                   
                  
                 
                  <div  style="padding-left: unset !important;"  class="paddingRight col-sm-6">
                    <label for="exampleInputText1" class=" small--mod-1"></label>
                    <input type="text" placeholder="Number of Adults"  id="adult" name="adult" class="bookingFontSize form-control" ></div>
                   
                   <div  style="padding-right: unset !important; padding-top: 22px"  class="paddingLeft col-sm-6">

                    <div class="form-group">
                      <label class="text-uppercase select">
                        <select id="children" name="children" style="color: #b7b7b7 !important; padding-top: 10px; font-size: 14px;"class="bookingFontSize form-control">
                          <option selected>Number of Children</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                          <option>7</option>
                          <option>8</option>
                          <option>9</option>
                          <option>10</option>
                        </select>
                      </label>
                    </div></div>
                    
                    
                     <label for="exampleInputText1" class="small--mod-1"></label>
                   <div style="margin-top: 18%"  > <input  type="text" placeholder="Write Age of Children Separated with comma ( i.e 3, 5, 4... )" id="age" name="age" class="marginTop bookingFontSize form-control" ></div>

                    
                  <div  style="padding-left: unset !important;" class="paddingRight col-sm-6">
                    <label for="exampleInputText1" class=" small--mod-1"></label>
                    <input type="text" id="arrivalDate" name="arrivalDate" placeholder="Arrival Date (dd/mm/yyyy)"  class="bookingFontSize form-control" ></div>
                   
                   <div   style="padding-right: unset !important; padding-top: 22px" class="paddingLeft col-sm-6">

                    <div class="form-group">
                      <label class="text-uppercase select">
                        <select id= "days" name= "days" style="color: #b7b7b7 !important; padding-top: 4px; font-size: 14px;"class="bookingFontSize form-control">
                          <option selected>Number of days on Safari</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                          <option>7</option>
                          <option>8</option>
                          <option>9</option>
                          <option>10</option>

                        </select>
                      </label>
                    </div> </div>



                    
                    <div style="margin-top:9%">
                    <label for="exampleInputText1" class=" small--mod-1"></label>

                    <input required placeholder="Where Did You Hear About Easy Travel?" id="whereEt" name="whereEt" class="bookingFontSize form-control" ></div>
                    


                    <label for="exampleInputText1" class=" small--mod-1"></label>
                    <textarea  style=" height:unset !important"   id="message" name="message"  rows="3" placeholder="Write your message here" class="form-control" ></textarea>
                  
                    
                  
  <input type="submit" style="padding: 6px 20px; margin-top: 24px; margin-left: 0px; float: left; margin-bottom: 30px" name="submit" class="btn btn-primary btn-xxs" value="Submit" />
               </div></form>



              

               </div>
        


   <div  style="text-align: center;" class="col-sm-2"></div>

    </div>
  </div>
   
  
  
  
     



 
  
    

  
  

      
      


     <script   src="https://www.easytravel.co.tz/js/core.min.js"></script>
    <!--jQuery (necessary for Bootstrap's JavaScript plugins)-->
    <!--Include all compiled plugins (below), or include individual files as needed-->
    <script async src="https://www.easytravel.co.tz/js/bootstrap.min.js"></script>
    <!--Additional Functionality Scripts-->
    <script  src="https://www.easytravel.co.tz/js/script.js"></script>
    
    
<script async>
function readMore() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
    btnText.style.fontWeight = "bold";
    btnText.style.color = "#f08908";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
     btnText.style.fontWeight = "bold";
     btnText.style.color = "#000";
  }
} 
</script>

<script async type="text/javascript">
   $('.panel-collapse').on('show.bs.collapse', function () {
    $(this).siblings('.panel-heading').addClass('active');
  });

  $('.panel-collapse').on('hide.bs.collapse', function () {
    $(this).siblings('.panel-heading').removeClass('active');
  });

</script>

<script async>
    const observer = lozad();
observer.observe();
</script>

<script>
jQuery(document).ready(function(){
  jQuery(".alert-box i").click(function(){
    jQuery(".alert-box").removeAttr("style").hide();
  });
});
</script>




    </div>
    <!--Core Scripts-->
<? php require_once(ROOT_PATH . '/includes/footer.php'); ?>
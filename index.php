


<!DOCTYPE html>
<html>
<head>
<title>Flour Pedal</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" id="applicationStylesheet" href="Flour%20Pedal1.css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<style>
body, html {
  height: 100%;
  font-family: "Inconsolata", sans-serif;
}

.bgimg {
  background-position: center;
  background-size: cover;
  background-image: url("images/noletters.jpg");
  min-height: 35%;
    
}
  

.menu {
  display: none;
}
</style>
</head>
<body>

<!-- Links (sit on top) -->
<div class="one-top top">
  <div class="one-row one-padding one-black">
    <div class="one-col s3">
      <a href="#" class="one-button one-block one-black">HOME</a>
    </div>
    <div class="one-col s3">
      <a href="#about" class="one-button one-block one-black">ABOUT</a>
    </div>
    <div class="one-col s3">
      <a href="#menu" class="one-button one-block one-black">MENU</a>
    </div>
    <div class="one-col s3">
      <a href="#where" class="one-button one-block one-black">CONTACT US</a>
    </div>
  </div>
</div>

<!-- Header with image -->
<header class="bgimg one-display-container one-grayscale-min" id="home">
  <div class="one-display-bottomleft one-center one-padding-large one-hide-small">
    
  </div>
  <div class="one-display-middle one-center">
    
  </div>
  <div class="one-display-bottomright one-center one-padding-large">
    
  </div>
</header>

<!-- Add a background color and large text to the whole page -->
<div  Style ="font-family:sans-serif" class="one-sand  one-large">

<!-- About Container -->
<div class="one-container" id="about">
  <div class="one-content" style="max-width:700px">
      <h1 style="font-size: 50px" class="one-center w3-padding-64"><span class=" one-wide">FLOUR PEDAL</span></h1>
      
    <img src="images/aboutFL.jpg" style="width:100%;max-width:800px" class="one-margin-top">
      
    <p >The idea for Flour Pedal was inspired by walks on the beach while living in San Diego. Pacific Beach is filled with small pop up businesses and push cart food vendors spending their mornings selling a variety of goods while h music playing and enjoying the view. We’ve always loved to travel from place to place, so had decided to put our business on wheels so we can come to you!</p>
    <p>It’s hard to beat a good cup of coffee and fresh pastry on a Sunday morning, and we love trying new, unique desserts to share with others! So we designed a simple bakery cart tricycle and filled it with our favorite treats. Each pastry and cup of coffee is make by us from scratch! We’re excited to bring these treats to local farmers markets and events in the Chicago land area.</p>
    <div class="one-panel one-leftbar one-light-grey">
      <p><i>"Life is uncertain. Eat dessert first"</i></p>
      <p>- Ernestine Ulmer</p>
    </div>
      
    <img src="images/555px-Pastry_assortment.jpg" style="width:100%;max-width:1000px" class="one-margin-top">
   
  </div>
</div>

<!-- Menu Container -->
<div class="one-container" id="menu">
  <div class="one-content" style="max-width:700px">
 
   <img src="images/Menu.jpg" style="width:100%;max-width:1000px" class="one-margin-top">
  
    <div class="one-row one-center one-card one-padding">
      <a href="javascript:void(0)" onclick="openMenu(event, 'Eat');" id="myLink">
        <div class="one-col s6 tablink">Eat</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Drinks');">
        <div class="one-col s6 tablink">Drink</div>
      </a>
    </div>

    <div id="Eat" class="one-container menu one-padding-48 one-card">
      <h5 >Coffee Cake</h5>  
      <p class="one-text-grey">A Large peice of our homemade Coffee Cake! $4.50</p><br>
        
    
      <h5>Almond Butter Energy Balls</h5>
      <p class="one-text-grey">Made with oats, almond butter, ,chia seeds, and honey 3.00</p><br>
    
      <h5>Cake Pops</h5>
      <p class="one-text-grey">Chocolate cake pops that have homemade icing on top 3.50</p><br>
    
      <h5>Apple cakes</h5>
      <p class="one-text-grey">Amazing homemade apple cakes that go great with a cup of coffee 3.50</p><br>
    
      <h5>Banana bread</h5>
      <p class="one-text-grey">Homemade banana bread slice that is covered in our homade icing 2.00</p>
    </div>

    <div id="Drinks" class="one-container menu one-padding-48 one-card">
      <h5>Coffee</h5>
      <p class="one-text-grey">Regular black coffee 1.50</p><br>
    
      <h5>Chocolate buttermilk coffee</h5>
      <p class="one-text-grey">Chocolate coffee with  homemade buttermilk 3.50</p><br>
    
      <h5>Lavender Coffee</h5>
      <p class="one-text-grey">Iced coffee with lavender flavoring 1.50</p><br>
    
      <h5>Turkish Coffee</h5>
      <p class="one-text-grey">Hot Coffee with a little kick to it 3.00</p><br>
    
      <h5>Rose Coffee</h5>
      <p class="one-text-grey">Rose water with honey coffee  3.50</p>
    </div>  
    
  </div>
</div>

<!-- Contact/Area Container -->
<div class="one-container" id="where" style="padding-bottom:32px;">
  <div class="one-content" style="max-width:700px">
    <img src="images/Contact.JPG" style="width:100%;max-width:800px" class="one-margin-top">
    
    <img src="images/map.jpg" class="one-image" style="width:100%">
    <p> We offer full-service catering for any event, large or small. We understand your needs and we will cater the food to satisfy the biggerst criteria of them all, both look and taste.</p>
    
    <form method="post"  >
      <p><input class="one-input one-padding-16 one-border" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="one-input one-padding-16 one-border" type="tel" placeholder="Phone Number" required name="Phone" ></p>    
      <p><input class="one-input one-padding-16 one-border" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="one-input one-padding-16 one-border" type="datetime-local" placeholder="Date and time" required name="date" value="2020-11-16T20:00"></p>
      <p><input class="one-input one-padding-16 one-border" type="text" placeholder="Message \ Number of People \ requirements" required name="Message"></p>
      <p><button class="one-button one-black"  name = "submit" type="submit">SEND MESSAGE</button></p>
      
      <?php
if(isset($_POST['submit'])){
    $to = "mrcaffarelli@gmail.com";



    $name = $_POST['Name'];
    $email= $_POST['Email'];
    $phone= $_POST['Phone'];
    $subject= 'Flour Pedal!';
    $body= $_POST['Message'];
    $headers = 'From: '.$email . "\r\n";


    $body = "name : ".$name. "\r\n" .
    		"Phone : ".$phone. "\r\n" .
    		"Message : " . $body;
    if(mail($to, $subject, $body , $headers)){
        echo "Message Received! You will be contacted if necessary!";
   }else{
         echo "Failed to Send Mail - Please Contact us as mrcaffarelli@gmail.com ";
    }
}

?>
    </form>
  </div>
</div>


<!-- End page content -->
</div>

<!-- Footer -->
<footer class="one-center one-light-grey one-padding-48 one-large">
  <p >Created by Michael Caffarelli & Allison LiFonti</p>
</footer>

<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" one-dark-grey", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " one-dark-grey";
}
document.getElementById("myLink").click();
</script>

</body>
</html>

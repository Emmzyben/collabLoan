<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="images/logo.png">
        <title>Register</title>
        <link rel="stylesheet" href="{{ asset('style.css') }}">
        <script src="https://kit.fontawesome.com/f0fb58e769.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ asset('style2.css') }}">
    </head>
    <body>
        <header>
            <div id="head">
    <div class="first">
    <h3>CollabLoan </h3>
    </div>
    
    <div class="second">
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('borrowers') }}">Borrowers</a></li>
            <li><a href="{{ route('lenders') }}">Lenders</a></li>
            <li><a href="{{ route('support') }}">Support</a></li>
        </ul>
        
    </div>
    
    <div class="third">
        <ul>
            <li><a href="{{ route('login') }}">Sign In</a></li>
            <li id="support"><a href="{{ route('register') }}">Register</a></li>
        </ul>
    </div>
    </div>
           </header>
    
    
           <aside> 
            <div id="title" >
              <span><img src="images/logo.png" alt="" ></span>
              <p>CollabLoan</p>
          </div> 
              <div onclick="openNav()" >
                  <div class="container" onclick="myFunction(this)" id="sideNav">
                      <div class="bar1"></div>
                      <div class="bar2"></div>
                      <div class="bar3"></div>
                    </div>
                  </div>
          </aside>
       
          <nav style="z-index: 1;">
            <div id="mySidenav" class="sidenav">
                    <a href="{{ route('home') }}">Home</a>
                    <a href="{{ route('borrowers') }}">Borrowers</a>
                    <a href="{{ route('lenders') }}">Lenders</a>
                    <a href="{{ route('support') }}">Support</a>
                    <a href="{{ route('login') }}">Sign In</a>
            <a href="{{ route('register') }}">Register</a>
            </div>
    
    <script>
            
    function myFunction(x) {
        x.classList.toggle("change");
      }
    
      var open = false;
    
    function openNav() {
        var sideNav = document.getElementById("mySidenav");
        
        if (sideNav.style.width === "0px" || sideNav.style.width === "") {
            sideNav.style.width = "250px";
            open = true;
        } else {
            sideNav.style.width = "0";
            open = false;
        }
    }
    </script>
          
       <main>

<div id="register">
    <div id="h3">
        <h3>Registration</h3>
    </div>
<form action="">
    <div id="form">
  <div><input type="text" name="fullname" id="" placeholder="FullName"></div>  
  <div><input type="email" name="email" id="" placeholder="Email"></div>   
  <div><input type="phone" name="phone" id="" placeholder="Phone Number"></div>   
  <div><input type="text" name="country" id="" placeholder="Country"></div>   
  <div><input type="text" name="state" placeholder="State"></div>   
  <div><input type="text" name="Lga" placeholder="LGA"></div>   
  <div id="cover">
    <label for="">Gender</label>
    <select name="gender" id="" >
        <option value="male">Male</option>
        <option value="male">Male</option>
    </select></div>  
    <div id="cover">
     <label for="">Date of birth</label>
       <input type="date" style="width: auto">
    </div>   
    <div><input type="text" name="occupation" placeholder="Occupation"></div>   
    <div> <input type="password" name="password" id="" placeholder="Set Password"></div>  
    </div>
    <div style="display: flex;align-items:center;justify-content:center"><input type="submit" name="" id="submit"></div>   
</form>

</div>


       </main>
       <footer>
        <div id="foot1">
          <div>
            <img src="images/logo.png">
          </div>
          <div>
            <form>
              <label><b>Subscribe</b></label><br><br>
              <div style="display:flex;flex-direction:row;flex-wrap:no-wrap">
                <input type="text" placeholder="Get updates" style="border-top-left-radius:6px;border-bottom-left-radius:6px; ">
              <input type="submit" value="Go" style="border-top-right-radius:6px;border-bottom-right-radius:6px;background-color: orangered ;color:white;">
              </div> 
            </form>
          </div>
        </div>
        
        <div id="foot2">
          <div class="width1">
            <h3>Contact Us</h3>
            <p><a href="{{ route('support') }}">Support</a></p>
            <p>+2349056897432</p>
          </div>
           <div class="width2">
             <h3>Legal</h3>
            <p><a>Terms</a></p> 
            <p><a>Privacy policy</a></p> 
           </div>
           <div class="width3">
             <h3>Quick Links</h3>
             <p><a href="{{ route('borrowers') }}">Borrowers</a></p>
             <p><a href="{{ route('lenders') }}">Lenders</a></p>
           </div>
        </div>
        <div id="socials">
          <i class="fa-brands fa-linkedin-in"></i>
          <i class="fa-brands fa-facebook-f"></i>
          <i class="fa-brands fa-x-twitter"></i>
        </div>
        <div style="color: #fff;">
          <p style="font-size: 15px">© 2023 Collabloan, All Rights Reserved.</p>  
        </div>
      </footer>
    </body>
</html>

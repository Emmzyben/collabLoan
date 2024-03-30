<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="images/logo.png">
        <title>Welcome to Collabloan</title>
        <link rel="stylesheet" href="{{ asset('style.css') }}">
        <script src="https://kit.fontawesome.com/f0fb58e769.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
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
        <li><a href="#box">How it works</a></li>
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
<div id="bg">
<div id="banner">
<div class="writeup">
   <h1>Connecting Lenders and Borrowers</h1> 
    <p>Empowering Financial Growth</p> 

    <div>
        <button id="btn1">Get started</button>
        <button id="btn2">Learn More</button>
    </div>
</div>
</div>
</div>

<section>
    <div style="text-align: center;margin:30px">
       <p>FEATURES</p> 
       <h1>Key Features of Our Platform</h1> 
        <p>Discover the benefits of using our platform for lending and borrowing</p>
    </div>

<div>
    <div class="boxes">
        <div>
          <h2>Collateralized Loans</h2>  
<p>Lenders can offer loans in exchange for collateral provided by borrowers</p>
        </div>
        <div>
        <h2>Access more loans</h2>    
<p>Get access to more loan and lending oppurtunity using your collabcoin</p>
        </div>
        <div>
        <h1> Flexible Loan Terms</h1>   
<p>Borrowers can negotiate loan terms with lenders based on their needs</p>
        </div>
        <div>
          <h1>Transparent Process</h1>  
<p>Clear and transparent process for both lenders and borrowers to understand</p>

        </div>
    </div>
</div>
</section>


<div id="box">
    <div style="text-align: center;margin:30px;padding:20px">
        <h2>HOW IT WORKS</h2>
    <p>The Lending and borrowing process must pass through the following steps to complete </p>
  </div>



<div class="boxes2"  >
<div style="background-color: #32a94c;">
    <h4>Step 1</h4>
    <h2>Search</h2>
    <p>Search loan offer that matches the amount you need from the lenders page</p>
</div>
<div style="background-color:#0074f0;">
    <h4>Step 2</h4>
    <h2>Negotiate</h2>
    <p>Agree on loan terms and collateral with the lender</p>
</div>
<div style="background-color:#4cc366">
    <h4>Step 3</h4>
    <h2>Meet up</h2>
<p>Meet up with lender in a safe environment and exchange collateral for cash</p>
</div>
<div style="background-color:#85dcff; ">
    <h4>Step 4</h4>
<h2>Repay loan</h2>
<p>Repay loan at the agreed date and get your collateral back</p>
</div>
</div>
</div>


    <div style="text-align: center;padding:30px">
        <h1>Unlock Your Financial Potential</h1>
    <p>Our platform facilitates secure lending transactions where lenders provide loans to borrowers in exchange for collateral. Join us to access flexible borrowing options and attractive investment opportunities.
    </p>
    
    <button id="btn1">Learn more</button>
  </div>


  <div id="bottom">
    <div>
      <p> FAQ</p> 
<h1>Common questions</h1>
<p>Here are some of the most common questions that we get.</p>
    </div>
    <div>
    <h3>What is a collateralized loan?</h3>    
<p>A collateralized loan is a type of loan where the borrower provides an asset as collateral to the lender in exchange for the loan.
</p>
<h3>What type of assets can be used as collateral?</h3>
<p>Various assets can be used as collateral, including real estate, vehicles, jewelry, and other valuable items.
</p>
<h3>How does the lender determine the value of the collateral?</h3>
<p>The lender typically assesses the value of the collateral based on market value, appraisals, and other factors to determine the loan amount.
</p>
<h3>What happens if the borrower fails to repay the loan?</h3>
<p>If the borrower fails to repay the loan, the lender may seize and sell the collateral to recover the loan amount.
</p>
<h3>Are collateralized loans risky for borrowers?</h3>
<p>Collateralized loans can be risky for borrowers as they risk losing their collateral if they are unable to repay the loan.
</p>  
  </div>
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

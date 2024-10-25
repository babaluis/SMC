<!DOCTYPE html>
<httml>
        <head>
            <meta charset="UTF-8" >
            <meta name = "viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>Social Media Campaigns (SMC)</title>
            <link href="css/style.css" rel="stylesheet" >
            <link href="img/smc_cc.png" rel="icon">
          
          
        </head>
        <body>
     
          <nav class = "navbar">
            <div class="logo">SMC</div>
              <ul class="nav-links">
                  <li><a href="index.html">Home</a></li>
                  <li><a href="social_media.php">Perfil</a></li>
                  <li><a href="how_parents_help.html">How Parents Can Help</a></li>
                  <li><a href="livestreaming.html">Livestreaming</a></li>
                  <li><a href="contact.html">Contact</a></li>
                  <li><a href="legislation_guidance.html">Legislation and Guidance</a></li>
        
            
              <li class="dropdown"><a href="#">  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px" height="24px" class="user-icon">
                <path d="M0 0h24v24H0z" fill="none"/> <path d="M12 12c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
            </svg></a>
            <div class="dropdown-content">
          
             <a href="logout.php">logout</a>
            </div>
          </li>
          
            </ul>
            <div class="menu-toggle" id="menuToggle">
              <div class="bar"></div>
              <div class="bar"></div>
              <div class="bar"></div>
          </div>
      </nav>
  
      <main class="main2">
          <header class="header">
                 <h1  id="" >Social Media Campaigns
           </h1>
          </header>
     
        <div class="addmedia">
            <h2>Add Into your Table</h2>
            <form method="post" action="addmedia.php">
            <input type="text" name="social" required placeholder="Social Media Name">
            <input type="text" name="desc" required placeholder="Description">
            <input id = "mediabtn" name="mediabtn" type="submit" value="Add" >
            </form>
        </div><br>
        <div class="searchbr">          
                   <form class="" method="POST" action="#">
               <input type="search" onkeyup="searchApps()" id="search" placeholder="Search here...." >
             </form>
       </div>
  
          <div class="content2">

             <p>Search for the Latest Techniques to stay safe online.</p>
             
            <div id="apps">
                <h2>Most Popular Social Media Apps</h2>
                <?php include 'view_search.php'; ?>
            </div>
             
          </div>
      </main>
  
      <footer class="footer">
          <div class="container">
              <div class="footer-section">
                  <h3>About Us</h3>
                  <p>Social Media Campaigns Ltd. (SMC) is a new business that is looking to provide help 
                    and support to teenagers to encourage them to stay safe when using social media apps. </p>
        
              </div>
              <div class="footer-section">
                  <h3>Welcome to SMC</h3>
                  <p>You are on SMC World...</p>
              </div>
              <div class="footer-section">
                  <h3>Follow Us</h3>
                  <div class="social-icons">
                      <a href="www.facebook.com"><img src="img/fb.png" alt="Facebook" class="oval-img"></a>
                      <a href="x.com"><img src="img/x.png" alt="Twitter" class="oval-img"></a>
                      <a href="www.tiktok.com"><img src="img/tik.png" alt="Tik Tok" class="oval-img"></a>
                      <a href="www.instagram.com"><img src="img/insta.png" alt="Instagram" class="oval-img"></a>
                  </div>
              </div>
          </div>
          <div class="footer-bottom">
              <p>&copy;<script>document.write(new Date().getFullYear());</script> SMC WEBSITE | Designed by SMS</p>
          </div>
           
          </footer>
      </body>
</httml>
<script>
  document.getElementById('menuToggle').addEventListener('click', function () {
    const navLinks = document.querySelector('.nav-links');
    navLinks.classList.toggle('nav-active');
    
});

</script>
<script>
    function searchApps() {
        // Get input value and convert to uppercase for case-insensitive search
        var input = document.getElementById("search");
        var filter = input.value.toUpperCase();
        var table = document.getElementById("popularApps");
        var tr = table.getElementsByTagName("tr");

        // Loop through all table rows (excluding the header)
        for (var i = 1; i < tr.length; i++) {
            var td = tr[i].getElementsByTagName("td")[1]; // Search in the second column 
            if (td) {
                var txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = ""; // Show row if match is found
                } else {
                    tr[i].style.display = "none"; // Hide row if no match
                }
            }
        }
    }
</script>

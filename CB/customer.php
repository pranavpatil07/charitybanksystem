<!DOCTYPE html>


<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Programs</title>

  <!-- Googlefont -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;900&family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">

  <!-- CSS style sheet -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">

  <!-- fontawesome -->
  <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js" charset="utf-8"></script>

  <!-- bootstrap script -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>

<body>

  <!-- Navigation/ Title  -->

<body>
<header>
  <h1> CHARITY <span> BANK </span></h1>
  <nav>
    <ul>
      <li><a href="index_after_login.html">Home</a></li>
      <li><a href="about_after_login.html">About</a></li>
      <a href="customer list.html">Programs</a>
      <li><a href="contact_after_login.html">Contact</a></li>
	  <li><a href="index.html">Logout</a></li>
    
    </ul>
  </nav>
</header>
</body>
    <div class="text-center">
      <button type="button" class="btn btn-info" href="customer list.html" data-toggle="modal" data-target="#sendMoney">DONATE</button>
      <button type="button" class="btn btn-info" href="customer list.html" data-toggle="modal" data-target="#transactionHistory">DONATION HISTORY</button>

    </div>
    

  </section>


  <section id="main" class="coloured-section">

    <!--Modal Send Money-->
    <div class="modal fade" id="sendMoney" tableindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Donate</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="customer.php" method="POST">
              <div class="input-group mb-3">
                <input type="text" id="enterSName" class="form-control" placeholder="Sender's Username" name="SUser" aria-label="Sender's Username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">@gmail.com</span>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="text" id="enterName" class="form-control" placeholder="Recipient's Username" aria-label="Recipient's Username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">@gmail.com</span>
                </div>
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">₹</span>
                </div>
                <input type="text" id="enterAmount" class="form-control" placeholder="Enter Amount" aria-label="Amount">
                <div class="input-group-append">
                  <span class="input-group-text">.00</span>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" onclick="sendMoney()" class="btn btn-success" data-dismiss="modal"> Donate</button>

          </div>
        </div>
      </div>
    </div>

    <!--Modal Transaction History-->
    <div class="modal fade" id="transactionHistory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Donation History</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <ol id="transaction-history-body">

            </ol>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!--Table-->
    <div class="container">
      <div class="table-responsive">
        <table class="table table-dark table-striped table-hover center">

          <thead>
            <tr>
            
              <th scope="col">Sr. No.</th>
              <th scope="col">Name</th>
              <th scope="col">E-Mail ID</th>
              <th scope="col">Fund</th>
            </tr>
          </thead>
          <tbody>

            <tr>
              
              <td scope="row">1</td>
              <td>Pure Food & Water</td>
              <td>food@gmail.com</td>
              <td>
                <p id="foodBankBalance">85000</p>
              </td>
            </tr>

            <tr>
              
              <td scope="row">2</td>
              <td>Health & Medicine</td>
              <td>health@gmail.com</td>
              <td>
                <p id="healthBankBalance">65000</p>
              </td>
            </tr>

            <tr>
              <td scope="row">3</td>
              <td>Education</td>
              <td>education@gmail.com</td>
              <td>
                <p id="educationBankBalance">35700</p>
              </td>
            </tr>

            <tr>
              <td scope="row">4</td>
              <td>Orphanage</td>
              <td>orphan@gmail.com</td>
              <td>
                <p id="orphanBankBalance">75080</p>
              </td>
            </tr>

            <tr>
              <td scope="row" style="display:none;">5</td>
              <td style="display:none;">Jayesh Patil</td>
              <td style="display:none;">jayesh@gmail.com</td>
              <td style="display:none;">
                <p id="jayeshBankBalance">55200</p>
              </td>
            </tr>

            <tr>
              <td scope="row" style="display:none;">6</td>
              <td style="display:none;">Vaishnavi Wankhede</td>
              <td style="display:none;">vaishnavi@gmail.com</td>
              <td style="display:none;">
                <p id="vaishnaviBankBalance">38000</p>
              </td>
            </tr>

            <tr>
              <td scope="row" style="display:none;">7</td>
              <td style="display:none;">Rohit Tayde</td>
              <td style="display:none;">rohit@gmail.com</td>
              <td style="display:none;">
                <p id="rohitBankBalance">51000</p>
              </td>
            </tr>

            <tr>
              <td scope="row" style="display:none;">8</td>
              <td style="display:none;">Priyanka Jagdale</td>
              <td style="display:none;">priyanka@gmail.com</td>
              <td style="display:none;">
                <p id="priyankaBankBalance">46700</p>
              </td>
            </tr>

            <tr>
              <td scope="row" style="display:none;">9</td>
              <td style="display:none;">Raut Mam</td>
              <td style="display:none;">rautmam@gmail.com</td>
              <td style="display:none;">
                <p id="rautmamBankBalance">50700</p>
              </td>
            </tr>

            <tr>
              <td scope="row" style="display:none;">10</td>
              <td style="display:none;">Poonam Mam</td>
              <td style="display:none;">poonammam@gmail.com</td>
              <td style="display:none;">
                <p id="poonamamBankBalance">15000</p>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <footer class="white-section" id="footer">
      <h3>CONNECT WITH US</h3>
  <i class="bi bi-google"></i>
  <svg xmlns="http://www.w3.org/2000/svg" idth="30" height="30" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
  <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
</svg>

<i class="bi bi-instagram"></i>
<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
  <a xlink:href="https://www.instagram.com/jayeshpatil__21/">
  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg>

<!--<i class="bi bi-linkedin"></i>
<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"   fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
  <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
</svg>

<i class="bi bi-github"></i>
<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
  <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
</svg>

<i class="bi bi-twitter"></i>
<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
</svg>-->
        <p> ©2021 CHARITY BANK </p>
      </div>
    </footer>

  </section>
  <script src="script.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"></script>
  <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"></script>
</body>
</html>
<?php 
if ($_SERVAR['REQUEST_METHOD']=='POST'){
	$rn=$_POST['SUser'];
	echo "rn";
	echo "hello";
}
?>
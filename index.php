<?php 
include("./header.php");

?>


<div class="container-fluid remove-vid-marg">
    <div class = "vid-parent">
        <video playsinline autoplay muted loop>
            <source src = "videos/banvid.mp4">
        </video>
        
    </div>
    <div class="vid-content">
        <h1 class = "my-content">Welcome to Efootball</h1>
        <small class ="my-content">News and More</small><br>
        <a href="#"class ="btn btn-danger">Get Started</a>
    </div>

    <div class ='container mt-5'>
        <h1 class = 'text-center'>Populer News</h1>
        <div class ='card-deck mt-4'>
            <a href="#" class ='btn' style='text-align:left; padding:0px; margin:0px;'>
               <div class ="card">
                <img src="images/mbappe.jpg" class ='card-img-top' alt="Mbappe" />
                <div class ="card body">
                    <h5 class ='card-title'>Mbappe joinning is Saudi league??</h5>
                    <p class ='card-text'>What makes this summer's Kylian Mbappe contract saga different from the previous ones? Money, to start with. Like the €700 million ($773m) package (€300m in transfer fees, the rest in wages over several years) that Saudi Pro League club Al Hilal are supposedly putting on the table.</p>
                   
                </div>

                <div class="card-footer">
                    <a class ="btn btn-primary text-white font-weight-bolder float-right"href ="mbappe.php">View more </a>


                </div>
               </div>
            </a>

        </div>

    </div>


    <div class ='container mt-5'>
        <h1 class = 'text-center'></h1>
        <div class ='card-deck mt-4'>
            <a href="#" class ='btn' style='text-align:left; padding:0px; margin:0px;'>
               <div class ="card">
                <img src="images/messi.jpg" class ='card-img-top' alt="Mbappe" />
                <div class ="card body">
                    <h5 class ='card-title'>Lionel Messi shines again in first Inter Miami start with two goals, an assist & a hug</h5>
                    <p class ='card-text'>Lionel Messi followed-up his match-winning free kick with two more on Wednesday morning against Atlanta United in the Leagues Cup and showed how impactful a player he is.</p>
                   
                </div>

                <div class="card-footer">
                    <a class ="btn btn-primary text-white font-weight-bolder float-right"href ="messi.php">View more </a>


                </div>
               </div>
            </a>

        </div>

    </div>


    <div class ='container mt-5'>
        <h1 class = 'text-center'>Transfer Headlines</h1>
        <div class ='card-deck mt-4'>
            <a href="#" class ='btn' style='text-align:left; padding:0px; margin:0px;'>
               <div class ="card">
                <img src="images/holand.jpg" class ='card-img-top' alt="Mbappe" />
                <div class ="card body">
                    <h5 class ='card-title'>Rasmus Hojlund: Manchester United agree £72m deal with Atalanta for Denmark forward</h5>
                    <p class ='card-text'>Manchester United have reached an agreement with Serie A side Atalanta over the signing of striker Rasmus Hojlund; 20-year-old was left out of the squad that played Bournemouth in a pre-season friendly on Saturday</p>
                   
                </div>

                <div class="card-footer">
                    <a class ="btn btn-primary text-white font-weight-bolder float-right"href ="atlanta.php">View more </a>


                </div>
               </div>
            </a>

        </div>

    </div>


    <div class ='container mt-5'>
        <h1 class = 'text-center'></h1>
        <div class ='card-deck mt-4'>
            <a href="#" class ='btn' style='text-align:left; padding:0px; margin:0px;'>
               <div class ="card">
                <img src="images/chelse.jpg" class ='card-img-top' alt="Mbappe" />
                <div class ="card body">
                    <h5 class ='card-title'>Chelsea transfer news: Blues agree £23.1m deal to sign Lesley Ugochukwu from Rennes</h5>
                    <p class ='card-text'>Chelsea are yet to decide whether Lesley Ugochukwu will be part of Mauricio Pochettino's first-team squad or leave on loan; 19-year-old midfielder could join Strasbourg, the Ligue 1 side in which Chelsea invested this summer; Ugochukwu arrival continues revamp of Blues' midfield</p>
                   
                </div>

                <div class="card-footer">
                    <a class ="btn btn-primary text-white font-weight-bolder float-right"href ="chelsea.php">View more </a>


                </div>
               </div>
            </a>

        </div>

    </div>

</div>




<div class ='container mt-4' id="contact">
    <h2 class ='text-center mb -4'>Contact Us</h2>
    <div class ='row'>
        <div class="col-md-8">
            <form action =" " method="post">
                <input type = "text" class ="form-control" name='name' placeholder="Name"><br>
                <input type = "email" class ="form-control" name='Email' placeholder="Email"><br>
                <textarea class='form-control'name='message'placeholder="Comment your thoughts"style ='height:150px;'></textarea>
                <input class ="btn btn-danger"type ='submit' value="send" name='submit'><br><br>
            </form>
        </div>
    </div>

    <div class="col-md-4 stripe text-white text-center">
        <h4>Efootball</h4>
        <p>Efootball,MOhakhali,Dhaka</p>

    </div>



<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" href="Admin/admin.php">
  Admin Panel
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Admin Panel</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  
 
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="adminLoginBtn" onclick="checkAdminLogin()">Enter</button>
      </div>
    </div>
  </div>
</div>








 <script src = "js/jquery.min.js"></script>
 <script src = "js/popper.min.js"></script>
 <script src = "js/bootstrap.min.js"></script>

 <script src = "js/all.min.js"></script>

    
</body>
</html>
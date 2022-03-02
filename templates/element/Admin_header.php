<section >
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      
      <!--logo start-->
      <a href="/dash/home" class="logo"><b>Interface <span>Administration</span></b></a>
   <header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <div class="sidebar">
     <div class="logo_content">
       <div class="logo">
         <div class="logo_name"><img src="../favicon.ico"></div>
         </div>
         <div class='titre'><h5><b><center>Agence du Bassin Hydraulique de<br><span style="color: #4ECDC4;"> Guir-ZiZ-Rhéris</span></center></b></h5></div>
         
       <i class='bx bx-menu' id="btn"></i>
     </div>
     
     <ul class="nav_list">
       
       <li>
        <a href="/dash/home">
         <i class='bx bx-grid-alt'></i>
         <span class="links_name">Tableau de bord</span>
        </a>
        
        <span class="tooltip">Tableau de bord</span>
      </li>
       <li>
         <a href="/users">
          <i class='bx bx-user'></i>
          <span class="links_name">Utilisateurs</span>
         </a>
         <span class="tooltip">Utilisateurs</span>
       </li>
       <li>
        <a href="/profils">
         <i class='bx bx-chat'></i>
         <span class="links_name">Profiles</span>
        </a>
        <span class="tooltip">Profiles</span>
      </li>
      <li>
        <a href="/administrations">
         <i class='bx bx-pie-chart-alt-2'></i>
         <span class="links_name">Administrations</span>
        </a>
        <span class="tooltip">Administrations</span>
      </li>
      <li>
        <a href="/indicateurs">
         <i class='bx bx-folder'></i>
         <span class="links_name">Indicateurs</span>
        </a>
        <span class="tooltip">Indicateurs</span>
      </li>
   
      <!-- <lu>
      
      <li class="dropdown-btn">
      <i class='bx bx-heart'></i>
        <span class="links_name">Dropdown<i class='bx bx-caret-down'></i></span>
        <span class="tooltip">Dropdown</span>
        </li>
      <div class="dropdown-container">
      <span class="links_name"><a href="#">Link 1</a></span>
      <span class="links_name"><a href="#">Link 2</a></span>
      <span class="links_name"><a href="#">Link 3</a></span>
</div>


</lu> -->
<li id="log_out">
        <a href="/users/logout">
        <i class='bx bx-log-out'></i>
         <span class="links_name">Logout</span>
        </a>
        <span class="tooltip">Logout</span>
      </li>

     </ul>
    

   </div>
        </nav>
        </section>


        <script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>
  

<script>
  let btn = document.querySelector("#btn");
let sidebar = document.querySelector(".sidebar");
let searchBtn = document.querySelector(".bx-search");

btn.onclick = function(){
    sidebar.classList.toggle("active");
}
searchBtn.onclick = function(){
    sidebar.classList.toggle("active");
}


</script>

      <!-- <section>
        <div class="tabs tabs-style-linemove">
          <nav>
          	<img src=http://www.abhgzr.ma/images/logo2.png style="height: 113px; width: 271px;">
            <ul>
              <li><span><?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fas fa-chart-line'))."Tableau de bord",['controller'=>'Dash','action'=>'home'], array('escape' => false)) ?></span></li>
              <li><span><?= $this->Html->link("Utilisateurs",['controller'=>'Users','action'=>'index']) ?></span></li>
              <li><span><?= $this->Html->link("Profils",['controller'=>'Profils','action'=>'index']) ?></span></li>
              <li><span><?= $this->Html->link("Administrations",['controller'=>'administrations','action'=>'index'])?></span></li>
              <li><span><?= $this->Html->link("Indicateurs",['controller'=>'indicateurs','action'=>'index']) ?></span></li>
              <ul class="navbar-nav ml-5">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <img src="..\img\profil-img\admin.png" width="40"
                            class="border mp-1 rounded-circle">
                        <?= $Auth["login"]; ?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <?= $this->Html->link("Profile",['controller'=>'Users','action'=>'profil']) ?>
                        <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fas fa-chart-line'))."Logout",['controller'=>'Users','action'=>'logout','class'=>'dropdown-item'], array('escape' => false) ) ?>
                    </div>
                </li>
            </ul>
            </ul>
          </nav> 
          </div>
      </section>
     
     -->

     
<section >
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      
      <!--logo start-->
      <a href="/dash/home" class="logo"><b>Interface <span>Chef de Projet</span></b></a>
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
        <a href="/dash/brand1">
        <i class='bx bx-home'></i>
         <span class="links_name">ORMVA-T</span>
        </a>
        
        <span class="tooltip">ORMVA-T</span>
      </li>
      <lu>
      
      <li class="dropdown-btn">
      <i class='bx bx-bulb'></i>
        <span class="links_name">Projet PDIAAI-CC<i class='bx bx-caret-down' style="padding-left: 61%; "></i></span>
        <span class="tooltip">Projet PDIAAI-CC</span>
        </li>
      <div class="dropdown-container">
      <span class="links_name"><a href="/presentations">&nbsp Présentations</a></span>
      <span class="links_name"><a href="/Organisation">&nbsp Organisations</a></span>
      <span class="links_name"><a href="/avancement">&nbsp Etat d'Avancement</a></span>
        </div>

        </lu>
        <lu>
      
      <li class="dropdown-btn">
      <i class='bx bx-category-alt'></i>
        <span class="links_name">Aménagements hydroagricoles<i class='bx bx-caret-down'></i></span>
        <span class="tooltip">Aménagements hydroagricoles</span>
        </li>
      <div class="dropdown-container">
      <span class="links_name"><a href="/conduite">&nbsp Conduite principale</a></span>
      <span class="links_name"><a href="/reseau-distribution">&nbsp Réseau de distribution</a></span>
      <span class="links_name"><a href="/rehabilitation-palmeraies">&nbsp Réhabilitation des palmeraies existantes</a></span>
      <span class="links_name"><a href="/acquisition-terres">&nbsp Acquisition compensation des terres</a></span>
      <span class="links_name"><a href="/acquisition-terres">&nbsp AUEA</a></span>
      
        </div>

        </lu>
        <lu>
      
      <li class="dropdown-btn">
      <i class='bx bxs-book-alt'></i>
        <span class="links_name">Mesure d'accompagnement<i class='bx bx-caret-down'style="padding-left: 16%; "></i></span>
        <span class="tooltip">Mesure d'accompagnement</span>
        </li>
      <div class="dropdown-container">
      <span class="links_name"><a href="/plan-action">&nbsp Plan d'action genre</a></span>
      <span class="links_name"><a href="/banque-projet">&nbsp Banque de Projet de développement</a></span>
      <span class="links_name"><a href="/partenariat-pp">&nbsp PPP</a></span>
      <span class="links_name"><a href="/plan-dev-oasis">&nbsp Plan développement des Oasis</a></span>
      <span class="links_name"><a href="/cadre-logique">&nbsp Cadre logique</a></span>
      <span class="links_name"><a href="/pges">&nbsp PGES</a></span>
      <span class="links_name"><a href="/pepp">&nbsp PEPP</a></span>
      <span class="links_name"><a href="/appel-projet">&nbsp Appel à projets</a></span>
      <span class="links_name"><a href="/appui-promoteur">&nbsp Appui au promoteur</a></span>
</div>

</lu>
       
      <lu>  
      <li class="dropdown-btn">
      <i class='bx bxs-edit-location'></i>
        <span class="links_name">Investissement<i class='bx bx-caret-down'style="padding-left: 81%; "></i></span>
        <span class="tooltip">Investissement</span>
        </li>
      <div class="dropdown-container">
      <span class="links_name"><a href="/contrat-location">&nbsp Contrats de location</a></span>
      <span class="links_name"><a href="/autorisations">&nbsp Autorisations</a></span>
</div>

</lu>
<lu>
      
      <li class="dropdown-btn">
      <i class='bx bxs-report'></i>
        <span class="links_name">Reporting<i class='bx bx-caret-down'style="padding-left: 136%; "></i></span>
        <span class="tooltip">Reporting</span>
        </li>
      <div class="dropdown-container">
      <span class="links_name"><a href="/pv">&nbsp Pv</a></span>
      <span class="links_name"><a href="/cerculaire">&nbsp Circulaire</a></span>
      <span class="links_name"><a href="/rapports">&nbsp Rapports</a></span>
</div>

</lu>
      <li>
        <a href="/dash/indicateurs">
         <i class='bx bx-cog'></i>
         <span class="links_name">Indicateurs</span>
        </a>
        <span class="tooltip">Indicateurs</span>
      </li>
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
<style>

</style>     

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
              <li><span id='chef'><?= $this->Html->link("ORMVA-T",['controller'=>'Dash','action'=>'brand1']) ?></span></li>
              <li><span><ul class="navbar-nav ml-5">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown">
                            Projet PDIAAI-CC
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <?= $this->Html->link("Présentations",['controller'=>'presentations','action'=>'index']) ?>
                        <?= $this->Html->link("Organisation",['controller'=>'organisation','action'=>'index']) ?>
                        <?= $this->Html->link("Etat d'Avancement",['controller'=>'avancement','action'=>'index']) ?>
                    </div>
                </li>
            </ul></span></li>
            <?php 
            //$user = $this->Auth->identify();
            //if ($user["profile"]=="Admin") {
            ?> 
            
            <li><span> <ul class="navbar-nav ml-5">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown">
                            Aménagements hydroagricoles 
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                    <?= $this->Html->link("Conduite principale",['controller'=>'conduite','action'=>'index']) ?>
                    <?= $this->Html->link("Réseau de distribution",['controller'=>'reseau_distribution','action'=>'index']) ?>
                    <?= $this->Html->link("Réhabilitation des palmeraies existantes",['controller'=>'rehabilitation_palmeraies','action'=>'index']) ?>
                    <?= $this->Html->link("Acquisition compensation des terres",['controller'=>'acquisition_terres','action'=>'index']) ?>
                    <?= $this->Html->link("AUEA",['controller'=>'auea','action'=>'index']) ?>
                    </div>
                </li>
            </ul></span></li>
            <?php //}?>
              <li><span> <ul class="navbar-nav ml-5">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown">

                            Mesure d'accompagnement
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" style="height:300px">
                    <?= $this->Html->link("Plan d'action genre",['controller'=>'PlanAction','action'=>'index']) ?>
                <?= $this->Html->link("Banque de Projet de développement",['controller'=>'BanqueProjet','action'=>'index']) ?>
                <?= $this->Html->link("PPP",['controller'=>'PartenariatPp','action'=>'index']) ?>
                <?= $this->Html->link("Plan développement des Oasis",['controller'=>'PlanDevOasis','action'=>'index']) ?>
                <?= $this->Html->link("Cadre logique",['controller'=>'CadreLogique','action'=>'index']) ?>
                <?= $this->Html->link("PGES",['controller'=>'Pges','action'=>'index']) ?>
                <?= $this->Html->link("PEPP",['controller'=>'Pepp','action'=>'index']) ?>
                <?= $this->Html->link("Appel à projets",['controller'=>'AppelProjet','action'=>'index']) ?>
                <?= $this->Html->link("Appui au promoteur",['controller'=>'AppuiPromoteur','action'=>'index']) ?>
                    </div>
                </li>
            </ul></span></li>
              <li><span> <ul class="navbar-nav ml-5">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown">
                            Investisement
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                    <?= $this->Html->link("Contrats de location",['controller'=>'ContratLocation','action'=>'index']) ?>
                    <?= $this->Html->link("Autorisations",['controller'=>'Autorisations','action'=>'index']) ?>
                    </div>
                </li>
            </ul></span></li>
              <ul class="navbar-nav ml-5">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown">
                            Reporting
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                    <?= $this->Html->link("Pv",['controller'=>'pv','action'=>'index']) ?>
                    <?= $this->Html->link("Cerculaire",['controller'=>'Cerculaire','action'=>'index']) ?>
                    <?= $this->Html->link("Rapports",['controller'=>'rapports','action'=>'index']) ?>
                    </div>
                </li>
            </ul>
            <li><span><?= $this->Html->link("Indicateurs",['controller'=>'indicateurs','action'=>'']) ?></span></li>
            <ul class="navbar-nav ml-5">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                        <img src="..\img\profil-img\chef.png" width="40"
                            class="border mp-1 rounded-circle">
                            <?= $Auth["login"]; ?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                    <?= $this->Html->link("Profile",['controller'=>'Users','action'=>'profil']) ?>
                    <?= $this->Html->link("Logout",['controller'=>'Users','action'=>'logout','class'=>'item']) ?>
                    </div>
                </li>
            </ul>
            </ul>
          </nav> 
          </div>
      </section>
     <style>
#chef{
    font-weight: 700;
    color: #000;
}

     </style> -->
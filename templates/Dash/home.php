
<div class="row">
    <div class="shadow p-4 mb-4 bg-white" style="background-image: linear-gradient( 135deg, #FFD3A5 10%, #FD6585 100%);margin-right:20px;float: right;width: 255.5px;  border-radius: 18px;">

<div class="row">
  <div class="col-auto"><img src="..\img\profil-img\comite.png" width="60px"height="60px" ></div>
  <div class="col" style="top: 14px;right: 39px;"><h5 class="card-title text-uppercase text-muted mb-0"><font color="white" style="font-size: 17px;"><center><br>Utilisateurs</center> </font></h5></div>
    
</div><br>
<div class="row"><div class="col" style="top: -14px;"><b><font color="white"><center><?php $count = json_decode($rst); echo $count[0]->somme;?></center></font></b></div></div>
</div>


    <div class="shadow p-4 mb-4 bg-white" style="background-image: linear-gradient(to right, #ff9933 0%, #ffcc66 100%);margin-right:20px;float: right;width: 255.5px;  border-radius: 18px;
">

<div class="row">
  <div class="col-auto"><img src="..\img\profiles.png" width="60px"height="60px" ></div>
  <div class="col" style="top: 14px;right: 39px;"><h5 class="card-title text-uppercase text-muted mb-0"><font color="white"style="font-size: 17px;color: #fff;"><center><br>Profiles</font></center></h5></div>
    
</div><br>
<div class="row"><div class="col" style="top: -14px;"><b><font color="white"></font><center style="color: #fff;"><?php $count = json_decode($rst1); echo $count[0]->profiles;?></center></b></div></div>

  </div>


<div class="shadow p-4 mb-4 bg-white" style="background-image: linear-gradient( 135deg, #EE9AE5 10%, #5961F9 100%);margin-right:20px;float: right;width: 255.5px;  border-radius: 18px;
">
   

<div class="row">
  <div class="col-auto"><img src="..\img\building.png" width="60px"height="60px" ></div>
  <div class="col" style="top: 14px;right: 39px;"><h5 class="card-title text-uppercase text-muted mb-0"><font color="white"style="font-size: 17px;"><center><br>Administrations</center></font></h5></div>
    
</div><br>
<div class="row"><div class="col" style="top: -14px;"><b><font color="white"><center><?php $count = json_decode($rst2); echo $count[0]->administrations;?></center></font></b></div></div>



  </div>

<div class="shadow p-4 mb-4 bg-white" style="background-image: linear-gradient(to right, #3399ff 1%, #66ffff 103%);float: right;width: 255.5px;  border-radius: 18px;
">

<div class="row">
  <div class="col-auto"><img src="..\img\list.png" width="60px"height="60px" ></div>
  <div class="col" style="top: 14px;right: 39px;"><h5 class="card-title text-uppercase text-muted mb-0"><font color="white"style="font-size: 17px;"><center><br>Indicateurs</center></font></h5></div>
    
</div><br>
<div class="row"><div class="col" style="top: -14px;"><b><font color="white"><center><?php $count = json_decode($rst3); echo $count[0]->indicateurs;?></center></font></b></div></div>
    
    </div>
  </div>
  <div class="container-fluid">
  <div class="row">
    <div class="shadow p-4 mb-4 " style="background-color: #000524;height: 500px; margin-right:28px;float: right; max-width: 100%;  border-radius: 18px;color:#fff;"><b> Indicateurs</b><br>


 
<style>

#chartdiv2 {
  max-width: 650px;
  max-height: 500px; 
  background-color: #000524;
  
}

</style>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>


<div id="chartdiv" style=" margin: auto;top: 20%;"></div>
<div id="chart">
</div>

</div>


  <div class="shadow p-4 mb-4 " style="background-color: #000524;float: right;width: 100%;height: 520px; border-radius: 18px;">
  <b style="color:#fff;"> Map</b><br>
  
    <div name="map" id='map' style='width: 100%; height: 455px;'>
</div>
</div>

<br>
<br>
<script>

function showDT(cord) {

  var popup = new mapboxgl.Popup()
  var marker = new mapboxgl.Marker()
  .setLngLat(cord)
  .setPopup(popup)
  .addTo(map);
  
}


</script>

<br>
<div class="profils index content">
  <h3><?= __('Locations') ?></h3>
<div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('cordonnées') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                </tr>
            </thead>
            <tbody>
            <?php for ($i=0; $i < count(json_decode($data)); $i++): ?>
                <tr>
                
                    <td><a href="#map" onclick="showDT([<?php $count = json_decode($data); echo $count[$i]->long;?>, <?php $count = json_decode($data); echo $count[$i]->lat;?>])">
                    [<?php $count = json_decode($data); echo $count[$i]->long;?>, <?php $count = json_decode($data); echo $count[$i]->lat;?>]</a></td>
                    <td><?php echo json_decode($data)[$i]->description;?></td>
                    <?php endfor; ?>
                </tr>
            </tbody>
        </table>
    </div>
    </div>
    <br>
<br>

<!-- <?php 
$data=array();
$values1 = json_decode($res1);
for($i=0;$i<sizeof($values1);$i++){
    $label=$values1[$i]->Designation;
    echo(strval($label));
    array_push($data,$label);
    echo ',';

} 

    
?> -->

<script>
var options = {
  chart: {
    foreColor: "#fff",
    type: 'bar',
    height: 400
  },
  colors: [
          function({ value, seriesIndex, w }) {
            if (value < 50) {
              return '#FF0000'
            } else {
              return '#02DFDE'
            }
          }
        ],
  stroke: {
    width: 3
  },
  
  tooltip: {
    theme: "dark"
  },
 
  series: [{
    name: 'Valeur',
    data: [<?php 

$values = json_decode($res);
for($i=0;$i<count($values);$i++){
    echo($values[$i]->Valeur);
    echo ',';
}  
    
?>],
// color:'#5961F9'
  }],
  xaxis: {
    categories: <?php echo json_encode($data); ?>,
    labels: {
          show: true,
          rotate: -45,
          rotateAlways: false,
          hideOverlappingLabels: true,
          showDuplicates: false,
          trim: true,
          minHeight: undefined,
          maxHeight: 120,
          style: {
              colors: [],
              fontSize: '12px',
              fontFamily: 'Helvetica, Arial, sans-serif',
              fontWeight: 40,
              cssClass: 'apexcharts-xaxis-label',
          }
        }
  }
}

var chart = new ApexCharts(document.querySelector("#chart"), options);

chart.render();




</script>


<style>
    tr:nth-child(even){background-color: #f2f2f2;}
    tr:hover {background-color: #ddd;}
    th {
  padding-top: 12px;
  padding-bottom: 30px;
  text-align: center;
  background-color: #4ECDC4;
  color: white;
}
</style>

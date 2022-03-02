<div class="row" style="line-height:0;">
    <div class="col-lg-12">
    <h1 class="page-header" style="color: #000;">Piézometerie </h1>
    </div>
                <hr>
  <div class="shadow p-4 mb-4 " style="background-color: #000524;float: right;width: 100%;height: 520px; border-radius: 18px;">
  
    <div name="map2" id='map2' style='width: 100%; height: 455px;'>
</div>
<br>
<br>


</div>


<br>
<div class="profils index content">
<h2>Réseau Piézometrique</h2>
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

<div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('cordonnées') ?></th>
                    <th><?= $this->Paginator->sort('Description') ?></th>
                    <th><?= $this->Paginator->sort('N° IRE') ?></th>
                    <th><?= $this->Paginator->sort('Courbe de niveau') ?></th>
                </tr>
            </thead>
            <tbody>
            <?php for ($i=0; $i < count(json_decode($data)); $i++): ?>
                <tr>
                
                    <td><a href="#map2" onclick="showDT([<?php $count = json_decode($data); echo $count[$i]->long;?>, <?php $count = json_decode($data); echo $count[$i]->lat;?>])">
                    [<?php $count = json_decode($data); echo $count[$i]->long;?>, <?php $count = json_decode($data); echo $count[$i]->lat;?>]</a></td>
                    <td><?php echo json_decode($data)[$i]->description;?></td>
                    <td><?php echo json_decode($data)[$i]->IRE;?></td>
                    <td><?= @$this->Html->image( json_decode($data)[$i]->Courbe, ['style' => 'max-width:80px;height:60px;','class'=>'img']) ?></td>
                    <!-- <td><?php// echo json_decode($data)[$i]->Courbe;?></td> -->

                    <?php endfor; ?>
                </tr>
            </tbody>
        </table>
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="popup_content">
        <img class="w-100" id="popup_img">
      </div>
    </div>
  </div>

    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>

    <script>
      $(document).ready(function(){
          $(".img").click(function(){
              var get = $(this).attr("src");
              $(".modal").modal('show');
              $('#popup_img').attr("src",get);
          });
          
      });
  </script>
<!-- 
    <script>
$(document).ready(function() {
  $(".table-responsive .img").fancybox();
});
</script> -->

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


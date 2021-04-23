<?php
//  ball color swatches 

echo "
<div class='col-sm-12 col-md-12 col-lg-6 col-xl-6 ballImageSection' align='center' style='margin:auto' >
  <div class='col-sm-8 col-md-8 col-lg-12 col-xl-10 colors' align='left' style='margin:auto' >
    <h1>Design your ball:</h1>";
    $designCant= array('1', '2');
    $designLabel= array('<br>Primary Color', '<br>Secondary Color');
    for ($i = 0; $i <sizeof($designCant); $i++) {
      echo '<h5>'.$designLabel[$i].'</h5>';
      for ($j = 0; $j <sizeof($colors); $j++) {
        $cadena="MM_showHideLayers(";
        for ($k = 0; $k <sizeof($colors); $k++) {
          if($k+1==$j+1) $cadena.="'d1-".$colors[$k]."".$designCant[$i]."','','show'";
          else $cadena.="'d1-".$colors[$k]."".$designCant[$i]."','','hide'";
          if($k+1<sizeof($colors)) $cadena.=",";
        }
        $cadena.=");document.getElementById('ballcolor".$designCant[$i]."').value = '".strtoupper($colors[$j])."'";
        $style="margin:1.84px;margin-top:3px;margin-bottom:3px;background-color: #".$codes[$j].";";
        if($colors[$j]=="wht") $style.='border: 1px solid #eaeaea';
        echo "<div class='circle' style='{$style}' onClick=\"{$cadena}\"></div>";
      }
    }
  echo '</div>
</div>';

?>


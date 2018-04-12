<?php
/**
 * Template: Ranges - displays complete grid of all ranges
 */
?>

<?php
// function rangeGrid($imageName) {
//   echo "
//     <div class='col-4'><a href='" . $_SERVER['REQUEST_URI'] . $imageName . "'>
//       <picture>
//         <source data-srcset='https://res.cloudinary.com/kingsley/image/upload/q_auto/gallery/home_" . $imageName . "_01.webp' type='image/webp'>
//         <img data-src='https://res.cloudinary.com/kingsley/image/upload/q_auto/gallery/home_" . $imageName . "_01.jpg' alt='$imageName logo'>
//       </picture>
//     </a></div>
//   ";
// }

function rangeGrid($imageName, $imageAlt='') {
  $htmlOutput = <<<HTML
  <div class="col-5"><a href="{$_SERVER['REQUEST_URI']}{$imageName}">
    <picture>
      <source data-srcset="https://res.cloudinary.com/kingsley/image/upload/gallery/home_{$imageName}_01.webp" type="image/webp">
      <img data-src="https://res.cloudinary.com/kingsley/image/upload/gallery/home_{$imageName}_01.jpg" alt="{$imageName} {$imageAlt} logo">
    </picture>
  </a></div>
HTML;
echo $htmlOutput;
}
?>

<!-- row 1 -->
<div class="row">

  <!-- ttcombat -->
  <?php
  rangeGrid("ttcombat");
  rangeGrid("rumbleslam");
  rangeGrid("carnevale");
  rangeGrid("dropzone", "commander");
  rangeGrid("dropfleet", "commander");
  ?>
  <!-- ttcombat end -->

  <!-- gct -->
  <?php
  rangeGrid("bushido");
  rangeGrid("rotkage", "rise of the kage");
  ?>
  <!-- gct end -->

  <!-- corvus belli -->
  <?php
  rangeGrid("infinity");
  rangeGrid("aristeia");
  ?>
  <!-- corvus belli end -->
  <?php
  rangeGrid("dragon", "shield");
  ?>

  <!-- micro art -->
  <?php
  rangeGrid("microart", "micro art studios");
  rangeGrid("wolsung");
  ?>
  <!-- micro art end -->

  <!-- modiphius -->
  <?php
  rangeGrid("fallout", "wasteland warfare");
  rangeGrid("infinity-rpg", "infinity the role playing game");
  ?>
  <!-- modiphius end -->

  <?php
  rangeGrid("kromlech");
  ?>

  <!-- warlord -->
  <?php
  rangeGrid("toh", "test of honour");
  rangeGrid("konflikt47", "konflikt'47");
  rangeGrid("antares", "beyond the gates of antares");
  rangeGrid("bloodskies", "blood red skies");
  rangeGrid("bolt-action", "bolt action");
  rangeGrid("pands", "pike and shotte");
  rangeGrid("hail-caesar", "hail caesar");
  rangeGrid("black-powder", "black powder");
  rangeGrid("project-z", "project z");
  ?>
  <!-- warlord end -->

  <!-- mantic-->
  <?php
  rangeGrid("kow", "kings of war");
  rangeGrid("dungeon", "saga");
  rangeGrid("deadzone");
  rangeGrid("twd", "walking dead");
  rangeGrid("marsattacks", "mars attacks");
  rangeGrid("warpath");
  rangeGrid("battlezones");
  rangeGrid("star-saga", "star saga");
  rangeGrid("terrain", "crate");
  ?>
  <!-- mantic end -->

  <!-- knight models -->
  <?php
  rangeGrid("batman");
  rangeGrid("dc");
  ?>
  <!-- knight models end-->

  <?php
  rangeGrid("vallejo", "av vallejo");
  rangeGrid("plast", "past craft");
  rangeGrid("max", "protection");
  rangeGrid("army-painter", "the army painter");
  rangeGrid("battlefoam");
  rangeGrid("testors");
  ?>


  <!-- battlefront miniatures -->
  <?php
  rangeGrid("fow", "flames of war");
  rangeGrid("gf9", "gale force nine");
  ?>
  <!-- battlefront miniatures end -->

  <?php
  rangeGrid("kr");
  ?>
</div> <!-- row end (ranges) -->

<div class="letter-s">
  <h2>Supplementary Ranges</h2>
</div>
<div>
  <p>To place an order from our supplementary range, your order must first meet a £150 minimum spend.</p>
</div>
<!-- row (suplimentary ranges) -->
<div class="row-3">
  <!-- orders must meet £150 minimum spend -->
  <?php
  rangeGrid("malifaux");
  rangeGrid("warmachine");
  rangeGrid("hordes");
  rangeGrid("runewars");
  rangeGrid("x-wing");
  rangeGrid("rebellion", "star wars");
  ?>
</div> <!-- row end (suplimentary ranges) -->

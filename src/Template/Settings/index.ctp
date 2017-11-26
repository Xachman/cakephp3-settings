<?php
 foreach($settings['business'] as $setting) {
     ?>
     <div class="setting">
        <span class="title">
            <?=$setting['title'];?>:
        </span>
        <span class="value">
            <?=$setting['value'];?>
        </span>
    </div>
     <?php
 }
?>
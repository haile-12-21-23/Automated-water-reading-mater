<?php
if (count($statusMsg)>0):?>
<div>
    <?php foreach ($statusMsg as $error):?>
    <p><?php echo $error?>
    </p>
    <?php endforeach?>
</div>
<?php endif?>
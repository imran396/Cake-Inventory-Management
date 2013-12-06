<?php $this->extend("/Common/index"); ?>

<?php $this->assign('post', array('1'=>'imran','2'=>'Rahman','3'=>'testing')); ?>
<?php $this->start('sidebar'); ?>
    <li> <a href="#"> Add</a> </li>
<?php $this->end(); ?>
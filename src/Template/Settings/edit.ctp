<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Services'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Jobs'), ['controller' => 'Jobs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Job'), ['controller' => 'Jobs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="services form large-9 medium-8 columns content">
    <form method="post">
        <?php 
            foreach($settings['business'] as $setting) {
                ?>
                <div class="input text">
                    <label><?=$setting['title']?></label>
                    <input type="text" name="business[<?=$setting['name']?>]" value="<?=$setting['value']?>" class="" />
                </div>
                <?php
            }
        ?>
        <button>Submit</button>
    </form>
</div>



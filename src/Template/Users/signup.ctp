<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Login'), ['action' => 'login']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
        <fieldset>
            <legend>Signup</legend>
            <div class="form-group row">
            </div>
            <div class="form-group">             
                <?php echo $this->Form->control('email',['class'=>'form-control', 
                    'id'=>'inputEmail' ,'name'=>'email',
                    'placeholder'=>'Enter email', 'type'=>'email']); ?>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <?php echo $this->Form->control('phone',['class'=>'form-control', 
                    'id'=>'inputPhone' ,'name'=>'phone',
                    'placeholder'=>'Enter phone', 'type'=>'text']); ?>
                <small  class="form-text text-muted">We'll never share your phone with anyone else.</small>
            </div>
            <div class="form-group">
                <?php echo $this->Form->control('password',['class'=>'form-control', 
                    'id'=>'inputPassword' ,'name'=>'password',
                    'placeholder'=>'Enter Password', 'type'=>'password']); ?>
                <small  class="form-text text-muted">We'll save your password encrypted.</small>
            </div>
            <?= $this->Form->button(__('Signup'), ['class'=>'btn btn-primary']) ?>
        </fieldset>
    <?= $this->Form->end() ?>
</div>

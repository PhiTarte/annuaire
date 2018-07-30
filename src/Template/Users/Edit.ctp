<!-- Fichier : src/Template/Users/edit.ctp -->

<h1>Modify a user</h1>
<?php
    echo $this->Form->create($user);
    echo $this->Form->control('id', ['type' => 'hidden']);
    echo $this->Form->control('lastName');
    echo $this->Form->control('firstName');
    echo $this->Form->control('email');
    echo $this->Form->control('tel');
    echo $this->Form->control('adress');
    echo $this->Form->control('postalCode');
    echo $this->Form->control('town');
    echo $this->Form->control('country');
    echo $this->Form->button(__('Save the user'));
    echo $this->Form->end();
?>
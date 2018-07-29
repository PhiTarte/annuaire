<!-- Fichier : src/Template/Users/view.ctp -->

<h1><?= h($user->lastName) ?></h1>
<p><?= h($user->email) ?></p>
<p><small>tel</p>
<p><?= $this->Html->link('Modifier', ['action' => 'edit', $user->email]) ?></p>
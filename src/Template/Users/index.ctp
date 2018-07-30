<!-- Fichier : src/Template/Users/index.ctp -->

<h1>Users</h1>
<?= $this->Html->link('Add a user', ['action' => 'add']) ?>
<table>
    <tr>
        <th>lastName firstName</th>
        <th>Tel</th>
        <th>email</th>
    </tr>

    <!-- C'est ici que nous bouclons sur notre objet Query $users pour afficher les informations de chaque user -->

    <?php foreach ($users as $user): ?>
    <tr>
        <td>
            <?= $this->Html->link($user->lastName, ['action' => 'view', $user->lastName]) ?>
            &nbsp;<?= $user->firstName ?>
        </td>
        <td>
            <?= $user->tel ?>
        </td>
        <td>
            <?= $user->email ?>
        </td>
        <td>
            <?= $this->Html->link('Modify', ['action' => 'edit', $user->email]) ?>
        </td>
        <td>
        <?= $this->Form->postLink(
                'Supress',
                ['action' => 'delete', $user->email],
                ['confirm' => 'Are you sure ?'])
            ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
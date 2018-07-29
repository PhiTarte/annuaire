<!-- Fichier : src/Template/Users/index.ctp -->

<h1>Users</h1>
<table>
    <tr>
        <th>lastName firstName</th>
        <th>email</th>
    </tr>

    <!-- C'est ici que nous bouclons sur notre objet Query $users pour afficher les informations de chaque user -->

    <?php foreach ($users as $user): ?>
    <tr>
        <td>
            <?= $this->Html->link($user->lastName, ['action' => 'view', $user->firstName]) ?>
        </td>
        <td>
            <?= $user->email ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
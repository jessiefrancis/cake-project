<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="user index large-9 medium-8 columns content">
    <h3><?= __('User') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('RoleId') ?></th>
                <th scope="col"><?= $this->Paginator->sort('CreatedAt') ?></th>
                <th scope="col"><?= $this->Paginator->sort('UpdatedAt') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($user as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->Id) ?></td>
                <td><?= h($user->Username) ?></td>
                <td><?= h($user->Password) ?></td>
                <td><?= $this->Number->format($user->RoleId) ?></td>
                <td><?= h($user->CreatedAt) ?></td>
                <td><?= h($user->UpdatedAt) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->Id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->Id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->Id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>

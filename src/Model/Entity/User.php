<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $Id
 * @property string $Username
 * @property string $Password
 * @property int $RoleId
 * @property \Cake\I18n\FrozenTime $CreatedAt
 * @property \Cake\I18n\FrozenTime $UpdatedAt
 */
class User extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'Username' => true,
        'Password' => true,
        'RoleId' => true,
        'CreatedAt' => true,
        'UpdatedAt' => true,
    ];
}

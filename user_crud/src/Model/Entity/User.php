<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $ci
 * @property string $name
 * @property string $last_name
 * @property int $current_invoice
 * @property \Cake\I18n\FrozenDate $birthday
 * @property string $birthplace
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
        'ci' => true,
        'name' => true,
        'last_name' => true,
        'birthday' => true,
        'birthplace' => true
    ];
}

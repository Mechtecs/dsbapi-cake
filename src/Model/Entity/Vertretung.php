<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Vertretung Entity
 *
 * @property int $id
 * @property int $id_klasse
 * @property string $stunde
 * @property \Cake\I18n\Time $datum
 * @property string $art
 * @property string $fach
 * @property string $raum
 * @property string $txt
 * @property string $grund
 * @property \Cake\I18n\Time $created_at
 */
class Vertretung extends Entity
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
        '*' => true,
        'id' => false
    ];
}

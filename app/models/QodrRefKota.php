<?php

class QodrRefKota extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     * @Primary
     * @Column(type="string", length=4, nullable=false)
     */
    public $id;

    /**
     *
     * @var string
     * @Column(type="string", length=2, nullable=false)
     */
    public $province_id;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $name;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id', 'QodrRefKecamatan', 'regency_id', ['alias' => 'QodrRefKecamatan']);
        $this->belongsTo('province_id', '\QodrRefProvinsi', 'id', ['alias' => 'QodrRefProvinsi']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'qodr_ref_kota';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return QodrRefKota[]|QodrRefKota
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return QodrRefKota
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}

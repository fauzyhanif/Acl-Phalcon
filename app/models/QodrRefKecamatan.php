<?php

class QodrRefKecamatan extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     * @Primary
     * @Column(type="string", length=7, nullable=false)
     */
    public $id;

    /**
     *
     * @var string
     * @Column(type="string", length=4, nullable=false)
     */
    public $regency_id;

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
        $this->setSchema("promeqs");
        $this->hasMany('id', 'QodrRefDesa', 'district_id', ['alias' => 'QodrRefDesa']);
        $this->belongsTo('regency_id', '\QodrRefKota', 'id', ['alias' => 'QodrRefKota']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'qodr_ref_kecamatan';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return QodrRefKecamatan[]|QodrRefKecamatan
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return QodrRefKecamatan
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}

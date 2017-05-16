<?php

class QodrPmbProv extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     * @Primary
     * @Column(type="string", length=2, nullable=false)
     */
    public $id;

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
        $this->setSchema("pmb");
        $this->hasMany('id', 'QodrPmbKab', 'prov_id', ['alias' => 'QodrPmbKab']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'qodr_pmb_prov';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return QodrPmbProv[]|QodrPmbProv
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return QodrPmbProv
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}

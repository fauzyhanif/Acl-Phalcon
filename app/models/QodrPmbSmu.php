<?php

class QodrPmbSmu extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     * @Column(type="string", length=10, nullable=false)
     */
    public $mu_cd;

    /**
     *
     * @var string
     * @Column(type="string", length=200, nullable=false)
     */
    public $mu_nm;

    /**
     *
     * @var string
     * @Column(type="string", length=4, nullable=false)
     */
    public $ksmu_cd;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("pmb");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'qodr_pmb_smu';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return QodrPmbSmu[]|QodrPmbSmu
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return QodrPmbSmu
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}

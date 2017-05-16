<?php

class QodrPmbJurSmu extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     * @Primary
     * @Column(type="string", length=10, nullable=false)
     */
    public $jur_smu_cd;

    /**
     *
     * @var string
     * @Column(type="string", length=200, nullable=false)
     */
    public $jur_smu_nm;

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
        return 'qodr_pmb_jur_smu';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return QodrPmbJurSmu[]|QodrPmbJurSmu
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return QodrPmbJurSmu
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}

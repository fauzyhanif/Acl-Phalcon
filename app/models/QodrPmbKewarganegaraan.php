<?php

class QodrPmbKewarganegaraan extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     * @Primary
     * @Column(type="string", length=50, nullable=false)
     */
    public $kewarganegaraan;

    /**
     *
     * @var string
     * @Column(type="string", length=150, nullable=false)
     */
    public $nm_wil;

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
        return 'qodr_pmb_kewarganegaraan';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return QodrPmbKewarganegaraan[]|QodrPmbKewarganegaraan
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return QodrPmbKewarganegaraan
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}

<?php

class QodrPmbSesi extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id;

    /**
     *
     * @var string
     * @Column(type="string", length=5, nullable=false)
     */
    public $thn_akd;

    /**
     *
     * @var string
     * @Column(type="string", length=40, nullable=false)
     */
    public $nama_sesi;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $tgl1;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $tgl2;

    /**
     *
     * @var string
     * @Column(type="string", length=2, nullable=false)
     */
    public $status;

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
        return 'qodr_pmb_sesi';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return QodrPmbSesi[]|QodrPmbSesi
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return QodrPmbSesi
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}

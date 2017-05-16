<?php

class QodrPmbPenghasilan extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_penghasilan;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $nm_penghasilan;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $batas_bawah;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $batas_atas;

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
        return 'qodr_pmb_penghasilan';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return QodrPmbPenghasilan[]|QodrPmbPenghasilan
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return QodrPmbPenghasilan
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}

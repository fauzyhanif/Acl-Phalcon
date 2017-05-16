<?php

class QodrPmbKodepos extends \Phalcon\Mvc\Model
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
     * @Column(type="string", length=100, nullable=false)
     */
    public $desa;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=false)
     */
    public $kec;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=false)
     */
    public $kab;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=false)
     */
    public $prov;

    /**
     *
     * @var string
     * @Column(type="string", length=5, nullable=false)
     */
    public $kodepos;

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
        return 'qodr_pmb_kodepos';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return QodrPmbKodepos[]|QodrPmbKodepos
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return QodrPmbKodepos
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}

<?php

class QodrPmbUsergroup extends \Phalcon\Mvc\Model
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
     * @Column(type="string", length=64, nullable=false)
     */
    public $usergroup;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $description;

    /**
     *
     * @var string
     * @Column(type="string", length=16, nullable=false)
     */
    public $icon;

    /**
     *
     * @var string
     * @Column(type="string", length=24, nullable=false)
     */
    public $color;

    /**
     *
     * @var string
     * @Column(type="string", length=1, nullable=false)
     */
    public $actived;

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
        return 'qodr_pmb_usergroup';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return QodrPmbUsergroup[]|QodrPmbUsergroup
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return QodrPmbUsergroup
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}

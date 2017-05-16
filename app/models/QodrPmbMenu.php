<?php

class QodrPmbMenu extends \Phalcon\Mvc\Model
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
     * @Column(type="string", length=32, nullable=false)
     */
    public $menu_group;

    /**
     *
     * @var string
     * @Column(type="string", length=32, nullable=false)
     */
    public $usergroup;

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
        return 'qodr_pmb_menu';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return QodrPmbMenu[]|QodrPmbMenu
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return QodrPmbMenu
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}

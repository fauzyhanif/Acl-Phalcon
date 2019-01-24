<?php

class QodrRefAcl extends \Phalcon\Mvc\Model
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
     * @Column(type="string", length=32, nullable=true)
     */
    public $icon;

    /**
     *
     * @var string
     * @Column(type="string", length=64, nullable=true)
     */
    public $label;

    /**
     *
     * @var string
     * @Column(type="string", length=64, nullable=true)
     */
    public $menu_group;

    /**
     *
     * @var string
     * @Column(type="string", length=11, nullable=true)
     */
    public $parent;

    /**
     *
     * @var string
     * @Column(type="string", length=1, nullable=false)
     */
    public $child;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=true)
     */
    public $url;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $controller;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $action;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=true)
     */
    public $usergroup;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $except;

    /**
     *
     * @var string
     * @Column(type="string", length=1, nullable=false)
     */
    public $actived;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'qodr_ref_acl';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return QodrRefAcl[]|QodrRefAcl
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return QodrRefAcl
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}

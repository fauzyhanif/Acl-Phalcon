<?php

use Phalcon\Mvc\Model;
use Phalcon\Validation;
use Phalcon\Mvc\Model\Validator\Email as EmailValidator;

class Qodr_akd_pmb_cmhs extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     * @Column(type="string", length=5, nullable=true)
     */
    public $thn_akd;
    public $sesi;

    /**
     *
     * @var string
     * @Column(type="string", length=5, nullable=true)
     */
    public $no_test_3;

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=4, nullable=false)
     */
    public $no_test;

    /**
     *
     * @var string
     * @Column(type="string", length=15, nullable=true)
     */
    public $nomor_test;

    /**
     *
     * @var integer
     * @Column(type="integer", length=4, nullable=true)
     */
    public $pin;

    /**
     *
     * @var integer
     * @Column(type="integer", length=5, nullable=true)
     */
    public $golongan;

    /**
     *
     * @var integer
     * @Column(type="integer", length=5, nullable=true)
     */
    public $jurusan;

    /**
     *
     * @var string
     * @Column(type="string", length=60, nullable=true)
     */
    public $nama;

    /**
     *
     * @var integer
     * @Column(type="integer", length=30, nullable=true)
     */
    public $nik;

    /**
     *
     * @var string
     * @Column(type="string", length=20, nullable=true)
     */
    public $email;

    /**
     *
     * @var integer
     * @Column(type="integer", length=30, nullable=true)
     */
    public $npwp;

    /**
     *
     * @var string
     * @Column(type="string", length=30, nullable=true)
     */
    public $tmp_lahir;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $tgl_lahir;

    /**
     *
     * @var string
     * @Column(type="string", length=20, nullable=true)
     */
    public $alamat;

    /**
     *
     * @var integer
     * @Column(type="integer", length=10, nullable=true)
     */
    public $prvns;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $kbptn;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $kcmtn;

    /**
     *
     * @var string
     * @Column(type="string", length=20, nullable=true)
     */
    public $dusun;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $rt;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $rw;

    /**
     *
     * @var integer
     * @Column(type="integer", length=20, nullable=true)
     */
    public $telpon;

    /**
     *
     * @var integer
     * @Column(type="integer", length=20, nullable=true)
     */
    public $no_hp;

    /**
     *
     * @var string
     * @Column(type="string", length=15, nullable=true)
     */
    public $jns_kel;

    /**
     *
     * @var string
     * @Column(type="string", length=11, nullable=true)
     */
    public $wn;

    /**
     *
     * @var string
     * @Column(type="string", length=11, nullable=true)
     */
    public $sttus_kwn;

    /**
     *
     * @var string
     * @Column(type="string", length=11, nullable=true)
     */
    public $agama;

    /**
     *
     * @var string
     * @Column(type="string", length=11, nullable=true)
     */
    public $gol_darah;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $pekerjaan;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $asal_informasi;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $univ_pilke;

    /**
     *
     * @var integer
     * @Column(type="integer", length=10, nullable=true)
     */
    public $nama_smu;

    /**
     *
     * @var integer
     * @Column(type="integer", length=5, nullable=true)
     */
    public $jurusan_smu;

    /**
     *
     * @var string
     * @Column(type="string", length=30, nullable=true)
     */
    public $no_ijazah_smu;

    /**
     *
     * @var integer
     * @Column(type="integer", length=5, nullable=true)
     */
    public $jmlah_mp;

    /**
     *
     * @var string
     * @Column(type="string", length=5, nullable=true)
     */
    public $jmlah_nilai;

    /**
     *
     * @var string
     * @Column(type="string", length=5, nullable=true)
     */
    public $nilai_nem;

    /**
     *
     * @var integer
     * @Column(type="integer", length=4, nullable=true)
     */
    public $jmlah_mp_nem;

    /**
     *
     * @var string
     * @Column(type="string", length=20, nullable=true)
     */
    public $alamat_sklh;

    /**
     *
     * @var integer
     * @Column(type="integer", length=10, nullable=true)
     */
    public $prvns_sklh;

    /**
     *
     * @var integer
     * @Column(type="integer", length=10, nullable=true)
     */
    public $kbptn_sklh;

    /**
     *
     * @var integer
     * @Column(type="integer", length=10, nullable=true)
     */
    public $kcmtn_sklh;

    /**
     *
     * @var integer
     * @Column(type="integer", length=5, nullable=true)
     */
    public $rt_sklh;

    /**
     *
     * @var integer
     * @Column(type="integer", length=5, nullable=true)
     */
    public $rw_sklh;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $nama_pt;

    /**
     *
     * @var integer
     * @Column(type="integer", length=20, nullable=true)
     */
    public $no_ijazah_pt;

    /**
     *
     * @var string
     * @Column(type="string", length=15, nullable=true)
     */
    public $thn_ijazah_pt;

    /**
     *
     * @var integer
     * @Column(type="integer", length=5, nullable=true)
     */
    public $jmlah_sks;

    /**
     *
     * @var string
     * @Column(type="string", length=10, nullable=true)
     */
    public $ipk;

    /**
     *
     * @var string
     * @Column(type="string", length=30, nullable=true)
     */
    public $jur_asal_pt;

    /**
     *
     * @var string
     * @Column(type="string", length=20, nullable=true)
     */
    public $alamat_asal_pt;

    /**
     *
     * @var integer
     * @Column(type="integer", length=10, nullable=true)
     */
    public $prvns_asal_pt;

    /**
     *
     * @var integer
     * @Column(type="integer", length=10, nullable=true)
     */
    public $kbptn_asal_pt;

    /**
     *
     * @var integer
     * @Column(type="integer", length=10, nullable=true)
     */
    public $kcmtn_asal_pt;

    /**
     *
     * @var integer
     * @Column(type="integer", length=5, nullable=true)
     */
    public $rt_asal_pt;

    /**
     *
     * @var integer
     * @Column(type="integer", length=5, nullable=true)
     */
    public $rw_asal_pt;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $nama_ayah;

    /**
     *
     * @var integer
     * @Column(type="integer", length=20, nullable=true)
     */
    public $nik_ayah;

    /**
     *
     * @var integer
     * @Column(type="integer", length=20, nullable=true)
     */
    public $telpon_ayah;

    /**
     *
     * @var integer
     * @Column(type="integer", length=5, nullable=true)
     */
    public $pekerjaan_ayah;

    /**
     *
     * @var integer
     * @Column(type="integer", length=5, nullable=true)
     */
    public $penghasilan_ayah;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $nama_ibu;

    /**
     *
     * @var integer
     * @Column(type="integer", length=20, nullable=true)
     */
    public $nik_ibu;

    /**
     *
     * @var integer
     * @Column(type="integer", length=20, nullable=true)
     */
    public $telpon_ibu;

    /**
     *
     * @var integer
     * @Column(type="integer", length=5, nullable=true)
     */
    public $pekerjaan_ibu;

    /**
     *
     * @var integer
     * @Column(type="integer", length=5, nullable=true)
     */
    public $penghasilan_ibu;

    /**
     *
     * @var string
     * @Column(type="string", length=20, nullable=true)
     */
    public $alamat_ot;

    /**
     *
     * @var integer
     * @Column(type="integer", length=10, nullable=true)
     */
    public $prvns_ot;

    /**
     *
     * @var integer
     * @Column(type="integer", length=10, nullable=true)
     */
    public $kbptn_ot;

    /**
     *
     * @var integer
     * @Column(type="integer", length=10, nullable=true)
     */
    public $kcmtn_ot;

    /**
     *
     * @var string
     * @Column(type="string", length=20, nullable=true)
     */
    public $dusun_ot;

    /**
     *
     * @var integer
     * @Column(type="integer", length=5, nullable=true)
     */
    public $rt_ot;

    /**
     *
     * @var integer
     * @Column(type="integer", length=5, nullable=true)
     */
    public $rw_ot;

    /**
     * Validations and business logic
     *
     * @return boolean
     */
  
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
        return 'qodr_akd_pmb_cmhs';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return QodrAkdPmbCmhs[]|QodrAkdPmbCmhs
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return QodrAkdPmbCmhs
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}

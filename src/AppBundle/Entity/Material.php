<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Material
 *
 * @ORM\Table(name="material")
 * @ORM\Entity
 */
class Material
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="marca", type="string", length=255)
     */
    private $marca;

    /**
     * @var string
     *
     * @ORM\Column(name="modelo", type="string", length=255)
     */
    private $modelo;

    /**
     * @var integer
     *
     * @ORM\Column(name="nserie", type="integer", length=255)
     */
    private $nserie;

    /**
     * @var string
     *
     * @ORM\Column(name="unidad", type="string", length=12)
     */
    private $unidad;

    /**
     * @var string
     *
     * @ORM\Column(name="ubicacion", type="string", length=12)
     */
    private $ubicacion;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="fecha_alta", type="string", length=12)
     */
    private $fecha_alta;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="fecha_baja", type="string", length=12)
     */
    private $fecha_baja;

}
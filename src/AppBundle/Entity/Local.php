<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Asset\Package;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Local
 *
 * @ORM\Table(name="local")
 * @ORM\Entity
 */
class Local
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
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @var Planta
     * @ORM\ManyToOne(targetEntity="Planta", inversedBy="local")
     */
    private $planta;

    /**
     * @var Usuario []
     * @ORM\ManyToMany(targetEntity="Usuario" , mappedBy="locales")
     * @ORM\JoinColumn(nullable=false)
     */

    private $usuarios;

    /**
     * @var Material[]
     * @ORM\OneToMany(targetEntity="Material", mappedBy="local")
     */

    private $local;

}


<?php

namespace INCES\ComedorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Rol")
 */
class Rol
{
  /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @ORM\Column(type="string", length=255)
   */
  private $nombre;

  /**
   * @ORM\Column(type="string", length=255)
   */
  private $monto;

  /**
   * @ORM\Column(type="string", length=2, nullable=true)
   */
  private $horaComerStart;

  /**
   * @ORM\Column(type="string", length=2, nullable=true)
   */
  private $horaComerStartAMPM;

  /**
   * @ORM\Column(type="string", length=2, nullable=true)
   */
  private $horaComerEnd;

  /**
   * @ORM\Column(type="string", length=2, nullable=true)
   */
  private $horaComerEndAMPM;


  /**
   * Get id
   *
   * @return integer
   */
  public function getId()
  {
    return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
      $this->nombre = $nombre;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
      return $this->nombre;
    }

    /**
     * Set monto
     *
     * @param string $monto
     */
    public function setMonto($monto)
    {
      $this->monto = $monto;
    }

    /**
     * Get monto
     *
     * @return string
     */
    public function getMonto()
    {
      return $this->monto;
    }

    /**
     * Set horaComerStart
     *
     * @param string $horaComerStart
     */
    public function setHoraComerStart($horaComerStart)
    {
      $this->horaComerStart = $horaComerStart;
    }

    /**
     * Get horaComerStart
     *
     * @return string
     */
    public function getHoraComerStart()
    {
      return $this->horaComerStart;
    }

    /**
     * Set horaComerEnd
     *
     * @param string $horaComerEnd
     */
    public function setHoraComerEnd($horaComerEnd)
    {
      $this->horaComerEnd = $horaComerEnd;
    }

    /**
     * Get horaComerEnd
     *
     * @return string
     */
    public function getHoraComerEnd()
    {
      return $this->horaComerEnd;
    }

    public function __tostring(){
      return $this->nombre;
    }

    /**
     * Set horaComerStartAMPM
     *
     * @param string $horaComerStartAMPM
     */
    public function setHoraComerStartAMPM($horaComerStartAMPM)
    {
      $this->horaComerStartAMPM = $horaComerStartAMPM;
    }

    /**
     * Get horaComerStartAMPM
     *
     * @return string
     */
    public function getHoraComerStartAMPM()
    {
      return $this->horaComerStartAMPM;
    }

    /**
     * Set horaComerEndAMPM
     *
     * @param string $horaComerEndAMPM
     */
    public function setHoraComerEndAMPM($horaComerEndAMPM)
    {
      $this->horaComerEndAMPM = $horaComerEndAMPM;
    }

    /**
     * Get horaComerEndAMPM
     *
     * @return string
     */
    public function getHoraComerEndAMPM()
    {
      return $this->horaComerEndAMPM;
    }
}

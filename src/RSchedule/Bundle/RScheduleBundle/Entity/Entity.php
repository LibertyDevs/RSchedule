<?php


namespace RSchedule\Bundle\RScheduleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Entity
 * @package \RSchedule\Bundle\RScheduleBundle\Entity
 *
 * @ORM\MappedSuperclass
 * @ORM\HasLifecycleCallbacks()
 */
class Entity
{
    use EntityValidator;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", options={"comment" = "id"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var datetime $created_at
     *
     * @ORM\Column(name="created_at", type="datetime", options={"comment" = "作成日"})
     */
    protected $created_at;

    /**
     * @var datetime $updated_at
     *
     * @ORM\Column(name="updated_at", type="datetime", options={"comment" = "更新日"})
     */
    protected $updated_at;

    public function getId()
    {
        return $this->id;
    }

    public function setCreatedAt(\DateTime $dateTime)
    {
        $this->created_at = $dateTime;
        return $this;
    }

    public function setUpdatedAt(\DateTime $dateTime)
    {
        $this->updated_at = $dateTime;
        return $this;

    }

    public function getCreatedAt()
    {
        return $this->created_at;

    }

    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * 永続化時の前処理
     *
     * @ORM\PreUpdate()
     * @ORM\PrePersist()
     */
    public function prePersist()
    {
        if (!$this->getCreatedAt() instanceof \DateTime) {
            $this->setCreatedAt(new \DateTime("now"));
        }

        $this->setUpdatedAt(new \DateTime("now"));
    }

}
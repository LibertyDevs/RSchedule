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

    /**
     * 永続化時の前処理
     *
     * @ORM\PreUpdate()
     * @ORM\PrePersist()
     */
    public function prePersist()
    {
        $this->setUpdatedAt(new \DateTime("now"));
    }

}
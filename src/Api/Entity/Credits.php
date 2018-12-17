<?php
/**
 * Created by PhpStorm.
 * User: jeanchagas
 * Date: 12/17/18
 * Time: 10:26 AM
 */

namespace Api\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Credits
 * @package Api\Entity
 * @Entity
 * @Table(name="credits")
 */
class Credits extends AbstractEntity
{
    /**
     * @var integer
     * @Id
     * @Column(name="id", type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @var integer
     * @Column(name="customer_id", type="integer")
     */
    private $customer_id;
    /**
     * @var integer
     * @Column(name="current_value", type="integer")
     */
    private $current_value;
    /**
     * @var integer
     * @Column(name="original_value", type="integer")
     */
    private $original_value;
    /**
     * @var \DateTime
     * @Column(name="expirate_date", type="datetime")
     */
    private $expirate_date;
    /**
     * @var bool
     * @Column(name="payment_type", type="boolean")
     */
    private $payment_type;
    /**
     * @var string
     * @Column(name="description", type="text")
     */
    private $description;

    public function __construct()
    {
        $this->id = 0;
        $this->current_value = 0;
        $this->original_value = 0;
        $this->expirate_date = new \DateTime;
        $this->payment_type = 0;
        $this->description = "";
    }

    public static function construct(Array $data)
    {
        $obj = new Credits;
        $obj->setId($data['id']);
        $obj->setCustomerId($data['customer_id']);
        $obj->setCurrentValue($data['current_value']);
        $obj->setOriginalValue($data['original_value']);
        $obj->setExpirateDate($data['expirate_date']);
        $obj->setPaymentType($data['payment_type']);
        $obj->setDescription($data['description']);

        return $obj;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getCustomerId()
    {
        return $this->customer_id;
    }

    public function getCurrentValue()
    {
        return $this->current_value;
    }

    public function getOriginalValue()
    {
        return $this->original_value;
    }

    public function getExpirateDate()
    {
        return $this->expirate_date;
    }

    public function getPaymentType()
    {
        return $this->payment_type;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setCustomerId($customer_id)
    {
        $this->customer_id = $customer_id;
    }

    public function setCurrentValue($current_value)
    {
        $this->current_value = $current_value;
    }

    public function setOriginalValue($original_value)
    {
        $this->original_value = $original_value;
    }

    public function setExpirateDate($expirate_date)
    {
        $this->expirate_date = $expirate_date;
    }

    public function setPaymentType($payment_type)
    {
        $this->payment_type = $payment_type;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function equals($obj)
    {
        if(!($obj instanceof Credits)){
            return false;
        }

        if($this->id != $obj->getId()){
            return false;
        }

        if($this->customer_id != $obj->getCustomerId()){
            return false;
        }

        if($this->current_value != $obj->getCurrentValue()){
            return false;
        }

        if($this->original_value != $obj->getOriginalValue()){
            return false;
        }

        if($this->expirate_date != $obj->getExpirateDate()){
            return false;
        }

        if($this->payment_type != $obj->getPaymentType()){
            return false;
        }

        if($this->description != $obj->getDescription()){
            return false;
        }
    }

    public function toString()
    {
        return "[id: {$this->id}][customer_id: {$this->customer_id}][current_value: {$this->current_value}][original_value: {$this->original_value}][expirate_date: {$this->expirate_date}][payment_type: {$this->payment_type}][description: {$this->description}]";
    }

    public function toArray()
    {
        return [
            "id" => $this->id,
            "customer_id" => $this->customer_id,
            "current_value" => $this->current_value,
            "original_value" => $this->original_value,
            "expirate_date" => $this->expirate_date,
            "payment_type" => $this->payment_type,
            "description" => $this->description
        ];
    }
}

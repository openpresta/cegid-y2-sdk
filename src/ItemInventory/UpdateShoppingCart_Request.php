<?php

namespace Y2\ItemInventory;

class UpdateShoppingCart_Request
{
    /**
     * @var ItemIdentifier $ItemIdentifier
     */
    protected $ItemIdentifier = null;

    /**
     * @var float $Quantity
     */
    protected $Quantity = null;

    /**
     * @var string $WarehouseId
     */
    protected $WarehouseId = null;

    /**
     * @param float $Quantity
     */
    public function __construct($Quantity)
    {
        $this->Quantity = $Quantity;
    }

    /**
     * @return ItemIdentifier
     */
    public function getItemIdentifier()
    {
        return $this->ItemIdentifier;
    }

    /**
     * @param ItemIdentifier $ItemIdentifier
     * @return UpdateShoppingCart_Request
     */
    public function setItemIdentifier($ItemIdentifier)
    {
        $this->ItemIdentifier = $ItemIdentifier;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * @param float $Quantity
     * @return UpdateShoppingCart_Request
     */
    public function setQuantity($Quantity)
    {
        $this->Quantity = $Quantity;
        return $this;
    }

    /**
     * @return string
     */
    public function getWarehouseId()
    {
        return $this->WarehouseId;
    }

    /**
     * @param string $WarehouseId
     * @return UpdateShoppingCart_Request
     */
    public function setWarehouseId($WarehouseId)
    {
        $this->WarehouseId = $WarehouseId;
        return $this;
    }

}

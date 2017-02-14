<?php
class House
{
    private $bedroom;
    private $acre;
    private $furnishing;

    public function __construct($bedroom, $acre,$furnishing)
    {
        $this->bedroom = $bedroom;
        $this->acre = $acre;
        $this->furnishing = $furnishing;
    }
    public function getFeatures()
    {
        return $this->bedroom. ' ' .$this->acre. ' ' . 'house with' . $this->furnishing;
    }
}
class HouseFactory
{
    public static function create($bedroom, $acre,$furnishing)
    {
        return new House($bedroom, $acre,$furnishing);
    }
}
$mansion = HouseFactory::create('4 bedroom', '250 sq foot' ,' great furnishing');
echo($mansion->getFeatures());
?>

<?PHP

class Product {
    private $price;

    public function setPrice($price) {
        if ($price > 0) {
            $this->price = $price;
        }
    }

    public function getPrice() {
        return $this->price;
    }
}
$item = new Product();
$item->setPrice(20);
echo $item->getPrice();

?>

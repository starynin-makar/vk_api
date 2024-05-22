/*public function addItem($product_id, $quantity) {
    // добавить товар в заказ
}

public function removeItem($product_id) {
    // удалить товар из заказа
}

public function getTotal() {
    // подсчитать общую сумму заказа
}

public function checkout() {
    // оформить заказ
}*/

class Product
{
    public $name;
    public $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
}

class Order
{
    private $products = [];

    public function addProduct(Product $product, $quantity)
    {
        $this->products[] = ['product' => $product, 'quantity' => $quantity];
    }

    public function calculateTotal()
    {
        $total = 0;
        foreach ($this->products as $item) {
            $total += $item['product']->price * $item['quantity'];
        }
        return $total;
    }
}

$product1 = new Product('Product 1', 10);
$product2 = new Product('Product 2', 20);

$order = new Order();
$order->addProduct($product1, 2);
$order->addProduct($product2, 1);

$total = $order->calculateTotal();
echo "Total: " . $total;

class Client
{
    private $orders = [];

    public function placeOrder(Order $order)
    {
        $this->orders[] = $order;
    }

    public function checkRegularCustomer()
    {
        // Check if the client is a regular customer based on their order history
    }
}

$client = new Client();
$client->placeOrder($order);

$client->checkRegularCustomer();
class Order {
    private $products = [];

    public function addProduct($product, $quantity) {
        $this->products[] = ['product' => $product, 'quantity' => $quantity];
    }

    public function calculateTotal() {
        $total = 0;
        foreach($this->products as $item) {
            $total += $item['product']->price * $item['quantity'];
        }
        return $total;
    }
}

$order = new Order();
$order->addProduct($product1, 2);
$order->addProduct($product2, 1);

$total = $order->calculateTotal();
echo "Total: " . $total;


class Client
{
    private ClientModel $model;
    public function __construct(OrderModel $model)
    {
        $this->model = $model;
    }

    public function checkRegularCustomer(): void;
}


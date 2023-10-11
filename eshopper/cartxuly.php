<?php
session_start();
require_once 'db/dbConnect.php';
?>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$action = (isset($_GET['action']) ? $_GET['action'] : 'add');
$qty =  (isset($_GET['qty'])) ? $_GET['qty'] : 1;
$sql = mysqli_query($conn, "SELECT * FROM products WHERE id_sp = $id");

if ($sql) {
    $product = mysqli_fetch_assoc($sql);
}
$items = [
    'id' => $product['id_sp'],
    'name' => $product['name_product'],
    'img' => $product['image'],
    'price' => $product['price'],
    'qty' => $qty
];
if ($action == 'add') {
    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]['qty'] += $qty;
    } else {
        $_SESSION['cart'][$id] = $items;
    }
}
if ($action == 'update') {
    $_SESSION['cart'][$id]['qty'] = $qty;
    header("location: cart.php");
} elseif ($action == 'delete') {
    unset($_SESSION['cart'][$id]);
    header("location: cart.php");
} else {
    header("location: index.php");
}



?>
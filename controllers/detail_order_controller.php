<?php class Detail_OrderController
{
    public function index()
    {
        $detail_order_List= detail_order::getAll();
        require_once("./views/detail_order/index_detail_order.php");
    }
    public function newdetail_order()
    {
        $order_List = Order::getAll();
        $color_of_product_List = color_of_product::getAll();
        require_once("./view/detail_order/newDetail_order.php");
    }
}
?>
<?php class color_of_product{
    public $cp_id,$cp_code,$cp_color;
    public function __construct($cp_id,$cp_code,$cp_color)
    {
        $this->cp_id = $cp_id;
        $this->cp_code = $cp_code;
        $this->cp_color = $cp_color;
        
    }
    public static function getAll()
    {
        $color_of_productList =[];
        require("connect_database.php");
        $sql = "select * from ColorProduct";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $cp_id = $my_row[cp_id];
            $cp_code = $my_row[cp_code];
            $cp_color = $my_row[cp_color];
            $color_of_productList[] = new color_of_product($cp_id,$cp_code,$cp_color);
        }
        require("connection_close.php");
        return $color_of_productList;
        ;
    }
}
?>
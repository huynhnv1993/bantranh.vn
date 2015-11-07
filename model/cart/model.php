<?php
/**
 * lưu giỏ hàng vào $_SESSION['cart'] có dạng
 * $_SESSION['cart'] = array(
 *     1 => array(
 *         'id' => 1,
 *         'name' => 'Tranh Son Thuy',
 *         'number' => '3',
 *         'price' => '3500000'
 *     ),
 *     7 => array(
 *         'id' => 7,
 *         'name' => 'Tranh em be',
 *         'number' => '1',
 *         'price' => '4000000'
 *     )
 * );
 */
class Cart extends GetData{
//khởi tạo giỏ hàng
function __construct(){
    if(!isset($_SESSION['cart'])) $_SESSION['cart'] = array();
}

function cart_add($pid){
    $product = $this->get_a_record('sanpham', 'masp',$pid);
    if(isset($_SESSION['cart'][$pid])){
        //nếu đã có sp trong giỏ hàng thì số lượng lên 1
        if($product['slton'] > 0)
        {
        $_SESSION['cart'][$pid]['number']++;
        $new_slton = $product['slton'] -1;
        return $new_slton;
        }
    } else {
        //lấy thông tin sản phẩm từ CSDL và lưu vào giỏ hàng
        if($product['slton'] > 0)
        {
        $_SESSION['cart'][$pid] = array(
            'id' => $pid,
            'name' => $product['tensp'],
            'number' => 1,
            'price' => $product['dongia']
        );
            $new_slton = $product['slton'] -1;
            
            return $new_slton;
        }
    }
    return false;
}
/**
 * Cập nhật số lượng sản phẩm
 */
function cart_update($pid, $number){
    
    $product = $this->get_a_record('sanpham', 'masp',$pid);
    $old_num = $_SESSION['cart'][$pid]['number'];
    if($number<=0){
        //xóa sp ra khỏi giỏ hàng
        $new_slton =  $old_num + $product['slton'];
        unset($_SESSION['cart'][$pid]);
        return $new_slton;
        
    }
     if($number > $old_num ){
           
        if($product['slton']- ($number - $old_num) >=0)
        {
        $_SESSION['cart'][$pid]['number'] = $number;
        $new_slton = $product['slton'] -($number - $old_num);
      
        return $new_slton;
        }
            }
      if($number <= $old_num)
        {
            $_SESSION['cart'][$pid]['number'] = $number;
            $new_slton = $product['slton'] + ($old_num - $number);
            
            return $new_slton;
        }
         
       return false;

}
/**
 * Xóa sản phẩm ra khỏi giỏ hàng
 */
function cart_delete($pid){
    $product = $this->get_a_record('sanpham', 'masp',$pid);
    $new_slton = $product['slton'] + $_SESSION['cart'][$pid]['number'];
    unset($_SESSION['cart'][$pid]);
    return $new_slton;
    
}
/**
 * Tổng giá trị giỏ hàng
 */
function cart_total(){
    $total = 0;
    foreach($_SESSION['cart'] as $product){
        $total += $product['price'] * $product['number'];
    }
    return $total;
}
/**
 * Số sản phẩm có trong giỏ hàng
 */
function cart_number(){
    $number = 0;
    foreach($_SESSION['cart'] as $product){
        $number += $product['number'];
    }
    return $number;
}
/**
 * Danh sách sản phẩm trong giỏ hàng
 */
function cart_list(){
    return $_SESSION['cart'];
}
/**
 * Xóa giỏ hàng
 */
function cart_destroy(){
    $_SESSION['cart'] = array();
}

}


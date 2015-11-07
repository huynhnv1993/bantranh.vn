<?php
class Sign extends getData{

function checkUserFirst($makh){

    $data = $this->get_a_record('khachhang','makh',$makh);
    if($data != null)
        if($data['matk']==null)
            return false;
        else 
        { 
          $active = $this->get_a_record('taikhoan','matk',$data['matk']);
          if($active)
            return true;
          else return false;
        }
    return false;
}


function checkSignin($user,$pass){
    $data = $this->get_a_record('taikhoan','taikhoan',$user);

    if ($data!=null) {
      if($data['kichhoat']== true)
      {
        $matk=$data['matk'];
        $matkhau=$data['matkhau'];
        $pass=md5($pass);
        if ($matkhau==$pass) {
            $makh = $this->get_a_record('khachhang','matk',$matk);
            return $makh;
        }else return false;
      }else
        return false;
      }
      else return false;

      }


function checkAvailableAccount($user){
  $sql ="SELECT matk FROM taikhoan WHERE taikhoan='$user'";
  $data = $this->get_a_record('taikhoan','taikhoan',$user);
  if ($data!=null) {
    return true;
  }
  else return false;
}

}


?>
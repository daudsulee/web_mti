<?php
		session_start();
		include_once("../config/koneksi.php");
		if(isset($_POST['login']) ? $_POST['login']: ''){
			$username= isset($_POST['username']) ? $_POST['username']: '';
			$password= isset($_POST['password']) ? $_POST['password']: '';
			$passmd5=$password;
			if(empty($username) || empty($username)){
				echo ("<script type='text/javascript'>alert('Silahkan isi semua data');document.location='javascript:history.back(1)';
				</script>");
                }else {
                $query=mysql_query("select * from login where username ='$username' and password ='$passmd5'");
                $data=mysql_fetch_array($query);
                if($username==$data['username'] && $passmd5==$data ['password']){
				$_SESSION['id_user']=$data['id_user'];
                $_SESSION['username']=$data['username'];
                $_SESSION['level']=$data['level'];
                $_SESSION['authorized']=1;
                header('Location:admin.php');
				$query2=mysql_query("update login set status='1' where id_user='$_SESSION[id_user]'");
                }else{
                echo ("<script type='text/javascript'>alert('username atau password anda salah');document.location='index.php';
				</script>");
				}
                }
                }
?>
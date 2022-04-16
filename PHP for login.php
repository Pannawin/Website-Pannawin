$host = "127.0.0.1";
$sys_user ="root";
$sys_password = "123456";
$database = "New eatbird link";
$link = mysql_connect($host,$sys_user,$sys_password) or die(mysql_error());
mysql_select_db($database) or die(mysql_error());


if($submit=="Login" ){ 
            $sql="Select * from user Where user_name='".$user_name."' and user_password='".$user_password."' ";
            
            $rstTemp=mysql_query($sql);
                    if(mysql_num_rows($rstTemp)==0){
?>
                            <script language="JavaScript">
                                alert("re enter your password ......  ^_^ ");
                                window.location.href = "index.php";
                            </script>
<?                    
                    }else{
?>
                            <script language="JavaScript">
                                alert("Hello  <?=$user_name?> Welcome");
                                window.location.href = "member.php"; //Send User to login
                            </script>
<?
                    }
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<form name="Myform" method="post"  action="index.php?submit=Login">
   User Name : <input name="user_name" type="text" size="15" maxlength="15">
   <br><br>
   Password  : <input name="user_password" type="password" size="15" maxlength="15">
   <br><br>
   <input type="submit" name="OK" value="   LOG - IN    "  >
   <input type="reset" name="OK2" value="    CLEAR     "  >
</form>
 
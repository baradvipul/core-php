<form method="post">
Name: <input type="text" name="name"><br>
Email: <input type="email" name="email"><br>
<input type="submit" name="submit">
</form>
<?php
if(isset($_POST['submit'])){
echo "Name: ".$_POST['name']."<br>";
echo "Email: ".$_POST['email'];
}
?>
<?php
echo "GET:<br>";
echo "<pre>";
var_dump($_GET);
echo "</pre>";
echo "POST:<br>";
echo "<pre>";
var_dump($_POST);
echo "</pre>";
echo "REQUEST:<br>";
echo "<pre>";
var_dump($_REQUEST);
echo "</pre>";

?>

<a href="?age=550">Click me</a>
<form action="" method="post" enctype="multipart/form-data">
    Firstname: <input name="firstname" placeholder="Firstname" value="" type="text"><br>
    Lastname: <input name="lastname" value="" type="text"><br>
    Password: <input name="password" value="" type="password"><br>
    <!--    <input name="" value="" type="checkbox"><br>-->
    <!--    <input name="" value="" type="radio"><br>-->

    <input name="file" value="" type="file"><br>

<!--    <input name="" value="" type="date">-->
<!--    <input name="" value="" type="color">-->
<!--    <input name="" value="" type="number">-->
<!--    <input name="" value="" type="email">-->

    <select name="city">
        <option value="shz">Shiraz</option>
        <option value="teh">Tehran</option>
        <option selected value="tab">Tabriz</option>
    </select><br>

    <textarea name="address"></textarea><br>


<!--    <button type="submit"><b>dfgd</b> fgdfg</button>-->

    <input name="" value="Submit Btn!" type="submit"><br>
    <!--    <input name="" value="" type="image" src="btn.png" style="width: 100px"><br>-->
    <!--    <input name="" value="Reset!" type="reset"><br>-->


</form>
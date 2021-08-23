<?php
require_once "pdo.php";

if (isset($_POST['email']) && isset($_POST['password'])) {
    echo "<p>Handling POST Data</p>\n";

    //This is how PDO was meant to be used. Instead of concatenating the values in the query, we use placeholders to avoid sql injections

    $sql = "SELECT FROM users WHERE email = :em && password = :pw";

    echo "<p>$sql</p>\n";

    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':em'=>$_POST['email'],
        ':pw'=>$_POST['password']
    ));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    var_dump($row);
    echo "-->\n";
    if ($row === FALSE) {
        echo "<h1>Login incorrect.</h1>\n";
    } else {
        echo "<p>Login success.</p>\n";
    }
}
?>
<p>Please Login</p>
<form method="post">
    <p>Email:<input type="text" size="40" name="email"></p>
    <p>Password:
        <input type="text" size="40" name="password"></p>
    <p><input type="submit" value="Login"/>
        <a href="<?php echo ($_SERVER['PHP_SELF']);?>">Refresh</a></p>
</form>
<p>
    Check out this
    <a href="http://xkcd.com/327/" target="_blank">XKCD comic that</a>
</p>
<html>
   <head>
   <style>
    h1{margin-auto:0}
    </style>
   </head>
   <body>
   <header><h1>office supply store</h1></header>
   
   <?php
   $host = '127.0.0.1';
$db   = 'northwind';
$user = 'root';
$pass = '';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $opt);

$stmt = $pdo->query('SELECT * FROM l40_screens');
echo " <lable>choose your screen   from menu:  ";
echo "<select>";
while ($row = $stmt->fetch())
{
    echo "<option value=". $row["id"].">manufacturer: " . $row["manufacturer"].", model: ". $row["model"].", size: ".
                           $row["size"].", price: ". $row["price"]."</option>";
};
    echo "</select>";
    echo " </lable><br><br><br>";

    $stmt = $pdo->query('SELECT * FROM l40_mouses');
echo " <lable>choose your mouse   from menu:   ";
echo "<select>";
while ($row = $stmt->fetch())
{
    echo "<option value=". $row["id"].">manufacturer: " . $row["manufacturer"].", model: ". $row["model"].
                           $row["size"].", price: ". $row["price"]."</option>";
};
    echo "</select>";
    echo " </lable> <br><br><br>";

    $stmt = $pdo->query('SELECT * FROM l40_keyboards');
echo " <lable>choose your keybord  from menu:  ";
echo "<select>";
while ($row = $stmt->fetch())
{
    echo "<option value=". $row["id"].">manufacturer: " . $row["manufacturer"].", model: ". $row["model"].
                           $row["size"].", price: ". $row["price"]."</option>";
};
    echo "</select>";
    echo " </lable><br><br><br>";

    $stmt = $pdo->query('SELECT * FROM l40_computers');
echo " <lable>choose your computer from menu:";
echo "<select>";
while ($row = $stmt->fetch())
{
    echo "<option value=". $row["id"].">manufacturer: " . $row["manufacturer"].", motherboard: ". $row["motherboard"].
                           $row["size"].", price: ". $row["price"]."</option>";
};
    echo "</select>";
    echo " </lable> <br><br><br>";


    ?>
    <button> place order</button>
    </body>
</html>

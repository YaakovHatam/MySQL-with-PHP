# MySQL-with-PHP

## Insert with `PDO`
```sql
// Insert 
$statement = $pdo->prepare("INSERT INTO testtable(name, lastname, age)
    VALUES(:fname, :sname, :age)");
$statement->execute(array(
    "fname" => "Bob",
    "sname" => "Desaunois",
    "age" => "18"
));
?>
```

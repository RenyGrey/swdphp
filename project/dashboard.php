<?php 
    session_start();
    if(!isset($_SESSION['login'])) {
       header("Location: index.php");
       exit();
    }

    $theme = isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light';
    $bg = $theme == 'dark' ? '#222' : '#fff';
    $color = $theme == 'dark' ? '#fff' : '#222';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body style="background-color: <?php echo $bg; ?>; color: <?php echo $color; ?>;">

<h1>Welcome to Dashboard </h1>
<?php 
    echo $_SESSION['username'];
?> : |

<a href="logout.php">Logout</a>
<a href="set_theme.php">Switch Theme</a>
     <?php 
        $students = [
            ["name" => "Alice", "grade" => 90],
            ["name" => "Bob", "grade" => 80],
            ["name" => "Charlie", "grade" => 70],
            ["name" => "Diana", "grade" => 60],
            ["name" => "Evan", "grade" => 50],
          
        ];
    ?>

    <table border="1" cellpadding="10" cellspacing="10px">

        <tr>
            <th>Name</th>
            <th>Grade</th>
        </tr>

        <?php foreach ($students as $student): ?>

        <tr>
            <td><?= $student['name'] ?></td>
            <td><?= $student['grade'] ?></td>
        </tr>

        <?php endforeach; ?>
    </table>
</body>
</html>
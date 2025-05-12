<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $students = [
            ["name" => "Alice", "age" => 24, "grade" => 90],
            ["name" => "Bob", "age" => 19, "grade" => 80],
            ["name" => "Charlie", "age" => 23, "grade" => 70],
            ["name" => "Diana", "age" => 20, "grade" => 60],
            ["name" => "Evan", "age" => 21, "grade" => 50],
          
        ];
    ?>

    <table border="1" cellpadding="5">
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Grade</th>
        </tr>
        <?php foreach ($students as $student): ?>
        <tr>
            <td><?= $student['name'] ?></td>
            <td><?= $student['age'] ?></td>
            <td><?= $student['grade'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Lab6 Q2</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }
    </style>
</head>
<body>

<?php
$students = [
    [
        'name' => 'Alice',
        'program' => 'BIP',
        'age' => 21
    ],
    [
        'name' => 'Bob',
        'program' => 'BIS',
        'age' => 20
    ],
    [
        'name' => 'Raju',
        'program' => 'BIT',
        'age' => 22
    ]
];

echo "<table>";
echo "<tr><th>Name</th><th>Program</th><th>Age</th></tr>";

foreach ($students as $student) {
    echo "<tr>";
    echo "<td>" . $student['name'] . "</td>";
    echo "<td>" . $student['program'] . "</td>";
    echo "<td>" . $student['age'] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>

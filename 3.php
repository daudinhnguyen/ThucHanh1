<?php
$arrs = ['PHP', 'HTML', 'CSS', 'JS'];
?>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 150px;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
</head>
<table>
    <thead>
        <th>Tên khóa học</th>
    </thead>
    <tbody>
        <?php
        foreach ($arrs as $key => $value) {
            echo "<tr>";
            echo "<td>$value</td>";
            echo "</tr>";
            
        }
        ?>
    </tbody>
</table>
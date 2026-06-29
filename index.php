<?php
include "include/db.php";
$result = $conn->query("SELECT * FROM tasks ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Task Management System</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Task Management System</h1>

    <!--Task Form-->
    <form action = "actions/add-task.php" method = 'POST'>

    <label><B>Title</B></label><br>
    <input 
        type="text" 
        name="title" 
        placeholder="Enter the title" 
        required><br><br>

    <label><B>Description</B></label><br>
    <textarea name="description" placeholder ="Description"></textarea><br><br>

    <label><B>Priority</B></label><br>
    <select name="priority">
        <option value = "Low">Low</option>
        <option value = "Medium">Medium</option>
        <option value = "High">High</option>
    </select><br><br>

    <button type="submit">Add Task</button>
    </form>

    <hr>

    <h2>Task List</h2>

    <table border='1'>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Priority</th>
            <th>Created_at</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    <?php while($row = $result->fetch_assoc()){?>
        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['title'];?></td>
            <td><?php echo $row['description'];?></td>
            <td><?php echo $row['priority'];?></td>
            <td><?php echo $row['created_at'];?></td>
            <td><?php echo $row['status'];?></td>
            
        
        
            <td>
                <a href="actions/update-task.php?id=<?php echo $row['id'];?>">
                    Update status
                </a>

                <a href="actions/delete-task.php?id=<?php echo $row['id'];?>">
                    Delete
                </a>
            </td>
        </tr>

    <?php}?>
        
    </table>



    
</body>
</html>
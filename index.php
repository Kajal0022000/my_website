<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My website</title>
</head>

<body>
    <table style=''>
        <thead>
            <tr>
                <td>ID</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Grade</td>
                <td>Age</td>
            </tr>
        </thead>
        <tbody>
            <?php
            // Connect to database
            $user = 'root';
            $password = '';
            $database = 'mywebsite';
            $servername = 'localhost:3306';
            $mysqli = new mysqli(
                $servername,
                $user,
                $password,
                $database
            );

            // Checking for connections
            if (!$mysqli) {
                echo "Connection Unsuccessful!!!";
            } else {
                // printing column name above the data 
            
                // sql query to fetch all the data 
                $query = "SELECT * FROM `students`";
                // mysql_query will execute the query to fetch data 
                if ($is_query_run = mysqli_query($mysqli, $query)) {
                    // echo "Query Executed"; 
                    // loop will iterate until all data is fetched 
                    while ($query_executed = $is_query_run->fetch_assoc()) {
                        ?>
                        <tr>
                            <td>
                                <?php echo $query_executed['id'] ?>
                            </td>
                            <td>
                                <?php echo $query_executed['first_name'] ?>
                            </td>
                            <td>
                                <?php echo $query_executed['last_name'] ?>
                            </td>
                            <td>
                                <?php echo $query_executed['grade'] ?>
                            </td>
                            <td>
                                <?php echo $query_executed['age'] ?>
                            </td>
                        </tr>
                        <?php
                    }
                } else {
                    echo "Error in execution!";
                }
            }

            ?>
        </tbody>
    </table>

</body>

<style>
    table,
    tr,
    td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 5px;
    }
</style>

</html>
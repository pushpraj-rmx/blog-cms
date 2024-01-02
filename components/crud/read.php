<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {

    // READING 
    $sql = "SELECT * FROM users";
    $result = $connection->query($sql);
    if ($result->num_rows > 0) { ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) : ?>
                    <tr>
                        <td>
                            <?= $row['id'] ?>
                        </td>
                        <td>
                            <?= $row['name'] ?>
                        </td>
                        <td>
                            <?= $row['age'] ?>
                        </td>
                        <td>
                            <form action="<?= BASE_URL ?>components/crud/delete.php" method="POST">
                                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                <button type="submit" name="delete" value="<?= $row['id'] ?>">Delete</button>
                            </form>
                        </td>

                    </tr>
                <?php endwhile; ?>
            </tbody>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Action</th>
                </tr>
            </thead>
        </table>
<?php
    } else {
        echo "no record found";
    }
}
?>
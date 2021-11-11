<div class="container-fluid">

    <table class="table align-middle">
        <thead class="table-info">
        <tr>
            <th>STT</th>
            <th>User</th>
            <th>Book name</th>
            <th>Start Date</th>
            <th>Finish Date</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        <?php if (isset($borrowes)) : ?>
            <?php foreach ($borrowes as $key => $borrow): ?>
                <tr class="text-capitalize">
                    <td><?php echo $key+1?></td>
                    <td><?php echo $borrow["user_id"] ?></td>
                    <td><?php echo $borrow["book_id"] ?></td>
                    <td><?php echo $borrow["dateStart"] ?></td>
                    <td><?php echo $borrow["datFinish"] ?></td>
                    <td><?php echo $borrow["status"] ?></td>
                    <td><a class="btn btn-danger" onclick="return confirm('Are you sure??')"
                           href="index.php?page=category-delete&id=<?php echo $borrow["id"] ?>">Delete</a></td>
                    <td><a class="btn btn-warning" href="index.php?page=category-update&id=<?php echo $borrow["id"] ?>">Edit</a></td>

                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
    </table>


</div>
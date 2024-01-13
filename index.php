<?php
include 'header.php';
?>

<div class="container-fluid d-flex justify-content-center">
    <div class="tab-content d-flex my-5 justify-content-center align-items-center" id="v-pills-tabContent" style="height: 300px;">

        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
            <div class="px-2 position-relative" style="font-size: 1rem;">

                <table class="table">
                    <thead align="center">
                        <tr>
                            <th scope="col" class="text-start px-md-4">First</th>
                            <th scope="col" class="px-md-4">Last</th>
                            <th scope="col" class="px-md-4">Year Level</th>
                            <th scope="col" class="px-md-4">School</th>
                            <th scope="col" class="px-md-4">Course</th>
                            <th scope="col" class="px-md-4">Action</th>
                        </tr>
                    </thead>
                    <tbody align="center">

                        <?php
                        $select = $conn->prepare("SELECT * FROM users");
                        $select->execute();
                        foreach ($select as $selects) { ?>
                            <tr>
                                <td class="px-md-4"><?= $selects['first_name'] ?></td>
                                <td class="px-md-4"><?= $selects['last_name'] ?></td>
                                <td class="px-md-4"><?= $selects['year_level'] ?></td>
                                <td class="px-md-4"><?= $selects['school'] ?></td>
                                <td class="px-md-4"><?= $selects['course'] ?></td>
                                <td class="px-md-1">
                                    <a class="text-decoration-none " href="edit.php?id=<?= $selects['id'] ?>" class="text-decoration-none">✏</a>
                                    |
                                    <a class="text-decoration-none" href="process.php?delete&id=<?= $selects['id'] ?>" class="text-decoration-none">❌</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="mb-3 form-check card-body text-center">
                <a href="create.php" type="button" class="btn btn-success text-white">Add</a>
            </div>
        </div>
    </div>
</div>
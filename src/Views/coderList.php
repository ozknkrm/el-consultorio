<html>

<?php
    require_once("Components/layout.php");
?>

<body>
    <?php
    require_once("Components/header.php");
    ?>

    <main>
        <div class="card-header py-3">
            <h1><small class="text-muted">Task Appointment</small></h1>
        </div>

        <div class="card-header py-3 mb-5">
            <a href="?action=create">
                <button type="button" class="btn btn-outline-dark go-add-task float-end btn-lg">Add Task</button>
            </a>
        </div>
        <div class="table-responsive">
            <table class="table  table-dark table-hover">
                <thead class="table-light">
                    <tr>
                        <th scope="col">Date / time</th>
                        <th scope="col">Coder Name / Team</th>
                        <th scope="col">issue</th>
                        <th scope="col">Id</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    foreach ($data["coder"] as $coder){
                        echo "
                        <tr>
                            <td>{$coder->getDate_time()}</td>
                            <td>{$coder->getCoder()}</td>
                            <td>{$coder->getIssue()}</td>
                            <td>{$coder->getId()}</td>
                            <td>
                            <a href='?action=delete&id={$coder->getId()}'>🗑️</a>
                            <a href='?action=edit&id={$coder->getId()}'>✏️​</a>
                            
                            </td>

                        </tr>
                        ";
                    }
                    ?>
                </tbody>
            </table>
        </div>


        
    </main>
    
    <?php
    require_once("Components/footer.php");
    ?>
</body>


</html>
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
        <div class="table-responsive">
            <table class="table  table-dark table-hover">
                <thead class="table-light">
                    <tr>
                        <th scope="col">Date / time</th>
                        <th scope="col">Coder Name / Team</th>
                        <th scope="col">issue</th>
                        <th scope="col">Id</th>
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
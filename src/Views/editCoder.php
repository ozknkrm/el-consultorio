<?php

require_once("components/layout.php");
require_once("components/header.php");
?>
<body>
    <div class="edit row justfiy-content-center">
        <main class="card" style="width:80%; height:27rem; display: flex; justify-content: center;">
        <h2 class="text-center" style="margin-bottom: 3rem; margin-top: 1rem;">Edit</h2>
            <a href="./index.php"> <button type="button" id="button-cancel" class="btn btn-outline-danger button-cancel">Cancel</button></a>

            <form class="justify-content: center" action='?action=update&id=<?php echo $data["coder"]->getId() ?>' method="post">
                <div class="input-group" style="margin-bottom: 2rem; width: 90%; margin-left: 5%;">
                    <span class="input-group-text">Coder/Team</span>
                    <input type="text" class="form-control" name="coder" required value='<?php echo $data["coder"]->getCoder() ?>'>
                </div>
                <div class="input-group" style="width: 90%; margin-left: 5%;">
                    <span class="input-group-text">Issue Description</span>
                    <input type="text" class="form-control" area-label="With textarea" name="issue" required value='<?php echo $data["coder"]->getIssue() ?>'>
                </div>
                <div class="botones" style="margin-bottom: 10px;">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-primary">Reset</button>
                </div>
            </form>
        </main>
    </div>
    <?php
    require_once ("components/footer.php");
    ?>
</body>
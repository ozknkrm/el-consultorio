<?php
    require_once("Components/layout.php");

    require_once("Components/header.php"); ?>


<body>
    <div class="create row justify-content-center">
    <main class="card" style="width:80%; height:27rem; display:flex; justify-content:center;">

    <h2 class="text-center" style="margin-bottom:3rem; margin-top:1rem;">New Appointment</h2>
    <a href="./index.php"><button type="button" id="button-cancel" class="btn btn-primary">Cancel</button></a>
        <form class="justify-content-center" action="?action=store" method="post">
            <div class="mb-3">
                <label class="form-label">Coder / Team</label>
                <input type="text" class="form-control" name="newcoder" placeholder="write your name">
                <div class="form-text">We'll help you to learn what you need to learn!</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Class</label>
                <input type="text" class="form-control" name="issue" placeholder="type what subject you want to learn">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
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


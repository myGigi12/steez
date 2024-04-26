<?php
   include 'navbar.php';
?>

    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card card-body">
                <form action="withdraw_action.php" method="POST">

                    <label for="">Amount</label>
                    <input type="text" name="amount" class="form-control mb-3">

                    <label for="">Enter passward</label>
                    <input type="password" name="password" class="form-control mb-3">

                    <button class="btn btn-dark">Withdraw</button>
                </form>
            </div>
        </div>
    </div>

<?php
   include 'footer.php';
?>
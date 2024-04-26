<?php
   include 'navbar.php';

   $myid = $_SESSION ['id'];

   $sql="SELECT * from transactions where customer_id = '$myid'";
   $get_txns = $con->query($sql);
?>

    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card card-body">
                <h4>Transactions History</h4>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Amount</th>
                            <th>type</th>
                            <th>Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php 
                           while ($txn = $get_txns->fetch_assoc()) {
                            //echo "Hello World <br>";
                          
                        ?>
                        <tr>
                            <td><?php echo $txn['id']  ?></td>
                            <td><?php echo $txn['amount'] ?></td>
                            <td><?php echo $txn['type']?></td>
                            <td><?php echo $txn['date']?></td>
                            <td><?php echo $txn['status']?></td>
                        </tr>
                        <?php
                         }
                         ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>

<?php
   include 'footer.php';
?>
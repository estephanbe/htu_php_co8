<?php
// Read operation: Multiple
include_once './partials/header.php'; 

$connection = connection();

// Send SQL/Database request
$sql = "SELECT * FROM Customers;";
$result = mysqli_query($connection, $sql);

// Process data
$customers = array();
if(mysqli_num_rows($result) > 0) {

    while($customer = mysqli_fetch_assoc($result)){
        $customers[] = array(
            'id' => $customer['id'],
            'firstname' => $customer['firstname'],
            'lastname' => $customer['lastname'],
            'phone_num' => $customer['phone_num'],
            'email' => $customer['email'],
            'reg_date' => $customer['reg_date'],
        );
    }
} else {
    echo false;
}

// Close connection
mysqli_close($connection);

?>


<div class="d-flex justify-content-between align-items-center">
    <h1>Students Management</h1>
    <a href="./create.php" class="btn btn-success">Add Customer</a>
</div>
<hr class="my-5">

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Regestration Date</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ( $customers as $customer ) : ?>
            <tr>
                <td><?= $customer['id'] ?></td>
                <td><?= $customer['firstname'] ?></td>
                <td><?= $customer['lastname'] ?></td>
                <td><?= $customer['email'] ?></td>
                <td><?= $customer['phone_num'] ?></td>
                <td><?= $customer['reg_date'] ?></td>
                <td>
                    <a href="./customer.php?id=<?= $customer['id'] ?>">View Customer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>



<?php include_once './partials/footer.php'; ?>
<?php

require 'dbcon.php';

if(isset($_POST['save_order']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $ordername = mysqli_real_escape_string($con, $_POST['ordername']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
    $pickup = mysqli_real_escape_string($con, $_POST['pickup']);

    if($name == NULL || $ordername == NULL || $price == NULL || $pickup == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }

    $query = "INSERT INTO orderpickup (name,ordername,price,pickup) VALUES ('$name','$ordername','$price','$pickup')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Order Created Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Order Not Created'
        ];
        echo json_encode($res);
        return;
    }
}


if(isset($_POST['update_order']))
{
    $id = mysqli_real_escape_string($con, $_POST['id']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $ordername = mysqli_real_escape_string($con, $_POST['ordername']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
    $pickup = mysqli_real_escape_string($con, $_POST['pickup']);

    if($name == NULL || $ordername == NULL || $price == NULL || $pickup == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }

    $query = "UPDATE orderpickup SET name='$name', ordername='$ordername', price='$price', pickup='$pickup' 
                WHERE id='$id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Order Updated Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else 
    {
        $res = [
            'status' => 500,
            'message' => 'Order Not Updated'
        ];
        echo json_encode($res);
        return;
    }
}


if(isset($_GET['id']))
{
    $id = mysqli_real_escape_string($con, $_GET['id']);

    $query = "SELECT * FROM orderpickup WHERE id='$id'";
    $query_run = mysqli_query($con, $query);

    if(mysqli_num_rows($query_run) == 1)
    {
        $order = mysqli_fetch_array($query_run);

        $res = [
            'status' => 200,
            'message' => 'Order Fetch Successfully by id',
            'data' => $order
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 404,
            'message' => 'Order Id Not Found'
        ];
        echo json_encode($res);
        return;
    }
}

if(isset($_POST['delete_order']))
{
    $id = mysqli_real_escape_string($con, $_POST['id']);

    $query = "DELETE FROM orderpickup WHERE id='$id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Order Deleted Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Order Not Deleted'
        ];
        echo json_encode($res);
        return;
    }
}

?>
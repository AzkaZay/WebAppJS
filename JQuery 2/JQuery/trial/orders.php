<!doctype html>
<html lang="en">
    <head>


    <style>
        body{
            background-image: linear-gradient(rgba(20,4,10,0.4),rgba(20,4,10,0.4)),url("slider/shot2.jpg");
            
        }
        .btn.btn-primary.btn-lg{
            margin: 310px;
            margin-top: 100px;
            filter: drop-shadow(0px 0px 0.9rem #fff);
        }
        .card{
            filter: drop-shadow(0px 0px 0.75rem #000000);
            margin-top: 100px;
        }
        .btn.btn-success.btn-lg{
            margin-left: 500px;
            margin-top: -200px;
            filter: drop-shadow(0px 0px 0.9rem #fff);
        }

    </style>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
</head>
<body>


<div class="modal fade" id="orderAddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Order</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="saveOrder">
            <div class="modal-body">

                <div id="errorMessage" class="alert alert-warning d-none"></div>

                <div class="mb-3">
                    <label for="">Customer name:</label>
                    <input type="text" name="name" class="form-control" />
                </div>
                <div class="mb-3">
                    <label for="">Order name:</label>
                    <input type="text" name="ordername" class="form-control" />
                </div>
                <div class="mb-3">
                    <label for="">Quantity:</label>
                    <input type="text" name="price" class="form-control" />
                </div>
                <div class="mb-3">
                    <label for="">PickUp:</label>
                    <input type="text" name="pickup" class="form-control" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save Order</button>
            </div>
        </form>
        </div>
    </div>
</div>


<div class="modal fade" id="orderEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Record</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="updateOrder">
            <div class="modal-body">

                <div id="errorMessageUpdate" class="alert alert-warning d-none"></div>

                <input type="hidden" name="id" id="id" >

                <div class="mb-3">
                    <label for="">Customer name:</label>
                    <input type="text" name="name" id="name" class="form-control" />
                </div>
                <div class="mb-3">
                    <label for="">Order name</label>
                    <input type="text" name="ordername" id="ordername" class="form-control" />
                </div>
                <div class="mb-3">
                    <label for="">Quantity</label>
                    <input type="text" name="price" id="price" class="form-control" />
                </div>
                <div class="mb-3">
                    <label for="">PickUp</label>
                    <input type="text" name="pickup" id="pickup" class="form-control" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update Record</button>
            </div>
        </form>
        </div>
    </div>
</div>


<div class="modal fade" id="orderViewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">View Record</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
            <div class="modal-body">

                <div class="mb-3">
                    <label for="">Customer name</label>
                    <p id="view_name" class="form-control"></p>
                </div>
                <div class="mb-3">
                    <label for="">Order name</label>
                    <p id="view_ordername" class="form-control"></p>
                </div>
                <div class="mb-3">
                    <label for="">Quantity</label>
                    <p id="view_price" class="form-control"></p>
                </div>
                <div class="mb-3">
                    <label for="">PickUp</label>
                    <p id="view_pickup" class="form-control"></p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Orders & PickUp time
                        
                        <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#orderAddModal">
                            Add Order
                        </button>
                    </h4>
                </div>
                <div class="card-body">

                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Customer name</th>
                                <th>Order name</th>
                                <th>Quantity</th>
                                <th>PickUp</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require 'dbcon.php';

                            $query = "SELECT * FROM orderpickup";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $order)
                                {
                                    ?>
                                    <tr>
                                        <td><?= $order['id'] ?></td>
                                        <td><?= $order['name'] ?></td>
                                        <td><?= $order['ordername'] ?></td>
                                        <td><?= $order['price'] ?></td>
                                        <td><?= $order['pickup'] ?></td>
                                        <td>
                                            <button type="button" value="<?=$order['id'];?>" class="viewOrderBtn btn btn-info btn-sm">View</button>
                                            <button type="button" value="<?=$order['id'];?>" class="editOrderBtn btn btn-success btn-sm">Edit</button>
                                            <button type="button" value="<?=$order['id'];?>" class="deleteOrderBtn btn btn-danger btn-sm">Delete</button>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                            
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <script>
        $(document).on('submit', '#saveOrder', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("save_order", true);

            $.ajax({
                type: "POST",
                url: "code.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    
                    var res = jQuery.parseJSON(response);
                    if(res.status == 422) {
                        $('#errorMessage').removeClass('d-none');
                        $('#errorMessage').text(res.message);

                    }else if(res.status == 200){

                        $('#errorMessage').addClass('d-none');
                        $('#orderAddModal').modal('hide');
                        $('#saveOrder')[0].reset();

                        alertify.set('notifier','position', 'top-right');
                        alertify.success(res.message);

                        $('#myTable').load(location.href + " #myTable");

                    }else if(res.status == 500) {
                        alert(res.message); 
                    }
                }
            });

        });

        $(document).on('click', '.editOrderBtn', function () {

            var id = $(this).val();
            
            $.ajax({
                type: "GET",
                url: "code.php?id=" + id,
                success: function (response) {

                    var res = jQuery.parseJSON(response);
                    if(res.status == 404) {

                        alert(res.message);
                    }else if(res.status == 200){

                        $('#id').val(res.data.id);
                        $('#name').val(res.data.name);
                        $('#ordername').val(res.data.ordername);
                        $('#price').val(res.data.price);
                        $('#pickup').val(res.data.pickup);

                        $('#orderEditModal').modal('show');
                    }

                }
            });

        });

        $(document).on('submit', '#updateOrder', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("update_order", true);

            $.ajax({
                type: "POST",
                url: "code.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    
                    var res = jQuery.parseJSON(response);
                    if(res.status == 422) {
                        $('#errorMessageUpdate').removeClass('d-none');
                        $('#errorMessageUpdate').text(res.message);

                    }else if(res.status == 200){

                        $('#errorMessageUpdate').addClass('d-none');

                        alertify.set('notifier','position', 'top-right');
                        alertify.success(res.message);
                        
                        $('#orderEditModal').modal('hide');
                        $('#updateOrder')[0].reset();

                        $('#myTable').load(location.href + " #myTable");

                    }else if(res.status == 500) {
                        alert(res.message);
                    }
                }
            });

        });

        $(document).on('click', '.viewOrderBtn', function () {

            var id = $(this).val();
            $.ajax({
                type: "GET",
                url: "code.php?id=" + id,
                success: function (response) {

                    var res = jQuery.parseJSON(response);
                    if(res.status == 404) {

                        alert(res.message);
                    }else if(res.status == 200){

                        $('#view_name').text(res.data.name);
                        $('#view_ordername').text(res.data.ordername);
                        $('#view_price').text(res.data.price);
                        $('#view_pickup').text(res.data.pickup);

                        $('#orderViewModal').modal('show');
                    }
                }
            });
        });

        $(document).on('click', '.deleteOrderBtn', function (e) {
            e.preventDefault();

            if(confirm('Are you sure you want to delete this data?'))
            {
                var id = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "code.php",
                    data: {
                        'delete_order': true,
                        'id': id
                    },
                    success: function (response) {

                        var res = jQuery.parseJSON(response);
                        if(res.status == 500) {

                            alert(res.message);
                        }else{
                            alertify.set('notifier','position', 'top-right');
                            alertify.success(res.message);

                            $('#myTable').load(location.href + " #myTable");
                        }
                    }
                });
            }
        });

    </script>

<a href="list.php" class="btn btn-primary btn-lg">Go to flavour list</a>
<a href="Main.php" class="btn btn-success btn-lg">Go back to main Page</a>

</body>
</html>
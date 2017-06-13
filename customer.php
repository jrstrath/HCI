<!DOCTYPE HTML>

<html>
	<head>
		<title>Products</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="index.html" class="logo"><strong>ONLINE POS</strong> by strathmore</a>
									<ul class="icons">
										<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
										<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon fa-medium"><span class="label">Medium</span></a></li>
									</ul>
								</header>

							<!-- Content -->
							<!--Top BUttons -->
								<section>
									<header class="main">
										<h1>CUSTOMERS</h1>
									</header>

									<!--Add a customer-->
									<button onclick="document.getElementById('id10').style.display='block'">ADD CUSTOMER</button>

									<div id="id10" class="modal">
									  <span onclick="document.getElementById('id10').style.display='none'" class="close" title="Close Modal">&times;</span>
									  <form class="modal-content animate" action="customer.php" method="post">
									    <div class="container">

									      <label align="center"><h2>Add New Customer</h2></label>
									      <br>

									      <label><b>First-Name</b></label>
									      <input type="text" placeholder="First-Name" name="first_name" required>

									      <label><b>Surname</b></label>
									      <input type="text" placeholder="Surname" name="urname" required>

									      <label><b>email</b></label>
									      <input type="email" placeholder="email" name="email" required>

									      <label><b>Phone No.</b></label>
									      <input type="text" placeholder="Phone number" name="phone_number" required >

									      <label><b>Group</b><label>
									      <input type="text" placeholder="Group Name" name="group" default="All customers">

											<br>

									      <div class="clearfix" align = "center">
									        <button type="button" onclick="document.getElementById('id10').style.display='none'">Cancel</button>
									        <button type="submit" name="add_product">ADD PRODUCT</button>
                                          </div>
									    </div>
									  </form>
									</div>

									<!--Change customer group-->
									<button onclick="document.getElementById('id11').style.display='block'">UPDATE CUSTOMER GROUP</button>

									<div id="id11" class="modal">
										<span onclick="document.getElementById('id11').style.display='none'" class="close" title="Close Modal">&times;</span>
										<form class="modal-content animate" action="customer.php" method="post">
											<div class="container">

												<label align="center"><h2>Change Customer Group</h2></label>
												<br>

												<label><b>Customer ID</b></label>
                                                <input type="text" placeholder="Customer ID" name="customer_id">

												<label><b>Group Name</b></label>
												<input type="text" placeholder="Enter group name" name="group_name" id="group_name">

												<br>

												<div class="clearfix" align = "center">
													<button type="button" onclick="document.getElementById('id11').style.display='none'" >Cancel</button>
													<button type="submit" name="change_group">CREATE</button>
												</div>
											</div>
										</form>
									</div>

									
									<!--Add a discount to a certain group-->
									<button onclick="document.getElementById('id12').style.display='block'">UPDATE DISCOUNT</button>

									<div id="id12" class="modal">
										<span onclick="document.getElementById('id12').style.display='none'" class="close" title="Close Modal">&times;</span>
										<form class="modal-content animate" action="customer.php" method="post">
											<div class="container">

												<label align="center"><h2>Add a discount</h2></label>
												<br>

												<label><b>Group ID</b></label>
												<input type="text" placeholder="Enter group ID" name="group_id" required>

												<label><b>Enter Discount</b></label>
												<input type="Number" placeholder="discount" name="discount" required> 

												<br>

												<div class="clearfix" align = "center">
													<button type="button" onclick="document.getElementById('id12').style.display='none'" >Cancel</button>
													<button type="submit" name="group_discount">SAVE</button>
												</div>
											</div>
										</form>
									</div>

									
									<!--Give a coupon-->
									<button onclick="document.getElementById('id14').style.display='block'">GIVE COUPON</button>

									<div id="id14" class="modal">
										<span onclick="document.getElementById('id14').style.display='none'" class="close" title="Close Modal">&times;</span>
										<form class="modal-content animate" action="customer.php" method="post">
											<div class="container">

												<label align="center"><h2>Give a Coupon</h2></label>
												<br>

                                                <label><b>Coupon ID</b></label>
                                                <input type="text" placeholder="Enter a unique coupon ID" name="coupon_id" required>

												<label><b>Customer ID</b></label>
												<input type="text" placeholder="customer ID" name="customer_id" required>


												<label><b>Amount</b></label>
												<input type="number" placeholder="Enter the coupon value" name="amount" required>

												<label><b>Date</b></label>
												<input type="Date" placeholder="Date" name="date" required> 

												<br>

												<div class="clearfix" align = "center">
													<button type="button" onclick="document.getElementById('id14').style.display='none'" >Cancel</button>
													<button type="submit" name="add_coupon">SAVE</button>
												</div>
											</div>
										</form>
									</div>

									<!--Redeem a coupon-->
									<button onclick="document.getElementById('id15').style.display='block'">REDEEM COUPON</button>

									<div id="id15" class="modal">
										<span onclick="document.getElementById('id15').style.display='none'" class="close" title="Close Modal">&times;</span>
										<form class="modal-content animate" action="customer.php" method="post">
											<div class="container">

												<label align="center"><h2>Redeem a Coupon</h2></label>
												<br>

												<label><b>Coupon ID</b></label>
												<input type="text" placeholder="Enter the coupon ID" name="coupon_id" required>


												<label><b>Customer ID</b></label>
												<input type="text" placeholder="Enter the customer ID" name="customer_id" required>

												<label><b>Date redeemed</b></label>
												<input type="Date" placeholder="Date Redeemed" name="redeem_date" required> 

												<br>

												<div class="clearfix" align = "center">
													<button type="button" onclick="document.getElementById('id15').style.display='none'" >Cancel</button>
													<button type="submit" name="redeem_coupon">SAVE</button>
												</div>
											</div>
										</form>
									</div>


<br></br>
									
								</section>

								<!-- DashBoard content-->

								<h3 style="center"> The dashboard requires the database</h3>
								<h4> The dashboard will have graphs on </br>
									<ul>
										<li>most loyal customer (calculated by loyalty points</li>
										<li>average spending of customers</li>
									</ul></h4>

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
								</section>

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="index.html">Homepage</a></li>
										<li><a href="generic.html">Products</a></li>
										<li><a href = "customer.html">Customers</a></li>
											</ul>
									</ul>
								</nav>

							<!-- Section -->


							<!-- Section -->
								<section>
									<header class="major">
										<h2>Get in touch</h2>
									</header>
									<p>You can always find us in the ICS 2019 class.</p>
									<ul class="contact">
										<li class="fa-envelope-o"><a href="#">icsgroup5@strathmore.edu</a></li>
										<li class="fa-phone">(254) 702 243411</li>
										<li class="fa-home">(254) 718 411007<br />
										Strathmore University, Ole Sangale Road, Madaraka </li>
									</ul>
								</section>

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Reserved for the HCI group 5 class project<a href="index.html"> POS Management System</a>.</p>
								</footer>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			<div id="id03" class="modal">
				<span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
				<form class="modal-content animate" action="/action_page.php">
					<div class="container">
						<label align="center"><h2>EDIT PRODUCT</h2></label>
						<br>

						<label><b>Change the product name</b></label>
						<input type="text" placeholder="Product Name" name="CProduct" required>

						<label><b>Change Tag</b></label>
						<input type="text" placeholder="Tag" name="CTag">

						<label><b>Change Brand</b></label>
						<input type="text" placeholder="Brand" name="CBrand">

						<label><b>Change Supplier</b></label>
						<input type="text" placeholder="Supplier" name="CSupplier">

						<label><b>Change Price</b></label>
						<input type="text" placeholder="Price" name="CPrice">

						<br>

						<div class="clearfix" align = "center">
							<button type="button" onclick="document.getElementById('id03').style.display='none'" >Cancel</button>
							<button type="submit" name="add_product">DELETE PRODUCT</button>
						</div>
					</div>
				</form>
			</div>


        <?php

        /*---------------------------------------->>Create connection<<-----------------------------------------------*/
            $hostname = 'localhost';
            $username = 'root';
            $password = '';
            $dbname = 'hci';

            //create connection
            $conn = new mysqli($hostname, $username, $password, $dbname);

            //check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
        /*------------------------------------------------------------------------------------------------------------*/

            /* Add Customer Submit code */

            if (isset($_POST["add_product"])) {
                //POST variables
                $fname =  $_POST["first_name"] ;
                $surname =  $_POST["surname"];
                $email =  $_POST["email"];
                $phone =  $_POST["phone_number"];
                $group_name =  $_POST["group"];

                //query
                $sql = "INSERT INTO customers (`f_name`, `surname`, `email`, `phone_number`, `group_name`)
                        VALUES ('{$fname}', '{$surname}', '{$email}', '{$phone}', '{$group_name}')";

                //execution of query
                if ($conn->query($sql) === TRUE) {
                    echo "<script type= 'text/javascript'>alert('New Customer Added');</script>";
                } else {
                    echo "<script type= 'text/javascript'>alert('An error occurred while inserting the record');</script>";
                }
            }

        /* Add Customer to group Submit code */

        if (isset($_POST["change_group"])) {
            //POST variables
            $cust_id =  $_POST["customer_id"] ;
            $group_name =  $_POST["group_name"];

            //query
            $sql = "UPDATE customers SET `group_name` = '{$group_name}' WHERE `customer_id` = '{$cust_id}'";

            //execution of query
            if ($conn->query($sql) === TRUE) {
                echo "<script type= 'text/javascript'>alert('Group name updated successfully');</script>";
            } else {
                echo "<script type= 'text/javascript'>alert('An error while updating');</script>";
            }
        }

        /* Update group discount Submit code */

        if (isset($_POST["group_discount"])) {
            //POST variables
            $group_id =  $_POST["group_id"] ;
            $discount =  $_POST["discount"];

            //query
            $sql = "UPDATE customer_group SET `discount` = '{$discount}' WHERE `group_id` = '{$group_id}'";

            //execution of query
            if ($conn->query($sql) === TRUE) {
                echo "<script type= 'text/javascript'>alert('Discount updated successfully');</script>";
            } else {
                echo "<script type= 'text/javascript'>alert('An error while updating');</script>";
            }
        }

        /* Create a coupon Submit code */

        if (isset($_POST["add_coupon"])) {
            //POST variables
            $coupon_id =  $_POST["coupon_id"] ;
            $customer_id =  $_POST["customer_id"];
            $amount =  $_POST["amount"];
            $date =  $_POST["date"];

            //query
            $sql = "INSERT INTO coupon (`coupon_id`, `customer_id`, `amount`, `coupon_date`)
                        VALUES ('{$coupon_id}', '{$customer_id}', '{$amount}', '{$date}')";

            //execution of query
            if ($conn->query($sql) === TRUE) {
                echo "<script type= 'text/javascript'>alert('Coupon Added');</script>";
            } else {
                echo "<script type= 'text/javascript'>alert('An error occurred while creating the coupon');</script>";
            }
        }

        /* Redeem Coupon Submit code */

        if (isset($_POST["redeem_coupon"])) {
            //POST variables
            $coupon_id =  $_POST["coupon_id"] ;
            $customer_id =  $_POST["customer_id"];
            $redeem_date = $_POST["redeem_date"];

            //query
            $sql = "UPDATE coupon SET `redeem_date` = '{$redeem_date}' WHERE `coupon_id` = '{$coupon_id}' AND `customer_id` = '{$customer_id}'";

            //execution of query
            if ($conn->query($sql) === TRUE) {
                echo "<script type= 'text/javascript'>alert('Discount updated successfully');</script>";
            } else {
                echo "<script type= 'text/javascript'>alert('An error while updating');</script>";
            }
        }

        ?>

	</body>
</html>

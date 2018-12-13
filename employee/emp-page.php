<?php include '../include/header.php'; ?>

<div id="emp-page">
	<h3>Hello, Employee!</h3>
	<div class="prompt">
	What would you like to do?
	</div>
	<a href="../transaction/check-out.php"><button>Check Out</button></a>
	<a href="../transaction/check-in.php"><button>Check In</button></a>
	<a href="view-transactions.php"><button>View Transactions</button></a>
	<br /><br />
	<a href="../homepage.php"><button>Log Out</button></a>
</div>

<?php include '../include/footer.php'; ?>
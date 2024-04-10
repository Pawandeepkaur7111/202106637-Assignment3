<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Nike</title>
    <style>
    ul li {  padding: 20px; display: inline; text-decoration: none;}
    nav {  font-size: 30px; }
    ul {
    padding-bottom: 30px; 
    }  
    .wrapper { width: 600px; margin: 0 auto;}
     table tr td:last-child { width: 200px;  }
     h1 { font-size: 2pc; color: blue; padding-top: 20px;  padding-bottom: 15px;}
     h4 { padding-top: 15px;}
    </style>
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
        function showCongratulations() {
  var popup = document.getElementById("popup");
  popup.style.display = "block";
  
  setTimeout(function() {
    popup.style.display = "none";
  }, 2500);
}
    </script>
</head>
<body>
<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="detail.php">Details</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="resources.html">Resources</a></li>

    </ul>
</nav>
<h2> Nike Order Process</h2> 
<p>  Nike offers a streamlined and convenient ordering process for customers looking to purchase their wide
     range of athletic footwear, apparel, equipment, and accessories. Through their official website and
      mobile app, customers can easily browse the extensive product catalog, select desired items, and
       add them to their virtual shopping cart. Nike provides multiple secure payment options, including
        credit/debit cards, PayPal, and gift cards, ensuring a hassle-free checkout experience. Customers
         can choose from various shipping methods, including standard, expedited, and express delivery,
          with the option to track their orders in real-time. Additionally, Nike often provides free
           shipping promotions for eligible orders, further enhancing the value proposition for shoppers.
            With a commitment to efficiency and customer satisfaction, Nike ensures that orders are
            processed promptly, and products are delivered accurately and reliably to customers' doorsteps,
             reinforcing their reputation as a leader in athletic retail.</p>  
    <p>Marketing and Communication teams at NIKE, Inc., help set the brand tone. They act as a creative force of specialists,
        driven to tell Nike's stories of innovation and sport through advertising, brand strategy, digital engagement and 
        product presentation. Using channels ranging from retail stores to social media, Marketing & Communication teams 
        connect the science and art of Nike innovations to the hearts and minds of athletes around the world.</p>
<h2> If you wanna see the details of our Nike shoes then, see below.</h2>
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="mt-5 mb-3 clearfix">
                <h1 class="pull-left"> Nike shoes order details</h1>
                </div>
                <?php
                // Include config file
                require_once "config.php";

                // Attempt select query execution
                $sql = "SELECT * FROM shoes";
                if ($result = mysqli_query($link, $sql)) {
                    if (mysqli_num_rows($result) > 0) {
                        echo '<table class="table table-bordered table-striped">';
                        echo "<thead>";
                        echo "<tr>";
                        echo "<th>#</th>";
                        echo "<th>name</th>";
                        echo "<th>size</th>";
                        echo "<th>price</th>";
                        echo "<th>Action</th>";
                        echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['name'] . "</td>";
                            echo "<td>" . $row['size'] . "</td>";
                            echo "<td>" . $row['price'] . "</td>";
                            echo "<td>";
                            echo '<a href="read.php?id=' . $row['id'] . '" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                            echo '<a href="update.php?id=' . $row['id'] . '" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                            echo '<a href="delete.php?id=' . $row['id'] . '" class="mr-3" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                           echo '<a href="javascript:void(0);" onclick="showCongratulations()">&#128095;</a>';
                            echo "</td>";
                            echo "</tr>";
                        }
                        echo "</tbody>";
                        echo "</table>";
                        // Free result set
                        mysqli_free_result($result);
                    } else {
                        echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                    }
                } else {
                    echo "Oops! Something went wrong. Please try again later.";
                }

                // Close connection
                mysqli_close($link);
                ?>
                 <div id="popup" style="display: none;">
  <p>Congratulations! Your order has been placed successfully!<br>
Thanks for shopping with Nike Inc.</p> </div>
                <a href="create.php" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Add New order</a>

            </div>
          </div>
    </div>
</div>
<h4>click on the shoe icon in front of every shoes detail to order it.</h4>
<h5> The Nike Employee </h5>
<p> NIKE, Inc. is in perpetual motion. Administrative employees help Nike teams around the world keep up with the
     company's rapid pace. They act as liaisons embedded in business functions and geographies. Their talents — problem
      solving, organization, time management and more — help fuel the success of their teams. Nike's diverse group of 
      administrative assistants and receptionists embodies professionalism and models core Nike values to guests and fellow
       employees.
   </p>
            <!--Pawandeep kaur ID 202106637-->
            
            

</body>
</html>


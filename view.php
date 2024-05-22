<!DOCTYPE html>
<html>
<head>
    <title>rolex-data</title>
    <link href="images/testimonial-bg.png" rel="icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{
            margin-top:-49px;
        }
        .main-div{                   
            background: url(images/watch11.png) center center no-repeat;
            background-size: cover;
            height:835px:
        }
        .table-container {
            height: 652px;
            overflow-y: auto;
            background: rgba(179 168 168 / 70%); 
            border-radius:10px;

        }
        .table-responsive {
            border: none;
        }
        th {
            border-bottom: 1px solid #ddd;
            padding: 12px;
            text-align: left;
            font-weight: bold;
            color: #333;
            
        }
        td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            font-size: 14px;
            color: #000000;
            
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        h1{
            margin-top:10px;
            padding-bottom: 6px;
            padding-top: 22px;
            justify-content: center;
            display: flex;
        }
        table{
            padding-bottom:10px;
        }
        img{
            width: 75px;
        }
        span{
            padding-top: 10px;
            padding-left: 10px;
        }
    </style>
</head>
<body>
    <div class="main-div">
    <div class="container mt-5">
        <h1><img src="images/rrolex1.png" alt=""><span>rolex</span></h1>
        <div class="table-container">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $conn = new mysqli("localhost", "root", "", "rolex-watches");

                        $sql = "SELECT * FROM rolex";

                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . htmlspecialchars($row["id"]) . "</td>";
                                echo "<td>" . htmlspecialchars($row["name"]) . "</td>";
                                echo "<td>" . htmlspecialchars($row["phone"]) . "</td>";
                                echo "<td>" . htmlspecialchars($row["email"]) . "</td>";
                                echo "<td>" . htmlspecialchars($row["message"]) . "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5'>No data found</td></tr>";
                        }

                        $conn->close();

                        ?>
                    </tbody>
                </table><br>
            </div>
        </div>
    </div><br><br>
    </div>
</body>
</html>
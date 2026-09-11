<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Order Summary</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="header">

        <h1>
            University Printing Department
        </h1>

        <p>
            Order Summary
        </p>

    </div>


    <div class="navbar">

        <a href="home.html">
            Home
        </a>

        <a href="Order material.html">
            Order Material
        </a>

        <a href="About us.html">
            About Us
        </a>

    </div>


    <?php

    if (isset($_POST["btn"])) {

        $student_name = htmlspecialchars($_POST["student_name"]);
        $student_number = htmlspecialchars($_POST["student_number"]);
        $material_type = htmlspecialchars($_POST["material_type"]);
        $quantity = (int) $_POST["quantity"];
        $printing_option = htmlspecialchars($_POST["printing_option"]);



        $material_price = 0;

        if ($material_type == "Study Guide") {

            $material_price = 120;
        } elseif ($material_type == "Tutorial Workbook") {

            $material_price = 80;
        } elseif ($material_type == "Practical Manual") {

            $material_price = 100;
        } elseif ($material_type == "Revision Pack") {

            $material_price = 60;
        }

        $printing_price = 0;

        if ($printing_option == "Black and White") {

            $printing_price = 20;
        } elseif ($printing_option == "Colour") {

            $printing_price = 50;
        } elseif ($printing_option == "Premium Binding") {

            $printing_price = 80;
        }

        $material_cost = $material_price * $quantity;

        $subtotal = $material_cost + $printing_price;

        $discount_amount = 0;

        $discount_applied = false;


        if ($quantity >= 5) {

            $discount_amount = $subtotal * 0.10;

            $discount_applied = true;
        }


        $total = $subtotal - $discount_amount;

    ?>

        <!-- Order Summary -->
        <div class="summary-container">

            <h2>
                Order Summary
            </h2>


            <!-- Student Information -->
            <div class="summary-section">

                <h3>
                    Student Information
                </h3>

                <div class="summary-item">

                    <span class="summary-label">
                        Student Name:
                    </span>

                    <span class="summary-value">
                        <?php echo $student_name; ?>
                    </span>

                </div>


                <div class="summary-item">

                    <span class="summary-label">
                        Student Number:
                    </span>

                    <span class="summary-value">
                        <?php echo $student_number; ?>
                    </span>

                </div>

            </div>


            <!-- Order Details -->
            <div class="summary-section">

                <h3>
                    Order Details
                </h3>


                <div class="summary-item">

                    <span class="summary-label">
                        Material Type:
                    </span>

                    <span class="summary-value">
                        <?php echo $material_type; ?>
                    </span>

                </div>


                <div class="summary-item">

                    <span class="summary-label">
                        Quantity:
                    </span>

                    <span class="summary-value">
                        <?php echo $quantity; ?> copies
                    </span>

                </div>


                <div class="summary-item">

                    <span class="summary-label">
                        Printing Option:
                    </span>

                    <span class="summary-value">
                        <?php echo $printing_option; ?>
                    </span>

                </div>

            </div>


            <!-- Cost Breakdown -->
            <div class="summary-section">

                <h3>
                    Cost Breakdown
                </h3>


                <div class="cost-breakdown">

                    <div class="cost-item">

                        <span class="summary-label">
                            Unit Price:
                        </span>

                        <span>
                            R<?php echo number_format($material_price, 2); ?>
                        </span>

                    </div>


                    <div class="cost-item">

                        <span class="summary-label">
                            Material Cost:
                        </span>

                        <span>
                            R<?php echo number_format($material_cost, 2); ?>
                        </span>

                    </div>


                    <div class="cost-item">

                        <span class="summary-label">
                            Printing Cost:
                        </span>

                        <span>
                            R<?php echo number_format($printing_price, 2); ?>
                        </span>

                    </div>


                    <div class="cost-item">

                        <span class="summary-label">
                            Subtotal:
                        </span>

                        <span>
                            R<?php echo number_format($subtotal, 2); ?>
                        </span>

                    </div>

                </div>


                <?php if ($discount_applied) { ?>

                    <div class="discount-badge">

                        10% Discount Applied
                        (5 or more copies)

                    </div>


                    <div class="cost-breakdown">

                        <div class="cost-item">

                            <span class="summary-label">
                                Discount:
                            </span>

                            <span>
                                -R<?php echo number_format($discount_amount, 2); ?>
                            </span>

                        </div>

                    </div>

                <?php } else { ?>

                    <div class="description-box">

                        <strong>Discount Information:</strong>

                        <br>

                        Order 5 or more copies to receive
                        a 10% discount.

                    </div>

                <?php } ?>

            </div>


            <!-- Total -->
            <div class="total-amount">

                <span>
                    Total Amount:
                </span>

                <span>
                    R<?php echo number_format($total, 2); ?>
                </span>

            </div>

            <div class="description-box">

                <?php

                switch ($material_type) {

                    case "Study Guide":

                        echo "<strong>Study Guide:</strong>
                    Comprehensive guide containing lecture
                    notes and key concepts.";

                        break;


                    case "Tutorial Workbook":

                        echo "<strong>Tutorial Workbook:</strong>
                    Practice exercises and tutorial questions
                    for students.";

                        break;


                    case "Practical Manual":

                        echo "<strong>Practical Manual:</strong>
                    Step-by-step instructions for laboratory
                    work and practical activities.";

                        break;


                    case "Revision Pack":

                        echo "<strong>Revision Pack:</strong>
                    Summary notes and examination questions
                    for final preparation.";

                        break;
                }

                ?>

            </div>


            <!-- Available Materials -->
            <div class="materials-list">

                <h4>
                    Available Materials
                </h4>

                <ul>

                    <li>
                        Study Guide - R120
                    </li>

                    <li>
                        Tutorial Workbook - R80
                    </li>

                    <li>
                        Practical Manual - R100
                    </li>

                    <li>
                        Revision Pack - R60
                    </li>

                </ul>

            </div>

        </div>


        <div class="back-link">

            <a href="Order material.html">
                Place Another Order
            </a>

        </div>


    <?php

    } else {

    ?>

        <div class="summary-container">

            <h2>
                No Order Submitted
            </h2>

            <div class="description-box">

                Please return to the Order Material page
                and submit an order.

            </div>

        </div>


        <div class="back-link">

            <a href="Order material.html">
                Go to Order Material
            </a>

        </div>

    <?php

    }

    ?>


    <div class="footer">

        <p>
            University Printing Department | 2026
        </p>

        <p>
            Email: printing@university.ac.za |
            Phone: 012 345 6789
        </p>

    </div>

</body>

</html>
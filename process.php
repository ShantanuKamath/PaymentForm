<?php
    #----------------------------#
    # Name: Kamath Shantanu Arun #
    # Matric No: U1422577F       #
    # Lab Group: TS2             #
    #----------------------------#

    $name = 0;
    $payment_method = 0;
    $apples = 0;
    $oranges = 0;
    $bananas = 0;
    $totalCost = 0;

    # Ensure that it has been properly submitted
    if (isset($_POST["Submit"])) {
        # Get all the form data from the $_POST array.
        $name = $_POST["name"];
        $payment_method = $_POST["payment"];
        $apples = $_POST["apples"];
    		$oranges = $_POST["oranges"];
    		$bananas = $_POST["bananas"];
        $totalCost = $_POST["totalCost"];

        if (file_exists("order.txt")) {
            # All okay, redirect to receipt with parameters
            header("Location: receipt.php?name=$name&a=$apples&o=$oranges&b=$bananas&payment=$payment_method&total=$totalCost");
            # Update the running totals
            writeToFile($apples, $oranges, $bananas);
        } else {
            header("Location: error.html");
        }
        exit;
    } else {
        header("Location: error.html");
        exit;
    }

    # The following function opens the 'order.txt' file, reads the current data and updates it according
    # to the new purchase order i.e. the form data that is POSTed to the server.
    function writeToFile($a, $o, $b) {
        $filePtr = fopen("order.txt", "r") or exit("Unable to open file for reading - order.txt!");

        $new = array("apples" => $a, "oranges" => $o, "bananas" => $b);
        $total = array("apples" => 0, "oranges" => 0, "bananas" => 0);

        foreach($total as $fruit => $quantity) {
            $line = fgets($filePtr);
            $total["$fruit"] = explode(":", $line);
            $total["$fruit"][1] = $total["$fruit"][1] + $new["$fruit"];
        }

        fclose($filePtr);

        $filePtr = fopen("order.txt", "w") or exit("Unable to open file for writing - order.txt!");

        foreach($total as $fruit => $quantity) {
            fwrite($filePtr, $quantity[0].": ".$quantity[1]."\n");
        }

        fclose($filePtr);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>T-Shirt Price Engine</title>
    <style>
        body { font-family: sans-serif; background-color: #f4f6f8;  color: #333; display: flex; 
            justify-content: center; align-items: center; min-height: 100vh; }
        .receipt { background-color: #fff; padding: 2rem; border-radius: 8px; 
            box-shadow: 0 4px 15px rgba(0,0,0,0.1); width: 400px; border-top: 5px solid #005a9c; }
        h1 { text-align: center; color: #005a9c; }
        ul { list-style: none; padding: 0; }
        li { display: flex; justify-content: space-between; padding: 8px 0;
            border-bottom: 1px solid #eee; }
        .total { font-size: 1.5em; color: #28a745; }
    </style>
</head>
<body>
    <div class="receipt">
        <h1>Order Summary</h1>
        <?php
            // --- Configuration: Change these values to test all business rules! ---
            $size = 'XL'; // Options: 'S', 'M', 'L', 'XL'
            $color = 'Ocean Blue'; // Any string, but test with 'Sunset Orange' or 'Ocean Blue'
            $isCustomized = true; // Options: true, false
            $customerFirstName = 'Gregory';

            // --- Part A: Implement the logic below using ONLY simple, nested if-statements ---
            $finalPrice = 22.50;
            $details = "<li>Base Price: <span>$" . number_format($finalPrice, 2) . "</span></li>";

            // Your nested if-statement logic goes here...
            if ($size == 'L') {
                $finalPrice += 1.75;
                $details .="<li>Size (L) Upcharge: <span>+$1.75</span></li>";
            } elseif ($size == 'XL') {
                $finalPrice += 2.5;
                $details .="<li>Size (XL) Upcharge: <span>+$2.50</span></li>";
            }
            if ($color == 'Sunset Orange' || $color == 'Ocean Blue') {
                $finalPrice += 2;
                $details .="<li>Premium Color Upcharge: <span>+$2.00</span></li>";
            }
            if ($isCustomized) {
                $finalPrice += 5;
                $details .="<li>Custom Text Upcharge: <span>+$5.00</span></li>";
                if ($size =='XL') {
                    $finalPrice += 3;
                    $details .="<li>XL Text Upcharge: <span>+$3.00</span></li>";
                }
            }
            if (mb_strlen($customerFirstName) > 6) {
                $finalPrice -= 1;
                $details .="<li>Long Name Discount: <span>-$1.00</span></li>";
            }

            /*
            My biggest logic challenge was confirming that the logic here is really this simple,
            because I've encountered much more complicated conditional logic in other courses. 
            Most of the conditions in this assignment are independent of each other, except for
            one elseif, one 'or', and one nested-if. So I reread the business rules a couple of 
            times to confirm that.

            The first time I ran price_engine.php, it didn't add the $3 text upcharge for XL 
            shirts. I saw that I made a typo in that 'if' condition (L instead of XL). I added the
            missing X, and then it worked. All the other combinations of values worked.

            The harder parts were finding the length of $customerFirstName (I didn't see that in
            our reading material, and I had to decide between strlen() and mb_strlen()--seems like
            customer names could definitely have non-ASCII characters in them) and learning how to
            run price_engine.php (also not in our reading material or assignment instructions; I
            asked Claude, and it told me how to add a Route to web.php). But because I've taken 
            other programming courses, none of this was actually difficult.
            */

            // --- DO NOT EDIT BELOW THIS LINE ---
            echo "<ul>" . $details . "</ul>";
            echo "<ul><li><span class='total'>Final Price:</span> 
                <span class='total'>$" . number_format($finalPrice, 2) . "</span></li></ul>";
        ?>
    </div>
</body>
</html>
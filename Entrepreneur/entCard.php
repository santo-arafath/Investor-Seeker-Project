<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <link rel="stylesheet" href="all_css/get_investment1.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <style>
              

              </style>

    </head>

<header>
            <div class="logo-container">
              <h1>Investor<span>Seeker</span></h1>
            </div>
            <div class="exit-container">
              <a href="investor_showProfile_first_Get_start.php">Exit</a>
            </div>
          </header>


<?php


// Include database configuration file
$connnection = mysqli_connect('localhost','root','','project_investor_seeker_db');

// Fetch all rows from the entcardinfo table
$result = mysqli_query($connnection, "SELECT * FROM entcardinfo");

// Initialize an empty variable to store card HTML
$cardHtml = '';

// Loop through each row in the result set and generate card HTML
while($row = mysqli_fetch_assoc($result)){
    $cardHtml .= '<div class="card">
                    <h3>' . $row['companyName'] . '</h3>
                 
                    <ul>
                        <li>Email: ' . $row['email'] . '</li>
                        <li>Location: ' . $row['location'] . '</li>
                        <li>Revenue: ' . $row['revenue'] . '</li>
                        <li>Last Month Sell: ' . $row['lastMSell'] . '</li>
                        <li>Last Year Sell: ' . $row['lastYSell'] . '</li>
                        <li>Total Sell: ' . $row['totalSell'] . '</li>
                        <li>Amount of Investment Required: ' . $row['amountofInvestmentRequired'] . '</li>
                        <li>Name: ' . $row['name'] . '</li>
                    </ul>
                  </div>';
}
?>

<!-- HTML and CSS for displaying the cards -->
<!DOCTYPE html>
<html>
<head>
    <title>Dynamic Card Example</title>
    <style>
    .card {
        background-color: cyan;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin: 10px;
        padding: 20px;
        box-shadow: 2px 2px 5px #ccc;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: flex-start;
    }
    h3 {
        margin: 0;
        font-size: 24px;
        font-weight: bold;
        text-align: center;
        margin-bottom: 20px;
    }
    ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
    }
    li {
        margin: 10px 0;
        font-size: 18px;
    }
    p {
        font-style: italic;
        font-size: 16px;
        margin: 10px 0;
    }
</style>
</head>
<body>
    <h1>Dynamic Cards Example</h1>
    <?php echo $cardHtml; ?>
</body>
</html>

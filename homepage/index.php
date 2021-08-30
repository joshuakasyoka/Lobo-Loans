<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../LoremIpsum.php';
$lipsum = new joshtronic\LoremIpsum();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link href="../node_modules/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<div class="container mt-5">
    <nav class="navbar ">
            <a class="navbar-brand" href="../homepage/index.php">Lobo Logo</a>
            <form class="d-flex pb-3 pt-3" action="../find-my-la/index.php">
                <input class="form-control me-2" name="query" type="search" placeholder="Find my council">
              <button class="btn pe-3" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#f16060" class="bi bi-search" viewBox="0 0 16 16">
                  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
              </button>
            </form>
            <a href="../knowledge-base/index.php">
                <button type="button" class="btn btn-primary">LOBO Loans Knowledge Base</button>
            </a>
        </div>
    </nav>
</div>
<div class= "container mt-5">
    <div class="row">
        <hr class="mt-5"/>
            <h1 class="mt-5">Councils are locked into expensive and risky debt. But now, some are getting out. Find out how bad your council’s LOBO debt is and what you can do about it.</h1>
        <hr class="mt-5"/>
    </div>
</div>
<div class="container">
    <div class="row mt-4">
        <form class="d-flex mb-5" action="../find-my-la/index.php">
            <button class="btn mt-5" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#f16060" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
            </button>
            <input class="form-control me-2 mt-5 p-3" name="query" type="search" placeholder="Find a Council" style="border-color: #f16060; border-style: solid; border-width: 3px">
        </form>
    </div>
</div>
<div class= "container mt-5">
    <div class="row">
      <h1 class="pb-4">What are Lobo loans?</h1>
        <div class="col-md-6">
        <p>Taxpayer money is being wasted on LOBO loans. Profits from lending go to the banks, rather than back to the public sector.</br></br>
          Central government is the main lender for UK local authorities. They provide cheap and low risk long term debt. However, some local authorities also borrow from private banks. They do this using LOBO loans, which are expensive and high risk debt.</br></br>
          LOBO loans are expensive. They have interest rates that are 4-8% higher than current central government rates, and are usually long term (50-70 years).</br></br>
          LOBO loans are risky. “LOBO” stands for “lender option borrower option”. The lender (the bank) has the "option" to increase the interest rate at fixed intervals (e.g. every six months), which it will choose to do based on market interest rates. The borrower (the council) has the opton to accept the new rate, or repay the loan in full. Financial experts describe this as a “lose-lose bet” with the bank. Whichever way the market rates change, the bank can ensure these loans are a good deal for them. So the council always loses out.</br></br>
          Search for your council to find out what you can do about it. Find out more about LOBO loans in the Knowledge Base.</br></br>
        </p>
        </div>
        <div class="col-md-6">
          <img style="width=100%" src="../assets/graph.png">
        </div>
    </div>
</div>
</body>
<footer>
    <div class="container mt-5">
        <p><i>We are not experts. Please contact a financial adviser if you need advise</i></p>
    </div>
</footer>
</html>


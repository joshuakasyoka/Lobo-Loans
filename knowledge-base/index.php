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
</div>
<div class= "container mt-5">
    <div class="row">
        <hr class="mt-5"/>
        <h2 class="mt-5">LOBO loans knowledge base</h2>
        <p><?php print $lipsum->sentences(2);?></p>
        <hr class="mt-5"/>
    </div>
</div>
<div class="container">
    <div class="row pt-5">
        <div class="col-md-4">
            <ul class="p-2">
                <li>
                    <a href="#chapter_1">
                        <span>Chapter 1</span>
                    </a>
                    <ul>
                        <li class="mt-2">
                            <a href="#1.1">
                                <span>Sub Category</span>
                            </a>
                        </li>
                        <li class="mt-2">
                            <a href="#1.2">
                                <span>Sub Category</span>
                            </a>
                        </li>
                        <li class="mt-2" >
                            <a href="#1.3">
                                <span>Sub Category</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="mt-4">
                    <a href="#chapter_2">
                        <span>Chapter 2</span>
                    </a>
                    <ul class="mt-2">
                        <li class="mt-2">
                            <a href="#2.1">
                                <span>Sub Category</span>
                            </a>
                        </li>
                        <li class="mt-2">
                            <a href="#2.2">
                                <span>Sub Category</span>
                            </a>
                        </li>
                        <li class="mt-2">
                            <a href="#2.3">
                                <span>Sub Category</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="mt-4">
                    <a href="#chapter_3">
                        <span>Chapter 3</span>
                    </a>
                    <ul class="mt-2">
                        <li class="mt-2">
                            <a href="#3.1">
                                <span>Sub Category</span>
                            </a>
                        </li>
                        <li class="mt-2">
                            <a href="#3.2">
                                <span>Sub Category</span>
                            </a>
                        </li>
                        <li class="mt-2">
                            <a href="#3.3">
                                <span>Sub Category</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
          <div class="mt-3 mb-5">
            <button type="button" class="btn btn-primary mt-3">Downlaod full PDF</button>
          </div>
        </div>
        <div class="col-md-8">
            <h1>
                <span id="chapter_1">Chapter One</span>
            </h1>
            <p> <?php print $lipsum->words(100);?> </p>
            <h2>
                <span id="1.1">Sub Category One</span>
            </h2>
            <p> <?php print $lipsum->words(250);?> </p>
            <h2>
                <span id="1.2">Sub Category Two</span>
            </h2>
            <p> <?php print $lipsum->words(140);?> </p>
            <h2>
                <span id="1.3">Sub Category Three</span>
            </h2>
            <p> <?php print $lipsum->words(270);?> </p>
            <h1 class="mt-5">
                <span id="chapter_2">Chapter Two</span>
            </h1>
            <p> <?php echo $lipsum->words(130); ?></p>
            <h2>
                <span id="2.1">Sub Category One</span>
            </h2>
            <p> <?php print $lipsum->words(320);?> </p>
            <h2>
                <span id="2.2">Sub Category Two</span>
            </h2>
            <p> <?php print $lipsum->words(139);?> </p>
            <h2>
                <span id="2.3">Sub Category Three</span>
            </h2>
            <p> <?php print $lipsum->words(250);?> </p>
            <h1 class="mt-5">
                <span id="chapter_3">Chapter Three</span>
            </h1>
            <p> <?php print $lipsum->words(160);?> </p>
            <h2>
                <span id="3.1">Sub Category One</span>
            </h2>
            <p> <?php print $lipsum->words(120);?> </p>
            <h2>
                <span id="3.2">Sub Category Two</span>
            </h2>
            <p> <?php print $lipsum->words(250);?> </p>
            <h2>
                <span id="3.3">Sub Category Three</span>
            </h2>
            <p> <?php print $lipsum->words(180);?> </p>
        </div>
    </div>
</div>
</body>
<footer>
    <div class="container mt-5">
        <p><i>We are not financial experts. Please contact a financial advisor if you need professional advice</i></p>
    </div>
</footer>
</html>

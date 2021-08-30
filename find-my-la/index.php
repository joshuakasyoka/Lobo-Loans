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
<body>
<div class= "council_title container">
  <div class="row">
    <hr class="mt-5"/>
    <div class="col-xs-12 col-md-8">
      <h1 class="mt-5"><?php print $_GET['query']; ?></h1>
    </div>
    <div class="col-sx-6 col-md-4">
      <h1 class="mt-5">last updated 2/3/4</h1>
    </div>
    <hr class="mt-5"/>
  </div>
  <div class="current_situation container mt-5">
    <div>
      <h2>What is the Current Situation?</h2>
    </div>
    <div class="mt-5">
      <p class="mt-2">Manchester council has 30 LOBO loans totalling £813.65 million..It is 1st In the ranking of councils with the most LOBO debt.<br>Since we began monitoring in 2015, this is what happened.</p>
      <table class="table table-bordered mt-3" style="width: 100%">
        <tbody>
        <tr>
          <th>LOBO loans in 2015</th>
          <td>£830,150,858</td>
        </tr>
        <tr>
          <th>Term ended</th>
          <td>£16,500,000</td>
        </tr>
        <tr>
          <th>Exited</th>
          <td>£0</td>
        </tr>
        <tr>
          <th>Option removed</th>
          <td>£80,575,429</td>
        </tr>
        <tr>
          <th>Remaining total</th>
          <td>£813,650,858</td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
  <hr class="mt-5"/>
  <div class="current_situation container mt-5">
    <div>
      <h2>How big is the problem?</h2>
    </div>
    <div class="mt-5">
      <p>Manchester is currently paying {council_annual_interest} in interest per year. For a sense of scale, this corresponds to <a href="#"><b>50%</b></a> of what the council collects in council tax.</p>
      <p>It is projected to spend at least  <a href="#"><b>£200</b></a> in interest payments over the remaining term of the loans, the last one ending in  <a href="#"><b>2072</b></a>.</p>
      <p>The interest rates for this council’s LOBO loans are between 4.14% and 6.837%. Currently Councils can borrow from central government (via the Public Works Loans Board) at much lower rates (between 1% and 2%) and on much more favorable terms. To illustrate, on a loan of £10m over a 50 year term, at 4% the council will pay £20m in interest while at 2% they will pay £10m.</p>
      <p>Some loans are also more toxic than others. This is based on the fact that LOBO loans contain embedded derivatives. The toxicity of a loan varies over time depending on how financial markets value it. The more toxic the loan is for the council, the higher the projected profitability for for the Bank.</p>
      <p>Below is an outline of the LOBO loans currently held by Bracknell Forest.</p>
      <div class="table-responsive">
      <table class="table table-bordered mt-3" >
        <theader>
          <tr>
            <th>Bank</th>
            <th>Principal</th>
            <th>Status</th>
            <th>Remaining term</th>
            <th>Current interest</th>
            <th>Annual interest</th>
            <th>Remaining interest</th>
            <th>Toxicity</th>
          </tr>
        </theader>
        <tbody>
        <tr>
          <td>COMMERZBANK AG</td>
          <td>£1,500,000</td>
          <td>term_end</td>
          <td>0 years</td>
          <td>0%</td>
          <td>£0/year</td>
          <td>
            £0
          </td>
          <td>Green</td>
        </tr>
        <tr>
          <td>COMMERZBANK AG</td>
          <td>£1,000,000</td>
          <td>term_end</td>
          <td>0 years</td>
          <td>0%</td>
          <td>£0/year</td>
          <td>
            £0
          </td>
          <td>Green</td>
        </tr>
        <tr>
          <td>FMS Wertmanagement AoR</td>
          <td>£1,000,000</td>
          <td>term_end</td>
          <td>0 years</td>
          <td>0%</td>
          <td>£0/year</td>
          <td>
            £0
          </td>
          <td>Green</td>
        </tr>
        <tr>
          <td>FMS Wertmanagement AoR</td>
          <td>£1,000,000</td>
          <td>term_end</td>
          <td>0 years</td>
          <td>0%</td>
          <td>£0/year</td>
          <td>
            £0
          </td>
          <td>Green</td>
        </tr>
        <tr>
          <td>FMS Wertmanagement AoR</td>
          <td>£2,000,000</td>
          <td>term_end</td>
          <td>0 years</td>
          <td>0%</td>
          <td>£0/year</td>
          <td>
            £0
          </td>
          <td>Green</td>
        </tr>
        <tr>
          <td>FMS Wertmanagement AoR</td>
          <td>£2,000,000</td>
          <td>term_end</td>
          <td>0 years</td>
          <td>0%</td>
          <td>£0/year</td>
          <td>
            £0
          </td>
          <td>Green</td>
        </tr>
        <tr>
          <td>HSBC Global Custody Nom (UK) Ltd</td>
          <td>£1,000,000</td>
          <td>term_end</td>
          <td>0 years</td>
          <td>0%</td>
          <td>£0/year</td>
          <td>
            £0
          </td>
          <td>Green</td>
        </tr>
        <tr>
          <td>HSBC Global Custody Nom (UK) Ltd</td>
          <td>£1,000,000</td>
          <td>term_end</td>
          <td>0 years</td>
          <td>0%</td>
          <td>£0/year</td>
          <td>
            £0
          </td>
          <td>Green</td>
        </tr>
        <tr>
          <td>LANCASHIRE C.C</td>
          <td>£20,575,429</td>
          <td>option_removed</td>
          <td>47 years</td>
          <td>4.28%</td>
          <td>£880,628/year</td>
          <td>
            £41,389,533
          </td>
          <td>Amber</td>
        </tr>
        <tr>
          <td>REASSURE NOMINEES</td>
          <td>£2,000,000</td>
          <td>Outstanding</td>
          <td>0 years</td>
          <td>6.8%</td>
          <td>£136,000/year</td>
          <td>
            £0
          </td>
          <td>Green</td>
        </tr>
        <tr></tr>
        </tbody>
      </table>
    </div>
      <button type="button" class="btn btn-primary col-12">Show 31 more</button>
    </div>
  </div>
  <hr class="mt-5"/>
  <div class="what_can_I_do container mt-5">
    <div class="mt-5">
      <h2>What can I do about it?</h2>
      <p>Some Banks are allowing Council’s to exit their LOBO loans early with a reduced penalty fee. If you hold LOBO loans with these banks, we have listed them below.</p>
      <p>For each bank we have indicated the councils that have exited their loans, and if known, what penalty they paid. You can see how much the council saved, by comparing the penalty fee with the outstanding interest at the time of exit. The penalty fee is also dependent on how profitable the loan would have been for the bank if it had kept it. Therefore the penalty fee is also influenced by the toxicity of the loan at the time of exit, which is also an indication of the projected profitability for the bank.</p>
      <p>For all the banks you hold loans with, whether they have allowed exits or not, we have listed the council they hold LOBO loans with.</p>
      If you decide to take action, we recommend you speak with your Finance Director and share with them the information on this site, including the downloadable data pack for your council. We also suggest you get in touch with councils that have already exited their loans, to learn from their experience. If some councils still have loans with the same banks as your council you might want to consider collaborating on exiting to the loans.</p>
      <p>If you struggle to find support within your council, consider seeking independent financial advice. Alternatively get in touch with us for further guidance.</p>
    </div>
    <div class="card mt-5" style="width: 100%;">
      <div class="card-body">
        <div class="row">
          <div class="col-11">
            <h5 class="card-title mb-3">Barclays</h5>
          </div>
          <div class="col-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
              <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
            </svg>
          </div>
        </div>
        <p> Barclays has allowed 13 councils to exit 37 LOBO loans totaling £100 million</p>
        <p>It has 25 outstanding loans with 10 councils totaling £25 million </p>
        <div class="table-responsive">
        <table class="table table-bordered mt-3">
          <theader>
            <tr>
              <th>Bank</th>
              <th>Principal</th>
              <th>Status</th>
              <th>Remaining term</th>
              <th>Current interest</th>
              <th>Annual interest</th>
              <th>Remaining interest</th>
              <th>Toxicity</th>
            </tr>
          </theader>
          <tbody>
          <tr>
            <td></br></td>
            <td></br></td>
            <td></br></td>
            <td></br></td>
            <td></br></td>
            <td></br</td>
            <td></br></td>
            <td></br></td>
          </tr>
          <tr>
            <td></br></td>
            <td></br></td>
            <td></br></td>
            <td></br></td>
            <td></br></td>
            <td></br</td>
            <td></br></td>
            <td></br></td>
          </tr>
          <tr>
            <td></br></td>
            <td></br></td>
            <td></br></td>
            <td></br></td>
            <td></br></td>
            <td></br</td>
            <td></br></td>
            <td></br></td>
          </tr>
          <tr>
            <td></br></td>
            <td></br></td>
            <td></br></td>
            <td></br></td>
            <td></br></td>
            <td></br</td>
            <td></br></td>
            <td></br></td>
          </tr>
          </tbody>
        </table>
        </div>
        <button type="button" class="btn btn-primary col-12">Show 31 more</button>
        <div class="row mt-5">
          <div class="col-6">
            <p>Councils that still have LOBO loans with Barclays</p>
          </div>
          <div class="col-6">
            <p>Walthamstow, Birmingham, Epping Forrest, Walthamstow, Birmingham, Epping Forrest, Walthamstow, Birmingham, Epping Forrest</p>
          </div>
        </div>
      </div>
    </div>
    <div class="card mt-5 table-responsive" style="width: 100%;">
      <div class="card-body">
        <div class="row">
          <div class="col-11">
            <h5 class="card-title mb-3">HSBC</h5>
          </div>
          <div class="col-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
              <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
            </svg>
          </div>
        </div>
        <p> HSBC has allowed 13 councils to exit 37 LOBO loans totaling £100 million</p>
        <p>It has 25 outstanding loans with 10 councils totaling £25 million </p>
        <div class="row">
          <div class="col-6">
            <p>Councils that still have LOBO loans with HSBC</p>
          </div>
          <div class="col-6">
            <p>Walthamstow, Birmingham, Epping Forrest, Walthamstow, Birmingham, Epping Forrest, Walthamstow, Birmingham, Epping Forrest</p>
          </div>
        </div>
      </div>
    </div>
</body>
<footer>
  <div class="container mt-5">
    <p><i>We are not financial experts. Please contact a financial advisor if you need professional advice.</i></p>
  </div>
</footer>
</html>

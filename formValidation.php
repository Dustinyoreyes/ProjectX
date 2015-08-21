<?php
// define variables and set to empty values
$CaErr = $CnErr = $OrderNumbErr = "";
$ContractAdmin = $CustomerName = $OrderNumb = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["ContractAdmin"])) {
    $CaErr = "ContractAdmin is required";
  } else {
    $ContractAdmin = test_input($_POST["ContractAdmin"]);
  }

  if (empty($_POST["CustomerName"])) {
    $CnErr = "CustomerName is required";
  } else {
    $CustomerName = test_input($_POST["CustomerName"]);
  }

  if (empty($_POST["OrderNumb"])) {
    $OrderNumbErr = "OrderNumb is required";
  } else {
    $OrderNumb = test_input($_POST["OrderNumb"]);
  }
}
?>
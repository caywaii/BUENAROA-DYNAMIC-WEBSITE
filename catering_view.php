<?php
include 'includes/connection.php';
$sql = "SELECT * FROM file";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {

    //Declared Variables
    $catering_one = $row['catering_one'];
    $catering_two = $row['catering_two'];
    
  }
}

 if (isset($_POST['view_menu'])) {
    $pdfFilePath = $catering_one;
    $fileName = 'BUENAROA MENU.pdf';
    // Set the appropriate content type header for PDF
    header('Content-type: application/pdf');

    // Open the PDF file in a new tab
    header('Content-Disposition: attachment; filename="' . $fileName . '"');
    header('Content-Transfer-Encoding: binary');
    header('Accept-Ranges: bytes');

    @readfile($pdfFilePath);
}else if (isset($_POST['view_quotation'])) {
  $pdfFilePath = $catering_two;
  $fileName = 'PER PERSON QUOTATION.pdf';
  // Set the appropriate content type header for PDF
  header('Content-type: application/pdf');

  // Open the PDF file in a new tab
  header('Content-Disposition: attachment; filename="' . $fileName . '"');
  header('Content-Transfer-Encoding: binary');
  header('Accept-Ranges: bytes');

  @readfile($pdfFilePath);
}

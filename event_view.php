<?php
include 'includes/connection.php';
$sql = "SELECT * FROM file";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {

    //Declared Variables
    $event_one = $row['event_one'];
    $event_two = $row['event_two'];
    $event_three = $row['event_three'];
    
  }
}

 if (isset($_POST['view_semi'])) {
    $pdfFilePath = $event_one;
    $fileName = 'SEMI FULL EVENT STYLING.pdf';
    // Set the appropriate content type header for PDF
    header('Content-type: application/pdf');

    // Open the PDF file in a new tab
    header('Content-Disposition: attachment; filename="' . $fileName . '"');
    header('Content-Transfer-Encoding: binary');
    header('Accept-Ranges: bytes');

    @readfile($pdfFilePath);
}else if (isset($_POST['view_full_custom'])) {
  $pdfFilePath = $event_two;
  $fileName = 'FULL STYLING CUSTOMIZED PACKAGE.pdf';
  // Set the appropriate content type header for PDF
  header('Content-type: application/pdf');

  // Open the PDF file in a new tab
  header('Content-Disposition: attachment; filename="' . $fileName . '"');
  header('Content-Transfer-Encoding: binary');
  header('Accept-Ranges: bytes');

  @readfile($pdfFilePath);
}else if (isset($_POST['view_acarte'])) {
    $pdfFilePath = $event_three;
    $fileName = 'A LA CARTE SERVICES.pdf';
    // Set the appropriate content type header for PDF
    header('Content-type: application/pdf');
  
    // Open the PDF file in a new tab
    header('Content-Disposition: attachment; filename="' . $fileName . '"');
    header('Content-Transfer-Encoding: binary');
    header('Accept-Ranges: bytes');
  
    @readfile($pdfFilePath);
  }

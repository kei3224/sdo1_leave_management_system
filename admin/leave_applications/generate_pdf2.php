<?php
if (isset($_GET['id']) && $_GET['id'] > 0) {
    $qry = $conn->query("SELECT * from `leave_applications` where id = '{$_GET['id']}' ");
    if ($qry->num_rows > 0) {
        foreach ($qry->fetch_assoc() as $k => $v) {
            $$k = $v;
        }
    }
}
if ($_settings->userdata('type') == 3) {
    $meta_qry = $conn->query("SELECT * FROM employee_meta where meta_field = 'leave_type_ids' and user_id = '{$_settings->userdata('id')}' ");
    $leave_type_ids = $meta_qry->num_rows > 0 ? $meta_qry->fetch_array()['meta_value'] : '';
}
?>
<?php
// Include the main TCPDF library (search for installation path).
ob_clean();
require_once('TCPDF/tcpdf.php');
//  // fetching the data and insertiong into the pdf
//  if (isset($_GET['id']) && $_GET['id'] > 0) {
//      $qry = $conn->query("SELECT l.*,concat(u.lastname,' ',u.firstname,' ',u.middlename) as `name`,lt.code,lt.name as lname from `leave_applications` l inner join `users` u on l.user_id=u.id inner join `leave_types` lt on lt.id = l.leave_type_id  where l.id = '{$_GET['id']}' ");
//      //  if ($qry->num_rows > 0) {
//      //      foreach ($qry->fetch_assoc() as $k => $v) {
//      //          $$k = $v;
//      //      }
//      //  }
//      $lt_qry = $conn->query("SELECT meta_value FROM `employee_meta` where user_id = '{$user_id}' and meta_field = 'employee_id' ");
//      $employee_id = ($lt_qry->num_rows > 0) ? $lt_qry->fetch_array()['meta_value'] : "N/A";
//  }
//    $config_path =  "config.php";
//    // Use the "require_once" statement to include the file
//    if (file_exists($config_path)) {
//        require_once $config_path;
//        echo "Executed";
//       // Continue executing the script
//    } else {
//        // If the file does not exist, output an error message and exit the script
//        echo "Error: could not include file {$config_path}";
//        exit;
//    }

$employee_id = 'lastname';

class PDF extends TCPDF
{
    public function Header()
    {

    }

    public function Footer()
    {

    }

}


// create new PDF document
$pdf = new PDF('p', 'mm', 'FOLIO', true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Department of Education');
$pdf->SetTitle('APPLICATION FOR LEAVE');
$pdf->SetSubject('');
$pdf->SetKeywords('');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE . ' 001', PDF_HEADER_STRING, array(0, 64, 255), array(0, 64, 128));
$pdf->setFooterData(array(0, 64, 0), array(0, 64, 128));

// set header and footer fonts
$pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// Set the font to DejaVu Sans
$pdf->SetFont('dejavusans', '', 12); /////////

// Output an empty checkbox
$pdf->Write(10, "\xE2\x98\x90"); /////////

// Output a checked checkbox
$pdf->Write(10, "\xE2\x98\x91"); /////////

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
// $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetMargins(7, 0, 7, true);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
    require_once(dirname(__FILE__) . '/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('zapfdingbats', '', 14, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

// set text shadow effect
//$pdf->setTextShadow(array('enabled' => true, 'depth_w' => 0.2, 'depth_h' => 0.2, 'color' => array(196, 196, 196), 'opacity' => 1, 'blend_mode' => 'Normal'));


$imageFile = K_PATH_IMAGES . 'deped_logo.png';
$pdf->Image($imageFile, 40, 7, 20, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
$pdf->Ln(); //font name size style
$pdf->SetFont('helvetica', 'BI', 8);
$pdf->Cell(0, 5, 'Civil Service form No.6', 0, 1, '');
$pdf->Cell(0, 3, 'Revised 2020', 0, 1, '');
$pdf->SetFont('helvetica', 'B', 9);

//189 is the total width for A4 page, height, border, line,
//Cell($w, $h=0, $txt='', $border=0 $ln=0, $align='', $fill=0, $link='', $stretched=0, $ignore_min_height=false, $calign='T', $valign='M')
$pdf->Cell(0, 3, 'Republic of the Philippines', 0, 1, 'C');
$pdf->SetFont('helvetica', 'BI', 9);
$pdf->Cell(0, 3, 'Department of Education', 0, 1, 'C');
$pdf->Cell(0, 3, 'Region I', 0, 1, 'C');
$pdf->Cell(0, 3, 'SCHOOLS DIVISION OFFICE I PANGASINAN', 0, 1, 'C');
$pdf->SetFont('helvetica', 'BI', 6);
$pdf->Cell(0, 3, '', 0, 1, 'C');
$pdf->SetFont('helvetica', 'B', 16);
$pdf->Cell(0, 3, 'APPLICATION FOR LEAVE', 0, 1, 'C');
$pdf->SetFont('helvetica', 'BI', 6);
$pdf->Cell(0, 3, '', 0, 1, 'C');

// Set some content to print
$pdf->SetFont('helvetica', '', 9);
$pdf->Cell(202, 5, ' 1. OFFICE DEPARTMENT                      2. NAME:             (Last)                               (First)                             (Middle)', 'LTR', 1, '');
$pdf->Cell(202, 8, '  Answer: '. $employee_id .' name ', 'LRB', 1, '');

$pdf->SetFont('helvetica', '', 9);
$pdf->Cell(202, 5, ' 1. OFFICE DEPARTMENT                      2. NAME:             (Last)                               (First)                             (Middle)', 'LTR', 1, '');
$pdf->Cell(202, 8, '  Answer: ', 'LRB', 1, '');

$pdf->SetFont('helvetica', '', 9);
$pdf->Cell(202, 5, ' 1. OFFICE DEPARTMENT                      2. NAME:             (Last)                               (First)                             (Middle)', 'LTR', 1, '');
$pdf->Cell(202, 8, '  Answer: ', 'LRB', 1, '');



// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('leave.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
?>
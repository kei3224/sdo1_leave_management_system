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

//set margin to 10mm
$pdf->SetAutoPageBreak(true, 10);

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

// Set some content to print
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

//adding the contents
$pdf->SetFont('helvetica', '', 9);
$pdf->Cell(202, 5, ' 1. OFFICE DEPARTMENT                      2. NAME:             (Last)                               (First)                             (Middle)', 'LTR', 1, '');
$pdf->Cell(202, 8, '      ', 'LRB', 1, '');

$pdf->Cell(202, 10, ' 3. DATE OF FILING________________       4. POSITION:_________________________      5. SALARY ________________', 1, 1, '');

$pdf->SetFont('helvetica', '', 1);
$pdf->Cell(202, 0, ' ', 1, 1, 'C');
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(202, 5, '6. DETAILS OF APPLICATION', 1, 1, 'C');
$pdf->SetFont('helvetica', '', 1);
$pdf->Cell(202, 0, ' ', 1, 1, 'C');

$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(115, 8, " 6.A TYPE OF LEAVE TO BE AVAILED OF    ", 'TLR', );
$pdf->Cell(87, 8, " 6.B DETAILS OF LEAVE", 'TLR');
$pdf->Ln();

$pdf->SetFont('dejavusans', '', 14);
$pdf->Cell(6, 6, ' ☐', 'L');
$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(25, 6, ' Vacation Leave ', '');
$pdf->SetFont('helvetica', '', 6);
$pdf->Cell(84, 6, ' (Sec. 51, Rule XVI, Omnibus Rules Implementing E.O. No. 292)', 'R');
$pdf->SetFont('helvetica', 'I', 10);
$pdf->Cell(87, 6, "     Incase of Vacation/Special Previlage Leave:", 'LR');
$pdf->Ln();

$pdf->SetFont('dejavusans', '', 14);
$pdf->Cell(6, 6, ' ☐', 'L');
$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(40, 6, ' Mandatory/Forced Leave ', '');
$pdf->SetFont('helvetica', '', 6);
$pdf->Cell(69, 6, ' (Sec. 51, Rule XVI, Omnibus Rules Implementing E.O. No. 292)', 'R');
$pdf->SetFont('dejavusans', '', 14);
$pdf->Cell(9, 6, '   ☐', 'L');
$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(78, 6, " Within the Pilippines _____________________", 'R');
$pdf->Ln();

$pdf->SetFont('dejavusans', '', 14);
$pdf->Cell(6, 6, ' ☐', 'L');
$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(18, 6, ' Sick Leave ', '');
$pdf->SetFont('helvetica', '', 6);
$pdf->Cell(91, 6, ' (Sec. 43, Rule XVI, Omnibus Rules Implementing E.O. No.292)', 'R');
$pdf->SetFont('dejavusans', '', 14);
$pdf->Cell(9, 6, '   ☐', 'L');
$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(78, 6, " Abroad (Specify) ________________________", 'R');
$pdf->Ln();

$pdf->SetFont('dejavusans', '', 14);
$pdf->Cell(6, 6, ' ☐', 'L');
$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(26, 6, ' Maternity Leave ', '');
$pdf->SetFont('helvetica', '', 6);
$pdf->Cell(83, 6, ' (R.A. No 11210/IRR issued by CSC, DOLE and SSS)', 'R');
$pdf->SetFont('helvetica', 'I', 10);
$pdf->Cell(87, 6, "    Incase of Sick Leave:", 'LR');
$pdf->Ln();

$pdf->SetFont('dejavusans', '', 14);
$pdf->Cell(6, 6, ' ☐', 'L');
$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(26, 6, ' Paternity Leave ', '');
$pdf->SetFont('helvetica', '', 6);
$pdf->Cell(83, 6, ' (R.A. No. 8187 / CSC MC)', 'R');
$pdf->SetFont('dejavusans', '', 14);
$pdf->Cell(9, 6, '   ☐', 'L');
$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(78, 6, " In Hospital (Specify) _____________________", 'R');
$pdf->Ln();

$pdf->SetFont('dejavusans', '', 14);
$pdf->Cell(6, 6, ' ☐', 'L');
$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(39, 6, ' Special Previlage Leave ', '');
$pdf->SetFont('helvetica', '', 6);
$pdf->Cell(70, 6, ' (RA No. 8972 / CSC MC No. 8, s. 2004)', 'R');
$pdf->SetFont('dejavusans', '', 14);
$pdf->Cell(9, 6, '   ☐', 'L');
$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(78, 6, " Out Patient (Specify) ____________________", 'R');
$pdf->Ln();

$pdf->SetFont('dejavusans', '', 14);
$pdf->Cell(6, 6, ' ☐', 'L');
$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(30, 6, ' Solo Parent Leave ', '');
$pdf->SetFont('helvetica', '', 6);
$pdf->Cell(79, 6, ' (RA No. 8972 / CSC MC No. 8, s. 2004)', 'R');
$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(87, 6, "    ________________________________________", 'LR');
$pdf->Ln();

$pdf->SetFont('dejavusans', '', 14);
$pdf->Cell(6, 6, ' ☐', 'L');
$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(21, 6, ' Study Leave ', '');
$pdf->SetFont('helvetica', '', 6);
$pdf->Cell(88, 6, ' (Sec. 68, Rule XVI, Omnibus Rules Implementing E.O. No. 292)', 'R');
$pdf->SetFont('helvetica', 'I', 10);
$pdf->Cell(87, 6, "    Incase of Special Benefits for Women:", 'LR');
$pdf->Ln();

$pdf->SetFont('dejavusans', '', 14);
$pdf->Cell(6, 6, ' ☐', 'L');
$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(35, 6, ' 10-Day VAWC Leave ', '');
$pdf->SetFont('helvetica', '', 6);
$pdf->Cell(74, 6, ' (RA NO. 9262)', 'R');
$pdf->SetFont('helvetica', 'I', 10);
$pdf->Cell(87, 6, "    (Specify Illness)", 'LR');
$pdf->Ln();

$pdf->SetFont('dejavusans', '', 14);
$pdf->Cell(6, 6, ' ☐', 'L');
$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(34, 6, ' Rehabilitation Leave ', '');
$pdf->SetFont('helvetica', '', 6);
$pdf->Cell(75, 6, ' (Sec. 55, Rule XVI, Omnibus Rules Implementing E.O. No. 292)', 'R');
$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(87, 6, "    _________________________________________", 'LR');
$pdf->Ln();

$pdf->SetFont('dejavusans', '', 14);
$pdf->Cell(6, 6, ' ☐', 'L');
$pdf->SetFont('helvetica', 'Leave', 10);
$pdf->Cell(55, 6, ' Special Leave Benefits for Women', '');
$pdf->SetFont('helvetica', '', 6);
$pdf->Cell(54, 6, ' (RA No. 9710 / CSC MC No. 25, s. 2010)', 'R');
$pdf->SetFont('helvetica', 'I', 10);
$pdf->Cell(87, 6, "     Incase of Study Leave:", 'LR');
$pdf->Ln();

$pdf->SetFont('dejavusans', '', 14);
$pdf->Cell(6, 6, ' ☐', 'L');
$pdf->SetFont('helvetica', 'Leave', 10);
$pdf->Cell(60, 6, ' Special Emergency (Calamity) Leave', '');
$pdf->SetFont('helvetica', '', 6);
$pdf->Cell(49, 6, ' (CSC MC No. 2, s. 2010)', 'R');
$pdf->SetFont('dejavusans', '', 14);
$pdf->Cell(9, 6, '   ☐', 'L');
$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(78, 6, " Completion of Master's Degree", 'R');
$pdf->Ln();

$pdf->SetFont('dejavusans', '', 14);
$pdf->Cell(6, 6, ' ☐', 'L');
$pdf->SetFont('helvetica', 'Leave', 10);
$pdf->Cell(26, 6, ' Adoption Leave', '');
$pdf->SetFont('helvetica', '', 6);
$pdf->Cell(83, 6, ' (R.A. No. 8552)', 'R');
$pdf->SetFont('dejavusans', '', 14);
$pdf->Cell(9, 6, '   ☐', 'L');
$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(78, 6, " BAR/Board Examination Review", 'R');
$pdf->Ln();

$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(115, 6, ' ', 'LR');
$pdf->SetFont('helvetica', 'I', 10);
$pdf->Cell(87, 6, "    Other Purpose:", 'LR');
$pdf->Ln();

$pdf->SetFont('helvetica', 'I', 10);
$pdf->Cell(115, 6, '    Others:', 'LR');
$pdf->SetFont('dejavusans', '', 14);
$pdf->Cell(9, 6, '   ☐', 'L');
$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(78, 6, " Monetization of Leave Credits", 'R');
$pdf->Ln();

$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(115, 8, '    _________________________________________', 'LRB');
$pdf->SetFont('dejavusans', '', 14);
$pdf->Cell(9, 6, '   ☐', 'L');
$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(78, 8, " Terminal Leave", 'R');
$pdf->Ln();

$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(115, 8, " 6.C NUMBER OF WORKING DAYS APPLIED FOR    ", 'TLR');
$pdf->Cell(87, 8, " 6.D COMMUTATION", 'TLR');
$pdf->Ln();

$pdf->SetFont('helvetica', 'I', 10);
$pdf->Cell(115, 6, '      ________________________________________', 'LR');
$pdf->SetFont('dejavusans', '', 14);
$pdf->Cell(9, 6, '   ☐', 'L');
$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(78, 6, " Not Requested", 'R');
$pdf->Ln();

$pdf->SetFont('helvetica', 'I', 10);
$pdf->Cell(115, 6, '      INCLUSIVE DATES', 'LR');
$pdf->SetFont('dejavusans', '', 14);
$pdf->Cell(9, 6, '   ☐', 'L');
$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(78, 6, " Requested", 'R');
$pdf->Ln();

$pdf->SetFont('helvetica', 'I', 10);
$pdf->Cell(115, 6, '      ________________________________________', 'LR');
$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(87, 0, "    ________________________________________", 'LR');
$pdf->Ln();

$pdf->SetFont('helvetica', 'I', 10);
$pdf->Cell(115, 6, '      ', 'LR');
$pdf->Cell(87, 6, "                         (Signature of Applicant)", 'LR');
$pdf->Ln();

$pdf->SetFont('helvetica', '', 1);
$pdf->Cell(202, 0, ' ', 1, 1, 'C');
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(202, 6, '7. DETAILS OF ACTION ON APPLICATION', 1, 1, 'C');
$pdf->SetFont('helvetica', '', 1);
$pdf->Cell(202, 0, ' ', 1, 1, 'C');

$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(115, 8, " 7.A CERTIFICATION OF LEAVE CREDITS    ", 'LR');
$pdf->Cell(87, 8, " 7.B RECOMMENDATION", 'LR');
$pdf->Ln();

$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(115, 6, '                             As of ____________________________', 'LR');
$pdf->SetFont('dejavusans', '', 14);
$pdf->Cell(9, 6, '   ☐', 'L');
$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(78, 6, " For Approval", 'R');
$pdf->Ln();

// $pdf->SetFont('dejavusans', '', 11);
// $pdf->Cell(6, 6, 'Total Earned', 'L');

$pdf->SetFont('helvetica', 'I', 10);
$pdf->Cell(6, 6, '', 'LR');
$pdf->Cell(34, 2, '   ', 'TLRB');
$pdf->Cell(34, 2, '     Vacation Leave', 'TLRB');
$pdf->Cell(34, 2, '        Sick Leave', 'TLRB');
$pdf->Cell(7, 6, '', 'LR');

$pdf->SetFont('dejavusans', '', 14);
$pdf->Cell(9, 2, '   ☐', 'L');
$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(78, 2, " For disapproval due to __________________", 'R');
$pdf->Ln();

$pdf->SetFont('helvetica', 'I', 10);
$pdf->Cell(6, 2, '', 'LR');
$pdf->Cell(34, 2, '      Total Earned', 'TLRB');
$pdf->Cell(34, 2, '   ', 'TLRB');
$pdf->Cell(34, 2, '   ', 'TLRB');
$pdf->Cell(7, 2, '', 'LR');
$pdf->Cell(87, 2, "         _____________________________________", 'LR');
$pdf->Ln();

$pdf->SetFont('helvetica', 'I', 10);
$pdf->Cell(6, 2, '', 'LR');
$pdf->Cell(34, 2, ' Less this Application', 'TLRB');
$pdf->Cell(34, 2, '   ', 'TLRB');
$pdf->Cell(34, 2, '   ', 'TLRB');
$pdf->Cell(7, 2, '', 'LR');
$pdf->Cell(87, 2, "         _____________________________________", 'LR');
$pdf->Ln();

$pdf->SetFont('helvetica', 'I', 10);
$pdf->Cell(6, 2, '', 'LR');
$pdf->Cell(34, 2, '          Balance', 'TLRB');
$pdf->Cell(34, 2, '   ', 'TLRB');
$pdf->Cell(34, 2, '   ', 'TLRB');
$pdf->Cell(7, 2, '', 'LR');
$pdf->Cell(87, 2, "         _____________________________________", 'LR');
$pdf->Ln();

$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(115, 2, '', 'LR');
$pdf->Cell(87, 2, "", 'LR');
$pdf->Ln();

$pdf->SetFont('helvetica', 'I', 10);
$pdf->Cell(6, 6, '', 'L');
$pdf->SetFont('helvetica', 'B', 10);
$pdf->Cell(102, 6, '                                      NELIA C. SANTOS', 'B');
$pdf->SetFont('helvetica', 'B', 10);
$pdf->Cell(7, 6, '', 'R');
$pdf->Cell(9, 6, '', 'L');
$pdf->Cell(73, 6, "         RAFAEL IRWIN G. NICOLAS ED.D", 'B');
$pdf->Cell(5, 6, '', 'R');
$pdf->Ln();

$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(115, 6, '                                      Administrative IV-Personnel', 'LRB');
$pdf->Cell(87, 6, "                         Administrative Officer V", 'LRB');
$pdf->Ln();

$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(115, 8, " 7.C APPROVED FOR", 'TL');
$pdf->Cell(87, 8, " 7.D DISAPPROVED DUE TO ", 'TR');
$pdf->Ln();

$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(115, 2, '      ___________ days with pay', 'L');
$pdf->Cell(87, 2, "         _____________________________________", 'R');
$pdf->Ln();

$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(115, 2, '      ___________ days without pay', 'L');
$pdf->Cell(87, 2, "         _____________________________________", 'R');
$pdf->Ln();

$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(115, 2, '      ___________ others specify', 'L');
$pdf->Cell(87, 2, "         _____________________________________", 'R');
$pdf->Ln();

$pdf->Cell(115, 6, '', 'L');
$pdf->Cell(87, 6, " ", 'R');
$pdf->Ln();

$pdf->Cell(115, 6, '', 'L');
$pdf->Cell(87, 6, " ", 'R');
$pdf->Ln();

$pdf->SetFont('helvetica', 'B', 10);
$pdf->Cell(202, 6, 'DIOSDADO A. CAYABYAB, CESO VI', 'LR', 1, 'C');

$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(202, 6, 'Asst. Schools Division Superintendent', 'LRB', 1, 'C');




// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('leave.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
?>
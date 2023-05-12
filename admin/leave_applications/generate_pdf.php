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
        $imageFile = K_PATH_IMAGES . 'deped_logo.png';
        $this->Image($imageFile, 40, 7, 20, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        $this->Ln(); //font name size style
        $this->SetFont('helvetica', 'BI', 8);
        $this->Cell(0, 5, 'Civil Service form No.6', 0, 1, '');
        $this->Cell(0, 3, 'Revised 2020', 0, 1, '');
        $this->SetFont('helvetica', 'B', 9);
        //189 is the total width for A4 page, height, border, line,
        //Cell($w, $h=0, $txt='', $border=0 $ln=0, $align='', $fill=0, $link='', $stretched=0, $ignore_min_height=false, $calign='T', $valign='M')
        $this->Cell(0, 3, 'Republic of the Philippines', 0, 1, 'C');
        $this->SetFont('helvetica', 'BI', 9);
        $this->Cell(0, 3, 'Department of Education', 0, 1, 'C');
        $this->Cell(0, 3, 'Region I', 0, 1, 'C');
        $this->Cell(0, 3, 'SCHOOLS DIVISION OFFICE I PANGASINAN', 0, 1, 'C');
        $this->SetFont('helvetica', 'BI', 6);
        $this->Cell(0, 3, '', 0, 1, 'C');
        $this->SetFont('helvetica', 'B', 16);
        $this->Cell(0, 3, 'APPLICATION FOR LEAVE', 0, 1, 'C');
        $this->SetFont('helvetica', 'BI', 6);
        $this->Cell(0, 3, '', 0, 1, 'C');

        //adding the contents
        $this->SetFont('helvetica', '', 9);
        $this->Cell(202, 5, ' 1. OFFICE DEPARTMENT                      2. NAME:             (Last)                               (First)                             (Middle)', 'LTR', 1, '');
        $this->Cell(202, 8, '      ', 'LRB', 1, '');

        $this->Cell(202, 10, ' 3. DATE OF FILING________________       4. POSITION:_________________________      5. SALARY ________________', 1, 1, '');

        $this->SetFont('helvetica', '', 1);
        $this->Cell(202, 0, ' ', 1, 1, 'C');
        $this->SetFont('helvetica', 'B', 12);
        $this->Cell(202, 5, '6. DETAILS OF APPLICATION', 1, 1, 'C');
        $this->SetFont('helvetica', '', 1);
        $this->Cell(202, 0, ' ', 1, 1, 'C');

        $this->SetFont('helvetica', '', 10);
        $this->Cell(115, 8, " 6.A TYPE OF LEAVE TO BE AVAILED OF    ", 'TLR', );
        $this->Cell(87, 8, " 6.B DETAILS OF LEAVE", 'TLR');
        $this->Ln();

        $this->SetFont('dejavusans', '', 14);
        $this->Cell(6, 6, ' ☐', 'L');
        $this->SetFont('helvetica', '', 10);
        $this->Cell(25, 6, ' Vacation Leave ', '');
        $this->SetFont('helvetica', '', 6);
        $this->Cell(84, 6, ' (Sec. 51, Rule XVI, Omnibus Rules Implementing E.O. No. 292)', 'R');
        $this->SetFont('helvetica', 'I', 10);
        $this->Cell(87, 6, "     Incase of Vacation/Special Previlage Leave:", 'LR');
        $this->Ln();

        $this->SetFont('dejavusans', '', 14);
        $this->Cell(6, 6, ' ☐', 'L');
        $this->SetFont('helvetica', '', 10);
        $this->Cell(40, 6, ' Mandatory/Forced Leave ', '');
        $this->SetFont('helvetica', '', 6);
        $this->Cell(69, 6, ' (Sec. 51, Rule XVI, Omnibus Rules Implementing E.O. No. 292)', 'R');
        $this->SetFont('dejavusans', '', 14);
        $this->Cell(9, 6, '   ☐', 'L');
        $this->SetFont('helvetica', '', 10);
        $this->Cell(78, 6, " Within the Pilippines _____________________", 'R');
        $this->Ln();

        $this->SetFont('dejavusans', '', 14);
        $this->Cell(6, 6, ' ☐', 'L');
        $this->SetFont('helvetica', '', 10);
        $this->Cell(18, 6, ' Sick Leave ', '');
        $this->SetFont('helvetica', '', 6);
        $this->Cell(91, 6, ' (Sec. 43, Rule XVI, Omnibus Rules Implementing E.O. No.292)', 'R');
        $this->SetFont('dejavusans', '', 14);
        $this->Cell(9, 6, '   ☐', 'L');
        $this->SetFont('helvetica', '', 10);
        $this->Cell(78, 6, " Abroad (Specify) ________________________", 'R');
        $this->Ln();

        $this->SetFont('dejavusans', '', 14);
        $this->Cell(6, 6, ' ☐', 'L');
        $this->SetFont('helvetica', '', 10);
        $this->Cell(26, 6, ' Maternity Leave ', '');
        $this->SetFont('helvetica', '', 6);
        $this->Cell(83, 6, ' (R.A. No 11210/IRR issued by CSC, DOLE and SSS)', 'R');
        $this->SetFont('helvetica', 'I', 10);
        $this->Cell(87, 6, "    Incase of Sick Leave:", 'LR');
        $this->Ln();

        $this->SetFont('dejavusans', '', 14);
        $this->Cell(6, 6, ' ☐', 'L');
        $this->SetFont('helvetica', '', 10);
        $this->Cell(26, 6, ' Paternity Leave ', '');
        $this->SetFont('helvetica', '', 6);
        $this->Cell(83, 6, ' (R.A. No. 8187 / CSC MC)', 'R');
        $this->SetFont('dejavusans', '', 14);
        $this->Cell(9, 6, '   ☐', 'L');
        $this->SetFont('helvetica', '', 10);
        $this->Cell(78, 6, " In Hospital (Specify) _____________________", 'R');
        $this->Ln();

        $this->SetFont('dejavusans', '', 14);
        $this->Cell(6, 6, ' ☐', 'L');
        $this->SetFont('helvetica', '', 10);
        $this->Cell(39, 6, ' Special Previlage Leave ', '');
        $this->SetFont('helvetica', '', 6);
        $this->Cell(70, 6, ' (RA No. 8972 / CSC MC No. 8, s. 2004)', 'R');
        $this->SetFont('dejavusans', '', 14);
        $this->Cell(9, 6, '   ☐', 'L');
        $this->SetFont('helvetica', '', 10);
        $this->Cell(78, 6, " Out Patient (Specify) ____________________", 'R');
        $this->Ln();

        $this->SetFont('dejavusans', '', 14);
        $this->Cell(6, 6, ' ☐', 'L');
        $this->SetFont('helvetica', '', 10);
        $this->Cell(30, 6, ' Solo Parent Leave ', '');
        $this->SetFont('helvetica', '', 6);
        $this->Cell(79, 6, ' (RA No. 8972 / CSC MC No. 8, s. 2004)', 'R');
        $this->SetFont('helvetica', '', 10);
        $this->Cell(87, 6, "    ________________________________________", 'LR');
        $this->Ln();

        $this->SetFont('dejavusans', '', 14);
        $this->Cell(6, 6, ' ☐', 'L');
        $this->SetFont('helvetica', '', 10);
        $this->Cell(21, 6, ' Study Leave ', '');
        $this->SetFont('helvetica', '', 6);
        $this->Cell(88, 6, ' (Sec. 68, Rule XVI, Omnibus Rules Implementing E.O. No. 292)', 'R');
        $this->SetFont('helvetica', 'I', 10);
        $this->Cell(87, 6, "    Incase of Special Benefits for Women:", 'LR');
        $this->Ln();

        $this->SetFont('dejavusans', '', 14);
        $this->Cell(6, 6, ' ☐', 'L');
        $this->SetFont('helvetica', '', 10);
        $this->Cell(35, 6, ' 10-Day VAWC Leave ', '');
        $this->SetFont('helvetica', '', 6);
        $this->Cell(74, 6, ' (RA NO. 9262)', 'R');
        $this->SetFont('helvetica', 'I', 10);
        $this->Cell(87, 6, "    (Specify Illness)", 'LR');
        $this->Ln();

        $this->SetFont('dejavusans', '', 14);
        $this->Cell(6, 6, ' ☐', 'L');
        $this->SetFont('helvetica', '', 10);
        $this->Cell(34, 6, ' Rehabilitation Leave ', '');
        $this->SetFont('helvetica', '', 6);
        $this->Cell(75, 6, ' (Sec. 55, Rule XVI, Omnibus Rules Implementing E.O. No. 292)', 'R');
        $this->SetFont('helvetica', '', 10);
        $this->Cell(87, 6, "    _________________________________________", 'LR');
        $this->Ln();

        $this->SetFont('dejavusans', '', 14);
        $this->Cell(6, 6, ' ☐', 'L');
        $this->SetFont('helvetica', 'Leave', 10);
        $this->Cell(55, 6, ' Special Leave Benefits for Women', '');
        $this->SetFont('helvetica', '', 6);
        $this->Cell(54, 6, ' (RA No. 9710 / CSC MC No. 25, s. 2010)', 'R');
        $this->SetFont('helvetica', 'I', 10);
        $this->Cell(87, 6, "     Incase of Study Leave:", 'LR');
        $this->Ln();

        $this->SetFont('dejavusans', '', 14);
        $this->Cell(6, 6, ' ☐', 'L');
        $this->SetFont('helvetica', 'Leave', 10);
        $this->Cell(60, 6, ' Special Emergency (Calamity) Leave', '');
        $this->SetFont('helvetica', '', 6);
        $this->Cell(49, 6, ' (CSC MC No. 2, s. 2010)', 'R');
        $this->SetFont('dejavusans', '', 14);
        $this->Cell(9, 6, '   ☐', 'L');
        $this->SetFont('helvetica', '', 10);
        $this->Cell(78, 6, " Completion of Master's Degree", 'R');
        $this->Ln();

        $this->SetFont('dejavusans', '', 14);
        $this->Cell(6, 6, ' ☐', 'L');
        $this->SetFont('helvetica', 'Leave', 10);
        $this->Cell(26, 6, ' Adoption Leave', '');
        $this->SetFont('helvetica', '', 6);
        $this->Cell(83, 6, ' (R.A. No. 8552)', 'R');
        $this->SetFont('dejavusans', '', 14);
        $this->Cell(9, 6, '   ☐', 'L');
        $this->SetFont('helvetica', '', 10);
        $this->Cell(78, 6, " BAR/Board Examination Review", 'R');
        $this->Ln();

        $this->SetFont('helvetica', '', 10);
        $this->Cell(115, 6, ' ', 'LR');
        $this->SetFont('helvetica', 'I', 10);
        $this->Cell(87, 6, "    Other Purpose:", 'LR');
        $this->Ln();

        $this->SetFont('helvetica', 'I', 10);
        $this->Cell(115, 6, '    Others:', 'LR');
        $this->SetFont('dejavusans', '', 14);
        $this->Cell(9, 6, '   ☐', 'L');
        $this->SetFont('helvetica', '', 10);
        $this->Cell(78, 6, " Monetization of Leave Credits", 'R');
        $this->Ln();

        $this->SetFont('helvetica', '', 10);
        $this->Cell(115, 8, '    _________________________________________', 'LRB');
        $this->SetFont('dejavusans', '', 14);
        $this->Cell(9, 6, '   ☐', 'L');
        $this->SetFont('helvetica', '', 10);
        $this->Cell(78, 8, " Terminal Leave", 'R');
        $this->Ln();

        $this->SetFont('helvetica', '', 10);
        $this->Cell(115, 8, " 6.C NUMBER OF WORKING DAYS APPLIED FOR    ", 'TLR');
        $this->Cell(87, 8, " 6.D COMMUTATION", 'TLR');
        $this->Ln();

        $this->SetFont('helvetica', 'I', 10);
        $this->Cell(115, 6, '      ________________________________________', 'LR');
        $this->SetFont('dejavusans', '', 14);
        $this->Cell(9, 6, '   ☐', 'L');
        $this->SetFont('helvetica', '', 10);
        $this->Cell(78, 6, " Not Requested", 'R');
        $this->Ln();

        $this->SetFont('helvetica', 'I', 10);
        $this->Cell(115, 6, '      INCLUSIVE DATES', 'LR');
        $this->SetFont('dejavusans', '', 14);
        $this->Cell(9, 6, '   ☐', 'L');
        $this->SetFont('helvetica', '', 10);
        $this->Cell(78, 6, " Requested", 'R');
        $this->Ln();

        $this->SetFont('helvetica', 'I', 10);
        $this->Cell(115, 6, '      ________________________________________', 'LR');
        $this->SetFont('helvetica', '', 10);
        $this->Cell(87, 0, "    ________________________________________", 'LR');
        $this->Ln();

        $this->SetFont('helvetica', 'I', 10);
        $this->Cell(115, 6, '      ', 'LR');
        $this->Cell(87, 6, "                         (Signature of Applicant)", 'LR');
        $this->Ln();

        $this->SetFont('helvetica', '', 1);
        $this->Cell(202, 0, ' ', 1, 1, 'C');
        $this->SetFont('helvetica', 'B', 12);
        $this->Cell(202, 6, '7. DETAILS OF ACTION ON APPLICATION', 1, 1, 'C');
        $this->SetFont('helvetica', '', 1);
        $this->Cell(202, 0, ' ', 1, 1, 'C');

        $this->SetFont('helvetica', '', 10);
        $this->Cell(115, 8, " 7.A CERTIFICATION OF LEAVE CREDITS    ", 'LR');
        $this->Cell(87, 8, " 7.B RECOMMENDATION", 'LR');
        $this->Ln();

        $this->SetFont('helvetica', '', 10);
        $this->Cell(115, 6, '                             As of ____________________________', 'LR');
        $this->SetFont('dejavusans', '', 14);
        $this->Cell(9, 6, '   ☐', 'L');
        $this->SetFont('helvetica', '', 10);
        $this->Cell(78, 6, " For Approval", 'R');
        $this->Ln();

        // $this->SetFont('dejavusans', '', 11);
        // $this->Cell(6, 6, 'Total Earned', 'L');

        $this->SetFont('helvetica', 'I', 10);
        $this->Cell(6, 6, '', 'LR');
        $this->Cell(34, 2, '   ', 'TLRB');
        $this->Cell(34, 2, '     Vacation Leave', 'TLRB');
        $this->Cell(34, 2, '        Sick Leave', 'TLRB');
        $this->Cell(7, 6, '', 'LR');

        $this->SetFont('dejavusans', '', 14);
        $this->Cell(9, 2, '   ☐', 'L');
        $this->SetFont('helvetica', '', 10);
        $this->Cell(78, 2, " For disapproval due to __________________", 'R');
        $this->Ln();

        $this->SetFont('helvetica', 'I', 10);
        $this->Cell(6, 2, '', 'LR');
        $this->Cell(34, 2, '      Total Earned', 'TLRB');
        $this->Cell(34, 2, '   ', 'TLRB');
        $this->Cell(34, 2, '   ', 'TLRB');
        $this->Cell(7, 2, '', 'LR');
        $this->Cell(87, 2, "         _____________________________________", 'LR');
        $this->Ln();

        $this->SetFont('helvetica', 'I', 10);
        $this->Cell(6, 2, '', 'LR');
        $this->Cell(34, 2, ' Less this Application', 'TLRB');
        $this->Cell(34, 2, '   ', 'TLRB');
        $this->Cell(34, 2, '   ', 'TLRB');
        $this->Cell(7, 2, '', 'LR');
        $this->Cell(87, 2, "         _____________________________________", 'LR');
        $this->Ln();

        $this->SetFont('helvetica', 'I', 10);
        $this->Cell(6, 2, '', 'LR');
        $this->Cell(34, 2, '          Balance', 'TLRB');
        $this->Cell(34, 2, '   ', 'TLRB');
        $this->Cell(34, 2, '   ', 'TLRB');
        $this->Cell(7, 2, '', 'LR');
        $this->Cell(87, 2, "         _____________________________________", 'LR');
        $this->Ln();

        $this->SetFont('helvetica', '', 10);
        $this->Cell(115, 2, '', 'LR');
        $this->Cell(87, 2, "", 'LR');
        $this->Ln();

        $this->SetFont('helvetica', 'I', 10);
        $this->Cell(6, 6, '', 'L');
        $this->SetFont('helvetica', 'B', 10);
        $this->Cell(102, 6, '                                      NELIA C. SANTOS', 'B');
        $this->SetFont('helvetica', 'B', 10);
        $this->Cell(7, 6, '', 'R');
        $this->Cell(9, 6, '', 'L');
        $this->Cell(73, 6, "         RAFAEL IRWIN G. NICOLAS ED.D", 'B');
        $this->Cell(5, 6, '', 'R');
        $this->Ln();

        $this->SetFont('helvetica', '', 10);
        $this->Cell(115, 6, '                                      Administrative IV-Personnel', 'LRB');
        $this->Cell(87, 6, "                         Administrative Officer V", 'LRB');
        $this->Ln();

        $this->SetFont('helvetica', '', 10);
        $this->Cell(115, 8, " 7.C APPROVED FOR", 'TL');
        $this->Cell(87, 8, " 7.D DISAPPROVED DUE TO ", 'TR');
        $this->Ln();

        $this->SetFont('helvetica', '', 10);
        $this->Cell(115, 2, '      ___________ days with pay', 'L');
        $this->Cell(87, 2, "         _____________________________________", 'R');
        $this->Ln();

        $this->SetFont('helvetica', '', 10);
        $this->Cell(115, 2, '      ___________ days without pay', 'L');
        $this->Cell(87, 2, "         _____________________________________", 'R');
        $this->Ln();

        $this->SetFont('helvetica', '', 10);
        $this->Cell(115, 2, '      ___________ others specify', 'L');
        $this->Cell(87, 2, "         _____________________________________", 'R');
        $this->Ln();

        $this->Cell(115, 6, '', 'L');
        $this->Cell(87, 6, " ", 'R');
        $this->Ln();

        $this->Cell(115, 6, '', 'L');
        $this->Cell(87, 6, " ", 'R');
        $this->Ln();

        $this->SetFont('helvetica', 'B', 10);
        $this->Cell(202, 6, 'DIOSDADO A. CAYABYAB, CESO VI', 'LR', 1, 'C');

        $this->SetFont('helvetica', '', 10);
        $this->Cell(202, 6, 'Asst. Schools Division Superintendent', 'LRB', 1, 'C');


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

// Set some content to print



// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('leave.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
?>
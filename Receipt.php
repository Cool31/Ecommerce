//install PDFlib library
<?php
$pdf= new pdf();
pdf_begin_document($pdf);
pdf_setinfo($pdf, "Az AirLines");
pdf_setinfo($pdf, "Receipt");
pdf_setinfo($pdf, "Email Id: az@gmail.com", "Helpline - General Inquiry: 123456");
pdf_setinfo($pdf, ": az@gmail.com", "Helpline - General Inquiry: 123456");
pdf_setinfo($pdf, "Emergency:1111", "Protection:2222", "Medical:3333", "Immigration:4444", "Complaints:5555");
pdf_setinfo($pdf, "Dear Customer:<br>Received the said amount as aforementioned on reservation in cash/CC towards your flight travel ticket.  We wish you a happy journey."); 
pdf_setinfo($pdf, "Customer Name", "Amt Recd", "Date", "Receipt No", "Mode Of Payment");
pdf_begin_page($pdf, (72 * 8.5), (72 * 11));
$font=pdf_findfont($pdf, "Times-Roman", "host",8);
pdf_set_font($pdf, $font, 40);
pdf_set_text_pos(72, 700);
pdf_show($pdf,.....);
pdf_setinfo($pdf, "**Please note air fare are subject to change as per rules and regulations from time to time inclusive of airport taxes as applicable to travel under Ministry of Airlines.");
pdf_end_page($pdf);
pdf_end_document($pdf);
$document=pdf_get_buffer($pdf);
$length=strlen($document);
$filename="bookedflight.pdf";

header("Content-Type: application/pdf");
header("Content-length".$length);
header("Content-disposition:inline; filename=".$filename);
echo($document);
unset($document);
pdf_delete($pdf);
?>

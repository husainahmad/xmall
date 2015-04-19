<?php
ini_set("memory_limit","128M");
tcpdf();
    $obj_pdf = new TCPDF('L', 'pt');
    $obj_pdf->SetCreator(PDF_CREATOR);
    $obj_pdf->SetTitle('');
    //$obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_width, $title, PDF_HEADER_StrING);
    $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
    $obj_pdf->SetdefaultMonospacedFont('helvetica');
    $obj_pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
    $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
    $obj_pdf->SetMargins(PDF_MARGIN_LEFT-5, PDF_MARGIN_TOP-20, PDF_MARGIN_RIGHT-5);
    $obj_pdf->SetAutoPageBreak(trUE, PDF_MARGIN_BOTTOM-5);
    $obj_pdf->SetFont('helvetica', '', 10);
    $obj_pdf->setFontSubsetting(false);
    $obj_pdf->AddPage('L');
    $obj_pdf->setPageMark();
    ob_start();
    
    $tr = "";
    $r = 1;
    
    foreach($user_members as $row) {
        $tr .= '<tr>
                <td align="center" width="15">'.$r.'</td>
                <td width="45">'.$row['MemberId'].'</td>
                <td width="45">'.$row['IdCard'].'</td>        
                <td width="95">'.$row['NamaLengkap'].'</td>        
                <td width="45">'.$row['Handphone'].'</td>

                <td width="85">'.$row['Email'].'</td>
                <td width="95">'.$row['Alamat'].'</td>
                <td width="45">'.$row['MemberSince'].'</td>
                		
                <td width="45" align="center" >'.$row['ValidThru'].'</td>
                <td align="center" width="45">'.$row['NomorIdentitas'].'</td>
            </tr>';        
        $r++;
    }
    
    
    $content = <<<EOD
   
<head>   
    <style>
    table.hovertable {
                font-size:6px;
                color:#333333;
                border-width: 1px;
                border-color: #999999;
                border-collapse: collapse;                
            }


            table.hovertable th {
                background-color:#336699;
                border-width: 1px;
                padding: 4px;
                border-style: solid;
                border-color: #ffffff;
                text-align:center;
                color: #ffffff; 
            }        
            table.hovertable tr {
                background-color:#ffffff;
            }
            table.hovertable td {
                border-width: 1px;
                padding: 2px;
                border-style: solid;
                border-color: #a9c6c9;
                text-spacing: trim-adjacent;
            }
            table.hovertable a {	
                color: white;
            }
            table.hovertable img {

            }

            table.tfoot {color:red;}
    </style>
</head>
<body>
<table class="hovertable" width="100%" cellspacing="1" >
<thead>
    
    <tr>
        <th width="15" align="center" >No</th>      
        <th width="45" align="center"  >MemberId</th>      
        <th width="45" align="center" >IdCard</th>      
        <th width="95" align="center" >NamaLengkap</th>   
        
        <th width="45" align="center" >Handphone</th>        
        <th width="45" align="center" >Email</th> 
        <th width="95" align="center" >Alamat</th>         
        
        <th width="45" align="center" >Member Since</th>         
        <th width="85" align="center" >Valid Thru</th>         
        <th width="45" align="center" >NomorIdentitas</th>         
     
    </tr>        
    </thead>
    $tr
</table>
</body>
EOD;

    ob_end_clean();
    $obj_pdf->writeHTML($content, true, false, true, false, '');
    $obj_pdf->Output('cetak_ba_pdf.pdf', 'I');
       
?>
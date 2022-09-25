<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>LIBERACIÓN DE RESPONSABILIDAD</title>
    <style>
        @page { margin: 180px 55px 180px 75px; }
        #header { position: fixed; left: 0px; top: -140px; right: 0px; height: 150px; text-align: center; }
        #footer { position: fixed; left: 0px; bottom: -60px; right: 0px; height: 150px; }
        #footer .page:after { content: counter(page, upper-roman); }
        #separation { margin-top:30px; position:static; }
        #separationbody { position:static; height: 40px; }
        #separationtable { position:static; }
        #footerpage{ position:fixed; top:620px; width:100%; }
        body{ font-family: Arial, Helvetica, sans-serif; font-size: 15px; }

        .table_datos{ width: 100%; text-align: left;  border:5px; } 
        .table{ width: 100%; caption-side:bottom; text-transform:uppercase; border-width:1px; border-style: solid; border-color: #d4d4d4; }
        .td { padding-left: 10px; text-align: left; }
        .td1 { padding:1.5px; text-align: right; }
        .td2 { padding:1.5px; text-align: right;  background-color: #d4d4d4; padding-top: 10px; padding-bottom: 10px; }
        .td3 { padding:1.5px; text-align: right; background-color: #d4d4d4; padding-top: 10px; padding-bottom: 10px; }
        .td4 { padding:1.5px; text-align: center; background-color: #d4d4d4; padding-top: 10px; padding-bottom: 10px; } 
        .td_relleno{ background-color:  #d4d4d4; }
        .page-break {
            page-break-after: always;
        }
    </style>
</head>
<body>
    <div id="content" style="margin-top:25px;">
        <div class="card-title text-center">
            <h2 align="center" style="color: #271EB1;">LIBERACIÓN DE RESPONSABILIDAD</h2>
        </div>    
        <p align="justify"><br>Yo, <strong>{{ strtoupper( $content['name'] ) .' '. strtoupper( $content['lastname'] ) }}</strong> declaro que en forma voluntaria y libre he decidido participar en el evento <strong>NOMBRE DEL EVENTO COMPLETO</strong>; entiendo que participar en esta competencia es una actividad riesgosa por lo que expreso que estoy en perfectas condiciones físicas y de salud, así como adecuadamente entrenado para participar en la misma.</p>

        <p align="justify">Estoy de acuerdo en cuimplir con cualquier decisión proveniente de algún juez o cualquier autoridad del evento, en cuanto a mi capacidad para concluir con seguridad la ruta establecida y el cumplimiento de los tiempos establecidos para la hora de cierre de la carrera o sobre cualquier otro aspecto en relación a mi participación en la misma.</p>
        
        <p align="justify">Habiendo leído esta declaración, libero a los organizadores y a todos los auspiciadores, así como a sus representantes y sucesores, en su conjunto las instituciones, de reclamos o responsabilidad de cualquier índole, y/o del pago por daños y perjuicios que pudieran surgir de mi participación durante o posterior al evento, aún cuando esta responsabilidad pudiera surgir por causas imputables a alguna de las instituciones.</p>
        <div style="margin-top:120px;">
            <table >
                <tr>
                    <td colspan="2"><strong>Firma: ______________________</strong></td>
                </tr>
                <tr>
                    <td colspan="2"><strong>N° de la Cédula de Identidad o Pasaporte: {{ $content['identification'] }}</strong></td>
                </tr>
                <tr>
                    <td colspan="2"><strong>Fecha: {{ \Carbon\Carbon::parse( $content['created_at'] )->format('d-M-Y') }}</strong></td>
                </tr>
            </table>
        </div>
        <div style="margin-top:20px;">
            <table>
                <tr>
                    <td colspan="2"><strong>Atentamente,</strong></td>
                </tr>
                <tr>
                    <td colspan="2"><strong> Coordinación de Inscripciones </strong></td>
                </tr>
            </table>
        </div>
    </div>

</body>
</html>
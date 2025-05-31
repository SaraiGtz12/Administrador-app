<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Informe PDF</title>
    <style>
         @page {
            margin: 100px 50px 120px 50px;

             @bottom-center {
                content: "Página " counter(page) " de " counter(pages);
                font-size: 10px;
                color: #333;
            }
        }

       header {
            position: fixed;
            top: -80px;
            left: 0;
            right: 0;
            height: 100px;
            text-align: center;
        }

        footer {
            position: fixed;
            bottom: -100px;
            left: 0;
            right: 0;
            height: 100px;
            font-size: 9px;
            text-align: center;
        }
        .page:before {
            content: counter(page);
        }

        .topage:before {
            content: counter(pages);
        }

        .page-number {
            text-align: right;
            font-size: 9px;
        }

        .divider {
            border-top: 1px solid black;
            margin: 5px 0;
        }
        main {
            margin-top: 100px;
            margin-bottom: 120px; /* Igual que el espacio del footer */
        }
      

        body {
            font-family: Arial, sans-serif;
            font-size: 9px;
        }

       

        .title {
            text-align: center;
            font-size: 16px;
            font-weight: bold;
            margin-top: 10px;
        }

        .divider {
            border-top: 1px solid black;
            margin: 10px 0;
        }

        .subtitle {
            font-size: 9px;
            text-align: justify;
            margin-bottom: 20px;
        }

        .company-name {
            font-weight: bold;
            font-size: 12px;
            margin-bottom: 10px;
        }

        .info-table {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
        }

        .info-table td {
            vertical-align: top;
            padding: 5px;
        }

        .col-1 {
            width: 35%;
        }

        .col-2 {
            width: 20%;
            font-weight: bold;
        }

        .col-3 {
            width: 25%;
        }

        .col-4 {
            width: 20%;
            text-align: right;
        }

        .placeholder-image {
            width: 100px;
            height: 100px;
            background-color: #ccc;
            display: inline-block;
            text-align: center;
            line-height: 100px;
            color: #666;
            font-size: 8px;
            border: 1px solid #999;
        }
        .top-section {
        text-align: left;
        margin-bottom: 10px;
        }

        .logo {
            margin-bottom: 5px;
        }

        .title {
            font-size: 12px;
            font-weight: bold;
            margin-top: 0;
            margin-bottom: 10px;
            text-align: left;
        }

        .evaluated-equipment-table {
            width: 100%;
            border: 1px solid #000;
            border-collapse: collapse;
            margin-top: 20px;
            margin-bottom: 50px;
            font-size: 9px;
        }

        .evaluated-equipment-table th,
        .evaluated-equipment-table td {
            border: none;
            padding: 5px;
            text-align: left;
        }

        .evaluated-equipment-table tr:first-child th {
            border: 1px solid #000;
            background-color: #f2f2f2; 
            text-align: center;
        }

        .result-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 9x;
            margin-top: 10px;
        }

        .result-table th,
        .result-table td {
            border: 1px solid #000;
            padding: 5px;
            text-align: left;
        }


    </style>
</head>
<body>
  

 <!-- inicio de encabezado-->
    <header>
        <div class="top-section">

            <div class="logo">
                <div class="placeholder-image">LOGO</div>
            </div>
            <div class="title">Informe de Resultados</div>
        </div>

    
        <div class="divider"></div>

        <div class="subtitle">
            Comparación con la Norma Oficial Mexicana NOM-085-SEMARNAT-2011, Contaminación atmosférica — Niveles máximos permisibles de emisión de los equipos de combustión de calentamiento indirecto y su medición.
            <br>
            Para equipos con capacidad térmica nominal mayor de 5.3 G/J o 150 C.C combustible gaseoso
        </div>
    </header>
    <!-- fin de encabezado-->
     
 <!-- pie de pagina-->
    <footer>
        <div>
            <div style="text-align: left;">
                FC-AAR-006<br>
                Revisión: 23
            </div>
            <div style="text-align: right;">
                Página <span class="page"></span> de <span class="topage"></span>
            </div>
        </div>

        <hr style="border: 0; border-top: 2px solid black; margin: 10px 0;">
        <hr style="border: 0; border-top: 2px solid black; margin: 0 0 10px 0;">

        <div style="text-align: center; font-size: 9px; line-height: 1.4;">
            <strong>Verificaciones Industriales y Desarrollo de Proyectos Ecológicos S.A. de C.V.</strong><br>
            Revolución No.356, Col. La Romana &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; e-mail: verificaciones@prodigy.net.mx<br>
            CP. 54030, Tlalnepantla, Estado de México &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; www.videsa.net<br>
            Tel: 01(55) 5565-5044, con 13 líneas
        </div>
    </footer>

 <!-- fin de pie de pagina -->
    <main>
        <div class="company-name">
            Flexico, S. de R.L. de C.V.
        </div>

        <table class="info-table">
            <tr>
                <td class="col-1">
                    Carretera Jilotepec–Soyaniquilpan Km 3.5 MZ 2 Lt 1B, Parque industrial Jilotepec,<br>
                    Jilotepec, Estado de México, C.P. 54240<br>
                    Resto de país (Rp)
                </td>
                <td class="col-2">
                    Número de informe:<br>
                    Orden de servicio:<br>
                    Fecha de evaluación:<br>
                    Recepción:<br>
                    Fecha de informe:
                </td>
                <td class="col-3">
                    FE085MG/250405-01<br>
                    25-1347<br>
                    5-ABRIL-25<br>
                    6-ABRIL-25<br>
                    11-ABRIL-25
                </td>
                <td class="col-4">
                    <div class="placeholder-image">QR</div>
                </td>
            </tr>
        </table>

    
        <table class="evaluated-equipment-table">
            <tr>
                <th colspan="6" style = "text-align: center">EQUIPO EVALUADO</th>
            </tr>
            <tr>
                <td colspan="6" style = "text-align: center">Tina de lavado 1</td>
            </tr>
            <tr>
                <td>Capacidad</td>
                <td>C.C</td>
                <td>GJ/h</td>
                <td></td>
                <td>Combustible utilizado</td>
                <td>Gas natural</td>
            </tr>
            <tr>
                <td>Nominal</td>
                <td>No.Disponible</td>
                <td>No.Disponible</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>



        <table class="result-table ">
            <tr>
                <th colspan="5" style = "text-align: center">Resultados</th>
            </tr>
            <tr>
                <td>Parámetros Evaluados</td>
                <td>Cconcentración (ppmv)</td>
                <td>Limite Máximo Permisible (ppmv)</td>
                <td>Comparación (L.M.P.)</td>
                <td>&plusmn; uE (ppmv)</td>
            </tr>
            <tr>
                <td>Monoxido de Carbono (CO)</td>
                <td>20.08</td>
                <td>No Aplica</td>
                <td>No Aplica</td>
                <td>0.37</td>
            </tr>
            <tr>
                <td>Óxido de Nitrógeno (NOx)</td>
                <td>21.73</td>
                <td>No Aplica</td>
                <td>No Aplica</td>
                <td>0.12</td>
            </tr>
        </table>

        <div style="margin-top: 20px; font-size: 7px;">
            NOTA 1: La incertidumbre estimada UE para CO es 1.86% y para NOx es 0.54%, se expresa con un factor de cobertura k=2 que corresponde aproximadamente 
            a un nivel de confianza del 95%. Se calcula basandose en la guia para la expresion de incertidumbre en los resultados de las mediciones (NMX-CH-140-IMNC-202)
            <br>
            NOTA 2: Para este caso, la zona geografica para el Monoxido de Carbono (CO) se considera: Resto del Pais (RP).
            <br>
            NOTA 3:Para este caso, la zona geografica para los Oxidos de Nitrogeno (NOx) se considera: Resto del Pais (RP).
            <br>
            NOTA 4: ppmv Partes por millon volumen, igual a micromol por mol 
            <br>
            GJ/has      Giga Joules por hora
            <br>
            C.C         Caballos Caldera 
            <br>
            *Para este caso de CO NOx los limites se establecen como concentraciones en volumen y 
            base seca, en condiciones de refrencia de 25&deg;C, 101 325 pascales (1 atm) y 5% de (O2)
        </div>


        <table class="evaluated-equipment-table">
            <tr>
                <th colspan="6" style = "text-align: center">CONCLUSION</th>
            </tr>
            <tr>
                <td colspan="6" style = "text-align: center; font-size: 8px;">
                    Debido a que el equipo evaluado no es un equipo de calentamiendo indirecto,
                    la NOM-085-SEMARNAT-2011 no le aplica, se inclutye el resultado de la contratacion
                    de los parametros evaluados, unicamente con el objetivo de proporcionar infomracion
                    relativa a los resultados obtenidos. La evaluacion se realiza a solictud del cliente.
                </td>
            </tr>
        
        </table>

        <div style="margin-top: 100px; text-align: center;">
            <div style="border-top: 1px solid black; width: 300px; margin: 0 auto; padding-top: 5px;">
                M. en C. Vidal Loera Yebra
                <br>
                Responsable del laboratorio
            </div>
        </div>


        <!-- esto iria en mi segunda pagina  -->
         <div style="page-break-before: always;"></div>

        <table style="margin-top: 110px;margin-left: auto;">
            <tr>
            
                <td class="col-1">
                    Número de informe:<br>
                    Orden de servicio:<br>
                    Fecha de evaluación:<br>
                    Recepción:<br>
                    Fecha de informe:
                </td>
                <td class="col-2">
                    FE085MG/250405-01<br>
                    25-1347<br>
                    5-ABRIL-25<br>
                    6-ABRIL-25<br>
                    11-ABRIL-25
                </td>
        
            </tr>
        </table>
        <table class="result-table " >
            <tr>
                <th colspan="6" style = "text-align: center">TABLA DE RESULTADOS</th>
            </tr>
            <tr>
                <td></td>
                <td>NOx ppmv</td>
                <td>CO ppmv</td>
                <td>O2% vol</td>
                <td>CO2%vol</td>
                <td>TEMP. En el coducto C</td>
            </tr>
            <tr>
                <td>Promedio de los valores obtenidos</td>
                <td>8.59</td>
                <td>7.80</td>
                <td>16.42</td>
                <td>1.88</td>
                <td>95.1</td>
            </tr>
            <tr>
            <td>Valores corregidos por gas efluente</td>
                <td>8.06</td>
                <td>7.45</td>
                <td>16.33</td>
                <td>N/A</td>
                <td>N/A</td>
            </tr>
            <tr>
            <td>Valores corregidos al 5% de O2</td>
                <td>21.73</td>
                <td>20.08</td>
                <td>N/A</td>
                <td>5.08</td>
                <td>N/A</td>
            </tr>
        </table>
        <table style="margin: 20px auto; text-align: center;">
            <tr>
                <td class="col-1">
                    C_R=20.9-0-R/<br>
                    20.9-0_M*C_M<br>
                </td>
                <td class="col-2">
                    CR=&nbsp; 20.9-5.0<br>
                    &nbsp;--------------<br>
                    &nbsp; 20.9-15.00<br>
                </td>
                <td class="col-2">
                    *
                </td>
                <td class="col-2">
                    8.06 = 21.73 ppmv
                </td>
            </tr>
        </table>


        <table class="evaluated-equipment-table">
        
            <tr>
                <td>Concentración de referencia del O2</td>
                <td></td>
                <td>Valores de referencia</td>
                <td></td>
            </tr>
            <tr>
                <td>Nivel de referencia para el O2 (5%) </td>
                <td>5.0</td>
                <td></td>
                <td>O2%</td>
            </tr>
            <tr>
                <td>Valor medido para O2 (%)</td>
                <td>15.0</td>
                <td></td>
                <td>OR%</td>
            </tr>
            <tr>
                <td>Concentración medida</td>
                <td>8.1</td>
                <td></td>
                <td>OM%</td>
            </tr>
        </table>

        <div style="margin-top: 20px; font-size: 8px;">
            *Para valores de OM medidos entre 15.1% y 20.9%, se utilizará un valor de OM de 15%
            <br><br><br>
            Método 3A EPA-2008 &nbsp; Determinación de oxígeno (O2) y bióxido de carbono (CO2) en los gases que 
            fluyen por un conducto. Método instrumenta
            <br>
            Método 10 EPA-2008&nbsp;Para el caso de CO y NOx los límites se establecen como concentraciones en volumen y en base seca, 
            en condiciones de referencia de 25°C, 101 325 Pa (1 atm) y 5 % de
            Método 7 EPA-2008&nbsp;Determinación de óxidos de nitrógeno, en los gases que fluyen por un conducto.
            Método de quimiluminiscencia
        </div>
    </main>
        


    

</body>
</html>
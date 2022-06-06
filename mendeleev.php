<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="keywords" content="курсы, php, html">
    <meta name="deskription" content="Таблица Менделеева, php, html">
    <link rel="stylesheet" href="style/style.css">
	<title>Таблица Менделеева</title>
</head>
<body>
    <?php include 'header.php';?> 
    <table border="1" bgcolor="white">
        <caption>Таблица Менделеева</caption>
        <tr align="center">
            <td rowspan="2">ПРИОДЫ</td>
            <td rowspan="2">РЯДЫ</td>
            <td colspan="4"><b>ГРУППЫ ЭЛЕМЕНТОВ</b></td>
        </tr>
        <tr align="center">
            <td>I</td>
            <td>II</td>
            <td>III</td>
            <td>IV</td>
        </tr>
        <tr align="center">
            <td>I</td>
            <td>1</td>
            <td>
            <table width="120" bgcolor="#fc9faf">
                <tr>
                <td rowspan="2"><h1>H</h1></td>
                <th align="right">1</th>
                <tr align="right"><td>1,00797</td></tr>
                <td><b>Водород</b></td></tr>
            </table>
            <td></td>
            <td></td>
            <td></td>
        </tr>
       <tr align="center">
            <td>II</td>
            <td>2</td>
            <td>
            <table width="120" bgcolor="#fc9faf">
                <tr>
                <td rowspan="2"><h1>Li</h1></td>
                <th align="right">3</th>
                <tr><td  align="right">6,939</td></tr>
                <td><b>Литий</b></td></tr>
            </table>
            <td>
            <table width="120" bgcolor="#fc9faf">
                <tr>
                <td rowspan="2"><h1>Be</h1></td>
                <th align="right">4</th>
                <tr><td  align="right">9,0122</td></tr>
                <td><b>Берилий</b></td></tr>
            </table>
            </td>
            <td>
            <table width="120" bgcolor="#ffff33">
                <tr>
                <td rowspan="2"><h1>B</h1></td>
                <th align="right">5</th>
                <tr><td  align="right">10,811</td></tr>
                <td><b>Бор</b></td></tr>
            </table>
            </td>
            <td>
            <table width="120" bgcolor="#ffff33">
                <tr>
                <td rowspan="2"><h1>C</h1></td>
                <th align="right">6</th>
                <tr><td  align="right">12,01115</td></tr>
                <td><b>Углерод</b></td></tr>
            </table>
            </td>
        </tr>
        <tr align="center">
            <td>III</td>
            <td>3</td>
            <td>
            <table width="120" bgcolor="#fc9faf">
                <tr>
                <td rowspan="2"><h1>Na</h1></td>
                <th align="right">11</th>
                <tr><td  align="right">22,9898</td></tr>
                <td><b>Натрий</b></td></tr>
            </table>
            </td>
            <td>
            <table width="120" bgcolor="#fc9faf">
                <tr>
                <td rowspan="2"><h1>Mg</h1></td>
                <th align="right">12</th>
                <tr><td  align="right">24,312</td></tr>
                <td><b>Магний</b></td></tr>
            </table>
            </td>
            <td>
            <table width="120" bgcolor="#ffff33">
                <tr>
                <td rowspan="2"><h1>Al</h1></td>
                <th align="right">13</th>
                <tr><td  align="right">26,9815</td></tr>
                <td colspan="2"><b>Алюминий</b></td></tr>
            </table>
            </td>
            <td>
            <table width="120" bgcolor="#ffff33">
                <tr>
                <td rowspan="2"><h1>Si</h1></td>
                <th align="right">14</th>
                <tr><td  align="right">28,086</td></tr>
                <td colspan="2"><b>Кремний</b></td></tr>
            </table>
            </td>
        </tr>
        <tr align="center">
            <td rowspan="2">IV</td>
            <td>4</td>
            <td>
            <table width="120" bgcolor="#fc9faf">
                <tr>
                <td rowspan="2"><h1>K</h1></td>
                <th align="right">19</th>
                <tr align="right"><td>39,102</td></tr>
                <td><b>Калий</b></td></tr>
            </table>
            </td>
            <td>
            <table width="120" bgcolor="#fc9faf">
                <tr>
                <td rowspan="2"><h1>Са</h1></td>
                <th align="right">20</th>
                <tr align="right"><td>40,08</td></tr>
                <td><b>Кальций</b></td></tr>
            </table>
            </td>
            <td>
            <table width="120" bgcolor="#7dc4fa">
                <tr>
                <th align="left">21</th>
                <td rowspan="2" align="right"><h1>Sc</h1></td>
                <tr align="left"><td>44,956</td></tr>
                <td align="right" colspan="2"><b>Скандий</b></td></tr>
            </table>
            </td>
            <td>
            <table width="120" bgcolor="#7dc4fa">
                <tr>
                <th align="left">22</th>
                <td rowspan="2" align="right"><h1>Ti</h1></td>
                <tr align="left"><td>47,90</td></tr>
                <td align="right" colspan="2"><b>Титан</b></td></tr>
            </table>
            </td>
        </tr>
        <tr align="center">
            <td>5</td>
            <td>
            <table width="120" bgcolor="#7dc4fa">
                <tr>
                <th align="left">29</th>
                <td rowspan="2" align="right"><h1>Cu</h1></td>
                <tr align="left"><td>63,546</td></tr>
                <td align="right" colspan="2"><b>Медь</b></td></tr>
            </table>
            </td>
            <td>
            <table width="120" bgcolor="#7dc4fa">
                <tr>
                <th align="left">30</th>
                <td rowspan="2" align="right"><h1>Zn</h1></td>
                <tr align="left"><td>65,37</td></tr>
                <td align="right" colspan="2"><b>Цинк</b></td></tr>
            </table>
            </td>
            <td>
            <table width="120" bgcolor="#ffff33">
                <tr>
                <td rowspan="2"><h1>Ga</h1></td>
                <th align="right">31</th>
                <tr align="right"><td>69,72</td></tr>
                <td><b>Галий</b></td></tr>
            </table>
            </td>
            <td>
            <table width="120" bgcolor="#ffff33">
                <tr>
                <td rowspan="2"><h1>Ge</h1></td>
                <th align="right">32</th>
                <tr align="right"><td>72,59</td></tr>
                <td><b>Германий</b></td></tr>
            </table>
            </td>
        </tr>
</table>
<?php include 'footer.php';?> 
</body>
</html>
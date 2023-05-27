<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mark Sheet</title>
</head>
<body>
  <!DOCTYPE html>
  <html>
  <head>
      <title>Marksheet</title>
  </head>
  <body>
<?php

    //passing MArkas

    $php_passing_marks = 40;
    $css_passing_marks = 40;
    $html_passing_marks = 40;
    $js_passing_marks = 40;
    $bootstrap_passing_marks = 40;
    $passing_marks = $php_passing_marks + $css_passing_marks + $html_passing_marks + $js_passing_marks +$bootstrap_passing_marks;
//Marks each Subject
    $css = 80;
    $php =70;
    $html = 77;
    $js = 44;
    $bootstrap = 95;
    //Total Markx
    $total_markx = $php + $css + $html + $js +$bootstrap;
    $percentage =( $total_markx / 500) *100;

    //Grade 
    $grade ='';
    if($php<50 || $css<50 || $html<50 || $js<50 || $bootstrap <50 ){
        $grade = 'Fail';
    }
    else
        {
            if($percentage>= 90){
            $grade ="A+";
        }
        elseif ($percentage >= 80){
            $grade ="A";
        }
        elseif ($percentage >= 70){
            $grade ="B";
        }
        elseif ($percentage >= 60){
            $grade ="C";
        }
        elseif ($percentage >= 50){
            $grade ="D";
        }
        else{
            $grade = 'Fail';
        }
    }

?>
      
  </body>
  </html>
  <table align="center"  cellpadding="10">
    <tr>
        <td align="center" bgcolor="Blue"><h1>NFTP CENTER</h1></td>
    </tr><tr>
        <td>
    <table border="2" cellpadding="25" align="center">
        <tr>
            <th bgcolor="yellow">Roll : </th>
            <td>2k21 / CSE / 56</td>
            <th bgcolor="yellow">Name : </th>
            <td> Misbah Yousaf</td>
        </tr>
        <tr>
            <th bgcolor="yellow">Father's Name : </th>
            <td>Yousaf</td>
            <th bgcolor="yellow">Sesion :</th>
            <td>2021 - 4</td>
        </tr>
    </table></td>
    <tr>
        <td>
            <table cellpadding="20" border="2">
        <tr>
                    <th bgcolor="green">
        Subjects
        </th>
        <th bgcolor="green">
            Total Marks
        </th>
        <th bgcolor="green">
            Passing MArks
        </th>
        <th bgcolor="green">
            Marks Obtained
        </th>
        </tr>
        <tr>
            <th>PHP</th>
            <td>100</td>
            <td>40</td>
            <td><?php echo $php; ?></td>
        </tr>
        <tr>
            <th>CSS</th>
            <td>100</td>
            <td>40</td>
            <td><?php echo $css; ?></td>
        </tr>
        <tr>
            <th>HTML</th>
            <td>100</td>
            <td>40</td>
            <td><?php echo $html; ?></td>
        </tr>
        <tr>
            <th>JS</th>
            <td>100</td>
            <td>40</td>
            <td><?php echo $js; ?></td>
        </tr>
        <tr>
            <th>BOOTSTRAP</th>
            <td>100</td>
            <td>40</td>
            <td><?php echo $bootstrap; ?></td>
        </tr>
        
            </table>
        </td>
        
    </tr>
    <tr>
        <td>
        <table border="2" cellpadding="30" align="center">
        <tr>
            <th bgcolor="A99ED9">Total Marks :</th>
            <td> 500 </td>
            <th bgcolor="A99ED9">Obtained Marls : </th>
            <td> <?php echo $total_markx;?></td>
        </tr>
        <tr>
            <th bgcolor="A99ED9">Passing Marks : </th>
            <td><?php echo $passing_marks;?></td>
            <th bgcolor="A99ED9">Percentage :</th>
            <td><?php echo $percentage."%";?></td>
        </tr>
        <tr>
            <th bgcolor="A99ED9">Result : </th>
            <td>__</td>
            <th bgcolor="A99ED9">Grade :</th>
            <td><?php echo $grade;?></td>
        </tr>
    </table>
        </td>
    </tr>
</tr>
  </table>

</body>
</html>
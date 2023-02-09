<table border="10">
<?php
if (isset($_POST['submit'])) {
    $firstname = $_POST['first'];
    $lastname = $_POST['last'];
    $dini = $_POST['dini'];
    $quran = $_POST['quran'];
    $varzesh = $_POST['varzesh'];
    $php = $_POST['php'];
    $olom = $_POST['olom'];
    $riazy = $_POST['riazy'];
    $tarikh = $_POST['tarikh'];
    $farsi = $_POST['farsi'];
    $moadel = ($farsi + $dini + $olom + $php + $riazy + $quran + $tarikh + $varzesh) / 8;
echo "<tr>";
echo "<td>";
echo $firstname . ":نام هنر جو" . "</br>";
echo $lastname . ":نام خانوادگی هنر جو" . "</br>";
echo $dini . ":نمره درس دینی " . "</br>";
    if ($dini<12)echo "faild" . "</br>";
    else echo "pass" . "</br>";
echo $quran . " :نمره درس قرآن " . "</br>";
    if ($quran<12)echo "faild" . "</br>";
    else echo "pass" . "</br>";
echo $varzesh . ":نمره درس ورزش" . "</br>";
    if ($varzesh<12)echo "faild" . "</br>";
    else echo "pass" . "</br>";
echo $php . ":نمره درس php" . "</br>";
    if ($php<12)echo "faild" . "</br>";
    else echo "pass" . "</br>";
echo $olom . ":نمره درس علوم" . "</br>";
    if ($olom<12)echo "faild" . "</br>";
    else echo "pass" . "</br>";
echo $riazy . " :نمره درس ریاضی" . "</br>";
    if ($riazy<12)echo "faild" . "</br>";
    else echo "pass" . "</br>";
echo $tarikh . ":نمره درس تاریخ" . "</br>";
    if ($tarikh<12)echo "faild" . "</br>";
    else echo "pass" . "</br>";
echo $farsi . ":نمره درس فارسی" . "</br>";
    if ($farsi<12)echo "faild" . "</br>";
    else echo "pass" . "</br>";
echo $moadel . ":معدل کل";
}
?>
    </td>
    </tr>
<form method="post">
    <label>:نام خود را وارد کنید</label></br>
    <input type="text" name="first"></br>
    <label>:نام خانوادگی خود را وارد کنید</label></br>
    <input type="text" name="last"></br>
    <label> نمره درس دینی</label></br>
    <input type="number" name="dini"></br>
    <label> نمره درس قرآن</label></br>
    <input type="number" name="quran"></br>
    <label> نمره درس ورزش</label></br>
    <input type="number" name="varzesh"></br>
    <label> نمره درس php</label></br>
    <input type="number" name="php"></br>
    <label> نمره درس علوم</label></br>
    <input type="number" name="olom"></br>
    <label> نمره درس ریاضی</label></br>
    <input type="number" name="riazy"></br>
    <label> نمره درس تاریخ</label></br>
    <input type="number" name="tarikh"></br>
    <label> نمره درس فارسی</label></br>
    <input type="number" name="farsi"></br>
    <input type="submit" name="submit" value="run">

</form>
</table>

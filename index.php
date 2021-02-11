<?php include "_partials/header.php"?>
<table>
<?php
echo "<tr class='days' style='background: #75D8AA;'>";
$list=array();
$month = 12;
$year = 2020;
$time=mktime(12, 0, 0, $month, 1, $year);
echo "<th class='YearMonth'><h1>".date('M', $time)."</h1>".date('Y', $time)."</th>";
for($d=1; $d<=31; $d++){
    $time=mktime(12, 0, 0, $month, $d, $year);
    if (date('m', $time)==$month)
        echo '<th class="'.date('_m_d_Y_ D', $time).' m1"><h1>'.date('D', $time).'</h1>'.date('m/d', $time).'</th>';
}
for($d=1; $d<=31; $d++){
    $time=mktime(12, 0, 0, $month+1, $d, $year);
    if (date('m', $time)==$month+1)
        echo '<th class="'.date('_m_d_Y_ D', $time).' m2"><h1>'.date('D', $time).'</h1>'.date('m/d', $time).'</th>';
}
for($d=1; $d<=31; $d++){
    $time=mktime(12, 0, 0, $month+2, $d, $year);
    if (date('m', $time)==$month+2)
        echo '<th class="'.date('_m_d_Y_ D', $time).' m3"><h1>'.date('D', $time).'</h1>'.date('m/d', $time).'</th>';
}
for($d=1; $d<=31; $d++){
    $time=mktime(12, 0, 0, $month+3, $d, $year);
    if (date('m', $time)==$month+3)
        echo '<th class="'.date('_m_d_Y_ D', $time).' m4"><h1>'.date('D', $time).'</h1>'.date('m/d', $time).'</th>';
}
echo "</tr>";
$users = $database->select("users", "name", ['GROUP' => 'name', 'ORDER' => 'name']);
foreach($users as $user_name){
?>
<tr>
    <td class="name"><?php echo $user_name; ?></td>
<?php
for($d=1; $d<=31; $d++){
    $time=mktime(12, 0, 0, $month, $d, $year);
    if (date('m', $time)==$month){
        $date = date("m/d/Y", $time);
        $usersinfo = $database->select("users", "action", ['name' => $user_name, 'day' => $date]);
        ?>
        <td class="<?php echo date("l", $time).' _'.date("mdY", $time); ?>">
            <select id="vac" name="state" onchange="changeVac(this, '<?php echo $date; ?>','<?php echo $user_name; ?>')" class="_<?php  if($usersinfo['0']){echo $usersinfo['0'];}elseif(date("l", $time)=='Saturday'||date("l", $time)=='Sunday' ){echo'-1';}else{echo '0';} ?> ">
              <option value="1"<?php if($usersinfo['0']==1){echo 'selected';} ?>>Dovolenka</option>
              <option value="2"<?php if($usersinfo['0']==2){echo 'selected';} ?>>Home Office</option>
              <option value="0"<?php if($usersinfo['0']==0){echo 'selected';} ?>>Práca</option>
              <option value="3"<?php if($usersinfo['0']==3){echo 'selected';} ?>>Služobná Cesta</option>
              <option value="4"<?php if($usersinfo['0']==4){echo 'selected';} ?>>Karanténa</option>
            <option value="-1"<?php if($usersinfo['0']==-1){echo 'selected';} ?>>Víkend</option>
            </select>
        </td>
        <?php
    }
}for($d=1; $d<=31; $d++){
    $time=mktime(12, 0, 0, $month+1, $d, $year);
    if (date('m', $time)==$month+1){
        $date = date("m/d/Y", $time);
        $usersinfo = $database->select("users", "action", ['name' => $user_name, 'day' => $date]);
        ?>
        <td class="<?php echo date("l", $time).' _'.date("mdY", $time); ?>">
            <select id="vac" name="state" onchange="changeVac(this, '<?php echo $date; ?>','<?php echo $user_name; ?>')" class="_<?php  if($usersinfo['0']){echo $usersinfo['0'];}elseif(date("l", $time)=='Saturday'||date("l", $time)=='Sunday' ){echo'-1';}else{echo '0';} ?> ">
              <option value="1"<?php if($usersinfo['0']==1){echo 'selected';} ?>>Dovolenka</option>
              <option value="2"<?php if($usersinfo['0']==2){echo 'selected';} ?>>Home Office</option>
              <option value="0"<?php if($usersinfo['0']==0){echo 'selected';} ?>>Práca</option>
              <option value="3"<?php if($usersinfo['0']==3){echo 'selected';} ?>>Služobná Cesta</option>
              <option value="4"<?php if($usersinfo['0']==4){echo 'selected';} ?>>Karanténa</option>
            <option value="-1"<?php if($usersinfo['0']==-1){echo 'selected';} ?>>Víkend</option>
            </select>
        </td>
        <?php
    }
}for($d=1; $d<=31; $d++){
    $time=mktime(12, 0, 0, $month+2, $d, $year);
    if (date('m', $time)==$month+2){
        $date = date("m/d/Y", $time);
        $usersinfo = $database->select("users", "action", ['name' => $user_name, 'day' => $date]);
        ?>
        <td class="<?php echo date("l", $time).' _'.date("mdY", $time); ?>">
            <select id="vac" name="state" onchange="changeVac(this, '<?php echo $date; ?>','<?php echo $user_name; ?>')" class="_<?php  if($usersinfo['0']){echo $usersinfo['0'];}elseif(date("l", $time)=='Saturday'||date("l", $time)=='Sunday' ){echo'-1';}else{echo '0';} ?> ">
              <option value="1"<?php if($usersinfo['0']==1){echo 'selected';} ?>>Dovolenka</option>
              <option value="2"<?php if($usersinfo['0']==2){echo 'selected';} ?>>Home Office</option>
              <option value="0"<?php if($usersinfo['0']==0){echo 'selected';} ?>>Práca</option>
              <option value="3"<?php if($usersinfo['0']==3){echo 'selected';} ?>>Služobná Cesta</option>
              <option value="4"<?php if($usersinfo['0']==4){echo 'selected';} ?>>Karanténa</option>
            <option value="-1"<?php if($usersinfo['0']==-1){echo 'selected';} ?>>Víkend</option>
            </select>
        </td>
        <?php
    }
}for($d=1; $d<=31; $d++){
    $time=mktime(12, 0, 0, $month+3, $d, $year);
    if (date('m', $time)==$month+3){
        $date = date("m/d/Y", $time);
        $usersinfo = $database->select("users", "action", ['name' => $user_name, 'day' => $date]);
        ?>
        <td class="<?php echo date("l", $time).' _'.date("mdY", $time); ?>">
            <select id="vac" name="state" onchange="changeVac(this, '<?php echo $date; ?>','<?php echo $user_name; ?>')" class="_<?php  if($usersinfo['0']){echo $usersinfo['0'];}elseif(date("l", $time)=='Saturday'||date("l", $time)=='Sunday' ){echo'-1';}else{echo '0';} ?> ">
              <option value="1"<?php if($usersinfo['0']==1){echo 'selected';} ?>>Dovolenka</option>
              <option value="2"<?php if($usersinfo['0']==2){echo 'selected';} ?>>Home Office</option>
              <option value="0"<?php if($usersinfo['0']==0){echo 'selected';} ?>>Práca</option>
              <option value="3"<?php if($usersinfo['0']==3){echo 'selected';} ?>>Služobná Cesta</option>
              <option value="4"<?php if($usersinfo['0']==4){echo 'selected';} ?>>Karanténa</option>
            <option value="-1"<?php if($usersinfo['0']==-1){echo 'selected';} ?>>Víkend</option>
            </select>
        </td>
        <?php
    }
}
?>
</tr>
<?php } ?>
</table>
<?php include "_partials/footer.php"?>
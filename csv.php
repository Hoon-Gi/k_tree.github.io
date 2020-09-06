<?php
    $lines = @file("test.txt") or $result = "파일을 읽을 수 없습니다.";
    if ($lines != null) {
        $result = '<table border="1">';
        $result .= "<tr><th>나무이름</th><th>개화시기</th><th>꽃차례</th><th>꽃 색깔</th><th>잎의 자라는 형태</th>
					<th>잎의 형태</th><th>잎의 길이</th><th>잎의 폭</th><th>겹잎</th><th>톱니</th>
					<th>갈래</th><th>열매 결실시기</th><th>열매 종류</th><th>열매 색깔</th></tr>";
        for($i = 0; $i < count($lines); $i++){
            $result .= "<tr>";
            $arr = explode(";", $lines[$i]);
            for($j = 0;$j < 14;$j++){
                $result .= "<td>{$arr[$j]}</td>";
            }
            $result .= "</tr>";
        }
        $result .= "</table>";
    }
?>
<!DOCTYPE html>
<html lang="ko">
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
        <title>data table</title>
    </head>
    <body>
        <h1>나무 데이터</h1>
        <p><?php echo $result; ?></p>
    </body>
</html>
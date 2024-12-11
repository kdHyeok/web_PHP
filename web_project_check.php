<?php
// 데이터베이스 정보
$servername = "localhost";
$username = "root";
$password = "qaz010638";
$dbname = "web_project_db";

// 데이터베이스 연결
$conn = mysqli_connect($servername, $username, $password, $dbname);

// 연결 확인
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// 각 테이블의 데이터를 조회하는 SQL 쿼리
$tables = ['교과_과정', '비교과_과정', '어학_점수', '자격증_이력', '대외활동'];

?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>입력된 정보 보기</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
		.button-container {
            display: flex;
			justify-content: center; /* 버튼을 가운데 정렬 */
            margin-top: 20px; /* 버튼과 테이블 간격 추가 */
        }

        .confirm-button {
            background-color: #28a745; /* 확인 버튼의 색상 */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none; /* 링크의 밑줄 제거 */
            font-size: 16px;
            transition: background-color 0.3s, transform 0.3s; /* 부드러운 효과 추가 */
			text-align: center; /* 텍스트 중앙 정렬 */
        }

        .confirm-button:hover {
            background-color: #218838; /* 확인 버튼의 호버 색상 */
            transform: scale(1.05); /* 호버 시 살짝 커지도록 */
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        .table-title {
            margin-top: 30px;
            font-size: 1.5em;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>커리어 정보</h1>

        <?php
        // 각 테이블에 대해 데이터 조회 및 출력
        foreach ($tables as $table) {
            echo "<div class='table-title'>{$table}</div>";
            $sql = "SELECT * FROM {$table} ORDER BY write_date ASC";
            $result = mysqli_query($conn, $sql);

            echo "<table>
                    <tr>
						<th>작성일</th>
                        <th>활동명</th>
                        <th>성적 또는 역량 점수</th>
                    </tr>";

            // 결과가 있는 경우 출력
            if (mysqli_num_rows($result) > 0) {
                // 각 행을 출력
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                            <td>" . $row['write_date'] . "</td>
                            <td>" . $row['subject'] . "</td>
                            <td>" . $row['score'] . "</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='4'>입력된 정보가 없습니다.</td></tr>";
            }
            echo "</table>";
        }

        // 연결 종료
        mysqli_close($conn);
        ?>
		<div class="button-container">
            <a href="web_project.php" class="confirm-button">이전 페이지</a>
        </div>
    </div>
</body>
</html>

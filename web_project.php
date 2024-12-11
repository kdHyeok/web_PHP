<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>커리어 기록 및 분석 웹사이트</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin: 10px 0 5px;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #5cb85c;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #4cae4c;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>나의 커리어</h1>
        <form action="web_project.php" method="post">
            <label for="subject">활동명:</label>
            <input type="text" id="subject" name="subject" required>
			
			<label for="activity">역량 영역:</label>
			<input type="radio" id="cap0" name="capability" value="교과"> 
			<lable for="cap0">교과과정</lable>
            <input type="radio" id="cap1" name="capability" value="비교과"> 
			<lable for="cap1">비교과</lable>
			<input type="radio" id="cap1" name="capability" value="어학"> 
			<lable for="cap1">어학</lable>
			<input type="radio" id="cap3" name="capability" value="자격증"> 
			<lable for="cap3">자격증</lable>
			<input type="radio" id="cap4" name="capability" value="대외활동"> 
			<lable for="cap4">대외활동</lable>

            <label for="score">성적 또는 역량 점수:</label>
            <input type="number" id="score" name="score" min="0" max="1000" required>

            <label for="duration">작성일:</label>
            <input type="date" id="writeDate" name="writeDate" required>

            <input type="submit" value="제출">
        </form>
    </div>
</body>
</html>

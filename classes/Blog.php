<?php
	class Blog{
		public static function handlerAddArticle(){
			global $mysqli;
			$title = $_POST['title'];
			$content = $_POST['content'];
			$author = $_POST['author'];
			$mysqli->query("INSERT INTO articles (title, content, author) VALUES ('$title', '$content', '$author')");
			header("Location: /blog");
		}

		public static function getArticleById($articleId){
			global $mysqli;
			$result = $mysqli->query("SELECT * FROM articles WHERE id = '$articleId'");
			return json_encode($result->fetch_assoc());
		}

		public static function getArticles(){
			global $mysqli;
			$result = $mysqli->query("SELECT * FROM articles");
		
			$articles = []; /*создаем пустой массив*/
		
			while (($row = $result->fetch_assoc()) != null){ /*перебираем ответ из базы данных до тех пор пока, он не равен null. Если равен null, значит статьи закончились*/
				$articles[] = $row; /*статьи попадают в этот массив*/
			}
		
			return json_encode($articles);
		}
	}
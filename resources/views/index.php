<!doctype html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Laravel と Angular の コメントシステム</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">

	<style>
		body 		{ padding-top:30px; }
		form 		{ padding-bottom:20px; }
		.comment 	{ padding-bottom:20px; }
	</style>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script>

	<!-- /public フォルダからAngularのリソースを読み込みます -->
	<script src="js/controllers/mainCtrl.js"></script>
	<script src="js/services/commentService.js"></script>
	<script src="js/app.js"></script>

</head>

<body class="container" ng-app="commentApp" ng-controller="mainController">
<div class="col-md-8 col-md-offset-2">

	<div class="page-header">
		<h2>Laravel と Angular の コメントシステム</h2>
	</div>

	<form ng-submit="submitComment()">
	<!-- ng-submit will disable the default form action and use our function -->

		<div class="form-group">
			<input type="text" class="form-control input-sm" name="author" ng-model="commentData.author" placeholder="名前">
		</div>

		<div class="form-group">
			<input type="text" class="form-control input-lg" name="comment" ng-model="commentData.text" placeholder="コメントをどうぞ">
		</div>

		<div class="form-group text-right">
			<button type="submit" class="btn btn-primary btn-lg">コメントする</button>
		</div>
	</form>

	<p class="text-center" ng-show="loading"><span class="fa fa-refresh fa-4x fa-spin"></span></p>

	<div class="comment" ng-hide="loading" ng-repeat="comment in comments">
		<h3>コメント #{{ comment.id }} <small>{{ comment.write_time }} &nbsp;by {{ comment.author }}さん</h3>
		<p>{{ comment.text }}</p>
		<p><a ng-click="deleteComment(comment.id)" class="text-muted">削除</a></p>
	</div>

</div>
</body>
</html>
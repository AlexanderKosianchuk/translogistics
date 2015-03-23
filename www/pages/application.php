<h4>Заявка Онлайн</h4>

<form novalidate class="SendMailForm">
	<table class="SendMailTable">
		<tr><td><label>Имя:</label></td>
			<td><input type="text" ng-model="appUserName" ng-change="ChangeUserName()" size="30" required minlength="4"/></td></tr>
		<tr><td><label>Email:</label></td>
			<td><input type="email" ng-model="appEMail" ng-change="ChangeEMail()" size="30" required/></td></tr>
		<tr><td><label>Тема:</label></td>
			<td><input type="text" ng-model="appTheme" ng-change="ChangeTheme()" size="30" required minlength="4"/></td></tr>
		<tr><td><label>Текст:</label></td>
			<td><textarea ng-model="appText" ng-change="ChangeText()" required/></textarea></td></tr>
		
    <table>
	    <button type="button" class="btn btn-default" ng-click="Send()">Отправить</button>
</form>





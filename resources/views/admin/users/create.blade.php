<form method="post" action="/users">
{!!csrf_field() !!}
<input type="text" name="name">
<input type="email" name="email">
<input type="password" name="password">
<input type="submit" value="create">
</form>


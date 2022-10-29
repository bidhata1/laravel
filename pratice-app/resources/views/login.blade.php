<h1>User login </h2>
<form action="{{route('userLogin')}}" method="POST">
@csrf
<input type="text" name="username" placeholder="enter your user name"></br>
<input type="password" name="password" placeholder="enter your password"></br>

<button type="submit">Login</button>
</form>

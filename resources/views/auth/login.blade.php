<h2>Login</h2>
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div>
        <label>Email:</label>
        <input type="email" name="email" required>
    </div>
    <br>
    <div>
        <label>Password:</label>
        <input type="password" name="password" required>
    </div>
    <br>
    <button type="submit">Login</button>
</form>

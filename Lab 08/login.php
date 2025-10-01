<?php include("header.inc"); ?>
<main>
  <h2>Login</h2>
  <form method="post" action="process.php">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>

    <!-- Hidden field for token -->
    <input type="hidden" name="token" value="abc123">

    <input type="submit" value="Login">
  </form>
</main>
<?php include("footer.inc"); ?>
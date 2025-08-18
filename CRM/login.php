<?php
// Lade Session-Einstellungen
require_once 'session_config.php';

session_start();
require_once 'config.php';

if (isset($_SESSION['authenticated']) && $_SESSION['authenticated'] === true && isset($_SESSION['selected_user'])) {
    header("Location: index.php");
    exit;
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username']) && isset($_POST['password'])) {
    $username = trim($_POST['username']);
    $input_password = $_POST['password'];

    if (isset($users[$username]) && password_verify($input_password, $users[$username])) {
        $_SESSION['authenticated'] = true;
        $_SESSION['selected_user'] = $username;
        $_SESSION['last_activity'] = time();
        $_SESSION['stay_logged_in'] = isset($_POST['stay_logged_in']) && $_POST['stay_logged_in'] == '1';
        $redirect = isset($_SESSION['redirect']) ? $_SESSION['redirect'] : 'index.php';
        header("Location: $redirect");
        exit;
    } else {
        $error = "Falscher Benutzername oder Passwort. Bitte versuche es erneut.";
    }
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRM AS EXport - Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans flex items-center justify-center min-h-screen">
  <div class="bg-white p-6 rounded shadow-lg w-full max-w-md">
    <h2 class="text-xl font-bold mb-4">Login</h2>
    <?php if ($error): ?>
      <p class="text-red-500 mb-4"><?php echo htmlspecialchars($error); ?></p>
    <?php endif; ?>
    <form method="post" class="space-y-4" autocomplete="on">
      <div>
        <label for="username" class="block font-semibold">Benutzername</label>
        <select name="username" id="username" class="w-full border p-2 rounded" required autocomplete="username">
          <option value="" disabled selected>Bitte auswählen</option>
          <?php foreach (array_keys($users) as $user): ?>
            <option value="<?php echo htmlspecialchars($user); ?>"><?php echo htmlspecialchars($user); ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <div>
        <label for="password" class="block font-semibold">Passwort</label>
        <input type="password" name="password" id="password" class="w-full border p-2 rounded" required autocomplete="current-password">
      </div>
      <div>
        <label class="flex items-center">
          <input type="checkbox" name="stay_logged_in" value="1" class="mr-2">
          Angemeldet bleiben (30 Tage)
        </label>
      </div>
      <div class="flex justify-end">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Einloggen</button>
      </div>
    </form>
  </div>
</body>
</html>

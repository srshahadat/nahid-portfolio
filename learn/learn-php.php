<?php
  $pageTitle = "Learn PHP from Scratch";
  $author = "Md. Kabir Khan";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $pageTitle; ?></title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white font-sans">

  <!-- Navbar -->
  <nav class="bg-gray-800 shadow-md sticky top-0 z-50">
    <div class="max-w-6xl mx-auto flex justify-between items-center px-6 py-4">
      <h1 class="text-2xl font-bold text-blue-400"><?php echo $pageTitle; ?></h1>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="text-center py-20 bg-gradient-to-br from-gray-800 via-gray-900 to-gray-800">
    <h2 class="text-4xl md:text-5xl font-bold mb-4 text-blue-400">Try PHP Code Live!</h2>
    <p class="max-w-2xl mx-auto text-gray-300 mb-6">
      Type your PHP code below and see the result instantly.
    </p>
  </section>

  <!-- Code Editor Section -->
  <section class="max-w-4xl mx-auto px-6 py-12 space-y-6">
    <form action="run-code.php" method="POST" target="outputFrame">
      <label for="phpcode" class="text-lg font-semibold text-blue-400 mb-2 block">Write PHP Code:</label>
      <textarea name="phpcode" id="phpcode" class="w-full h-64 p-4 rounded-lg bg-gray-800 text-green-400 font-mono" placeholder="&lt;?php echo 'Hello World'; ?&gt;" required></textarea>
      <button type="submit" class="mt-4 bg-blue-600 hover:bg-blue-500 px-6 py-3 rounded-lg font-semibold transition">
        Run Code
      </button>
    </form>

    <h3 class="text-lg font-semibold text-blue-400 mt-6">Output:</h3>
    <iframe name="outputFrame" class="w-full h-64 bg-gray-900 rounded-lg border border-gray-700"></iframe>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-800 py-6 mt-12 text-center text-gray-400">
    &copy; <?php echo date("Y"); ?> <?php echo $author; ?> — All rights reserved.
  </footer>

</body>
</html>

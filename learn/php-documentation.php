<?php
  $pageTitle = "PHP Complete Syntax Reference";
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
    <div class="max-w-7xl mx-auto flex justify-between items-center px-6 py-4">
      <h1 class="text-2xl font-bold text-blue-400"><?php echo $pageTitle; ?></h1>
      <div class="hidden md:flex gap-6">
        <a href="#intro" class="hover:text-blue-400 transition">Introduction</a>
        <a href="#variables" class="hover:text-blue-400 transition">Variables</a>
        <a href="#arrays" class="hover:text-blue-400 transition">Arrays</a>
        <a href="#loops" class="hover:text-blue-400 transition">Loops</a>
        <a href="#functions" class="hover:text-blue-400 transition">Functions</a>
        <a href="#ifelse" class="hover:text-blue-400 transition">If/Else</a>
        <a href="#switch" class="hover:text-blue-400 transition">Switch</a>
        <a href="#classes" class="hover:text-blue-400 transition">Classes</a>
      </div>
    </div>
  </nav>

  <!-- Hero -->
  <section class="text-center py-16 bg-gradient-to-br from-gray-800 via-gray-900 to-gray-800">
    <h2 class="text-4xl md:text-5xl font-bold text-blue-400 mb-4">PHP Syntax Reference</h2>
    <p class="text-gray-300 max-w-2xl mx-auto">
      Complete guide to PHP syntax, examples, and best practices. Learn PHP step-by-step.
    </p>
  </section>

  <!-- Content -->
  <section id="content" class="max-w-7xl mx-auto px-6 py-12 space-y-16">

    <!-- Introduction -->
    <div id="intro">
      <h3 class="text-3xl font-bold text-blue-400 mb-4">Introduction</h3>
      <p class="text-gray-300 leading-relaxed">
        PHP (Hypertext Preprocessor) is a server-side scripting language used for web development.
      </p>
      <pre class="bg-gray-800 p-4 rounded-lg mt-2 overflow-x-auto">&lt;?php
echo "Hello World!";
?&gt;</pre>
    </div>

    <!-- Variables -->
    <div id="variables">
      <h3 class="text-3xl font-bold text-blue-400 mb-4">Variables</h3>
      <p class="text-gray-300">Variables store data and start with a $ sign:</p>
      <pre class="bg-gray-800 p-4 rounded-lg mt-2 overflow-x-auto">&lt;?php
$name = "Nahid";
$age = 25;
$isAdmin = true;
echo "Name: $name, Age: $age";
?&gt;</pre>
    </div>

    <!-- Arrays -->
    <div id="arrays">
      <h3 class="text-3xl font-bold text-blue-400 mb-4">Arrays</h3>
      <p class="text-gray-300">Arrays store multiple values:</p>
      <pre class="bg-gray-800 p-4 rounded-lg mt-2 overflow-x-auto">&lt;?php
$fruits = ["Apple","Banana","Mango"];
echo $fruits[0]; // Apple

$assoc = ["name" =&gt; "Nahid", "age" =&gt; 25];
echo $assoc["name"]; // Nahid
?&gt;</pre>
    </div>

    <!-- Loops -->
    <div id="loops">
      <h3 class="text-3xl font-bold text-blue-400 mb-4">Loops</h3>
      <p class="text-gray-300">PHP supports for, while, foreach:</p>
      <pre class="bg-gray-800 p-4 rounded-lg mt-2 overflow-x-auto">&lt;?php
for($i=1;$i&lt;=5;$i++){
    echo $i." ";
}

$fruits = ["Apple","Banana","Mango"];
foreach($fruits as $fruit){
    echo $fruit." ";
}
?&gt;</pre>
    </div>

    <!-- If/Else -->
    <div id="ifelse">
      <h3 class="text-3xl font-bold text-blue-400 mb-4">If / Else</h3>
      <pre class="bg-gray-800 p-4 rounded-lg mt-2 overflow-x-auto">&lt;?php
$age = 20;
if($age &gt;= 18){
    echo "Adult";
}else{
    echo "Minor";
}
?&gt;</pre>
    </div>

    <!-- Switch -->
    <div id="switch">
      <h3 class="text-3xl font-bold text-blue-400 mb-4">Switch</h3>
      <pre class="bg-gray-800 p-4 rounded-lg mt-2 overflow-x-auto">&lt;?php
$day = "Monday";
switch($day){
    case "Monday":
        echo "Start of week";
        break;
    case "Friday":
        echo "Weekend coming";
        break;
    default:
        echo "Another day";
}
?&gt;</pre>
    </div>

    <!-- Functions -->
    <div id="functions">
      <h3 class="text-3xl font-bold text-blue-400 mb-4">Functions</h3>
      <pre class="bg-gray-800 p-4 rounded-lg mt-2 overflow-x-auto">&lt;?php
function greet($name){
    return "Hello, $name";
}
echo greet("Nahid");
?&gt;</pre>
    </div>

    <!-- Classes -->
    <div id="classes">
      <h3 class="text-3xl font-bold text-blue-400 mb-4">Classes / OOP</h3>
      <pre class="bg-gray-800 p-4 rounded-lg mt-2 overflow-x-auto">&lt;?php
class Person {
    public $name;
    function __construct($name){
        $this-&gt;name = $name;
    }
    function greet(){
        return "Hello ".$this-&gt;name;
    }
}
$p = new Person("Nahid");
echo $p-&gt;greet();
?&gt;</pre>
    </div>

  </section>

  <!-- Footer -->
  <footer class="bg-gray-800 py-6 mt-12 text-center text-gray-400">
    &copy; <?php echo date("Y"); ?> <?php echo $author; ?> — All rights reserved.
  </footer>

</body>
</html>

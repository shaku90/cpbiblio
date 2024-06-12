<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="/style/header.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<header>
  <div class="navbar">

    <div class="logo">
      <a href="index.php"><img src="media/logo_CPB.png" alt="Logo de CPB"></a>
    </div>

    <ul class="links">
      <li><a href="index.php">Inicio</a></li>
      <li><a href="matri.php">Matrícula</a></li>
      <li><a href="legal.php">Marco legal</a></li>
      <li><a href="guias.php">Guías</a></li>
    </ul>
    <div class="toggle_btn">
      <i class="fa-solid fa-bars"></i>
    </div>
  </div>

  <div class="dropdown_menu">
    <li><a href="index.php">Inicio</a></li>
    <li><a href="matri.php">Matrícula</a></li>
    <li><a href="legal.php">Marco legal</a></li>
    <li><a href="guias.php">Guías</a></li>
  </div>

  <script>
    const toggleBtn = document.querySelector('.toggle_btn')
    const toggleBtnIcon = document.querySelector('.toggle_btn i')
    const dropdownMenu = document.querySelector('.dropdown_menu')

    toggleBtn.onclick = function () {
      dropdownMenu.classList.toggle('open')
      const isOpen = dropdownMenu.classList.contains('open')

      toggleBtnIcon.classList = isOpen
        ? 'fa-solid fa-xmark'
        : 'fa-solid fa-bars'
    }
  </script>
</header>
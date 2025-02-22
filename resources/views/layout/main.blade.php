<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Home</title>
  <meta name="description"
    content="The purpose of this page is to give the user my opinion why I think the HBO-ICT programme and the ICT field suits me.">
  <meta name="keywords"
    content="HTML, CSS, portfolio, portfolio website, design portfolio, developer portfolio, creative portfolio, portfolio showcase, portfolio website design, portfolio website examples, portfolio website templates, portfolio website development, portfolio website marketing, portfolio website optimization, portfolio website portfolio, portfolio website resume, portfolio website CV, how to create a portfolio website, best portfolio website design, portfolio website examples for designers, portfolio website templates for developers, portfolio website marketing strategies, portfolio website optimization tips, portfolio website portfolio tips, portfolio website resume tips, portfolio website CV tips">
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  <link rel="stylesheet" href="/css/styles.css">
  <link rel="stylesheet" href="/css/sidebar.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&display=swap" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/sf-pro-display" rel="stylesheet">
</head>

<body class="index-page-content
    @if (!isset($hideBackground))
        space-background
    @endif">
  <div id="sidebar">
    <input type='checkbox' id='menu_active' checked />
    <div id='wrapper' class='active'>
      <div id='menu'>
        <span id='site-name'><label for='menu_active'><i class="fa fa-arrow-left"></i><i
              class="fa fa-bars"></i></label></span>
        <ul>
            @foreach($menu as $menuItem)
                <a href="{{ $menuItem['url'] }}"
                    @if ($menuItem['isExternal'] ?? false)
                        target=”_blank”
                    @endif>
                    <li @if ($menuItem['isActive'] ?? false)
                            class="selected-sidebar-item"
                        @endif>{{ $menuItem['title'] }}
                        <i class="{{ $menuItem['iconClass'] }}"></i></li>
                </a>
            @endforeach
        </ul>
      </div>
      <div id='page-content'>
        <div id="profile" class="opacity-overlay">
          <div class="container">
            @yield('content')

          </div>
          <footer>
            <ul id="footer-menu">
              <li class="footer-menu-item"><a
                  href="https://hz.nl/uploads/documents/1.4-Over-de-HZ/1.4.3.-Regelingen-en-documenten/OERS/2023-2024/Juli/CER-HZ-Bachelor-full-time-2023-2024-DEF-version-20240412.pdf"
                  target=”_blank”>CER</a></li>
              <li class="footer-menu-item"><a
                  href="https://hz.nl/uploads/documents/1.4-Over-de-HZ/1.4.3.-Regelingen-en-documenten/OERS/2023-2024/Juli/TWE/IR-B-HBO-ICT-full-time-2023-2024-DEF.pdf"
                  target=”_blank”>IR</a></li>
              <li class="footer-menu-item"><a href="https://learn.hz.nl" target=”_blank”>Learn</a></li>
              <li class="footer-menu-item"><a href="https://hz.osiris-student.nl/voortgang" target=”_blank”>My study
                  progress</a></li>
              <li class="footer-menu-item"><a href="https://github.com/HZ-HBO-ICT" target=”_blank”>GitHub environment
                  of the study program</a></li>
              <li class="footer-copyright">
                <p>© 2024 Serghei Barhatov</p>
              </li>
            </ul>

          </footer>
        </div>
      </div>
    </div>
  </div>
  </div>

</body>

</html>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ONG Esperança Viva</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-tr from-white to-green-50 text-gray-900">

<header class="backdrop-blur-md bg-white/70 fixed top-0 w-full z-50 shadow-sm">
  <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
    <!-- Logo e nome -->
    <div class="flex items-center space-x-3">
      <img src="/logo.png" alt="Logo" class="h-10 w-10 rounded-full">
      <span class="text-2xl font-bold text-green-700">Esperança Viva</span>
    </div>

    <!-- Botão do menu (mobile) -->
    <button id="menu-toggle" class="md:hidden text-green-700 focus:outline-none">
      <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>

    <!-- Menu desktop -->
    <nav class="hidden md:flex space-x-10 font-medium">
      <a href="#" class="hover:text-green-600 transition">Início</a>
      <a href="/voluntario" class="hover:text-green-600 transition">Seja voluntario</a>
      <a href="#projetos" class="hover:text-green-600 transition">Projetos</a>
      <a href="#doar" class="hover:text-green-600 transition">Doação</a>
      <a href="#contato" class="hover:text-green-600 transition">Contato</a>
    </nav>

    <!-- Botão de doação (desktop) -->
    <div class="hidden md:flex">
      <a href="#doar" class="bg-gradient-to-r from-green-500 to-green-600 text-white px-6 py-2 rounded-full shadow-lg hover:scale-105 transition">Doe Agora</a>
    </div>
  </div>

  <!-- Menu mobile (visível quando ativado) -->
  <div id="mobile-menu" class="md:hidden hidden px-6 pb-4 flex-col space-y-4 font-medium bg-white/90">
    <a href="#" class="hover:text-green-600 transition block">Início</a>
    <a href="#sobre" class="hover:text-green-600 transition block">Seja voluntario</a>
    <a href="#projetos" class="hover:text-green-600 transition block">Projetos</a>
    <a href="#doar" class="hover:text-green-600 transition block">Doação</a>
    <a href="#contato" class="hover:text-green-600 transition block">Contato</a>
    <a href="#doar" class="bg-gradient-to-r from-green-500 to-green-600 text-white px-6 py-2 rounded-full shadow-lg text-center block">Doe Agora</a>
  </div>
</header>



  <!-- Hero Section -->
  <section class="pt-32 pb-20">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
      <div>
        <h1 class="text-5xl md:text-6xl font-extrabold leading-tight">
          Transforme vidas. <br>
          Espalhe <span class="text-green-600">esperança</span>.
        </h1>
        <p class="mt-6 text-lg text-gray-700">
          Junte-se a nós na missão de oferecer educação, amor, dignidade e oportunidades para quem mais precisa.
        </p>
        <div class="mt-8 flex gap-5">
          <a href="#doar" class="bg-green-600 text-white px-8 py-3 rounded-full hover:bg-green-700 shadow-xl transition">Doe Agora</a>
          <a href="#projetos" class="px-8 py-3 rounded-full border-2 border-green-600 text-green-600 hover:bg-green-50 transition">Conheça Projetos</a>
        </div>
      </div>
      <div>
        <div class="relative">
          <img src="{{ asset('image/pessoasajudadas.jpg') }}" 
         class="h-full w-full object-cover" class="rounded-3xl shadow-2xl">
          <div class="absolute -bottom-8 -right-8 bg-white/70 backdrop-blur-lg shadow-xl rounded-2xl p-4 flex items-center space-x-3">
            <img src="https://source.unsplash.com/80x80/?volunteer" class="h-12 w-12 rounded-full">
            <div>
              <p class="font-semibold">+250 vidas transformadas</p>
              <p class="text-sm text-gray-500">E crescendo a cada dia</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Sobre -->
  <section id="sobre" class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
      <img src="https://source.unsplash.com/600x400/?volunteer,people" class="rounded-3xl shadow-xl">
      <div>
        <h2 class="text-4xl font-bold text-green-700 mb-4">Quem somos</h2>
        <p class="text-lg text-gray-700 mb-4">
          Somos uma ONG dedicada a construir uma sociedade mais justa e empática. Atuamos em comunidades vulneráveis, oferecendo educação, alimentação e suporte social.
        </p>
        <p class="text-lg text-gray-700">
          Com a força de nossos voluntários, impactamos vidas diariamente. Seu apoio faz toda a diferença.
        </p>
      </div>
    </div>
  </section>

  <!-- Projetos -->
  <section id="projetos" class="py-24 bg-gradient-to-tr from-green-50 to-white">
    <div class="max-w-7xl mx-auto px-6">
      <h2 class="text-4xl font-bold text-center text-green-700 mb-16">Nossos Projetos</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
        <div class="bg-white rounded-3xl p-6 shadow-xl hover:scale-105 transition">
          <img src="https://source.unsplash.com/400x200/?education" class="rounded-lg mb-4">
          <h3 class="text-2xl font-semibold mb-2">Educação</h3>
          <p class="text-gray-700">Oficinas, cursos e atividades educativas para crianças e jovens.</p>
        </div>
        <div class="bg-white rounded-3xl p-6 shadow-xl hover:scale-105 transition">
          <img src="https://source.unsplash.com/400x200/?food,help" class="rounded-lg mb-4">
          <h3 class="text-2xl font-semibold mb-2">Alimentação</h3>
          <p class="text-gray-700">Distribuição de alimentos para famílias em situação de vulnerabilidade.</p>
        </div>
        <div class="bg-white rounded-3xl p-6 shadow-xl hover:scale-105 transition">
          <img src="https://source.unsplash.com/400x200/?environment,green" class="rounded-lg mb-4">
          <h3 class="text-2xl font-semibold mb-2">Sustentabilidade</h3>
          <p class="text-gray-700">Ações ambientais, reflorestamento e educação ecológica.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Call To Action -->
  <section id="doar" class="py-24 bg-green-600 text-white">
    <div class="max-w-5xl mx-auto px-6 text-center">
      <h2 class="text-4xl font-bold mb-4">Seja a mudança!</h2>
      <p class="text-lg mb-8">Sua doação permite que continuemos mudando vidas e construindo um futuro mais justo.</p>
      <a href="#" class="bg-white text-green-600 px-8 py-3 rounded-full font-semibold shadow-lg hover:bg-gray-100 transition">Doe Agora</a>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-900 text-gray-300 py-12">
    <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center">
      <div class="mb-6 md:mb-0">
        <p class="text-lg font-semibold">&copy; 2025 ONG Esperança Viva</p>
      </div>
      <div class="flex space-x-6">
        <a href="#" class="hover:text-white">Instagram</a>
        <a href="#" class="hover:text-white">Facebook</a>
        <a href="#" class="hover:text-white">LinkedIn</a>
        <a href="#" class="hover:text-white">WhatsApp</a>
      </div>
    </div>
  </footer>
  <script src="{{ asset('js/menu.js') }}"></script>
</body>
</html>

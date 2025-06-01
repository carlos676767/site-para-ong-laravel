<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Seja voluntário</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex flex-col lg:flex-row bg-gradient-to-tr from-white to-green-50 text-gray-900">

  <!-- Formulário -->
  <div class="w-full lg:w-1/2 flex flex-col justify-center items-center p-4 lg:px-16">
    <div class="w-full max-w-md">
      <!-- Logo -->
      <div class="mb-8">
        <svg class="w-10 h-10 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
          <path d="M2.5 5a5 5 0 0110 0 5 5 0 11-10 0zm5 5a5 5 0 015 5 5 5 0 11-5-5z" />
        </svg>
      </div>

      <!-- Título -->
      <h2 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-2">
        Para ser voluntário, registre-se ou faça login
      </h2>
      <p class="text-sm text-gray-600 mb-8">
        <a href="#" class="text-lg text-gray-700 mt-2 block">
          Ao se registrar, você concorda com os termos e condições de uso do site.
        </a>
      </p>

      <!-- Formulário -->
      <form class="space-y-6" method="POST" action="/seu-endpoint-de-cadastro">
        <div>
          <label for="username" class="block text-sm font-medium text-gray-700">Nome de usuário</label>
          <input
            id="username"
            name="username"
            type="text"
            maxlength="100"
            required
            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
            placeholder="Seu nome de usuário"
          />
        </div>

        <div>
          <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
          <input
            id="email"
            name="email"
            type="email"
            maxlength="150"
            required
            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
            placeholder="email@exemplo.com"
          />
        </div>

        <div>
          <label for="senha" class="block text-sm font-medium text-gray-700">Senha</label>
          <input
            id="senha"
            name="senha"
            type="password"
            maxlength="255"
            required
            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
            placeholder="Sua senha"
          />
        </div>

        <div>
          <label for="telefone" class="block text-sm font-medium text-gray-700">Telefone</label>
          <input
            id="telefone"
            name="telefone"
            type="tel"
            maxlength="20"
            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
            placeholder="(xx) xxxx-xxxx"
          />
        </div>

        <div class="flex items-center justify-between">
          <label class="flex items-center">
            <input
              type="checkbox"
              class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded"
            />
            <span class="ml-2 text-sm text-gray-700">Me lembre</span>
          </label>
          <a href="#" class="text-sm text-indigo-600 hover:underline">Já tem uma conta? Faça login</a>
        </div>

        <div>
          <button
            type="submit"
            class="bg-gradient-to-r from-green-500 to-green-600 w-full text-white px-6 py-2 rounded-full shadow-lg hover:scale-105 transition"
          >
            Seja voluntário
          </button>
        </div>
      </form>
    </div>
  </div>

  <!-- Imagem -->
  <div class="w-full lg:w-1/2 hidden lg:block">
    <img
      src="{{ asset('image/v.jpg') }}"
      class="h-full w-full object-cover"
      alt="Imagem voluntariado"
    />
  </div>
</body>
</html>

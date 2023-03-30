
<nav class="bg-[#1e293b] border-gray-200 px-2 sm:px-4 py-2.5 dark:bg-gray-900">
  <div class="container flex md:flex flex-wrap items-center justify-between mx-auto">
  <a href="#" class="">
      <img src="/cineflix/assets/images/logo.png" class="h-6 mr-3 sm:h-9" alt="Logo" />
  </a>
  <div class="flex items-center md:order-2">
      <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
        <span class="sr-only">Open user menu</span>
        <img class="w-8 h-8 rounded-full" src="/cineflix/assets/images/heart.svg" alt="user photo">
      </button>
      <!-- Dropdown menu -->
      <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
        <div class="px-4 py-3">
          <span class="block text-sm text-teal-600 dark:text-sky-600">Salut Fadila</span>
          <span class="block text-sm font-medium text-sky-600 truncate dark:text-gray-400">fad@fad.com</span>
        </div>
        <ul class="py-2" aria-labelledby="user-menu-button">
          <li>
            <a href="/cineflix/content/forms/connexion.php" class="block px-4 py-2 text-sm text-sky-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-teal-600">Connexion</a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 text-sm text-teal-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-teal-600">Déconnexion</a>
          </li>
        </ul>
      </div>
      <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
  </div>
  <div class="items-center justify-center hidden w-full md:flex md:w-[1300px] md:justify-end md:order-1" id="mobile-menu-2">
    <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg  md:bg-[#1e293b] md:flex-row md:space-x-8 md:mt-0 md:text-2xl md:font-medium md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      <li>
        <a href="/cineflix/accueil.php" class="block py-2 pl-3 pr-4 text-teal-600 md:bg-transparent md:text-teal-600 md:p-0 dark:text-teal-600" aria-current="page">Accueil</a>
      </li>
      <li>
        <a href="/cineflix/content/catalogue.php" class="block py-2 pl-3 pr-4 text-teal-600 md:p-0 dark:text-gray-400 md:dark:hover:text-teal-600 dark:hover:bg-gray-700 dark:hover:text-teal-600 md:dark:hover:bg-transparent dark:border-gray-700">Catalogue</a>
      </li>
      <li>
        <a href="/cineflix/content/contact.php" class="block py-2 pl-3 pr-4 text-teal-600 md:p-0 dark:text-gray-400 md:dark:hover:text-teal-600 dark:hover:bg-gray-700 dark:hover:text-teal-600 md:dark:hover:bg-transparent dark:border-gray-700">Nous Contacter</a>
      </li>
    </ul>
  </div>
  </div>
</nav>

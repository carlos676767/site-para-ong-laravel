class Menu{
    static menu(){
        const toggleButton = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
      
        toggleButton.addEventListener('click', () => {
          mobileMenu.classList.toggle('hidden');
        });
    }
}

Menu.menu();


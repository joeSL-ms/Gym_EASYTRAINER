function mostrarMenu() {
    var menu = document.getElementById('menu');
    if (menu.style.display === 'none') {
        menu.style.display = 'block';
    } else {
        menu.style.display = 'none';
    }
}
function cambiarFondo(color) {
    document.querySelector('.perfil-usuario-portada').style.backgroundImage = 'linear-gradient(45deg, ' + color + ', transparent)';
    document.getElementById('menu').style.display = 'none'; // Oculta el menú después de seleccionar un color
}

function mostrarAvatarMenu() {
    var avatarMenu = document.getElementById('avatar-menu');
    if (avatarMenu.style.display === 'none') {
        avatarMenu.style.display = 'block';
    } else {
        avatarMenu.style.display = 'none';
    }
}

function cambiarAvatar(numero) {
    var avatar = document.getElementById('avatar');
    avatar.src = '../img/avatar' + numero + '.jpg'; // Reemplaza 'ruta_del_avatar_' por la ruta real de tus avatares
}

window.addEventListener("scroll", function() {
    var nav = this.document.querySelector("nav");
    nav.classList.toggle("sticky", window.scrollY > 0);
});


function href(url) {
    window.location.href = url;
}


function deleteAccount() {
    if (confirm('Apakah kamu yakin ingin menghapus akun ini?')) {
        var form = document.createElement('form');
        form.method = 'POST';
        form.action = '/pages/login-register/deleteAccount.php';

        var input = document.createElement('input');
        input.type = 'hidden';
        input.name = 'deleteAccount';
        input.value = 'true';
        form.appendChild(input);

        document.body.appendChild(form);
        form.submit();
    }
}


// untuk hamburger

const menuToggle = document.querySelector('.menu-toggle input');
const nav = document.querySelector('nav ul');

menuToggle.addEventListener('click', function() {
    nav.classList.toggle('slide')
});
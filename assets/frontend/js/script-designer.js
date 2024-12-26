function toggleInfo() {
    var button = document.getElementById('button')
    var info = document.getElementsByClassName('info')[0];
    if (info.style.display == 'none' || info.style.display == '') {
        info.style.display = 'block';
        button.innerHTML = '<i class="fas fa-angle-double-up">'
    } else {
        info.style.display = 'none';
        button.innerHTML = '<i class="fas fa-angle-double-down">';
    }
}

function showSection(id) {
    const sections = document.querySelectorAll('.content > div');
    sections.forEach(section => section.style.display = 'none');
    document.getElementById(id).style.display = 'block';
}


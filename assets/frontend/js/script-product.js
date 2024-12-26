function showSection(sectionId) {
    // Hide all sections
    var sections = document.querySelectorAll('.transfer > div');
    sections.forEach(function(section) {
        section.style.display = 'none';
    });

    // Show the clicked section
    var selectedSection = document.getElementById(sectionId);
    selectedSection.style.display = 'block';
}    
function loadContent(cat) {
    const display = document.getElementById('project-display');
    display.innerHTML = "<p>Loading projects...</p>";

    
    const xhr = new XMLHttpRequest();

    
    xhr.open('GET', 'data.php?category=' + cat, true);

    
    xhr.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            display.innerHTML = this.responseText;
        }
    };

    
    xhr.send();
}


window.onload = function() {
    loadContent('all');
};
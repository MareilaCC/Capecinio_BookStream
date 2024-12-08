const searchInput = document.getElementById('search-input');
const searchButton = document.getElementById('search-button');
const storyResults = document.getElementById('story-results');

searchButton.addEventListener('click', () => {
    const searchTerm = searchInput.value;

    // Send an AJAX request to the PHP script to fetch matching stories
    fetch(`search.php?q=${searchTerm}`)
        .then(response => response.json())
        .then(data => {
            // Clear previous results
            storyResults.innerHTML = '';

            // Display search results
            data.forEach(story => {
                const storyDiv = document.createElement('div');
                storyDiv.textContent = story.title;
                storyResults.appendChild(storyDiv);
            });
        });
});
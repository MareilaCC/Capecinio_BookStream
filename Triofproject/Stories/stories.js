// Fetch stories from the server (e.g., using AJAX)
fetch('fetch_stories.php')
    .then(response => response.json())
    .then(stories => {
        const storyList = document.querySelector('.story-list');
        stories.forEach(story => {
            const storyCard = document.createElement('div');
            storyCard.classList.add('story-card');
            storyCard.innerHTML = `
                <img src="${story.image_url}" alt="${story.title}">
                <h3>${story.title}</h3>
                <p>${story.description}</p>
                <a href="${story.link}">Continue</a>
            `;
            storyList.appendChild(storyCard);
        });
    });

    fetch('fetch_stories.php')
    .then(response => response.json())
    .then(data => {
        // Display the cover picture
        const coverPicture = document.querySelector('.cover-picture img');
        coverPicture.src = data.cover_picture;

        // Display the stories (as before)
        const storyList = document.querySelector('.story-list');
        data.stories.forEach(story => {
            // ... (same as before)
        });
    });


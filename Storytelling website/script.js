
    const wrapper = document.querySelector('.wrapper');
    const loginLink = document.querySelector('.login-link');
    const registerLink = document.querySelector('.register-link');
    const btnpopup = document.querySelector('.btnlogin-popup');
    const iconClose = document.querySelector('.close');

    
    btnpopup.addEventListener('click', () => {
        wrapper.classList.add('active-popup');
    });

    loginLink.addEventListener('click',()=>{
        wrapper.classList.remove('active');                       
    });
    // Event listener for opening registration form
    registerLink.addEventListener('click', () => {
        wrapper.classList.add('active');
    });

    
    iconClose.addEventListener('click', () => {
        wrapper.classList.remove('active-popup');
    });


    // Fetch and render stories
    const storyContainer = document.getElementById("story-container");
    const storyIds = [1, 2, 3, 4, 5];

    storyIds.forEach(storyId => {
        fetchStoryData(storyId)
            .then(data => {
                renderStory(data);
            })
            .catch(error => console.error(`Error fetching story data for story ${storyId}:`, error));
    });

    function fetchStoryData(storyId) {
        return fetch(`story-data.php?id=${storyId}`)
            .then(response => response.json())
            .catch(error => console.error(`Error fetching story data for story ${storyId}:`, error));
    }

    function renderStory(data) {
        const storyElement = document.createElement("div");
        storyElement.classList.add("story");
        storyElement.innerHTML = `
            <img src="${data.image}" alt="Story Image">
            <h2>${data.title}</h2>
            <p>${data.description}</p>
            <h3>Chapters</h3>
            <ul>
                ${data.chapters.map(chapter => `<li>${chapter}</li>`).join("")}
            </ul>
        `;
        storyContainer.appendChild(storyElement);
    }


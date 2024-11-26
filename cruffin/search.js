document.getElementById('search-button').addEventListener('click', function() {
    const query = document.getElementById('search-input').value;
    const resultsContainer = document.getElementById('search-results');

    // Clear previous results
    resultsContainer.innerHTML = '';

    // Simulate search results (you can replace this with actual search logic)
    const results = [
        'Apple',
        'Banana',
        'Cherry',
        'Date',
        'Elderberry',
        'Fig',
        'Grape',
        'Honeydew'
    ];

    const filteredResults = results.filter(item => item.toLowerCase().includes(query.toLowerCase()));

    if (filteredResults.length > 0) {
        filteredResults.forEach(item => {
            const resultItem = document.createElement('div');
            resultItem.className = 'result-item';
            resultItem.textContent = item;
            resultsContainer.appendChild(resultItem);
        });
        resultsContainer.style.display = 'block'; // Show results
    } else {
        resultsContainer.innerHTML = '<div class="result-item">No results found</div>';
        resultsContainer.style.display = 'block'; // Show results
    }
});
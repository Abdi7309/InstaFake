function searchUsers() {
    const searchBar = document.getElementById("search-bar");
    const searchTerm = searchBar.value.trim().toLowerCase();
    const searchResults = document.getElementById("search-results");
  
    // Clear search results
    searchResults.innerHTML = "";
    searchResults.style.display = "none";
  
    // Perform search
    if (searchTerm) {
      // Replace this code with your own API or database call to search for users
      const users = [
        { name: "Alice", email: "alice@example.com" },
        { name: "Bob", email: "bob@example.com" },
        { name: "Charlie", email: "charlie@example.com" },
        { name: "David", email: "david@example.com" },
        { name: "Eve", email: "eve@example.com" },
      ];
  
      const filteredUsers = users.filter((user) =>
        user.name.toLowerCase().includes(searchTerm)
      );
  
      // Display search results
      if (filteredUsers.length > 0) {
        const resultsList = document.createElement("ul");
        filteredUsers.forEach((user) => {
          const listItem = document.createElement("li");
          listItem.innerHTML = `${user.name} (${user.email})`;
          resultsList.appendChild(listItem);
        });
        searchResults.appendChild(resultsList);
        searchResults.style.display = "block";
      } else {
        const noResults = document.createElement("p");
        noResults.innerHTML = "No results found.";
        searchResults.appendChild(noResults);
        searchResults.style.display = "block";
      }
    }
  }
  
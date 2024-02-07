document.addEventListener("DOMContentLoaded", () => {
  fetch("https://gorest.co.in/public/v2/users/")
    .then((response) => response.json())
    .then((users) => renderUserList(users))
    .catch((error) => console.error("Error fetching user data:", error));

  function renderUserList(users) {
    const userListContainer = document.getElementById("userList");
    userListContainer.innerHTML = "";

    users.forEach((user) => {
      const userCard = document.createElement("div");
      userCard.className = "card mb-3";
      userCard.innerHTML = `
          <div class="card-body">
            <h5 class="card-title">${user.name}</h5>
            <button class="btn btn-primary" data-toggle="modal" data-target="#userDetailsModal" onclick="getUserDetails(${user.id})">
              View More
            </button>
          </div>
        `;
      userListContainer.appendChild(userCard);
    });
  }

  window.getUserDetails = async function (userId) {
    try {
      const userDetailsResponse = await fetch(
        `https://gorest.co.in/public/v2/users/${userId}`
      );
      const userDetails = await userDetailsResponse.json();

      // const userProjectsResponse = await fetch(`https://gorest.co.in/public/v2/users/${userId}/projects`);
      // const userProjects = await userProjectsResponse.json();

      const userDetailsContainer = document.getElementById("userDetails");
      userDetailsContainer.innerHTML = `
          <p><strong>Name:</strong> ${userDetails.name}</p>
          <p><strong>Email:</strong> ${userDetails.email}</p>
          <p><strong>Phone:</strong> ${userDetails.phone}</p>
         
          <p><strong>Projects:</strong></p>
         

        `;
    } catch (error) {
      console.error("Error fetching user details:", error);
    }
  };
});

//   <p><strong>Projects:</strong></p>
// <ul>
//   ${userProjects.map(project => `<li>${project.name}</li>`).join('')}
// </ul>

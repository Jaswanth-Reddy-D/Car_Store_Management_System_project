document.addEventListener("DOMContentLoaded", function () {
    fetch("php/fetch_cars.php")
        .then(response => response.json())
        .then(data => {
            const carList = document.getElementById("car-list");
            data.forEach(car => {
                const carCard = document.createElement("div");
                carCard.classList.add("car-card");
                carCard.innerHTML = `
                    <img src="images/${car.image}" alt="${car.name}">
                    <h3>${car.name}</h3>
                    <p>Brand: ${car.brand}</p>
                    <p>Price: $${car.price}</p>
                    <a href="car_details.html?id=${car.id}">View Details</a>
                `;
                carList.appendChild(carCard);
            });
        })
        .catch(error => console.log("Error fetching cars:", error));
});

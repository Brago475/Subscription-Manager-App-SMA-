const sidebar = document.querySelector('.sidebar');
const logo = document.querySelector('.logo');
const logoName = document.querySelector('.sma-name');

// Toggle sidebar when the logo is clicked
logo.addEventListener('click', () => {
    sidebar.classList.toggle('active');
    
    // Update logo name based on sidebar state
    if (sidebar.classList.contains('active')) {
        logoName.textContent = 'Subscription Manager';
    } else {
        logoName.textContent = 'SMA';
    }
});

//Calendar
let date = new Date();
let year = date.getFullYear();
let month = date.getMonth();

const day = document.querySelector(".calendar-dates");

const currdate = document
    .querySelector(".calendar-current-date");

const prenexIcons = document
    .querySelectorAll(".calendar-navigation span");

const months = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December"
];

const manipulate = () => {

    let dayone = new Date(year, month, 1).getDay();

    let lastdate = new Date(year, month + 1, 0).getDate();

    let dayend = new Date(year, month, lastdate).getDay();

    let monthlastdate = new Date(year, month, 0).getDate();

    let lit = "";

    for (let i = dayone; i > 0; i--) {
        lit +=
            `<li class="inactive">${monthlastdate - i + 1}</li>`;
    }

    for (let i = 1; i <= lastdate; i++) {

        let isToday = i === date.getDate()
            && month === new Date().getMonth()
            && year === new Date().getFullYear()
            ? "active"
            : "";
        lit += `<li class="${isToday}">${i}</li>`;
    }

    for (let i = dayend; i < 6; i++) {
        lit += `<li class="inactive">${i - dayend + 1}</li>`
    }

   
    currdate.innerText = `${months[month]} ${year}`;

   
    day.innerHTML = lit;
}

manipulate();

// Attach a click event listener to each icon
prenexIcons.forEach(icon => {

    // When an icon is clicked
    icon.addEventListener("click", () => {

      
        month = icon.id === "calendar-prev" ? month - 1 : month + 1;

        if (month < 0 || month > 11) {

           
            date = new Date(year, month, new Date().getDate());

            year = date.getFullYear();

            month = date.getMonth();
        }

        else {

            date = new Date();
        }

        
        manipulate();
    });
});


document.getElementById('today-btn').addEventListener('click', function () {
    const serviceName = prompt("Enter the streaming service name (e.g., Netflix):");

    if (!serviceName) {
        alert("Please enter a valid service name.");
        return;
    }

    // Fetch subscriptions for the entered service name
    fetch(`fetch_subscriptions.php?serviceName=${encodeURIComponent(serviceName)}`)
        .then(response => response.json())
        .then(data => {
            if (data.length === 0) {
                alert(`No subscriptions found for "${serviceName}".`);
                return;
            }

            // Display the subscriptions in the calendar or a dedicated section
            const calendarBody = document.querySelector('.calendar-dates');
            calendarBody.innerHTML = ''; 

            data.forEach(sub => {
                const listItem = document.createElement('li');
                listItem.textContent = `${sub.PlanType} - $${sub.MonthlyPrice} (Monthly) - ${sub.Features}`;
                listItem.className = 'subscription-entry'; 
                calendarBody.appendChild(listItem);
            });
        })
        .catch(error => {
            console.error('Error fetching subscriptions:', error);
            alert('Failed to fetch subscriptions. Please try again.');
        });
});
// buttons 
async function fetchStreamingServices() {
    try {
        const response = await fetch('fetch-streaming-services.php');
        if (!response.ok) {
            throw new Error('Failed to fetch streaming services.');
        }
        const services = await response.json();
        displayServices(services);
    } catch (error) {
        console.error(error);
        document.getElementById('services-container').innerHTML = '<p>Error loading streaming services. Please try again later.</p>';
    }
}

function displayServices(services) {
    const container = document.getElementById('services-container');
    container.innerHTML = ''; // Clear previous content

    services.forEach(service => {
        const card = document.createElement('div');
        card.className = 'service-card';
        card.innerHTML = `
            <h3>${service.ServiceName}</h3>
            <p><strong>Plan:</strong> ${service.PlanType}</p>
            <p><strong>Price:</strong> $${service.MonthlyPrice}/month</p>
        `;
        container.appendChild(card);
    });
}

// Fetch and display streaming services on page load
fetchStreamingServices();
 // Remove Subscription
 document.getElementById('remove-btn').addEventListener('click', () => {
    const calendarContent = document.getElementById('calendar-content');
    calendarContent.innerHTML = ''; 
    currentSubscription = null; 
    alert('Subscription removed from your calendar.');
});

// Fetch and display subscriptions on page load
fetchSubscriptions();